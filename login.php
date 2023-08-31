<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>user registration</title>
</head>
<body>
	<table>
		<form method="post" action="regform.php">
			<tr><td>email:</td><td><input type="text" name="login"></td></tr>
			<tr><td>password:</td><td><input type="password" name="password"></td></tr>
			<tr><td></td><td><input type="submit" name="sub" value="registration"></td></tr>
	    </form>
	
		

	</table>

</body>



</html>