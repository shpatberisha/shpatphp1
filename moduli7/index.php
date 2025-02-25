<?php
// $host = "localhost";
// $user = "root";
// $password = "";

// try{
//     $conn = new PDO("mysql:host=$host", $user, $password);
//     $sql = "CREATE DATABASE project1";
//     $conn->exec($sql);



    
// }
// catch (Exeption $e) {

//     echo "Error creating table: " .$e->getMessage();
// }


$host = "localhost";
$db = "db";
$user = "root";
$user = "";

try{
    
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
 
    $sql = "CREATE TABLE user1 (id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL)" ;

    $pdo->exec($sql);
    
    echo "Table created successfully";


    
}
catch (Exception $e) {

    echo "Error creating table: " .$e->getMessage();
}




?>