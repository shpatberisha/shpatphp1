<?php

include_once('update.php');

if (isset $_POST['submit'])

{
    $name = $_POST['name'];
    $surname = $_POST['username'];
    $email = $_POST['email'];
    $age= $_POST['age'];
    

    $sql = "UPDATE into user (name, surname, email) values (:name, :surname, :email)";
    $sqlQuery = $conn->prepare($sql);

    $sqlQuery->bindParam(':name', $name);
    $sqlQuery->bindParam(':surname', $surname);
    $sqlQuery->bindParam(':email', $email);
    $sqlQuery->bindParam(':age', $age);


    $sqlQuery->execute();

}