<?php 
    require_once("connect.php");
    if(!empty($_POST["uid_rekammedis"])) 
    {
        $uid_rekammedis= strtoupper($_POST["uid_rekammedis"]);
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
                <h6 class="mb-0">Nama Pasien :  <?php echo htmlentities($result->nama);?> </h6><br>
                <h6 class="mb-0">NIK : <?php echo htmlentities($result->nik);?> </h6><br>
                <h6 class="mb-0">Diagnosa : <?php echo htmlentities($result->diagnosa);?> </h6><br>
                    
                    <?php
                    echo "<script>$('#submit').prop('disabled',false);</script>";
            }
        }
        else
        {
            echo "<span style='color:red'> Nama Tidak Valid .</span>";
            echo "<script>$('#submit').prop('disabled',true);</script>";
        }
    }
?>
