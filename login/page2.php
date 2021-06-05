<?php 
session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];

//print_r($_SESSION)
?>




<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
	
<h2>Thank you <?php echo $username; ?>, you have enter into your page with the password <?php echo $password; ?></h2>
<a href="fun.php" >
to go back</a>

</body>
</html>