<?php
session_start();//to maintain the information essy ek hi bar likhty hai code meh.
	if(!empty($_POST["em"]) and !empty($_POST["pwd"]) and !empty($_POST["g-recaptcha-response"]) )
	{
		$email=$_POST["em"];
		$pass=$_POST["pwd"];
		$status=0; //declared as a flag to determine the email passwrd enter details
		include "config.php";
		$q="select * from signup where emailid='$email'and password='$pass'";// emailid and password are taken form sql db
		$z=mysqli_query($con,$q);// if true toh $z meh aa jayegi and get succeed if there is no problem in query
		while($rows=mysqli_fetch_array($z))//db meh data is stored in array toh usko fetch krny ka fn hai yeh aur $z ko jahan b email or passwrd milyga toh voh while loop meh jayega
		{
			$status++;
			$flag=$rows["accountstatus"];
			if($flag=="Block")
			{
				echo"<script>alert('Your Account is blocked by admin contact +918628067140');</script>";

			}
			else if($flag=="unblock")
			{
				$_SESSION["username"]=$email;//$_SESSION is php superglobal variable and [""] meh koi b name aa skta hai ab jb session variable $email k equal hoga or user ki id unblock hogi tbi voh welcome.php page py redirect hoga
				echo"<script>window.location='welcome.php';</script>";
			}
			
			
		}
		if($status==0)
		{	
			//admin id ka code
			$adminid=$_POST["em"];
			$adminpassword=$_POST["pwd"];
			$ql="select * from admin where adminid='$adminid' and password='$adminpassword'";// admin is the second table under myproject db jismy humny phly sy username or passwrd store krwaya hua hai
			$zl=mysqli_query($con,$ql);
			while ($rows=mysqli_fetch_array($zl)) 
			{
				$status++;
				$_SESSION["adminid"]=$adminid;//adminid "" walla session bna hai jo aage adminwelcome page meh use hoga as security session
				//echo"<script>window.location='adminwelcome.php';</script>";
				echo"<script>window.location='bsadminwelcome.php';</script>";
			}
				if($status==0)
				{
					echo"<script>alert('Invalid Login details');</script>";
				}

		}
	}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" text="text/css" href="main.css">
	<!--recaptcha ki head file-->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<div class="container">
	<form action="index.php" method="post">

		<div class="header">
			<h2>Please Login</h2>
		</div>
	
	<div class="input-group">
			<label>Emailid:</label>
			<input type="text" name="em" placeholder="enter email address...">
    </div>

    <div class="input-group">
			<label>Password:</label>
			<input type="password" name="pwd" id="maskedpassword" placeholder="enter password...">
			
	</div>
	<div>
		<input style="margin-left: 20px; margin-bottom: 20px;" type="checkbox" name="pwd" id="showpassword"/> Show Password
			
	</div>

	

	<!--rechapta ka code styling work nhi kr ri captcha py-->	
	<div style="margin-left: 20px; max-width: auto;" class="g-recaptcha" data-sitekey="6LdfNmAUAAAAADSk4rGfskqq5L31j1eRTCSUZlyx">	
	</div>

	<!--<input type="submit" value="Login">&nbsp;&nbsp;-->
	<div class="input-group">
	<button class="btn success">Login</button>
    </div>
		
	<div class="input-group">
	<a href="signup.php">New User?</a>
    
	<a style="margin-left: 5px;" href="forgotpassword.php">Forgot?</a>
    </div>
</form>
 </div>


<!-- show password ka code using jquery-->
<!-- adding jquery in your file-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			$(function(){
				$("#showpassword").click(function(){
					$("#maskedpassword").attr('type', $(this).is(':checked') ? 'text' : 'password'); //jQuery attr() method is used to set/change attribute values.

				});
		});
		</script>
</body>
</html>



