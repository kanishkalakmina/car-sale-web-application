
<?php

$msg = "";
//if upload button is pressed
if(isset($_POST['upload']))
{
	//parth to store the upload images
	$target = "images/".basename($_FILES['image']['name']);
	
	// connect to the database
	
	$db = mysqli_connect("localhost","root","","rent_db");
	
	//det all the submitted data from the form
	$image = $_FILES['image']['name'];
	$text = $_POST['text'];
	
	$sql = "INSERT INTO images (image, text) VALUES ('$image','$text')";
	mysqli_query($db,$sql);//store the submitted data in to database table:images
	
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		$msg = "uploaded";
	}
	else{
		$msg = "error";
	}
	
	
	
}




?>


<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="rent_car_final.css" rel="stylesheet">
		<script type="text/javascript">
		
		function validateup
		{
			var upload = document.getElementById("image").value;
			if((upload=="")|| (upload == null))
				{
					return false;
				}
			else 
				{
					return true;
				}
		}
		
	function validatetxt
		{
			var uptxt = document.getElementById("txtarea").value;
			if((uptxt=="")||(uptxt==null))
				{
					return false;
				}
			else {
				return true;
			}
		}
		
		function validate
		{
			if(validatetxt()&& validateup())
				{
					alert("registration completed");
				}
			else{
				event.preventDefault();
			}
		}
		
		</script>
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
				<li><a href = "rent_car_final.php"> rent car </a></li>
				<li><a href = "sell_log_final.php"> sell car </a></li>
				<li><a href = "regis_ex.php"> register </a></li>
			</ul>
		</nav>
	
	</div>

<body>
	<br><br><br>
	<marquee><b><h2><i>ADVERTISEMENTS&nbsp;&nbsp;&nbsp;&nbsp; AVAILABLE&nbsp;&nbsp;&nbsp;&nbsp; HERE (LKR 5000 + TAX per advertisement per week....First 5 are free...) &nbsp;&nbsp;/&nbsp;&nbsp;CONTACT INFO: 0774592545 / 0815715388&nbsp;&nbsp;/&nbsp;&nbsp;EMAIL: k.l.egodawattha@gmail.com</i></h2></b></marquee>
<h1 align="center" class="welcome">RENT CAR</h1>
	
	
	<div class="barr-1">		
<div id="content">
	 <?php
	
	$db = mysqli_connect("localhost","root","","rent_db");
	$sql = "SELECT * FROM images";
	$result = mysqli_query($db,$sql);
	while($row = mysqli_fetch_array($result))
	{
		echo "<div id='img_div'>";
		echo "<img src='images/".$row['image']."'>";
		echo "<p>".$row['text']."</p>";
		echo "</div>";
		echo "<div id = 'cart'>";
		echo "<p><button>Add to favourite</button></p>";
		echo "</div>";
		
	}
	
	
	?>
	<form method="post" action="rent_car_final.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
		<div>
			<input type="file" name="image" id="image">
		
		</div>
		<div>
		<textarea name="text" cols="40" rows="4" placeholder="Enter hiring details..." id="txtarea" class="textarea-1">
(i)-Brand:
(ii)-Model:
(iii)-price:
(iv)-engine capacity:
(v)-color:
(vi)-fuel type:
(vii)-contact info:
(viii)-Transmission:
(ix)-Mileage:
(x)-condition:
(xi-)description:</textarea>
			<div>
			<input type="submit" name="upload" value="UPLOAD" id="upload" onClick="validate()" class="uploadfto">
			</div>
		
		</div>
	 
	
	</form>
	
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