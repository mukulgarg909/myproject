<?php
if(!empty($_POST["sb"]) and !empty($_POST["ms"]))
{
	//notification yahn sy send hori user ko welcome.php py
	$subject=$_POST["sb"];
	$message=$_POST["ms"];
	include "config.php";
	$q="insert into notification(subject,message)values('$subject','$message')";
	if(mysqli_query($con,$q)==true)
	{
		echo "<script>alert('Notification send');</script>";
		echo "<script>window.location='bsadminwelcome.php';</script>";
	}
	else
	{
		echo "<script>alert('Not send');</script>";
		echo"<script>window.location='compose.php';</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
		
		<form class="form-horizontal" action="compose.php" method="post">
			<div class="form-group">
				<label for="sub" class="control-label">Subject: </label>
				<input type="text" class="form-control" name="sb" id="sub">
			</div>

			<div class="form-group">
				<label for="msg" type="text" class="control-label" name="ms" id="msg">Message: </label>
				<textarea type="text" rows="10" cols="20" class="form-control " name="ms" id="msg"></textarea> 
			</div>

			<div class="form-group">
			<button type="submit" class="btn btn-info active">Send</button>
			<button type="submit" class="btn btn-info"><a style="text-decoration: none; color:white;" href="bsadminwelcome.php">Back</a></button>

			</div>
		</form>
	</div>
	</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script
</body>
</html>