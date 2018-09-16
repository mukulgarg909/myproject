	<!DOCTYPE html>
	<html>
	<head>
		<title>Sign Up</title>
		<link rel="stylesheet" text="text/css" href="index.css">
		<!-- <style>
				.fault {color: #FF0000;}
		</style> -->
	</head>
	<body>
<?php
if(!empty($_POST["nm"]) and !empty($_POST["em"]) and !empty($_POST["db"]) and !empty($_POST["gen"]) and !empty($_POST["mb"])  and !empty($_POST["pwd"]) and !empty($_POST["cpwd"]) and !empty($_POST["ads"]))
    {

    	$name=$_POST["nm"]; // boxes giving values to variable and em nm are the name of text fields boxes 
    	$emailid=$_POST["em"];
    	$dob=$_POST["db"];
    	$gen=$_POST["gen"]; // radio btn meh wrap krky same name hona chahiyay tbi ek select hoga male ya female meh sy
    	$mobile=$_POST["mb"];
    	//$mobErr="";
    	$password=$_POST["pwd"];
    	$cpassword=$_POST["cpwd"];
    	$address=$_POST["ads"];

    	//validation for number

    		if (!preg_match("/^[+][0-9]{2}-[0-9]{10}$/", $mobile))
      			{
         			 $mobErr = "<font color='red'><b>* Incorrect Mobile Format</b></font>";
         			 echo "<script>alert('Error signing in');</script>";
    			     echo "<script>window.location='signup.php';</script";
        		}

        	else
		    	{
		    		//$mobErr= "<font color='red'><b>* Enter this field</b></font>";
         			 
		    	}
		    	
		if($password==$cpassword)
    	{
    		include "config.php"; // including the connection page 
    		$q="insert into signup(username,emailid,dob,gender,password, mobileno,address,date,time,accountstatus)values('$name','$emailid','$dob','$gen','$password','$mobile','$address',CURRENT_DATE,CURRENT_TIME,'unblock')"; //username is stored in $name


    		if(mysqli_query($con,$q)==true) //$q walli query $con db meh jayegi if true=true then it has been stored in the db
    		{
    			echo "<script>alert('sign in successfuly');</script>";
    			echo "<script>window.location='index.php';</script"; //window.location to redirect the page we cant use header of php browser cant understand
			}
			else
			{
				echo"<script>alert('This email id is already used plz enter unique emailid');</script>"; // semicolon js syntax declaration
			}
    	}
        else
    	{
    		$error="<font color='red'><b>Password not matched</b></font>";// echo kregy toh voh upr print hoga therefore variable meh dia taki box k sath print ho
    		
    	}
    }
?>


<!--Designing portion-->
	<div>
	
		<form action="signup.php" method="post">
			<!--radio meh dono fields k nam same hone chahiye tbi ek select hoga male ya female in $_POST[""] meh i.e $_POST[""] is used to collect form data by creating a associative array array(key => value, ...) where key is the name of form control and value are the input data from user i.e done dynamically-->
			<div class="header">
				<h2 style="margin-bottom: 30px;">Register</h2>
			</div>
			<div class="input-group">
				Name <input  type="text" required name="nm" placeholder="Enter name...">
			</div>
			<div class="input-group">
				Email id <input type="email" required name="em" placeholder="example email@gmail.com...">
			</div>
			<div class="input-group">
				D.O.B <input type="date" required name="db" >
			</div>
			<div>
				<p style="margin-left: 20px; margin-bottom: 5px;">Gender:</p>
				<input style="margin-left: 20px;" type="radio" name="gen" value="Male">Male
				<input style="margin-left: 10px;" type="radio" name="gen" value="Female">Female
				<input style="margin-left: 10px;" type="radio" name="gen" value="Female">Others
			</div>
			<div class="input-group">
			Mobile No <input type="text" required name="mb"  placeholder="Enter mobile no +91-"><?php if(isset($mobErr)){echo $mobErr;} ?>
			<!--<span class="fault">* <?php //echo $mobErr; ?></span>-->
			</div>
			<div class="input-group">
				Password <input type="password" required name="pwd" placeholder="Enter password...">
			</div>
			<div class="input-group">
				Confirm Password <input type="password" required name="cpwd" placeholder="Enter password again...">
				<?php if(isset($error)){echo $error;} ?>
			</div>
			
		    <div class="input-group">
				Address <textarea cols="35" rows="10" required name="ads" placeholder="Enter your address..."></textarea>
			</div>
			<div>
			<!--<input type="submit" value="Signup"/>&nbsp;&nbsp;-->
				<button class="btn success">Signup</button>
				<button class="btn success"><a style="text-decoration: none; color:white;" href="index.php" >Back</a></button>
			</div>	
		
	</div>
	</form>

</body>
</html>