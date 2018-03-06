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
	$file = $_REQUEST['path'];
			echo '<div class="wrapper"><div class="header_background container">
					<h1>Delete file</h1><h2>Are you sure?</h2><div class="delete_buttons"><div class ="delete_button"><form action="delfile.php"><input class="hide" name="path" value="'.$file.'"> <input class="btn btn-danger" type="submit" value="Yes"></form></div><div class ="delete_button"><form action="index.php"><input class="btn btn-default" type="submit" value="No, I changed my mind"></form></div></div></div></div>';
	?>


</body>
</html>
