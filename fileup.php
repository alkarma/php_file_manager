<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php
	// print_r($_FILES);

	$uploaddir = "files/";
	$dest = $uploaddir . $_FILES['newfile']['name'];

	if(move_uploaded_file($_FILES['newfile']['tmp_name'],$dest)){
		echo '<div class="wrapper"><div class="header_background container">
					<h1>The file was successfully uploaded</h1><form action="index.php"><input class="btn btn-default home_button" type="submit" value="Back"></form></div></div>';
	}else{
		echo '<div class="wrapper"><div class="header_background container">
					<h1>Error</h1><form action="index.php"><input class="btn btn-default home_button" type="submit" value="Back"></form></div></div>';
	}
?>
</body>
</html>