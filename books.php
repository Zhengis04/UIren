<?php
    $server="localhost";
    $user="root";
    $password="";
    $db="school";
    $con=mysqli_connect($server, $user, $password, $db);
    $fname=$_POST['First_name'];
    $lname=$_POST['Last_name'];
    $em=$_POST['Email_address'];
    $pas=MD5($_POST['Pass']);
    $sql_insert=mysqli_query($con,"insert into books(Firstname,Lastname,Email,Password) values ('$fname','$lname','$em','$pas')");
    if(!$sql_insert){
    	echo "error";
    }
    else{
    	echo "success";
    } 
    $dResult=mysqli_query($con,'SELECT * FROM books');
    while($row=mysqli_fetch_array($dResult))
    {
         echo "id: " . $row["User_id"] . " - Name: " . $row["Firstname"] . " " . $row["Lastname"] .    " Email:" . $row["Email"].   "Password:" . $row["Password"] . "<br>";
    }
    
    ?>