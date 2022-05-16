<?php
	require_once 'connection.php';
 
	if(ISSET($_POST['upload'])){
		$file_name = $_FILES['image']['name'];
		$file_temp = $_FILES['image']['tmp_name'];
 
		$exp = explode(".", $file_name);
		$ext = end($exp);
		$image = time().'.'.$ext;
		$ext_allowed = array("png", "gif", "jpeg", "jpg");
		$location = "uploads/".$image;
		if(in_array($ext, $ext_allowed)){
			if(move_uploaded_file($file_temp, $location)){
				$query="INSERT INTO `image` (image_name, location) VALUES('$image', '$location')";
 
				$connection->exec($query);
 
				echo "<script>alert('Image uploaded!')</script>";
				echo "<script>window.location='pproduct.php'</script>";
			}
		}else{
			echo "<script>alert('Only image to upload!')</script>";
			echo "<script>window.location='pproduct.php'</script>";
		}
	}
?>