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
				<h3 class="text-info">Feedback Form</h3>
		<form class="form-horizontal" action="feedback.php" method="post">
			<div class="form-group">
				<label for="to" class="control-label">To: </label>
				<input type="text" class="form-control" name="to" id="to">
			</div>

			<div class="form-group">
				<label for="sub" class="control-label">Subject: </label>
				<input type="text" class="form-control" name="sb" id="sub">
			</div>

			<div class="form-group">
				<label for="msg" type="text" class="control-label" name="ms" id="msg">Message: </label>
				<textarea type="text" rows="10" cols="20" class="form-control " name="ms" id="msg"></textarea> 
			</div>

			<div class="form-group">
			<button type="submit" class="btn btn-info active">Submit</button>
			<a style="color:white; text-decoration: none;" href="welcome.php" class="btn btn-info">Back</a></div>
			</div>
		</form>
	</div>
	</div>

	<!--feeback send krna apni id sy user ko in feedback.php form google sy direct code uthya hai using inbuilt mail.php file and leeting on unknown resouces on in your gmail.com and using single mail tranfer protocol servor-->

	<?php 
		if(!empty($_POST["to"]) and !empty($_POST["sb"]) and !empty($_POST["ms"]))
		{
				$to=$_POST["to"];
				$sub=$_POST["sb"];
				$msg=$_POST["ms"];
				require_once "Mail.php"; 
				$from='mukulgarg909@gmail.com';
				$headers=array('From' => $from, 'To' => $to, 'Subject' => $sub);

				$smtp=Mail::factory('smtp',array(
				'host' => 'ssl://smtp.gmail.com',
				'port' => '465',
				'auth' => true,
				'username' => 'mukulgarg909@gmail.com',
				'password' => 'mukul9418703264',
			));

			$mail=$smtp->send($to, $headers, $msg);

			if(PEAR::isError($mail))
			{
			echo('<p>'.$mail->getMessage(). '</p>');
			}
			else
			{
				echo "<script>alert('Feedback has been send successfully');</script>";
			}

	}
?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
 <script src="js/bootstrap.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>