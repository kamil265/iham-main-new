<?php 
    require_once("connect.php");
    if(!empty($_POST["nama_jadwalprwt"])) 
    {
        $uidJadwalPerawat= strtoupper($_POST["nama_jadwalprwt"]);
        $sql ="SELECT rfid_uid,divisi FROM tb_perawat WHERE nama_perawat=:nama_jadwalper";
        $query= $dbh -> prepare($sql);
        $query-> bindParam(':nama_jadwalper', $uidJadwalPerawat, PDO::PARAM_STR);
        $query-> execute();
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query -> rowCount() > 0)
        {
            foreach ($results as $result) {
                ?>
                    <input type="hidden" name="uid_jadwalprwt" class="form-control" value="<?php echo htmlentities($result->rfid_uid);?>" required>  <br>  
                    <label>Divisi</label><br>
                    <input type="text" name="spes_jadwalprwt" class="form-control" value="<?php echo htmlentities($result->divisi);?> " readonly required>  <br>   
                    <hr>            
                    
                    <?php
                    echo "<script>$('#submit').prop('disabled',false);</script>";
            }
        }
        else
        {
            echo "<script>$('#submit').prop('disabled',true);</script>";
        }
    }
?>
