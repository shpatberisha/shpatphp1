
<?php

require 'config.php';

if(isset($_POST['submit'])){
    $username=$_POST['username' ];
    $password=$_POST['password'];

    if(empty($username) || empty($username)){
        echo "Fill all the fields";
        header("refresh:2;url=login.php");
    }else{
        $sql="SELECT * FORM users WHERE username=:username";
        $insertSQL=$conn->prepare($sql);
        $insertSQL->bindParam(':username',$username);
        $insertSQL->execute();

        if($insertSQL->rowCount() > 0){
            $data = $insertSQL->fetch();
            if(password_verify($password, $data['password'])){
                $_SESSION['username']=$data['username'];
                header("Location: dashboard.php");
            }else{
                echo "Password incorrct";
                header("refresh:2; url=login.php");
            }
        }else{
            echo "User not found";
        }
    }
}




?>