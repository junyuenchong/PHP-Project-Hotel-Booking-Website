<!DOCTYPE html>
<html>
<head>
	<title></title>

	</head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Oswald);
#body{
  overflow: hidden;
}
 
  
}
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
			background-color:black;
			cursor: pointer;
		}
		.button2{
			background-color:black;
			color:white;
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

.content {
width: 100%;
  overflow: hidden;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
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
	color: white;
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



.big-section {
  padding-top: 80px;
  padding-bottom: 80px;
}
/*footer*/
.legality{
  margin: auto;
  width: 700px;
  text-align: center;
  clear: both;
  font: 10pt verdana;
  line-height: 2em;
  padding: 40px 0 0 0;
}

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
<center>
<h1>Search Result:</h1>
<br>
<table border="1">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalyear";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
		die("Connection failed".mysqli_connect_error());

	}

$title = $_POST['search'];
$result = mysqli_query($conn,"SELECT * FROM booking WHERE Email LIKE '%$title%'");
echo "<table border='1' style='text-align:center''><tr>";
echo"<th>Email</th>";
echo"<th>Date OF CheckIn</th>";
echo"<th>Date OF CheckOut</th>";
echo"<th>RoomType</th>";
echo"<th>Quantity</th>";
echo"<th>Edit</th>";
echo"<th>Delete</th>";

while($test = mysqli_fetch_array($result)){
$id = $test['BookingID'];

echo "<tr align='center'>";



echo"<td>" .$test['Email']."</td>";
echo"<td>" .$test['CheckIn']."</td>";
echo"<td>". $test['CheckOut']."</td>";
echo"<td>".(($test['RoomType']==50.00)?'Single Room':'');
        echo (($test['RoomType']==150.00)?'4 Person Room':'');
        echo (($test['RoomType']==100.00)?'Double Room':'');
echo"<td>". $test['Quantity']."</td>";
echo"<td><button><a href ='edit.php?id=$id'>Edit</a></button>";
echo"<td><button><a href ='del.php?id=$id'><center>Delete</a></button>";
echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>

</table>
<br>
<button><a href = "adminlogin.php">Back To Order List</a></button>

<br><br>
</center>
</body>
</html>
