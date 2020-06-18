<?php 
require_once 'init.php';
if(isset($_POST['submit']))
{
	$title = strip_tags($_POST['title']);
	$target = "images/".basename($_FILES['image']['name']);
	$image = $_FILES['image']['name'];
	$content = strip_tags($_POST['content']);

	$sql = "insert into blog (blog_title, blog_content,blog_image) values ('$title','$content','$image')";
	$db->query($sql);
	echo "<script>alert('Blog has been uploaded succesfully')</script>";

	//move image in image folder
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
{
	echo "Image uploaded";
}
else {echo "Not uploaded"; }

}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Fitness First</title>
	  
	</head>
<body>
	

<form action="blog.php" method="post" enctype="multipart/form-data">
	Title : <input type="text" name="title"><br>
	Image : <input type="file" name="image" accept="image/*"><br>
	COntent : <textarea name="content" rows="20" cols="50"></textarea><br>
	<input type="submit" value="Submit" name="submit">
	</form>

<!-- dispaly blog -->
	<div>
		<?php

			$sql = "select * from blog";
			$result = $db->query($sql);
			while($row = mysqli_fetch_array($result))
			{
				echo "<h3>".$row['blog_title']."</h3>";
				echo "<img src='images/".$row['blog_image']."'>";
				echo "<p>".$row['blog_content']."</p>";
				
			}
		?>
	</div>
</body>
</html>