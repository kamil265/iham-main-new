<?php 
    require_once("connect.php");
    if(!empty($_POST["uid_rekammedis"])) 
    {
        $uid_rekammedis= ($_POST["uid_rekammedis"]);
        $sql ="SELECT nama, nik, alamat, diagnosa, nomor_telepon FROM tb_pasien WHERE kode_rfid=:uid_rekammedis";
        $query= $dbh -> prepare($sql);
        $query-> bindParam(':uid_rekammedis', $uid_rekammedis, PDO::PARAM_STR);
        $query-> execute();
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query -> rowCount() > 0)
        {
            foreach ($results as $result) {
                ?>
                    <label>Nama Pasien</label><br>
                    <input type="text" class="form-control" value="<?php echo htmlentities($result->nama);?>" required>  <br>
                    <label>NIK</label><br>
                    <input type="text" class="form-control" value="<?php echo htmlentities($result->nik);?>" required>  <br>  
                    <label>Diagnosa</label><br>
                    <input type="text" class="form-control" value="<?php echo htmlentities($result->diagnosa);?> " readonly required>  <br>   
                    <hr>            
                    
                    <?php
                    echo "<script>$('#submit').prop('disabled',false);</script>";
            }
        }
        else
        {
            echo "<span style='color:red'> UID Tidak Valid .</span>";
            echo "<script>$('#submit').prop('disabled',true);</script>";
        }
    }
?>
