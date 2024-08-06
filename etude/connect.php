<?php 

$con=mysqli_connect("localhost","root","","student");

if($con){
	echo("connected successful");
}
else{
	echo("connection failed".mysqli_connect_error());
}





?>