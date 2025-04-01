<?php

include_once('config.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $temPass=$_POST['password'];
    $password=password_hash($temPass,PASSWORD_DEFAULT);

    if(empty($name) || empty($surname) || empty($username) || empty($email) || empty($password)){
        echo "You need to fill all the fields";
    }else{
        $sql="SELECT username FROM users WHERE username=:username";

        $tempSQL=$conn->prepare($sql);
        $tempSQL->bindParam(':username',$username);
        $tempSQL->execute();

        if($tempSQL->rowCOUNT()>0){
            echo "Username existws!";
            header("refresh:2;url=sign.php");
        
        }else{
            $sql="INSERT INTO users(name,surname,username,email,password) VALUES (:name,:surname,:username,:email:paswsword)";
            $insertSQL=$conn->prepare($sql);

            $insertSQL->bindParam(':username',$username);
            $insertSQL->bindParam(':name',$name);
            $insertSQL->bindParam(':surname',$surname);
            $insertSQL->bindParam(':email',$email);
            $insertSQL->bindParam(':password',$password);

            $insertSQL->execute();

            echo "Data saved succesfully...";
            header("refresh:2;url=login.php");
            



        }


    }



}






?>