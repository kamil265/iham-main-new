<?php
    session_start();
    error_reporting(0);
    include 'connect.php';
    if(strlen($_SESSION['alogin'])==0)
    {   
        header('location:login.php');
    }
    else
    { 
        if(isset($_POST['tambahRekamMedis']))
        {
            $uid_Rekammedis=($_POST['uid_rekammedis']);          
            $usia=$_POST['usia'];
            $poli_pasien=$_POST['poli_pasien'];
            $goldarah=$_POST['goldarah'];
            $tb=$_POST['tb'];
            $bb=$_POST['bb'];
            $insert="INSERT INTO  tb_rekammedis (pasien_id,usia,poli,goldarah,tb,bb) VALUES(:uid_Rekammedis,:usia,:poli_pasien,:goldarah,:tb,:bb)";
            $query = $dbh->prepare($insert);
            // $query = $dbh->prepare($sql);
            $query->bindParam(':uid_Rekammedis',$uid_Rekammedis,PDO::PARAM_STR);
            $query->bindParam(':usia',$usia,PDO::PARAM_STR);
            $query->bindParam(':poli_pasien',$poli_pasien,PDO::PARAM_STR);
            $query->bindParam(':goldarah',$goldarah,PDO::PARAM_STR);
            $query->bindParam(':tb',$tb,PDO::PARAM_STR);
            $query->bindParam(':bb',$bb,PDO::PARAM_STR);
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
            if($lastInsertId)
            {
                $_SESSION['msg']="Brand Listed successfully";
                header('location:index.php?halaman=rekam_medis');
            }
            else 
            {
                $_SESSION['error']="Something went wrong. Please try again";
                header('location:index.php?halaman=rekam_medis');
            }
        }
    }
?>
