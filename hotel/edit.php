<!DOCTYPE html>
<html>
<head>
	<title></title>

	</head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">

@import url(https://fonts.googleapis.com/css?family=Oswald);
html {
  font-family: "Oswald"; 
}
header {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  border-bottom: 1px solid #e3e3e8;
}
#logo {
  float: left;
  font-size: 3em;
  margin: 0;
  padding: .4em;
  text-decoration: none;
  color: #333;
  border-right: 1px solid #e3e3e8;
  transition: .89s all;
}
#logo:hover {
  color: #fafafa;
  background-color: #333;
}
nav {
  float: left;
}
nav ul {
  list-style-type: none;
  margin: 0;
  padding: 2.2em 2em;
}
nav ul li {
  display: inline;
  padding: 0 .4em;
}
nav ul li a {
  color: #433;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 1.6em;
  padding-bottom: 1.3em;
  transition: .10s color;

}
nav ul li a:hover {
  border-bottom: 3px solid #333;
  color: #ff4629;
}

/*nb---*/
		button{
			background-color: black;
			color:white;
			font-size: 20px;
			padding: 14px 40px;
			transition-duration: 0.4s;
			border: none;
		}
		button:hover{
			background-color:#ff4629;
			cursor: pointer;
		}
		.button2{
			background-color: white;
			color:red;
			font-size: 20px;
			padding: 6px 12px;
			transition-duration: 0.4s;
			border: none;
		}
		.button2:hover{
			background-color: #f7626b;
					cursor: pointer;
		}
		.top-container {
  background-color: #f1f1f1;
  padding: 30px;

}

.header {
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
}

.container{
	margin-top: 5px;
text-align: center;
width: 100%;
}
.con{
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	display: inline-block;
	width: 30%;
	margin: 1%;
	background-color: white;
	border-radius: 10px;
}
a{
	color: black;
}
/*btn---*/

.homeTitle{
 z-index: 2;
 position: absolute;
 margin: 12% auto;
 width: 100%;
 text-align: center;
 color:white;
 
 font-size: 25px;
}


}
/*fa*/

</style>
<header>
   <a id="logo"><img src="https://st2.depositphotos.com/5943796/11382/v/950/depositphotos_113828236-stock-illustration-initial-letter-ns-red-swoosh.jpg" width="150" height="100"></a>
  <nav>
    <ul>
      <li><a>Home</a></li>
      <li><a>Booking Hotel</a></li>
      <li><a>About us</a></li>
      <li><a href="userlogin.html">Logout</a></li>
      
      
    </ul>
  </nav>
</header>
<body><br><br><br><br><br><br><br>

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
		$id = $_GET['id'];
		$id = ($id);

$result = mysqli_query($conn , "SELECT * FROM booking WHERE BookingID = '$id'");
$test = mysqli_fetch_array($result);
}


if (!$result)
{
die("Error: Data not found..");
}
$Email=$test['Email'] ;
$CheckIn= $test['CheckIn'] ;
$CheckOut=$test['CheckOut'] ;
$RoomType= $test['RoomType'] ;
$Quantity=$test['Quantity'] ;
if(isset($_POST['save']))
{
	$checkin_save = $_POST['Text2'];
	$checkout_save = $_POST['Text3'];
	$roomtype_save = $_POST['roomtype'];
	$quantity_save = $_POST['Text5'];
	mysqli_query($conn ,"UPDATE booking SET CheckIn ='$checkin_save', CheckOut ='$checkout_save',RoomType ='$roomtype_save', Quantity ='$quantity_save' WHERE BookingID = '$id'")
	or die(mysqli_error());
	echo "<script>alert('Edit successfully！'); window.location='adminlogin.php';</script>";

}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<center>
<head>
	<title></title>
	
<body>
<h1>Edit Order List</h1><br>
<form method="post" action="">
<table>
<tr>
 	<td>Email:</td>
 	<td> <input type="text" name="Text1" value="<?php echo $Email ?>" readonly></td>
 </tr>
<tr>
 	<td>Date Of CheckIn:</td>
 	<td><input type="date" name="Text2" value="<?php echo $CheckIn ?>"></td>
</tr>
<tr>
 	<td>Date Of CheckOut:</td>
 	<td><input type="date" name="Text3" value="<?php echo $CheckOut ?>"></td>
 </tr>
 <tr>

 	
 	<th>RoomType:</th>
                        <th><select name="roomtype">
                           <option value="<?php echo $RoomType ?>">Before:<?=(($test['RoomType']==50.00)?'Single Room':'');?>
                           	<?=(($test['RoomType']==100.00)?'Double Room':'');?>
                           	<?=(($test['RoomType']==150.00)?'4 Person Room':'');?>
                           </option>
                            <option value="50.00">Single Room</option>
                            <option value="100.00">Double Room</option>
                            <option value="150.00">4 Person Room</option>
                       </select></th>
 </tr>
 <tr>
 	<td>Quantity:</td>
 	<td><input type="text" name="Text5" value="<?php echo $Quantity ?>"></td>
 </tr>

</table>
<br>
<button name="save">Save</button>

 </form>



</center>
</body>
</html>
