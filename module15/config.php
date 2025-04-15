<?php
session_start();
$localhost = "localhost";
$db = "firstdb";
$user = "root";
$password = '';


try{
    $connection = new PDO("mysql:host=$localhost;dbname=$firstdb", $user, $password);
    echo "Connection Succsesfully";
}catch(PDOException $e){
    echo "something went wrong";
}
