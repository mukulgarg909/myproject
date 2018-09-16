<?php
session_start();//yha b session esssiliye start kia taki usi user ki info edit ho jo logged in hai
	if(!empty($_SESSION["username"]))
	{
		$k=$_SESSION["username"];
		include "config.php";
		$q="select * from signup where emailid='$k'";
		$z=mysqli_query($con,$q);// query shi toh $z meh true aa gya and mysqli perform d_l 
		while($rows=mysqli_fetch_array($z))// if perform only once therefore while use kra kyuki while sara data jbtk fetch na kr ly tb tk chlta hai
		{
				$name=$rows["username"];// username db ka hai jo hum $name meh get kr rhy
				$gender=$rows["gender"];
				$mob=$rows["mobileno"];
				$email=$rows["emailid"];
				$ads=$rows["address"];
				
		}
	}
	
	else
	{
		echo "<script>window.location='index.php';</script>";
	}
?><!-- welcome name ka code nichy hai-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<style>
header{
	background: #333;
	color: white;
	text-align: center;
	padding: 10px;
	bottom: 1 px solid black;
	border-radius: 4px;
	margin-bottom: 20px;
}

</style>
	
</head>
<body>
	

	<!--user edit kry apni details uska code 15/6/18-->
	<?php 
	if(!empty($_POST["cnt"]) and !empty($_POST["ads"] and !empty($_POST["em"])))
	{
		$mobile=$_POST["cnt"];
		$address=$_POST["ads"];
		$email=$_POST["em"];
		include "config.php";
		$q="update signup set mobileno='$mobile', address='$address', time=CURRENT_TIME,date=CURRENT_DATE where emailid='$email'";
		if(mysqli_query($con,$q)==true)
		{
			echo"<script>alert('Profile Updated');</script>";
			echo"<script>window.location='welcome.php';</script>";
		}
		else
		{
			echo"<script>alert('Profile not Updated');</script>";
			echo"<script>window.location='welcome.php';</script>";
		}
		

	}
?>

<header><h2><strong>Edit your Details</strong></h2></header>
	

	<form class="form" action="myprofile.php" method="post">
		<div class="form-group">
			<label for="nm">Name:</label>
			<input class="form-control" id="nm" type="text" name="nm" readonly value="<?php if(isset($name)) {echo $name;}?>"/>
		</div>

		<div class="form-group">
			<label for="gen">Gender:</label>
		  <input class="form-control" id="gen" type="text" name="gen" readonly value="<?php if(isset($gender)) {echo $gender;}?>"/>
		</div>


		<div class="form-group">
			<label for="cnt">Contact no:</label>
		 <input class="form-control" id="cnt" type="number" name="cnt" value="<?php if(isset($mob)) {echo $mob;}?>"/>
		</div>

		<div class="form-group">
			<label for="ei">Emailid:</label>
		 <input class="form-control" id="ei" type="email" name="em" readonly value="<?php if(isset($email)) {echo $email;}?>"/>
		</div>

		<div class="form-group">
			<label for="ad">Address:</label>
		 <textarea class="form-control" id="ad" cols="10" rows="5" name="ads"><?php if(isset($ads)) {echo $ads;}?></textarea>
		</div>

		<div class="form-group">
		    <input class="btn btn-primary active" type="submit" value="update" />
		    <a style="color: white; text-decoration: none;" href="welcome.php" class="btn btn-primary active">Back</a>
		</div>
		        
 	</form>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>

	
