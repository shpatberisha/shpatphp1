<?php

include_once('config.php');

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $emri=$_POST['emri'];
    $username=$_POST['username'];
    $email=$_POST['email'];

    $sql="UPDATE users SET id=:id,emri=:emri,username=:username,email=:email WHERE id=:id";

    $prep=$conn->prepare($sql);
    $prep->bindParam(':id',$id);
    $prep->bindParam(':emri',$emri);
    $prep->bindParam(':esername',$username);
    $prep->bindParam(':email',$id);
    $prep->execute();

    header('Location:dashboard.php');
}
