<!--**********************************
            Rekam Medis
    ***********************************-->

<script src="<?=templates()?>js/tambah-rekammedis.js"></script>
<script src="<?=templates()?>js/getDetailRekamMedis.js"></script>

<div class="modal fade modal-tambah-rekammedis" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Rekam Medis</h3>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <form action="addRekamMedis.php" method="POST" id="formAddRekamMedis" onsubmit="uidRekamMedis()">
                <div>                    
                    <section>
                        <div class="row">
                        <div class="col-lg-12 mb-2">
                                <label class="text-label" >UID Pasien</label>
                                    <div class="input-group mb-3">
                                        <div class="form-control" onclick="getRekamMedis()">
                                        <!-- <div class="form-control"> -->
                                            <span class="valueUIDRekamMedis" id="get_uidPas">
                                                Tap Kartu kemudian tekan tombol scan
                                            </span>
                                        </div>
                                        <!-- <span id="get_user_name" style="font-size:16px; "></span>  -->
                                        <input type="hidden" name="uid_rekammedis" id="uid_rekammedis" class="form-control" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button" name="btnGetUid" id="btnGetUid" onclick="getUID()" >Scan</button>
                                                <button class="btn btn-success dtl-rekammedis" type="button" name="btnGetDetailRekamMedis" id="getDetailRekamMedis"  >Detail</button>
                                            </div>
                                    </div>
                                    <span id="showDetailRekamMedis" style="font-size:16px;"></span>
                            </div>
                            <!-- <div class="form-group ">
                                <div class="col-12">
                                    <label class="text-label">Poli</label>
                                        <select class="form-control input-default" name="poli_pasien">
                                            <option>Pilih Jenis Poli</option>
                                            <option>Anak</option>
                                            <option>Gigi</option>
                                            <option>Umum</option>
                                        </select>
                                </div>
                            </div> -->
                            <!-- <div class="form-group">
                                <div class="col-12">
                                    <label> Poli </label>
                                    <Input type="text" name="poli_pasien" class="form-control input-default">
                                </div>
                            </div> -->
                            <!-- <div class="form-group">
								<div class="col-12">
                                	<label>Poli</label>
                                    <select class="form-control" id="sel2" name="poli_pasien">
                                        <option>Pilih Jenis Poli</option>
                                        <option>Pediatrik</option>
                                        <option>Gigi</option>
                                        <option>Umum</option>
                                        <option>Tumbuh Kembang</option>
                                        <option>Digestif</option>
                                    </select>
                                </div>
							</div> -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="text-label"> Usia (th)</label>
                                    <Input type="text" name="usia" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-12">                                
                                <div class="form-group">
                                    <label class="text-label"> Gol. Darah </label>
                                    <Input type="text" name="goldarah" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-12">                                
                                <div class="form-group">
                                    <label class="text-label"> TB (cm) </label>
                                    <Input type="text" name="tb" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-12">                                
                                <div class="form-group">
                                    <label class="text-label"> BB (kg)</label>
                                    <Input type="text" name="bb" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-12">                                
                                <div class="form-group">
                                	<label class="text-label">Poli</label>
                                    <select class="form-control" name="poli_pasien" required>
                                        <option>Pilih Jenis Poli</option>
                                        <option>Pediatrik</option>
                                        <option>Gigi</option>
                                        <option>Umum</option>
                                        <option>Tumbuh Kembang</option>
                                        <option>Digestif</option>
                                    </select>
                                </div>
							</div>
						</div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                    <button type="submit" name="tambahRekamMedis" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
            
        </div>
    </div>
</div>

<div id="modalEditJadwal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<div id="modalEditJadwalPerawat" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<div id="modalEditJadwalKaryawan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<div id="modalEditDokter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<div id="modalEditPerawat" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<div id="modalEditKaryawan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<div id="modalEditReservasiKamar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<div id="modalEditPemindahanPasien" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<div id="modalEditRekamMedis" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<div class="container-fluid">
	<div class="row">
        <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Rekam Medis</h4>
                    <span>
						<button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".modal-tambah-rekammedis">Tambah</button>
					</span>
            	</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example5" class="display" style="min-width: 100px">
                            <thead>
                                <tr>
                                    <th>NO</th>    
                                    <th>TANGGAL MASUK</th>
                                    <th>KODE RFID</th>
                                    <th>NAMA</th>
                                    <th>KATEGORI PASIEN</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>POLI</th>
                                    <th>USIA (th)</th>
                                    <th>DIAGNOSA</th>
                                    <th>GOL. DARAH</th>
                                    <th>TB (cm)</th>
                                    <th>BB (kg)</th>
                                    <th>ACTION</th>                     
								</tr>
                            </thead>
                            <tbody>
							<?php 
								$sql = "SELECT * FROM view_rekammedis WHERE jadwalid!=''";
								$query = $dbh -> prepare($sql);
								$query->execute();
								$results=$query->fetchAll(PDO::FETCH_OBJ);
								$cnt=1;
								if($query->rowCount() > 0)
								{
									foreach($results as $result)
									{               
										?>  
                            	<tr>
									<td><?php echo $cnt;?></td>
                                    <td><?php echo htmlentities($result->tanggal_masuk);?></td>                            
                                    <td><?php echo htmlentities($result->kode_rfid);?></td>                            
                                    <td><?php echo htmlentities($result->nama);?></td>
                                    <td><?php echo htmlentities($result->kategori_pasien);?></td>
                                    <td><?php echo htmlentities($result->jeniskelamin_pasien);?></td>
                                    <td><?php echo htmlentities($result->poli);?></td>                           
                                    <td><?php echo htmlentities($result->usia);?></td> 
                                    <td><?php echo htmlentities($result->diagnosa);?></td>         
                                    <td><?php echo htmlentities($result->goldarah);?></td> 
                                    <td><?php echo htmlentities($result->tb);?></td> 
                                    <td><?php echo htmlentities($result->bb);?></td>
                                    <td>
										<div class="d-flex">
                                            <a href="#" id="<?php echo htmlentities ($result->jadwalid); ?>" class="btn btn-primary shadow btn-xs sharp mr-1 openmodaleditrekammedis" ><i class="fa fa-pencil" ></i></a>
											<a href="deleteRekamMedis.php?id=<?php echo htmlentities($result->jadwalid);?>" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-danger shadow btn-xs sharp" ><i class="fa fa-trash"></i></a>
										</div>												
									</td>
                                    								
                                </tr>
								<?php $cnt=$cnt+1;}} ?>                                      
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>









