<?php 
require_once '../init.php';
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$target = "../profilePic/".basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'];

	$sql = "UPDATE reg SET image='".$image."' WHERE email='".$email."'";
	

	//move image in profilePic folder
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
	{
		if(mysqli_query($db,$sql));
		{
			header("Location:Second.php?upload_status="); 
		}
		
	}
	

else {echo "Not uploaded"; }

}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Upload Pic</title>
	  <link href='https://fonts.googleapis.com/css?family=Kotta One' rel='stylesheet'>
	  <style type="text/css">
	  	body
	  	{
	  		background-color: #3090C7;
	  		font-family: 'Kotta One';
	  		font-size: 20px;
	  		color: #fff;
	  	}

	  
	  	#eid
	  	{
	  		position: absolute;
	  		font-family: 'Kotta One'; 
	  		font-size: 20px;
	  		color: #000;
	  	}

	  	#in
	  	{
	  		position: absolute;
	  		top: 25%;
	  		font-family: 'Kotta One';
	  		font-size: 20px;
	  		color: #fff;
	  	}

	  	#ppic
	  	{
	  		position: absolute;
	  		top: 0%;
	  		font-family: 'Kotta One';
	  		font-size: 20px;
	  		color: #fff;
	  	}

	  	#go
	  	{
	  		position: absolute;
	  		top: 50px;
	  		font-family: 'Kotta One';
	  		font-size: 20px;
	  		background-color: #000;
	  		border-radius: 10px;
	  		border-color: #000;
	  		color: #fff;
	  	}
	  </style>
	</head>
<body>
	<center><h1>UPLOAD PAGE</h1></center>
<form action="upload.php" method="post" enctype="multipart/form-data">
	Enter Email Address : <input type="text" name="email" id="eid" required><br>
	<label id="in">Profile Pic : <label><input type="file" name="image" accept="../profilePic/*" id="ppic"><br>
	<input type="submit" value="Submit" name="submit" id="go">
	</form>
</body>
</html>