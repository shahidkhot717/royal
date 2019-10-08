<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
</body>
</html>


<?php
	session_start();
	if (!$_SESSION['royal']) {
		# code...
		header('location:login.html');
	}
	

	include 'header.html';
	include 'nav.html';
	include 'caroul.html';
	include 'body.html';
	include 'footer.html';




?>
