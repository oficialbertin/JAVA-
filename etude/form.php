<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>log in</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
	<div>
		<fieldset class="fieldset">
			<form method="POST">
			<legend>Log in</legend>
			<label>username</label><br><br>
			<input type="text" name="username"><br><br>
			<label>password</label><br><br>
			<input type="password" name="password"><br><br>
			<input type="submit" name="submit" value="submit"><br><br>
		</form>
		</fieldset>
	</div>
</center>

</body>
</html>


<?php 

$con=mysqli_connect("localhost","root","","users");
if ($con) {
	// code...
}

else{
	 die("not connected".mysqli_connect_error());

}
if(isset($_POST['submit'])){
	$user=$_POST['username'];
	$pass=$_POST['password'];

$insert=$con->query("INSERT INTO users VALUES('','$user','$pass')");
if ($insert) {
	echo("<script>alert('data inserted successful')</script>");
}
else{
	die("error".mysqli_error($con));
}
}


?>