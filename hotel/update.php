<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalyear";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
		die("Connection failed".mysqli_connect_error());

	}
?>


<?php 



	mysqli_query($conn ,"UPDATE booking SET status =1 WHERE status = 0")
	or die(mysqli_error());
	echo "<script>alert('print successfully！'); window.location='booking.php';</script>";

?>