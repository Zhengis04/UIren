<?php
session_start();

//db connection;
$server='localhost';
$user='root';
$p='';
$db='mery';


$con=mysqli_connect($server,$user,$p,$db);
$user=$_SESSION['id']; // get the session variable from login page upon successful login. Since we used user_id value as session variable  in login.php, then we can now access the user table using this session variable and perform a myriad.

$sql= mysqli_query($con,"SELECT * FROM user WHERE user_id='$user'");// we are using user variable which holds the key passed by the session variable. In short we want data about this user who logged in and was redirected to the homepage
$num_rows=mysqli_num_rows($sql);
if($num_rows>0){
	while($row=mysqli_fetch_array($sql)){

		$fn=$row['fname'];
		$ln=$row['lname'];

		echo 'Welcome'. ' '.$fn.' '.$ln;
	}

}



?>