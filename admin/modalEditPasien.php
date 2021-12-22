<?php 
    include'connect.php';
    $idpas=$_GET['id'];
	$sql = "SELECT*from tb_pasien WHERE id=$idpas";
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
                <h3 class="modal-title">Edit Data Pasien</h3>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form action="editPasien.php?id=<?php echo htmlentities ($result->id);?>" method="POST"  class="step-form-horizontal">
                <div>
                    <h4>Identitas Pasien</h4>
                    <section>
                        <div class="row">
                        <div class="col-lg-12 mb-2">
                            <div class="form-group">
                                    <label class="text-label">UID</label>
                                    <div class="input-group mb-3">
                                    <input type="text" name="uid" id="uidInput" value="<?php echo htmlentities($result->kode_rfid);?>" class="form-control" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button" id="getUIDbtn">Scan</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group ">
                                    <label class="text-label">Kategori Pasien</label>
                                    <select class="form-control" name="kategori">
                                        <option value="Dewasa"<?php if($result->kategori_pasien == 'Dewasa') { ?> selected="selected"<?php } ?>>Dewasa</option>
                                        <option value="Anak"<?php if($result->kategori_pasien == 'Anak') { ?> selected="selected"<?php } ?>>Anak</option>
                                        <option value="Bayi"<?php if($result->kategori_pasien == 'Bayi') { ?> selected="selected"<?php } ?>>Bayi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">NIK*</label>
                                    <input type="text" name="nik" value="<?php echo htmlentities($result->nik);?>" class="form-control"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Nama Lengkap*</label>
                                    <input type="text" name="nama" value="<?php echo htmlentities($result->nama);?>" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2"  required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group ">
                                    <label class="text-label">Jenis Kelamin</label>
                                    <select class="form-control" name="jenisKelamin">
                                    <option value="Laki-Laki"<?php if($result->jeniskelamin_pasien == 'Laki-Laki') { ?> selected="selected"<?php } ?>>Laki-Laki</option>
                                    <option value="Perempuan"<?php if($result->jeniskelamin_pasien == 'Perempuan') { ?> selected="selected"<?php } ?>>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <label>Tanggal Lahir*</label>
                                <input type="date" name="tanggalLahir" class="form-control" value="<?php echo htmlentities($result->tanggal_lahir);?>" id="mdate" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Alamat*</label>
                                    <input type="text" name="alamat" value="<?php echo htmlentities($result->alamat);?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Penanggungjawab*</label>
                                    <input type="text" name="pj_pasien" value="<?php echo htmlentities($result->Penanggungjawab);?>" class="form-control" >
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- <h4>Identitas Penanggungjawab</h4>
                    <section>
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">NIK*</label>
                                    <input type="text" name="firstName" class="form-control" placeholder="Parsley" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Nama Lengkap*</label>
                                    <input type="text" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="example@example.com.com" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <label>Tanggal Lahir*</label>
                                <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Alamat*</label>
                                    <input type="text" name="place" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </section> -->
                    <h4>Diagnosa Penyakit</h4>
                    <section>
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Diagnosa*</label>
                                    <input type="text" name="diagnosa" value="<?php echo htmlentities($result->diagnosa);?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Dokter Penanggungjawab*</label>
                                    <input type="text" name="dokterPenanggungjawab" value="<?php echo htmlentities($result->dokter_penanggungjawab);?>" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group ">
                                    <label class="text-label">Status Pasien</label>
                                    <select class="form-control" name="statusPasien">
                                    <option value="Rawat Inap"<?php if($result->status_pasien == 'Rawat Inap') { ?> selected="selected"<?php } ?>>Rawat Inap</option>
                                    <option value="Rawat Jalan"<?php if($result->status_pasien == 'Rawat Jalan') { ?> selected="selected"<?php } ?>>Rawat Jalan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                    <button type="submit" name="updatePasien" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
            
        </div>
    </div>
<?php }}?>