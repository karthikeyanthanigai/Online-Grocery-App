<?php 
session_start();
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$address=$_SESSION['address'];
$city=$_SESSION['city'];
$state=$_SESSION['state'];

//print_r($_SESSION)
?>




<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
	
<h2>Thank you <?php echo $name; ?>, you have enter into your page with the email <?php echo $email; ?></h2>


<h2>your address is<?php echo $address; ?>, your city is <?php echo $city; ?>,your state is <?php echo $state; ?> </h2>
<a href="funn.php" >

to go back</a>

</body>
</html>