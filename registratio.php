<?php
    $server="localhost";
    $user="root";
    $password="";
    $db="account";
    $con=mysqli_connect($server, $user, $password, $db);
    $email=$_POST['login'];
    $password=$_POST['pass'];
    $sql_insert=mysqli_query($con,"insert into login (Login,Password) values ('$email','$password')");
    if(!$sql_insert)
    {
      echo "error";
      header('location: registration.html');
    }
    else
    {
      header('location: homepage.php');
    }
?>
