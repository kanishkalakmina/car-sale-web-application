
<?php

//if upload button is pressed
if(isset($_POST['submit']))
{

	
	// connect to the database
	
	$db = mysqli_connect("localhost","root","","rent_db");
	
	//det all the submitted data from the form
	$mynic = "145250";
	$mypas = "lakmina";

	$Snic = $_POST['Snic'];
	$Spassword = $_POST['Spassword'];
//	$rem = $_POST['cbox'];
	
	if($Snic == $mynic && $Spassword == $mypas)
	{
		header("location: admin_panel.php");
	}
	
	else if($Snic == "123" && $Spassword == "123")
	{
		
	//	if(isset($_POST['cbox']))
	//	{
	//		setcookie('Snic',$Snic,time() + 86400); //one day
	//		session_start();
	//		$_SESSION['Snic'] = $Snic;
			header("location: sell_final_car.php");
			
		}
		
	
	else{
		header("location: sell_log_final.php");
			echo "invalid password";
	}
}
	
	

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>loginl</title>
	<link href="sell_log_final_1.css" rel="stylesheet">
	
</head>

<body>
<form id="id1" name="form3" method="post" action="sell_log_final.php"  enctype="multipart/form-data">
	
<div class="log-container" align="center"><br><br>
	<img src="log_in/google-png-icons.png" alt="" height="80" width="80" class="img-pro">
		<div class="overlay-2"><br>
			<h1> Sign In</h1>
			
			
			
			<table width="287" height="96" border="0" align="center" class="logtab">
  <tbody>
    <tr>
      <td>
		 <input class="input--style-1" type="text" placeholder="NIC" name="Snic" size="50">
		</td>
    </tr>
    <tr>
     
      <td><input class="input--style-1" type="password" placeholder="PASSWORD" name="Spassword" size="50">
		</td>
    </tr>
	
  </tbody>
</table>

		<br><input name="submit" type="submit" class="button-log" onClick="">	<br>
			<div class="remember">
			<input type="checkbox" id="cbox" name="cbox"><p1>Remember me &nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;<a href="" class="log-a">Forgot Password</a>  </p1>
				
				<br><br>
				<p1 class="p2font"><b>Don't have a account?</b>   <a href="regis_ex.php" class="log-b">REGISTER HERE</a>  </p1><br><br><br>
				
				
				
				
			</div>
  </div>
</div>
	</form>
</body>
</html>
