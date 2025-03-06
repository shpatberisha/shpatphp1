<?php
require('config.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];


    $sql = "INSERT INTO users(name,user,email) VALUES(:name, :user, :email)";
    $sqlQuery = $conn->prepare($sql);


    $sqlQuery->bindParam(':name', $name);
    $sqlQuery->bindParam(':uder', $user);
    $sqlQuery->bindParam(':email', $email);


    $sqlQuery->execute();


}






?>