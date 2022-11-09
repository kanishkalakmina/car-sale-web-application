
<?php

//if upload button is pressed
if(isset($_POST['submit']))
{

	
	// connect to the database
	
	$db = mysqli_connect("localhost","root","","rent_db");
	
	//det all the submitted data from the form
	
	$name = $_POST['name'];
	$nic = $_POST['nic'];
	$birthday = $_POST['birthday'];
	$city = $_POST['city'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$conpassword = $_POST['conpassword'];
	
	$sql = "INSERT INTO register (name,nic,birthday,city,email,telephone,address,password,conpassword) VALUES ('".$name."','".$nic."','".$birthday."','".$city."','".$email."','".$telephone."','".$address."','".$password."','".$conpassword."')";
	
	$result = mysqli_query($db,$sql);//store the submitted data in to database table
	if($result)
	{
		header("location: index.php");
	}
	else{
		echo "error";
	}
	
	
	
	
}




?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>registeration</title>
	<link href="ee.css" rel="stylesheet">
	
	
	<script type="text/javascript">
		
		
		function validatename
		
		{
			var name = document.getElementById("nametxt").value;
			if((name == "")||(name == null))
			{
				alert("Please enter your name");
				return false;
			}
				return true;
		}
	

		
		
		function validatenic
		{
			var nic = document.getElementById("nictxt").value;
			if((nic == "")||(nic == null))
			{
				alert("Please enter your nic");
				return false;
			}
				return true;
		}
		
		
		function validatebirthday
		{
			var birth = document.getElementById("birthtxt").value;
			if((birth== "")||(birth == null))
			{
				alert("Please enter your birthday");
				return false;
			}
				return true;
		}
		
		function validategender
		{
			var gender = document.getElementById("gendertxt").value;
			if((gender == "")||(gender == null))
			{
				alert("Please select your gender");
				return false;
			}
				return true;
			
		}
		
		function validatetype
		{
			var type = document.getElementById("typetxt").value;
			if((type == "")||(type == null))
			{
				alert("Please select your type");
				return false;
			}
				return true;
			
		}
		
		function validatecity
		{
			var city = document.getElementById("citytxt").value;
			if((city == "")||(city == null))
			{
				alert("Please enter your current city");
				return false;
			}
				return true;
		}
		
		
		function validateEmail()
		{
			var email = document.getElementById("emailtxt").value;
			var at = email.indexOf("@");
			var dt = email.lastIndexOf(".");
			var len = email.length;
	
			if((at < 2)||(dt-at < 2)||(len-dt < 2)||(email==null))
			{
				alert("Please enter a valid email address");
				return false;
			}
			return true;
		}
		
	function validateContact()
	{
		var cno = document.getElementById("teltxt").value;
		if((isNaN(cno))||(cno.length != 10))
		{
		alert("Please enter a valid contact number");
		return false;
		}
		return true;
	}
	
	function validateaddress
	{
				
		var add = document.getElementById("addresstxt").value;
			if((add == "")||(add == null))
			{
				alert("Please enter your address");
				return false;
			}
				return true;
	}
			
	function validatePassword()
	{
		var pwd = document.getElementById("passwordtxt").value;
		var cpwd = document.getElementById("conpasswordtxt").value;
		if((pwd.length < 1)||( pwd != cpwd))
			{
		alert("Please enter a correct Password and enter the to Confirm password");
		return false;
			}
		return true;
	}
	
		
		function Validate()
{
	if(validatename()&&validatenic()&&validatebirthday()&&validategender()&&validatetype()&&validatecity()&&validateEmail()&&validateContact()&&validateaddress()&&validatePassword)
	{
		alert("Registration is completed");
	}
	else
	{
		event.preventDefault();
	}
}

		
		</script>
	
	
	
</head>

<body>
	
	
	
	
<form id="id1" name="form1" method="post" action="regis_ex.php"  enctype="multipart/form-data">	
	
<div class="container" align="center">

	
	<div class="overlay">
	  <table width="435" height="798" border="0" class="table-1" align="center" size="50">
	    <tbody><h1 class="h1fnt">REGISTER</h1><h4 class="h4up">Create your account, It's free and only takes a minute </h4>
	      <tr>
			  <td width="348">
	        <input class="input--style-1" type="text" placeholder="NAME" name="name" size="50"></td>
          </tr>
	      <tr>
	        <td>
			  <input class="input--style-1" type="text" placeholder="NIC" name="nic" size="50">
		    </td>
          </tr>
			  <tr>
	        <td>
							  <div class="input-group">
								
                                    <input class="input--style-1" type="text" placeholder="BIRTHDATE " name="birthday" size="50" align="">
								  
								  <!--  	<input class="" type="date" name="date">-->
                                   
              </div>
			  </td>
          </tr>
		
	      <tr>
	        <td>
			  <input class="input--style-1" type="text" placeholder="CITY" name="city" size="50">
		    </td>
          </tr>
	      <tr>
	        <td>
				<input class="input--style-1" type="email" placeholder="EMAIL" name="email" size="50">
		    </td>
          </tr>
	      <tr>
	        <td>
			  <input class="input--style-1" type="text" placeholder="TELEPHONE" name="telephone" size="50">
		    </td>
          </tr>
	      <tr>
	        <td><input class="input--style-1" type="text" placeholder="ADDRESS" name="address" size="50"></td>
		
        </tr>
	     
	      <tr>
	        <td><input class="input--style-1" type="password" placeholder="PASSWORD" name="password" size="50"></td>
          </tr>
			  <tr>
	        <td> <input class="input--style-1" type="password" placeholder="CONFIRM-PASSWORD" name="conpassword" size="50"></td>
          </tr>
			
			<tr>
				<td>
					<div class=" chk">
		<input type="checkbox"><p1>I accept the <a href="" class="tof">Terms of Use</a> and <a href="" class="tof">Privacy Policy</a></p1>
			</div>
				</td>
			</tr>
        </tbody>
      </table>
		
	
		 
		<br>
		
		<input name="submit" type="submit" class="button button1" onClick="validate()" id="submit">
		
	
		
	  <input type="reset" class="button button1"><br><br>
		
		<p1 class="p3font"><b>already have an account?</b>   <a href="w/final_log.php" class="log-b">SIGN UP</a>  </p1><br><br><br><hr>
  </div>
	
</div>
</form>

</body>
	

	
</html>