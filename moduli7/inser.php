<?php

$host = "localhost";
$db = "db";
$user = "root";
$user = "";

try{
    
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);


 
    $sql = "ALTER TABLE user1 ADD email Varchar(255)" ;

 
  

    $pdo->exec($sql);
    
    echo "Added colum successfully";


    
}
catch (Exception $e) {

    echo "Error creating table: " .$e->getMessage();
}

?>

