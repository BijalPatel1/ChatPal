<?php
session_start();
include '../init.php';
$email=$_SESSION['email'];
$query="SELECT image FROM `reg` WHERE `email`='".$email."'";

$results=mysqli_query($db,$query) or die($db -> error);

if($row =  mysqli_fetch_assoc($results)){

	$image_path=$row['image'];
}




if(isset($_REQUEST['Submit']))
{
	$search = $_REQUEST['Search'];

	if($search=='Food' or $search=='food')
	{
		header('Location: ../FoodPage/Food.html');
	}

	else if($search=='Beauty' or $search=='beauty')
	{
		header('Location: ../BeautyPage/Beauty.html');
	}

	else if($search=='Fashion' or $search=='fashion')
	{
		header('Location: ../FashionPage/Fashion.html');
	}

	else if($search=='Fitness' or $search=='fitness')
	{
		header('Location: ../FitnessPage/Fitness.html');
	}

	else if($search=='Sports' or $search=='sports' or $search=='sport' or $search=='Sport')
	{
		header('Location: ../SportsPage/Sports.html');
	}

	else if($search=='Travel' or $search=='travel')
	{
		header('Location: ../TravelPage/Travel.html');
	}

	else if($search=='tv' or $search=='Tv' or $search=='movie' or $search=='Movie' or $search=='Movies')
	{
		header('Location: ../TVandMovies/TV&Movies.html');
	}


	else
	{
		echo "<script>alert('Sorry, No such data found!!!!')</script>";
	}
}

if(isset($_POST['profilePic']))
{

	$target = "profilePic/".basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'];

	if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
{
	echo "Image uploaded";
}
else {echo "Not uploaded"; }

}
?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/SecondPa.css">
<script type="text/javascript" src="js/Second.js"></script>

<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">


<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>

<link type="image/jpg" rel="shortcut icon" href="fav.jpg">

</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul>
  	<li>
  	<form action="upload.php">
  	<table>
  		<tr><td><img src="../profilePic/<?php echo $image_path;?>" alt="NO PHOTO" id="profile" name="profile_pic"></td></tr>
  		<input type="submit" name="profilePic" value="Profile Pic" id="pro">
  		
  	</form>
  	</li></table>
  	
  	<li>
  	<table cellspacing="6px">
  		<tr><td><a href="..\QuizPage\Quiz.html"><img src="quiz.png" id="quiz"></a></td></tr>
  		<tr><td><a href="..\QuizPage\Quiz.html"><p id="qz">Quiz</p></p></td></tr>
  	</li></table>

  	<li>
  	<table cellspacing="6px">
  		<tr><td><a href="..\GamePage\Game.html"><img src="game.png" id="game"></a></td></tr>
  		<tr><td><a href="..\GamePage\Game.html"><p id="gm">Game</p></a></td></tr>
  	</li></table>

  	<li>
  	<table cellspacing="6px">
  		<tr><td><a href="..\Setting\Setting.html"><img src="setting.png" id="setting"></a></td></tr>
  		<tr><td><a href="..\Setting\Setting.html"><p id="set">Why Us</p></a></td></tr>
  	</li></table>

  	<li>
  	<table cellspacing="6px">
  		<tr><td><a href="..\AboutUs\AboutUs.html"><img src="aboutUs.png" id="aboutUs"></a></td></tr>
  		<tr><td><a href="..\AboutUs\AboutUs.html"><p id="au">About Us</p></a></td></tr>
  	</li></table>

  	<li>
  	<table cellspacing="6px">
  		<tr><td><a href="..\LoginPage\Login.php"><img src="logout.png" id="logout"></a></td></tr>
  		<tr><td><a href="..\LoginPage\Login.php"><p id="log">Logout</p></a></td></tr>
  	</li></table>

  </ul>
</div>

<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  <p>

  	<form action="Second.php">
  	<input type="text" placeholder="Search" name="Search" id="search" autocomplete="off">
	<input type="submit" value="Search" name="Submit" id="btn">
	</form>
	<a href="..\Chatio\index.html"><img src="chat.png" id="chat"></a>
  </p>
  <br><br>
  <?php
  	if(isset($_GET['upload_status']))
  	{?>
  		<center> <label style="color: green">Image Uploaded....</label></center>
  	<?php
  	}
  ?>
 
  <div class="octagonImg">
	<center>
		<a href="..\FoodPage\Food.html"><img src="food.jpg" id="food"></a>	
		<a href="..\BeautyPage\Beauty.html"><img src="beauty.jpg" id="beauty"></a>
		<a href="..\TravelPage\Travel.html"><img src="travel.jpg" id="travel"></a>
		<a href="..\FashionPage\Fashion.html"><img src="fashion.jpg" id="fashion"></a>
		<a href="..\SportsPage\Sports.html"><img src="sports.jpg" id="sports"></a>
		<a href="..\TVandMovies\TV&Movies.html"><img src="tv.jpg" id="tv"></a>
		<a href="..\FitnessPage\Fitness.html"><img src="fitness.jpg" id="fitness"></a>
	</center>
  </div>

  <br>
	
  <div class="pic">
	<center>
		<a href="image\main1.jpg" data-lightbox="mygallery"><img src="image\main1.jpg" id="main1"></a>
		<a href="image\main2.jpg" data-lightbox="mygallery"><img src="image\main2.jpg" id="main2"></a>
		<a href="image\main3.jpg" data-lightbox="mygallery"><img src="image\main3.jpg" id="main3"></a>
		<a href="image\main4.jpg" data-lightbox="mygallery"><img src="image\main4.jpg" id="main4"></a>
		<a href="image\main5.jpg" data-lightbox="mygallery"><img src="image\main5.jpg" id="main5"></a>
		<a href="image\main6.jpg" data-lightbox="mygallery"><img src="image\main6.jpg" id="main6"></a>
		<a href="image\main7.jpg" data-lightbox="mygallery"><img src="image\main7.jpg" id="main7"></a>
		<a href="image\main8.jpg" data-lightbox="mygallery"><img src="image\main8.jpg" id="main8"></a>
		<a href="image\main9.jpg" data-lightbox="mygallery"><img src="image\main9.jpg" id="main9"></a>
		<a href="image\main10.jpg" data-lightbox="mygallery"><img src="image\main10.jpg" id="main10"></a>
		<a href="image\main11.jpg" data-lightbox="mygallery"><img src="image\main11.jpg" id="main11"></a>
		<a href="image\main12.jpg" data-lightbox="mygallery"><img src="image\main12.jpg" id="main12"></a>
		<a href="image\main13.jpg" data-lightbox="mygallery"><img src="image\main13.jpg" id="main13"></a>
		<a href="image\main14.jpg" data-lightbox="mygallery"><img src="image\main14.jpg" id="main14"></a>
		<a href="image\main15.jpg" data-lightbox="mygallery"><img src="image\main15.jpg" id="main15"></a>
		<a href="image\main16.jpg" data-lightbox="mygallery"><img src="image\main16.jpg" id="main16"></a>
		<a href="image\main17.jpg" data-lightbox="mygallery"><img src="image\main17.jpg" id="main17"></a>
		<a href="image\main18.jpg" data-lightbox="mygallery"><img src="image\main18.jpg" id="main18"></a>
		<a href="image\main19.jpg" data-lightbox="mygallery"><img src="image\main19.jpg" id="main19"></a>
		<a href="image\main20.jpg" data-lightbox="mygallery"><img src="image\main20.jpg" id="main20"></a></center>
   </div>
</div>

<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?62HPce7J63MjbePzLE4SrpdYowe8YmK2";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
</body>
</html> 
