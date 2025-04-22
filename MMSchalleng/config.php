<?php

$localhost = "localhost";
$db = "mms";
$user = "root";
$password ="";




try{
    $conn = new PDO("mysql:host=$localhost;dbname=$mms",  $user, $password);
    echo "Connection Succsesfully";
}catch(Exception $e){
    echo "Error" . $e->getMessage();
}









?>