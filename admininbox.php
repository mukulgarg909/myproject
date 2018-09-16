<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Inbox</title>
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
      			<a class="navbar-brand" href="#">Admin Page</a>
    		</div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
    	<ul class="nav navbar-nav">
     		<li><a href="bsadminwelcome.php">Home</a></li>
     		<li class="active"><a href="admininbox.php">Inbox</a></li>
     		<li><a href="compose.php">Compose</a></li>
     		<li><a href="#contact">Contact</a></li>
     		<li><a href="#">About</a></li>
  		</ul>
     
    	<ul class="nav navbar-nav navbar-right">
      		<li><a href="manageprofile.php">Manage Profile</a></li>
      		<li><a href="upload.php">Upload Data File</a></li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    	</ul>
    </div>
 		</div>
	</nav>
<header>
		<h2 style="text-align: center; font-size: 40px; margin-bottom: 30px;" class="page-header">Customer Queries</h2>
	</header>

<?php
session_start();
$k=$_SESSION["adminid"];
if(!empty($_SESSION["adminid"]))
{
	//echo "<script>alert('You are welcome $k');</script>";
}
else
{
	echo"<script>window.location='index.php';</script>";
}
?>
<!--db sy user k inbox sy details add krna using table-->
<div class="table-responsive">
	<table style="font-size: 20px;" class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email ID</th>
				<th>Message</th>
				<th>Action</th>
		</thead>		
			</tr>
<?php
include "config.php";
$q="select * from customer_msg";
$z=mysqli_query($con,$q);

	while ($rows=mysqli_fetch_array($z)) 
	{   
		//$em=$rows["email"];//db wala emailid apni value em ko assign kregi
		echo "<tbody>";
		echo "<tr>";
		echo "<td>";
		echo $rows["name"];
		echo "</td>";
		echo "<td>";
		echo $rows["email"];
		echo "</td>";
		echo "<td>";
		echo $rows["msg"];
		echo "</td>";
		$name=$rows["name"];
		$mail=$rows["email"];
		$msg=$rows["msg"];
		echo"<td>";
		//echo"<a class='btn btn-default' href='reply.php?email=$em'>Reply</a>";
		echo"<a class='btn btn-default' href='reply.php?uname=$name & umail=$mail & umsg=$msg'>Reply</a>";
		
		echo"</tbody>";
		
	}
?>

</table>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>