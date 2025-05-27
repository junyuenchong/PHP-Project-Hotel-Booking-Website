<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalyear";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed".mysqli_connect_error());

  }

if(isset($_POST['book'])){
			$Email = $_POST['email'];
			$CheckIn = $_POST['checkin'];
			$CheckOut = $_POST['checkout'];
			$RoomType = $_POST['roomtype'];
			$Quantity = $_POST['quantity'];


		if ($Email=="" || $CheckIn == "" || $CheckOut =="" || $RoomType ==""|| $Quantity =="") 
		{
			echo "<script>alert('Please fill up all of the data first before insert'); window.location='booking.php';</script>";
		}
else{
			
			

		mysqli_query($conn,"INSERT INTO booking (Email,CheckIn,CheckOut,RoomType,Quantity)VALUES('$Email','$CheckIn','$CheckOut','$RoomType','$Quantity')")

	or die(mysqli_error());
	
echo "<script>alert('Booking successfully！'); window.location='detail.php';</script>";
			

			
}
}
mysqli_close($conn);

?>