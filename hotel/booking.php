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
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalyear";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed".mysqli_connect_error());

  }?>

<?php
session_start();



if(isset($_POST['register'])){
  $Email=$_POST['email'];
  $Password=$_POST['password'];

  $sql = "SELECT * FROM register2 WHERE Email='$Email' AND Password='$Password'";
  $result = mysqli_query($conn,$sql);

  if(mysqli_num_rows($result) > 0){

        $_SESSION['name'] = $_POST['email'];
    echo "<script>alert('Login successfully！'); window.location='booking.php';</script>";


  }else{
    
    echo "<script>alert('Login fail. Username or password invalid.'); window.location='userlogin.html';</script>";

    
  }

}
if(isset($_GET['logout']) && !empty($_GET['logout'])){
    $logout = $_GET['logout'];
    $logout = ($logout);

    header("Location:userlogin.html");

session_destroy();
}

?>
<header>
   <a id="logo"><img src="https://st2.depositphotos.com/5943796/11382/v/950/depositphotos_113828236-stock-illustration-initial-letter-ns-red-swoosh.jpg" width="150" height="100"></a>
  <nav>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a>Booking Hotel</a></li>
      <li><a href="about.php">About us</a></li>
       <li><a href="booking.php?logout=1">Logout</a></li>
       
    
    </ul>
  </nav>
</header>
<body><br><br><br><br><br><br>


	<center>
		<div class='homeTitle'>
      <h1><font color="black">Booking Hotel</font></h1>
       </div><img width='100%' height='500px' src='https://images.trvl-media.com/hotels/21000000/20580000/20573700/20573686/7c29f05a_z.jpg'> 

       <br><br>
          <center>
              <form method="post" action="detail.php">
                <table>
                  <tr>
                    <th>Email:</th>
                    <th><input type="text" name="email" value="<?=$_SESSION['name'];?>" readonly></th>
                  </tr>
                  <tr>
                    <th>Date Of CheckIn:</th>
                    <th><input type="date" name="checkin"></th>
                  </tr>
                   <tr>
                    <th>Date Of CheckOut:</th>
                    <th><input type="date" name="checkout"></th>
                  </tr>
                   <tr>
                    <th>RoomType:</th>
                        <th><select name="roomtype">
                           <option value="--Select Room Type--">--Select Room Type--</option>
                            <option value="50.00">Single Room</option>
                            <option value="100.00">Double Room</option>
                            <option value="150.00">4 Person Room</option>
                       </select></th>
                  </tr>
                   <tr>
                    <th>Quantity:</th>
                     <th><select name="quantity">
                           <option value="--Select Room Type--">--Select Quantity--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                       </select></th>
                  </tr>
                   <th>Payment Type:</th>
                     <th><select name="pay">
                           <option value="--Select Payment Type--">--Select Quantity--</option>
                            <option value="Pay">Pay Now</option>
                            <option value="Pay Later">Pay Later</option>
                  </form>
                </table>
                <br>
                <button name="book">Booking</button><br><br>  
                <br>
                 <h1>History Result</h1>
       <h1>____________________________________________________________</h1> 

                <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalyear";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed".mysqli_connect_error());

  }

$email = $_SESSION['name'];

$result = mysqli_query($conn,"SELECT * FROM booking WHERE Email = '$email' AND status = 1");
echo "<table border='1' style='text-align:center''><tr>";
echo"<th>Email</th>";
echo"<th>Date OF CheckIn</th>";
echo"<th>Date OF CheckOut</th>";
echo"<th>RoomType</th>";
echo"<th>Quantity</th>";
echo"<th>Payment</th>";

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
echo"<td>". $test['Payment']."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
<br><br>
                    <div class='legality'><p>NS Hotel . Copyright Office website</p></div>
		</body>
	
	</html>

  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ca193f86bba4605280099af/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->