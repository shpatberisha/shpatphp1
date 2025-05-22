<?php 

	include_once('config.php');
	


	if (isset($_POST['submit1'])) {
		$id = $_POST['id'];
		$moto_name = $_POST['moto_name'];
		$moto_name = $_POST['moto_name'];
		$moto_quality= $_POST['moto_quality'];
		  $moto_rating=$_POST['moto_rating'];
		

		$sql = "UPDATE movies SET id=:id,  moto_name=:moto_name, moto_desc=:moto_desc, moto_quality=:moto_quality,moto_rati=moto_rating=:moto_rating WHERE id=:id";

		$prep = $conn->prepare($sql);
		$prep->bindParam(':id',$id);
		$prep->bindParam(':moto_name',$moto_name);
		$prep->bindParam(':moto_desc',$moto_desc);
		$prep->bindParam(':moto_',$moto_);
		$prep->bindParam(':moto_rating',$moto_rating);
		
		$prep->execute();
		header("Location: dashboard.php");
	}
 ?>