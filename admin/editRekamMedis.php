<?php
	include('connect.php');

		if(isset($_POST['updateRekamMedis']))
		{
			
			$poli=$_POST['poli'];
            $usia=$_POST['usia'];
            $goldarah=$_POST['goldarah'];
            $tb=$_POST['tb'];
            $bb=$_POST['bb'];
			$catid=intval($_GET['id']);
			$sql="UPDATE tb_rekammedis set poli=:poli, usia=:usia, goldarah=:goldarah, tb=:tb, bb=:bb where id=:catid";
			$query = $dbh->prepare($sql);
			$query->bindParam(':poli',$poli,PDO::PARAM_STR);
            $query->bindParam(':usia',$usia,PDO::PARAM_STR);
            $query->bindParam(':goldarah',$goldarah,PDO::PARAM_STR);
            $query->bindParam(':tb',$tb,PDO::PARAM_STR);
			$query->bindParam(':bb',$bb,PDO::PARAM_STR);
			$query->bindParam(':catid',$catid,PDO::PARAM_STR);
			$query->execute();
			$_SESSION['updatemsg']="Brand updated successfully";
			header('location:index.php?halaman=rekam_medis');
		}
	
?>