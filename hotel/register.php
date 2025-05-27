  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalyear";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed".mysqli_connect_error());

  }



 if(isset($_POST['register']))
    {
    	$Name = ($_POST['username']);
    	$Email = ($_POST['email']);
    	$Phone = ($_POST['pn']);
    	$Password = ($_POST['pass']);
    	$Confirm = ($_POST['cpass']);

    	

      $query2="SELECT * from register2 where Name = '$Name'";
        $result2 = $conn->query($query2);
    $count2 = mysqli_num_rows($result2);
 
        
   
 if(empty($Name) || empty($Email) || empty($Phone) || empty($Password) || empty($Confirm))
    {
    echo " <script> alert('Please fill up all of the data first before insert');window.location = 'tesdt.html';</script>" ;
    }
   else if($count2 > 0){
  
    echo "<script> alert('The Name And Email Have Been Use. '); window.location = 'tesdt.html';</script>";
    }

else if (strlen($Password) < 2){
 echo " <script> alert('Password Must Be At Least 5 Character, Contain At Leasr 1 Number, 1 Capital Letter ');window.location = 'tesdt.html';</script>" ;
}

  else if(!preg_match("#[0-9]+#",$Password)) {
        echo " <script> alert('Password Must Be At Least 5 Character, Contain At Leasr 1 Number, 1 Capital Letter ');window.location = 'tesdt.html';</script>" ;

    }
    else if(!preg_match("#[A-Z]+#",$Password)) {
       echo " <script> alert('Password Must Be At Least 5 Character, Contain At Leasr 1 Number, 1 Capital Letter ');window.location = 'tesdt.html';</script>" ;
    }
    else if(!preg_match("#[a-z]+#",$Password)) {
        echo " <script> alert('Password Must Be At Least 5 Character, Contain At Leasr 1 Number, 1 Capital Letter ');window.location = 'tesdt.html';</script>" ;
}


  else  if ($Confirm != $Password)
  {
     echo " <script> alert('Incorrect Confirm Password!!!');window.location = 'tesdt.html';</script>" ;

  }





	else{

		$sql = "INSERT INTO register2 (Name, Email, Phone, Password, ConfirmPassword)VALUES ('$Name', '$Email', '$Phone','$Password', '$Confirm' )";
		$result2 = $conn-> query($sql);
		 echo " <script> alert('Register Succesful!!!');window.location = 'tesdt.html';</script>" ;

	}

}
?>