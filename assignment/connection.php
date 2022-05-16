<?php
	$connection=new SQLite3('ImageGallerySecond') or die("Unable to open database!");
	$query="CREATE TABLE IF NOT EXISTS `image`(image_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, image_name TEXT, location TEXT)";
 	
	$connection->exec($query);
?>