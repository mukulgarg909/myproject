<?php
session_start();//yha b session lgyga linked phly page sy connection joki index.php py session_start kra tha aur uska session variable b
if(!empty($_SESSION["adminid"]))
{
	$k=$_SESSION["adminid"];
	//echo "<script>alert('Your are welcome $k ')</script>";

}
else
{
	echo"<script>window.location='index.php';</script>";

}
?>
<!-- yahn jb main session ko alg name dekr customer_msg sy data ly rha tha tb kuch ho ni rha tha-->

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
     		<li class="active"><a href="admininbox.php">Inbox</a></li>
     		<li><a href="download.php">Download Data</a></li>
     		<li><a href="#">About</a></li>
  		</ul>
     
    	<ul class="nav navbar-nav navbar-right">
    			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings<span class="caret"></span></a>
       			 <ul class="dropdown-menu">
          			
          			<li><a href="myprofile.php">Edit details</a></li>
          			<li><a href="feedback.php">Feedback</a></li>
          			<li><a href="#">Notification Panel</a></li>
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
		$name=$_GET["uname"];// yeh pichy reply k href k badh? k badh parameter k name hai jo user ka name email or msg carry kr rhy or edr hum inhy ek variable meh store krwa k nichy form meh as a readonly value print krwa rhy
		$email=$_GET["umail"];
		$msg=$_GET["umsg"];

		?>


	<form class="form" action="reply.php" method="post">
		<div class="form-group">
			<label for="nm">Name:</label>
			<input class="form-control" id="nm" type="text" name="nm" readonly value="<?php echo $name; ?>"/>
		</div>

		<div class="form-group">
			<label for="ei">Emailid:</label>
		 <input class="form-control" id="ei" type="email" name="ei" readonly value="<?php echo $email; ?>"/>
		</div>

		<div class="form-group">
			<label for="ms">Message:</label>
		 <input style="height: 50px;" type="text" class="form-control" id="ms" name="ms" readonly value="<?php echo $msg; ?>"/>
		</div>
		
		<div class="form-group">
			<label for="rp">Reply:</label>
		 <textarea class="form-control" id="rp" cols="10" rows="5" name="reply">
		 </textarea>
		</div>

		<div class="form-group">
		    <input class="btn btn-primary active" type="submit" value="Send" />
		    <a style="color: white; text-decoration: none;" href="bsadminwelcome.php" class="btn btn-primary active">Back</a>
		</div>
		        
 	</form>

		<?php 
			if(!empty($_POST["reply"]))
			{
				$name=$_POST["nm"];
				$email=$_POST["ei"];
				$msg=$_POST["ms"];
				$rep=$_POST["reply"];
				include "config.php";
				$q="insert into admin_reply(name,email,msg,reply) values('$name','$email','$msg','$rep')";
				if(mysqli_query($con,$q)==true)
				{
					echo"<script>alert('Reply has been send to customer');</script>";
					echo"<script>window.location='bsadminwelcome.php';</script>";
				}
				else
				{
					echo"<script>alert('Error sending the reply');</script>";
					echo"<script>window.location='bsadminwelcome.php';</script>";
				}
				

			}
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>