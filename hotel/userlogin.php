<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalyear";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
		die("Connection failed".mysqli_connect_error());

	}

if(isset($_POST['email'])){
	$Email=$_POST['email'];
	$Password=$_POST['password'];

	$sql = "SELECT * FROM register2 WHERE Email='$Email' AND Password='$Password'";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0){
		echo "<script>alert('Login successfully！'); window.location='booking.php';</script>";

		

	}else{
		
		echo "<script>alert('Login fail. Username or password invalid.'); window.location='userlogin.html';</script>";

		
	}

}