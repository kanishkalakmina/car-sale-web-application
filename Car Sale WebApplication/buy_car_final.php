<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<link href="rent_car_final.css" rel="stylesheet">
	
	<style>
	
		nav ul li a{
			line-height: 60px;
			color: aliceblue;
			padding: 12px 30px;
			text-decoration: none;
			text-transform: uppercase;
			font-size: 15px;
			font-weight: bold;
		}
		nav ul li a:hover{
			background:#717171;
			border-radius: 4px
		}
		

	</style>

	<div class="wrap">
		<nav>
			<b class="hdtop">VRSB AUTO</b>
			<ul>
				<li><a href = "index.php" class="active"> home </a></li>
				<li><a href = "buy_car_final.php"> buy car </a></li>
				<li><a href = "rent_log_final.php"> rent car </a></li>
				<li><a href = "sell_log_final.php"> sell car </a></li>
				<li><a href = "regis_ex.php"> register </a></li>
			</ul>
		</nav>
	
	</div>

<body>
	<br><br><br>
	
	<marquee><b><h2><i>ADVERTISEMENTS&nbsp;&nbsp;&nbsp;&nbsp; AVAILABLE&nbsp;&nbsp;&nbsp;&nbsp; HERE (LKR 5000 + TAX per advertisement per week....First 5 are free...) &nbsp;&nbsp;/&nbsp;&nbsp;CONTACT INFO: 0774592545 / 0815715388&nbsp;&nbsp;/&nbsp;&nbsp;EMAIL: k.l.egodawattha@gmail.com</i></h2></b></marquee>
<h1 align="center" class="welcome">FIND YOUR DREAM VEHICAL</h1>
	
	
	<div class="barr-1">		
<div id="content">
	 <?php
	
	$db = mysqli_connect("localhost","root","","rent_db");
	$sql = "SELECT * FROM sell_images";
	$result = mysqli_query($db,$sql);
	while($row = mysqli_fetch_array($result))
	{
		echo "<div id='img_div'>";
		echo "<img src='sell_images/".$row['image']."'>";
		echo "<p>".$row['text']."</p>";
		
		echo "</div>";
		echo "<div id = 'cart'>";
		echo "<p><button>Add to favourite</button></p>";
		echo "</div>";
		
	}
	
	
	?>
	
</div>
	</div>

</body>
	<footer>
		
		
	  <div class="barr-5"><br>	   
      <h3 align="center">CONTACT INFO</h3>
			  
      <p><B>ADDRESS</B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 800/3/D Nawalapitiya Road jayamalapura, Gampola</p>
		   <p><b>EMAIL</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : k.l.egodawattha@gmail.com</p>
		   <p><b>TELEPHONE</b> &nbsp;&nbsp;&nbsp;&nbsp;: +94 814713577</p>
		
		  
		  <P align="center">Copyright © 2020 VRSB AUTO, All Rights Reserved.</P><br>

     
    </div>
		   
		
		
		</div>
	</footer>
</html>