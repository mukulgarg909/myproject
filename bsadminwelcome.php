<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<style>
	.navbar {
   
      border-radius: 0;
      margin: 0;
    }
    .jumbotron{
    	padding: 10px;
    }
    .jumbotron h1{
    	font-size: 40px;
    }

    footer {
      background-color: #999;
      color: black;
      border: none;
      border-radius: 4px;
      padding: 25px;
      margin-top: 12%;
    }

    footer:hover{
    	background-color: #777;
    }

</style>
</head>
<body>
	<!--php code for welcoming admin-->
<?php
session_start();//yha b session lgyga linked phly page sy connection joki index.php py session_start kra tha aur uska session variable b
if(!empty($_SESSION["adminid"]))
{
	$k=$_SESSION["adminid"];
	echo "<script>alert('Your are welcome $k ')</script>";

}
else
{
	echo"<script>window.location='index.php';</script>";

}
?>
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
     		<li class="active"><a href="bsadminwelcome.php">Home</a></li>
     		<li><a href="admininbox.php">Inbox</a></li>
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
	

<!--jumbotron-->
	<div class="jumbotron">
		<div class="container text-center">
    <h1>Online store.</h1>   
    <h4>selling at your favourite brands.</h4>     
	</div>
</div>
	

	<!-- php code for product-->
	<?php
	
		if(!empty($_POST["pn"]) and !empty($_POST["pp"]))
		{
			$productname=$_POST["pn"];
			$productprice=$_POST["pp"];
			$productphoto=addslashes(file_get_contents($_FILES["ups"]["tmp_name"]));
			include"config.php";
			$q="insert into product(productname,productprice,productphoto)values('$productname','$productprice','$productphoto')";
			if(mysqli_query($con,$q)==true)
			{
				echo "<script>alert('Product added');</script>";
			}
			else
			{
				echo "<script>alert('Product not added');</script>";
			}

		}


	?>

	<!--product form on 19-6-18-->
	<form class="form" action="bsadminwelcome.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
		
		<input type="text" name="pn" class="form-control" id="pname" placeholder="enter the product name..." />
	</div>
	<div class="form-group">
		<input type="text" name="pp" class="form-control" id="pprice" placeholder="enter the product price..." />
	</div>
	<div class="form-group">
		<!--image ka code-->
				<?php
				include "config.php";
				$ql="select * from product where productname='$k'";
				$zl=mysqli_query($con,$ql);
				while($rows=mysqli_fetch_array($zl))
				{
					echo '<img  width="150px" height="150px" src="data:image/jpeg;base64,'.base64_encode($rows['productphoto']).'"/>';//image ka code
				}
				?>
		<label for="pphoto">Product Photo:</label>
		<input type="file" name="ups" class="form-control btn btn-default" id="pphoto" />
		
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" value="Edit Picture">
		<input type="submit" value="Add product" class="btn btn-primary active" />
	</div>
	</form>

    
  </div>
</div>

<footer class="container-fluid text-center">
  <h4><em>Designed By Mukul Garg</em></h4>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>