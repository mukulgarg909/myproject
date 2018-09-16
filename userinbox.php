<?php
session_start();
	if(!empty($_SESSION["username"]))
	{
		$k=$_SESSION["username"];
		include "config.php";
		$q="select * from signup where emailid='$k'";
		$z=mysqli_query($con,$q);
		while($rows=mysqli_fetch_array($z))
		{
				$name=$rows["username"];//quotes k under walle customer_msg ki fields hai
				$email=$rows["emailid"];
				
		}
	}
	
	else
	{
		echo "<script>window.location='index.php';</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User's Inbox</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>

<body>

<!--navbar design-->
	<nav class="navbar navbar-inverse">
    	<div class="container-fluid">
    		<div class="navbar-header">
    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
			</button>
      			<a class="navbar-brand" href="welcome.php">Home</a>
    		</div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
    	<ul class="nav navbar-nav">
     		<li><a href="#">My Profile</a></li>
     		<li class="active"><a href="userinbox.php">Inbox</a></li>
     		<li><a href="download.php">Download Data</a></li>
     		<li><a href="#">About</a></li>
  		</ul>
     
    	<ul class="nav navbar-nav navbar-right">
    			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings<span class="caret"></span></a>
       			 <ul class="dropdown-menu">
          			
          			<li><a href="myprofile.php">Edit details</a></li>
          			<li><a href="feedback.php">Feedback</a></li>
          			<li><a href="notpanel.php">Notification Panel</a></li>
          			<li><a href="changepassword.php">Change Password</a></li>

          		 </ul>
          	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

          	<!-- google translator ka code-->
			<div style="position: relative; display: inline-block; margin-right: 6px;margin-top: 12px;">
				<div id="google_translate_element"></div>
					<script type="text/javascript">
					function googleTranslateElementInit() {
		  			new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
					}
				</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		     </div>
    	</ul>
    </div>
 		</div>
	</nav>

		<?php 
	if(!empty($_POST["msg"]))
	{
		
		$msg=$_POST["msg"];
		include "config.php";
		$q="insert into customer_msg(name,email,msg) values('$name','$email','$msg')";
		if(mysqli_query($con,$q)==true)
		{
			echo"<script>alert('Message has been send to admin');</script>";
			echo"<script>window.location='welcome.php';</script>";
		}
		else
		{
			echo"<script>alert('Error sending the Message');</script>";
			echo"<script>window.location='welcome.php';</script>";
		}
		

	}
?>


	<form class="form" action="userinbox.php" method="post">
		<div class="form-group">
			<label for="nm">Name:</label>
			<input class="form-control" id="nm" type="text" name="nm" readonly value="<?php if(isset($name)) {echo $name;}?>"/>
		</div>

		<div class="form-group">
			<label for="ei">Emailid:</label>
		 <input class="form-control" id="ei" type="email" name="em" readonly value="<?php if(isset($email)) {echo $email;}?>"/>
		</div>

		<div class="form-group">
			<label for="ms">Message:</label>
		 <textarea class="form-control" id="ms" cols="10" rows="5" name="msg"><?php if(isset($msg)) {echo $msg;}?></textarea>
		</div>

		<div class="form-group">
		    <input class="btn btn-primary active" type="submit" value="Send" />
		    <a style="color: white; text-decoration: none;" href="welcome.php" class="btn btn-primary active">Back</a>
		</div>
		        
 	</form>









<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>