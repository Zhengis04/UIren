<?php
    $server='localhost';
    $user='root';
    $password='';
    $db='form';
    $con=mysqli_connect($server, $user, $password, $db);
    $email=$_POST['login'];
    $password=$_POST['password'];
    $sql_insert=mysqli_query($con,"insert into user (login,password) values ('$email','$password')");
    if(!$sql_insert)
    {
      echo "error";
    }
    else
    {
      echo "success";
    }
?>