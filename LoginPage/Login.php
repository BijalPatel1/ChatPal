<?php
include '../init.php';
if(isset($_REQUEST['SignSubmit']))
{
$email = strip_tags($_REQUEST['Signup_username']);
$pass = strip_tags($_REQUEST['Signup_password']);

	if(strlen($email) >20)
	{
		echo "<script>alert('Email address is greater than 20 charachters!!!!')</script>";
	}

	elseif (strlen($pass) >20) 
	{
		echo "<script>alert('Password greater than 20 charachters!!!!')</script>";
	}

	else
	{
	$sql = "insert into reg (email, pass) values ('$email','$pass')";
		$db->query($sql);
		echo "<script>alert('Member added succesfully')</script>";
	}
}
?>

<?php
include '../init.php';
if(isset($_REQUEST['LoginSubmit']))
{
	if(isset($_REQUEST['Login_username']) && (isset($_REQUEST['Login_password'])))
	{
		$email = $_REQUEST['Login_username'];
		$pass = $_REQUEST['Login_password'];

		$sql = "select * from reg where email = '".$email."' and pass='".$pass."'";

		$results=$db->query($sql);
		if(mysqli_num_rows($results)==1)
		{
			session_start();
			$_SESSION['email'] = $email;
			echo "Logged in";
			header('Location: ../SecondPage/Second.php');
		}

		else
		{
			echo "<script>alert('Please Sign Up!!!!')</script>";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login and Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="LoginSign.css">  <!-- Link to Login.css file -->
	<!--  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
	<script type="text/javascript" src="Login.js"></script>
	<link type="image/jpg" rel="shortcut icon" href="fav.jpg">
</head>
<body>
	<form>
	<section class="container">

		<!-- Image Template -->
		<center><img src="loginSignUp.png" alt="Login Signup Template"></center>

		<!-- Login details -->
		<form action="Login.php">
		<input type="text" name="Login_username" id="Login_username" autocomplete="off" required>
		<input type="password" name="Login_password" id="Login_password" required>
		<input type="submit" name="LoginSubmit" value="Submit" id="sub1" >
		</form>
		
		<!-- Signup details -->
		<form action="Login.php">
		<input type="text" name="Signup_username" id="Signup_username" autocomplete="off" required>
		<input type="password" name="Signup_password" id="Signup_password" required>
		<input type="submit" name="SignSubmit" value="Submit" id="sub2">	
		</form>

	</form>

	</section>
	</form>
</body>
</html>