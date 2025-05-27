<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalyear";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
		die("Connection failed".mysqli_connect_error());

	}


	if(isset($_GET['id']) && !empty($_GET['id'])){
echo "<script>alert('Comfirm Delete the booking?！'); </script>";


		$id = $_GET['id'];
		$id = ($id);



mysqli_query($conn ,"DELETE  FROM booking WHERE  BookingID = '$id'")
	or die(mysqli_error());
	echo "<script>alert('Delete successfully！'); window.location='adminlogin.php';</script>";

}
?>