<?php
if(filter_has_var(INPUT_POST, 'submit'))
{
$name=htmlspecialchars($_POST['name']);
	
$email=htmlspecialchars($_POST['email']);

$address=htmlspecialchars($_POST['address']);


$city=htmlspecialchars($_POST['city']);

$state=htmlspecialchars($_POST['state']);

$pin=htmlspecialchars($_POST['pin']);



}

if(isset($_POST['submit']))
{
	session_start();
	$_SESSION['name'] = htmlentities($_POST['name']);
	$_SESSION['email'] = htmlentities($_POST['email']);
	$_SESSION['address'] = htmlentities($_POST['address']);
	$_SESSION['state'] = htmlentities($_POST['state']);
	$_SESSION['city'] = htmlentities($_POST['city']);

	header('Location: page22.php');
}




?>
























<!DOCTYPE html>
<html lang="en">
<head>
	<title>shipping form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" sction="<?php echo $_SERVER['PHP_SELF']; ?>">
					<span class="login100-form-title p-b-59">
						Shipping form
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="name" placeholder="Name..." value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess..." value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Adderss is required">
						<span class="label-input100">Address</span>
						<input class="input100" type="text" name="address" placeholder="address..." value="<?php echo isset($_POST['address']) ? $address : ''; ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="City is required">
						<span class="label-input100">City</span>
						<input class="input100" type="text" name="city" placeholder="city..." value="<?php echo isset($_POST['city']) ? $city : ''; ?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="State is required">
						<span class="label-input100">State</span>
						<input class="input100" type="text" name="state" placeholder="state..." value="<?php echo isset($_POST['state']) ? $state : ''; ?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Pin is required">
						<span class="label-input100">PIN</span>
						<input class="input100" type="text" name="pin" placeholder="pin..." value="<?php echo isset($_POST['pin']) ? $pin: ''; ?>">
						<span class="focus-input100"></span>
					</div>


					
					

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit" type="submit">
								Submit
							</button>
						</div>

						
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>