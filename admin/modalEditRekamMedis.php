<?php 
    include'connect.php';
    $idsc=$_GET['id'];
	$sql = "SELECT*from tb_rekammedis WHERE id=$idsc";
	$query = $dbh -> prepare($sql);
	$query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
	$cnt=1;
    if($query->rowCount() > 0)
	{
		foreach($results as $result)
	{               
?>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" >Edit Rekam Medis</h3>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
        <div class="modal-body">
        <form action="editRekamMedis.php?id=<?php echo htmlentities ($result->id);?>" method="POST"  class="step-form-horizontal">
                <div>                    
                    <section>
                        <div class="row">
                        	<div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">UID Pasien</label>
                                    <input type="text" name="uid_rekammedis" id="uid_rekammedis" disabled value="<?php echo htmlentities($result->pasien_id);?>" class="form-control" required>
                                </div>
								<div class="form-group">
                                    <span id="get_data_rekammedis" style="font-size:16px;"></span> 
                                </div>
                            </div>
							<!-- <div class="col-12">
								<div class="form-group">
                                	<label>Hari Praktik</label>
                                    <select class="form-control" id="sel2" name="hari_praktik">
                                        <option>Senin</option>
                                        <option>Selasa</option>
                                        <option>Rabu</option>
                                        <option>Kamis</option>
                                        <option>Jumat</option>
										<option>Sabtu</option>
                                        <option>Minggu</option>
                                    </select>
                                </div>
							</div> -->
                            <div class="col-lg-12 mb-2">
                                <div class="form-group ">
                                    <label class="text-label">Poli</label>
                                    <select class="form-control" name="poli">
                                        <option value="Anak"<?php if($result->poli == 'Anak') { ?> selected="selected"<?php } ?>>Anak</option>
                                        <option value="Gigi"<?php if($result->poli == 'Gigi') { ?> selected="selected"<?php } ?>>Gigi</option>
                                        <option value="Umum"<?php if($result->poli == 'Umum') { ?> selected="selected"<?php } ?>>Umum</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group ">
                                    <label class="text-label">Usia (th)</label>
                                    <input type="text" name="usia" id="usia" value="<?php echo htmlentities($result->usia);?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12 mb-2">
                                    <label> Gol. Darah </label>
                                    <Input type="text" name="goldarah" id="goldarah" value="<?php echo htmlentities($result->goldarah);?>" class="form-control input-default"required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12 mb-2">
                                    <label> TB (cm)</label>
                                    <Input type="text" name="tb" id="tb" value="<?php echo htmlentities($result->tb);?>" class="form-control input-default"required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12 mb-2">
                                    <label> BB (kg)</label>
                                    <Input type="text" name="bb" id="bb" value="<?php echo htmlentities($result->bb);?>" class="form-control input-default"required>
                                </div>
                            </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                    <button type="submit" name="updateRekamMedis" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
        </div>
    </div>

<?php $cnt=$cnt+1; }}?>
