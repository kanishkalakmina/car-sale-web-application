<?php
$db = mysqli_connect("localhost","root","","rent_db");

$sql = "SELECT * FROM register";

if(isset($_POST['delete']))
{
	
	if(mysql_num_rows($sql)>0)
	{
		$sql = mysqli_query("DELETE * FROM register");
	}
	else{
		echo "error";
	}
}


?>
<?php


//if upload button is pressed
if(isset($_POST['supload']))
{
	//parth to store the upload images
	$target = "special/".basename($_FILES['image']['name']);
	
	// connect to the database
	
	$db = mysqli_connect("localhost","root","","rent_db");
	
	//det all the submitted data from the form
	$image = $_FILES['image']['name'];
	
	
	$sql = "INSERT INTO special_final (image) VALUES ('$image')";
	
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
	
	<li><a href="index.php">Home</a></li>
	<li><a href="buy_car_final.php">buy car</a></li>
	<li><a href="rent_car_final.php">rent car</a></li>
	<li><a href="sell_final_car.php">sell car</a></li>
	<li><a href="regis_ex.php">register</a></li>
</head>

<body>
	<h1 align="center"><u>Register details</u></h1>
	
	<table class="table_bo" border="1px" align="center">
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>Nic</th>
		<th>Birthday</th>
		<th>City</th>
		<th>Email</th>
		<th>Telephone</th>
		<th>Address</th>
		<th>Password</th>
		<th>Confirm-Password</th>
		<th>delete</th>
	
		
		</tr>
		<?php
		$no = 1;
		$result = mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($result))
		{?>
		<tr>
		<form action="" method="post" role="form">
			<td><?php echo $no; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['nic']; ?></td>
			<td><?php echo $row['birthday']; ?></td>
			<td><?php echo $row['city']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['telephone']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td><?php echo $row['password']; ?></td>
			<td><?php echo $row['conpassword']; ?></td>
			<td>
			<input type="submit" name="delete" class="btn-del" value="DELETE">
			</td>
			
			</form>
		
		</tr>
	
		<?php $no++; }
		
			?>
		
	
	</table>
	<br>
	<hr><hr><hr>
	
	<h1 align="center"><u>Sell details</u></h1>
	
	<table align="center" border="1px">
	<tr>
		<th>No</th>
		<th>ID</th>
		<th>Picture</th>
		<th>Details</th>
		<th>Delete</th>
		
		
		</tr>
		<?php
		$do = 1;
		$db = mysqli_connect("localhost","root","","rent_db");
		$sql = "SELECT * FROM sell_images";
		$result = mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($result))
		{?>
		<tr>
		<form action="" method="post" role="form">
			<td><?php echo $do; ?></td>
			<td><?php echo "<div id='img_div'>"; ?></td>
			<td><?php echo "<img src='sell_images/".$row['image']."'>"; ?></td>
			<td><?php echo "<p>".$row['text']."</p>"; ?></td>
			<td>
			<input type=submit name="delete" class="sbtn-del" value="DELETE">
			</td>
			</form>
		
		</tr>
	
		<?php $do++; }
		
			?>
	</table>
	<br>
	<hr><hr><hr>
	<h1 align="center"><u>Rent details</u></h1>
	<table align="center" border="1px">
	<tr>
		<th>No</th>
		<th>ID</th>
		<th>Picture</th>
		<th>Details</th>
		<th>Delete</th>
		
		
		</tr>
		<?php
		$go = 1;
		$db = mysqli_connect("localhost","root","","rent_db");
		$sql = "SELECT * FROM images";
		$results = mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($results))
		{?>
		<tr>
		<form action="" method="post" role="form">
			<td><?php echo $go; ?></td>
			<td><?php echo "<div id='img_div'>"; ?></td>
			<td><?php echo "<img src='images/".$row['image']."'>"; ?></td>
			<td><?php echo "<p>".$row['text']."</p>"; ?></td>
			<td>
			<input type=submit name="delete" class="sbtn-del" value="DELETE">
			</td>
			</form>
		
		</tr>
	
		<?php $go++; }
		
			?>
	</table>
	<br>
	<hr><hr><hr>
	<h1 align="center"><u>Special offers</u></h1>
	
	
	<form method="post" action="admin_panel.php" enctype="multipart/form-data" >
		<input type="hidden" name="size" value="1000000">
		<div>
			<input type="file" name="image" id="image" align=""> //else error change image as pic
		
		</div>
		<div>
			<div>
			<input type="submit" name="supload" value="UPLOAD" id="upload"class="uploadfto">
			</div>
		
		</div>
	
	</form>
	<table align="center" border="1px">
	<tr>
		<th>No</th>
		<th>ID</th>
		<th>Picture</th>
		
		<th>Delete</th>
		
		
		</tr>
		<?php
		$to = 1;
		$db = mysqli_connect("localhost","root","","rent_db");
		$sql = "SELECT * FROM special_final";
		$resultss = mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($resultss))
		{?>
		<tr>
		<form action="" method="post" role="form">
			<td><?php echo $go; ?></td>
			<td><?php echo "<div id='img_div'>";?></td>
			<td><?php echo "<img src='special/".$row['image']."'>"; ?></td>
			
			<td>
			<input type=submit name="delete" class="sbtn-del" value="DELETE">
			</td>
			</form>
		
		</tr>
	
		<?php $to++; }
		
			?>
	</table>
	
</body>
</html>