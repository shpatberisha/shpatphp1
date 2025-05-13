<?php

$localhost = "localhost";
$db = "motovibe";
$user = "root";
$password ="";




try{
    $conn = new PDO("mysql:host=$localhost;dbname=$db",  $user, $password);
    echo "Connection Succsesfully";
}catch(Exception $e){
    echo "Error" . $e->getMessage();
}









?>