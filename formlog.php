<?php
 //getting form data
$email=$_POST['login'];
$pass=$_POST['password'];


//db connection
$server='localhost';
$user='root';
$p='';
$db='form';

$con=mysqli_connect($server,$user,$p,$db);
$sql=mysqli_query($con,"SELECT * FROM user WHERE login='$email' AND password='$pass'");
$num_rows=mysqli_num_rows($sql);
if($num_rows>0){
	while($row=mysqli_fetch_array($sql)){

		$id=$row['user_id'];
	}
	$_SESSION['id']=$id;
	echo $_SESSION['id'];
}
else{
	echo 'username and password mismatch';
}
?>