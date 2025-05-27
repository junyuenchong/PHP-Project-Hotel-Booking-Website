<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://www.paypal.com/sdk/js?client-id=AWc3wQ7SiG-Ry4ChY3H2VRjnQewsvDJ6pHTvHWyQm9cEugIxUiL8p81UVsV8UkbLv9Li4iTpXEcpaYn7&currency=MYR"></script>
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



  }
?>


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
        $Payment = $_POST['pay'];

      $sql = "SELECT * FROM booking WHERE Email = '$Email' AND CheckIn = '$CheckIn' AND CheckOut = '$CheckOut' AND RoomType = '$RoomType' AND Quantity = '$Quantity' AND Payment = '$Payment'";
      $result2 = $conn->query($sql);
    $count2 = mysqli_fetch_assoc($result2);
 
    $price = $count2['RoomType'];
    $total = $RoomType * $Quantity;

    if ($Email=="" || $CheckIn == "" || $CheckOut =="" || $RoomType ==""|| $Quantity =="" || $Payment == "") 
    {
      echo "<script>alert('Please fill up all of the data first before insert'); window.location='booking.php';</script>";
    }
    else  if ($CheckIn == $CheckOut)
  {
     echo " <script> alert('Cannot select same day');window.location = 'booking.php';</script>" ;

  }
  else  if ($CheckIn >= $CheckOut)
  {
     echo " <script> alert('Date of Check In cannot early then Date of Check Out');window.location = 'booking.php';</script>" ;

  }
  else if($Payment == "Pay Later"){
    mysqli_query($conn,"INSERT INTO booking (Email,CheckIn,CheckOut,RoomType,Quantity, Payment,status)VALUES('$Email','$CheckIn','$CheckOut','$RoomType','$Quantity','$Payment',1)")

  or die(mysqli_error());
     echo " <script> alert('Booking successfully！');window.location = 'booking.php';</script>" ;

  }else{
      
      

    mysqli_query($conn,"INSERT INTO booking (Email,CheckIn,CheckOut,RoomType,Quantity, Payment)VALUES('$Email','$CheckIn','$CheckOut','$RoomType','$Quantity','$Payment')")

  or die(mysqli_error());
  
echo "<script>alert('Booking successfully！');</script>";
      
 
      
}

}

mysqli_close($conn);

?>
<header>
   <a id="logo"><img src="https://st2.depositphotos.com/5943796/11382/v/950/depositphotos_113828236-stock-illustration-initial-letter-ns-red-swoosh.jpg" width="150" height="100"></a>
  <nav>
    <ul>
      <li><a>Home</a></li>
      <li><a>Booking Hotel</a></li>
      <li><a href="about.php">About us</a></li>
       <li><a href="userlogin.html">Logout</a></li>
      <?php echo "$price";?>
    </ul>
  </nav>
</header>
<body><br><br><br><br><br><br>


	<center>
	 <h1><font color="black">Booking Detail And Payment</font></h1>
      

       <br><br>
          <center>
             <form>
                <table>
                  <tr>
                    <th>Email:</th>
                    <th><input type="text" name="email" value="<?php echo $Email; ?>" readonly></th>
                  </tr>
                  <tr>
                    <th>Date Of CheckIn:</th>
                    <th><input type="date" name="checkin" value="<?php echo $CheckIn; ?>" readonly></th>
                  </tr>
                   <tr>
                    <th>Date Of CheckOut:</th>
                    <th><input type="date" name="checkout" value="<?php echo $CheckOut; ?>" readonly></th>
                  </tr>
                  <tr>
                    <th>RoomType:</th>
                    <th><p style="margin-top: 20px;"><?php echo (($RoomType==50.00)?'Single Room':'');?>
                            <?php echo(($RoomType==100.00)?'Double Room':'');?>
                            <?php echo(($RoomType==150.00)?'4 Person Room':'');?></p>
                  </tr>
                  <tr>
                    <th>Quantity</th>
                    <th><input type="text" name="quantity"  value="<?php echo $Quantity; ?>" readonly></th>
                  </tr>
                    <tr>
                    <th>Total</th>
                    <th><input type="number" name="total" value="<?php echo $total; ?>" readonly></th>
                  </tr>
                 
<div id="paypal-button-container" style="width: 20%; margin-right: 40px; float: right;"></div>
                </table>


                <br>
              </form>
              






		</body>
	
	</html>
  <script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: <?=$total; ?>
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // Capture the funds from the transaction
      return actions.order.capture().then(function(details) {
          // Show a success message to your buyer
        alert("Payment successfully！");window.location='receipt.php';

          
      });
    }
  }).render('#paypal-button-container');
</script>