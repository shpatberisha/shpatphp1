<?php
$host = "localhost";
$user = "root";
$dbname = "db";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;" , $user, $password);
    echo "Connection Succsesfull";
} catch(Exception $e){
    echo "something went wrong";

}




?>