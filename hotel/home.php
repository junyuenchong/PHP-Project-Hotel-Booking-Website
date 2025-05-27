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

.header {
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
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

table, td, th {
text-align: center;
}

table {
  border-collapse: collapse;
  width: 100%;
}
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}



</style>

<header>
   <a id="logo"><img src="https://st2.depositphotos.com/5943796/11382/v/950/depositphotos_113828236-stock-illustration-initial-letter-ns-red-swoosh.jpg" width="150" height="100"></a>
  <nav>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="booking.php">Booking Hotel</a></li>
      <li><a href="about.php">About us</a></li>
       <li><a href="booking.php?logout=1">Logout</a></li>
       
      
    </ul>
  </nav>
</header>
<body><br><br><br><br><br><br>


	<center>
		<div class='homeTitle'>
      <br><br><br><br>
      <h1><font color="black" size="100%">Welcome to NS Hotel</font></h1>
       </div><img width='100%' height='100%' src='https://previews.123rf.com/images/kwangmoo/kwangmoo1610/kwangmoo161002567/63854383-wood-table-with-hotel-reception-lobby-blur-background.jpg'> 

       <br><br>
      <h1>____________________________________________________________</h1> 
       <h1>The purpose of the hotel.</h1>
       <h1>____________________________________________________________</h1> 
       <p><b>1. For things to change, I must change</b></p>
       <p><b>2. If it is To Be, it is Up to Me.</b></p>
       <p><b>3. If you are not serving the customer, your job is to serve somebody who is.</b></p>
       <p><b>4. Every call is the first call of the day.</b></p>
       <p><b>5. YOU are the hotel because YOU are the person who is going to help fill his or her needs.</b></p>

     <p><b></b></p>
  
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://static01.nyt.com/images/2018/12/16/travel/16hotellobbies1/merlin_147457776_a110018b-a7ab-4646-a836-3e8d628d74a3-articleLarge.jpg?quality=75&auto=webp&disable=upscale">
      <img src="https://static01.nyt.com/images/2018/12/16/travel/16hotellobbies1/merlin_147457776_a110018b-a7ab-4646-a836-3e8d628d74a3-articleLarge.jpg?quality=75&auto=webp&disable=upscale" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Hotel Lobby</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://s-ec.bstatic.com/images/hotel/max1024x768/731/73118462.jpg">
      <img src="https://s-ec.bstatic.com/images/hotel/max1024x768/731/73118462.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Hotel Room</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="http://www.jerusalemshots.com/b/inbal/IMG_3820.jpg">
      <img src="http://www.jerusalemshots.com/b/inbal/IMG_3820.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Hotel Canteen</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://velocity.sunwayhotels.com/application/files/thumbnails/small/5615/0883/9904/15._SVKL_day_shot_for_website.jpg">
      <img src= "https://velocity.sunwayhotels.com/application/files/thumbnails/small/5615/0883/9904/15._SVKL_day_shot_for_website.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Hotel Swimming Pool</div>
  </div>
</div>
<br>
  <h1>_____________________________________________________________________</h1> 
<p></p>
<p></p>
<p></p>


                    <div class='legality'><br><br><p>NS Hotel . Copyright Office website</p></div>
                    <br><br>
                  </center>
                     
		</body>
	 
	</html>
