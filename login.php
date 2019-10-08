<?php
$username = $_POST['username'];
	$password = $_POST['password'];
	$conn = mysqli_connect("localhost","root","","royal");
	$query = SELECT * from user where username ='$username' and password ='$password';
	$result = mysqli_query($conn,$query);
	if (mysqli_num_rows($result)==1) {
		session_start();
		$_SESSION['royal'] = 'true';
		header(location:index.php);
	
	else{
		echo{'wrong';}
	}
?>
<html>
<head>
<title></title>
<script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
</script>
<script> 
$(function(){
  $("#header").load("header.html"); 
  $("#footer").load("footer.html"); 
});
</script> 
</head>
<body>
<div id="header"></div>
<!--Remaining section-->
<form action="login.html" method="post">
		<div>
			User name:
			<br>
			<input type="text" name="username" >
		</div>
		<div>
			Password:
			<br>
			<input type="password" name="username">
		</div>
		<div>
			<button type="button" class="btn btn-success">submit</button>
		</div>
		
	</form>
	<div id="regis">
		<small>new here?</small>
		<p><a href="register.html">Create Account</a></p>
	</div>

<div id="footer"></div>
</body>
</html>