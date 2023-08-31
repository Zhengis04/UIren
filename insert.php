<?php
    $server="localhost";
    $user="root";
    $password="";
    $db="school";
    $con=mysqli_connect($server, $user, $password, $db);
    $fname=$_POST['first_name'];
    $oname=$_POST['other_name'];
    $contact=$_POST['contact_n'];
    $gender=$_POST['gen'];
    $sql_insert=mysqli_query($con,"insert into students(Firstname,Othername,Contact,Gender) values ('$fname','$oname','$contact','$gender')");
    if(!$sql_insert)
    {
    	echo "error";
    }
    else
    {
    	echo "success";
    }
?>