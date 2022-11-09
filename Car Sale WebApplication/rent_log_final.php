<?php

//if upload button is pressed
if(isset($_POST['submit']))
{

	
	// connect to the database
	
	$db = mysqli_connect("localhost","root","","rent_db");
	
	//det all the submitted data from the form
	
/*
	$Rnic = $_POST['Rnic'];
	$Rpassword = $_POST['Rpassword'];
	
	
	
	$sql = "SELECT * FROM  register WHERE nic = '".$Rnic."' AND password = '".$Rpassword."'";
	
	$result = mysqli_query($db,$sql);
	
	if(mysql_num_rows($result)>0) // error
	{
		header("location: index.php");
		return true;
	}
	else{
		mysqli_close($con);
		return false;
	}
	
	*/
	$mynic = "145250";
	$mypas = "lakmina";
	$Rnic = $_POST['Rnic'];
	$Rpassword = $_POST['Rpassword'];
	
	if($Rnic == $mynic && $Rpassword == $mypas)
	{
		header("location: admin_panel.php");
	}
	
	else if($Rnic == "123" && $Rpassword == "123")
	{
		header("location: rent_car_final.php");
	}
	else{
		header("location: rent_log_final");
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
	
	<script type="text/javascript">
		
		function validateRnic
		
		{
			var Rnic = document.getElementById("nic").value;
			if((Rnic == "")||(Rnic == null))
			{
				alert("Please enter your nic");
				return false;
			}
				return true;
		}
		function validateRpass
		
		{
			var Rpass = document.getElementById("pass").value;
			if((Rpass == "")||(Rpass == null))
			{
				alert("Please enter your password");
				return false;
			}
				return true;
		}
				
		function Validate()
{
	if(validatename()&&validateRpass()&&validateRnic())
	{
		alert("signin is completed");
	}
	else
	{
		event.preventDefault();
	}
}

	
	
		</script>
	
</head>

<body>
<form id="id1" name="form2" method="post" action="rent_log_final.php"  enctype="multipart/form-data">	
	
<div class="log-container" align="center"><br><br>
	<img src="log_in/google-png-icons.png" alt="" height="80" width="80" class="img-pro">
		<div class="overlay-2"><br>
			<h1> Sign In</h1>
			
			
			
			<table width="287" height="96" border="0" align="center" class="logtab">
  <tbody>
    <tr>
      <td>
		 <input class="input--style-1" type="text" placeholder="NIC" name="Rnic" size="50" id="nic">
		</td>
    </tr>
    <tr>
     
      <td><input class="input--style-1" type="password" placeholder="PASSWORD" name="Rpassword" size="50" id="pass">
		</td>
    </tr>
	
  </tbody>
</table>

		<br><input name="submit" type="submit" class="button-log" onClick="validate()" id="submit">	<br>
			<div class="remember">
			<input type="checkbox"><p1>Remember me &nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;<a href="" class="log-a">Forgot Password</a>  </p1>
				
				<br><br>
				<p1 class="p2font"><b>Don't have a account?</b>   <a href="regis_ex.php" class="log-b">REGISTER HERE</a>  </p1><br><br><br>
				
				
				
				
			</div>
  </div>
</div>
	</form>
</body>
</html>
