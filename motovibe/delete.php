<?php 
	/* 
	We will include config.php for connection with database.
	Delete a movie based on his id.
	*/
	include_once('config.php');

	$id = $_GET['id'];
	$sql = "DELETE FROM moto WHERE id=:id";
	$prep = $conn->prepare($sql);
	$prep->bindParam(':id',$id);
	$prep->execute();

	header("Location: list_moto.php");
 ?>