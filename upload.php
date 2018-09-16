<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uploading</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
<?php
 if(!empty($_POST["ct"]))//upload @admin
  {
		$cityname=$_POST["ct"];
		$fileName=$_FILES['ups']['name'];//$_files attr lera file ko input feild sy usky nme sy joki ups hai or name folder py assign krega
		$tmpName=$_FILES['ups']['tmp_name'];//tmp_name folder
		$fileSize = $_FILES['ups']['size'];//size lery file ka input feild sy fir nichy db meh insert kr rhy es variable valued ko
		$fileType = $_FILES['ups']['type'];// defines type of media like mp3, ppt etc
		$fp      = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		$content = addslashes($content);
		fclose($fp);
		if(!get_magic_quotes_gpc())
		{
		    $fileName = addslashes($fileName);
		}  	
	    include "config.php";
			  $q="insert into upload(city,name,size,type,content)
			  values('$cityname','$fileName','$fileSize','$fileType','$content')";
			  if(mysqli_query($con,$q)==true)
			  {
				  echo "<script>alert('File $fileName uploaded Successfully');</script>";
			  }
			  else
			  {
				  echo "<script>alert('File Not Uploaded');</script>";
			  }
	}
?>
<div class="container-fluid">
	<div style="text-align: center; font-size: 40px;" class="page-header">
		<strong>Uploading Content</strong>
	</div>
		<form class="form" action="upload.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
					<label for="ci">Enter Server Address:</label>
		 			<input class="form-control" type="text" name="ct">
			</div>
			<div class="form-group">
					  <label>Select File </label>
		 			  <input class="form-control" type="file" name="ups">
		 	</div>
		 	<div class="form-group">
		 			<input class="btn btn-success" type="submit" value="Upload Data"/>
					<a style="text-decoration: none; margin-left: 10px;" class="btn btn-default" href="bsadminwelcome.php">Back</a>
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




