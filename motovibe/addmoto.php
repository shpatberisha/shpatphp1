<?php	


	include_once('config.php');


	if(isset($_POST['submit']))
	{

		$movie_name = $_POST['moto_name'];
		$movie_desc = $_POST['moto_desc'];
		$movie_quality = $_POST['moto_quality'];
		$movie_rating = $_POST['moto_rating'];
		$movie_image = $_POST['moto_image'];
	

		$sql = "INSERT INTO movies(moto_name, moto_desc, moto_quality, moto_rating, moto_image) VALUES (:moto_name, :moto_desc, :moto_quality, :moto_rating, :moto_image)";

		$insertMovie = $conn->prepare($sql);
			

		$insertMovie->bindParam(':moto_name', $moto_name);
		$insertMovie->bindParam(':moto_desc', $moto_desc);
		$insertMovie->bindParam(':moto_quality', $moto_quality);
		$insertMovie->bindParam(':moto_rating', $moto_rating);
		$insertMovie->bindParam(':moto_image', $moto_image);

		$insertMovie->execute();

		header("Location: moto.php");


	}




?>