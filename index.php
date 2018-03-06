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
	<div class="wrapper">
	<div class="header_background container">
		<form enctype="multipart/form-data" action="fileup.php" method="post">
			<h1>Upload new file</h1>
			<p>Select your file</p>
			<input  type="file" name="newfile">
			<br>
			<input class="btn btn-success" type="submit" value="Upload">
		</form>
	</div>
	<div class="content_background container">
		<h1>Your files</h1>
		
		<ul>
		<?php
			if ($resource = opendir('files')) {
			    while (false !== ($file = readdir($resource))) { 
			        if ($file != "." && $file != "..") { 
			            echo '<li class="li_class">'.$file.'<div class ="file_buttons"><form action="askdelfile.php"><input class="hide" name="path" value="files/'.$file.'"> <input class="btn btn-danger" type="submit" value="delete"></form></div>'.'<div class ="file_buttons"><form class="forms"  action="downloadfile.php"><input class="hide" name="path" value="files/'.$file.'"> <input class="btn btn-primary" type="submit" value="download"></form></div><div class="clearfix"></div>'.'</li>';
			        } 
			    }
			    closedir($resource); 
			}
		?>
		</ul>
	</div>
	</div>
</body>
</html>