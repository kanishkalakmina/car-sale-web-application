<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="indexx" rel="stylesheet">
	
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
			background: #08F0B3;
			border-radius: 4px
		}
		

	</style>
</head>

	<div class="wrap">
		<nav>
			<a href=""><img class= "logo" src="Home images/451786.jpg" alt=""></a><b class="hdtop">VRSB AUTO</b>
			<ul>
				<li><a href = "#" class="active"> home </a></li>
				<li><a href = "buy_car_final.php"> buy car </a></li>
				<li><a href = "rent_log_final.php"> rent car </a></li>
				<li><a href = "sell_log_final.php"> sell car </a></li>
				<li><a href = "regis_ex.php"> register </a></li>
			</ul>
		</nav>
	
	</div>

<body>
	<br><br><br>
<h1 align="center" class="welcome">WELCOME TO VRSB AUTO SERVICE</h1>
	
	
	
	
	
<img src="photo slider/22.jpg" alt="car" style="width:100%;">
	
	<marquee><b><h2><i>ADVERTISEMENTS&nbsp;&nbsp;&nbsp;&nbsp; AVAILABLE&nbsp;&nbsp;&nbsp;&nbsp; HERE (LKR 5000 + TAX per advertisement per week....First 5 are free...) &nbsp;&nbsp;/&nbsp;&nbsp;CONTACT INFO: 0774592545 / 0815715388&nbsp;&nbsp;/&nbsp;&nbsp;EMAIL: k.l.egodawattha@gmail.com</i></h2></b></marquee>
	
 <h2 align="center"><b>OUR SPECIALS OFFERS</b></h2>
	
	<div align="center">
	  <?php
	
	$db = mysqli_connect("localhost","root","","rent_db");
	$sql = "SELECT * FROM special_final";
	$results = mysqli_query($db,$sql);
	while($row = mysqli_fetch_array($results))
	{
		echo "<div id='img_div'>";
		echo "<img src='special/".$row['image']."'>";
		
		
		
	}
	
	
	?>
	</div>

</body>
	<footer>
		
		<br><br><br>
	 <h2 align="center" class="whyc"><b> WHY CHOOSE US</b></h2>
	<div class="barr-3">	
	<hr>
	
	
		
		
		 <div class="foot">
			  <h4 align="center"><b>VALUE ADDED SERVICE</b></h4>
			  <p class="para" align="center">Every brand new vehicle you purchase from us has a Two year warranty or money-back gurantee.</p></div>
		<hr> 
		
	</div>
	
	
	
	<div class="barr-4">	
	<hr>
		
		 <div class="foot">
			  <h4 align="center">DAILY UPDATED NEW VEHICLES</h4>
			  <p class="para" align="center">Everyday, our inventory is filled with a wide range of brand new vehicles. Making it easy to find your ideal vehicle</p></div>
		<hr> 
		
	</div>
	
		
	</div>
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