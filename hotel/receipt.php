<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <?php
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalyear";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed".mysqli_connect_error());

  }


$result = mysqli_query($conn,"SELECT * FROM booking WHERE status =0");


  ?>
  <center>
<h1>NS Hotel Payment Receipt</h1>
<h1>__________________________________________________________</h1>
<br><br><br><br>

  <?php 

while($test = mysqli_fetch_assoc($result)):
  ?>

  <table>
     <tr>
      <td>Receipt ID:</td>
      <td><input type="text" name="" readonly="" value="<?=$test['BookingID'];?>"></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="text" name="" readonly="" value="<?=$test['Email'];?>"></td>
    </tr>
    <tr>
      <td>Date Of Check In:</td>
      <td><input type="date" name="" readonly="" value="<?=$test['CheckIn'];?>"></td>
    </tr>
      <tr>
        <td>Date of Check Out:</td>
      <td><input type="date" name="" readonly="" value="<?=$test['CheckOut'];?>"></td>
    </tr>
    <tr>
      <td>Room Type:</td>
      <td><input type="text" name="" readonly="" value="<?=(($test['RoomType']==50.00)?'Single Room':'');
        echo (($test['RoomType']==150.00)?'4 Person Room':'');
        echo (($test['RoomType']==100.00)?'Double Room':'');?>"></td>
    </tr>  



    <tr>
      <td>Total:</td>
      <td><input type="text" name="" readonly="" value="<?=(($test['RoomType']==50.00)?'50.00':'');
        echo (($test['RoomType']==150.00)?'150.00':'');
        echo (($test['RoomType']==100.00)?'100.00':'');?>"></td>
    </tr>  



  </table>
<?php endwhile;?>

<h1>__________________________________________________________</h1>
<h1>Thank You !!</h1>
</center>
</body>



</html>


<script>
  window.onload = function() { window.print(); window.location="update.php";}
  
</script>