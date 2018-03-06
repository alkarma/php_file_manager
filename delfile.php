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
		unlink($_REQUEST['path']);
	?>
	<div class="wrapper">
		<div class="header_background container">
			<h1>The file was deleted</h1>
				<form action="index.php">
					<input class="btn btn-default home_button" type="submit" value="Return to main page">
				</form>
		</div>
	</div>
</body>
</html>
