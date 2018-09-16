<?php
session_start();
	if(!empty($_SESSION["username"]))
	{
	
		$k=$_SESSION["username"];
		include "config.php";
		$q="select * from signup where emailid='$k'";
		$z=mysqli_query($con,$q);// query shi toh $z meh true aa gya and mysqli perform d_l 
		while($rows=mysqli_fetch_array($z))// if perform only once therefore while use kra kyuki while sara data jbtk fetch na kr ly tb tk chlta hai
		{
				$name=$rows["username"];// username db ka hai
				$time=$rows["time"];// laat udapte time aur date fetch kraya db sy in $ variable
				$date=$rows["date"];
		}
	}
	//echo"<br>";
	else
	{
		echo "<script>window.location='index.php';</script>";
	}
?>

	<?php 
	#echo"<script>alert('You are welcome $name');</script>";
	#echo"<div class='last-profile'>Last profile pik Updated at $date $time</div>";
	?> 
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

/* Style the header */
.header{
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
    
}
.navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
.footer{
    background-color: #333;
    color: white;
    border: 1px solid black;
    border-radius: 4px;
    padding: 20px;
    text-align: center;
	margin-top: 100px;
}

</style>
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
     		<li class="active"><a href="#">My Profile</a></li>
     		<li><a href="#">Inbox</a></li>
     		<li><a href="compose.php">Compose</a></li>
     		<li><a href="#">About</a></li>
  		</ul>
     
    	<ul class="nav navbar-nav navbar-right">
    			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings<span class="caret"></span></a>
       			 <ul class="dropdown-menu">
          			<li><a href="feedback.php">Feedback</a></li>
          			<li><a href="myprofile.php">Edit details</a></li>
          			<li><a href="#">Notification panel</a></li>
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
	<div class="container">
	<h1 class="page-header" style="text-align: center;">
				Buy Your Product
				</h1>
	</div>
    <div style="margin: 3px 0 10px 0;" class="container">
    	<div class="row"><button style="margin-right: 100%; margin-left: 6%;" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span></button>
    		<div style="margin-top: 10px;" class="col-md-3">
    			<!--image ka code-->
				<?php
				include "config.php";
				$ql="select * from signup where emailid='$k'";
				$zl=mysqli_query($con,$ql);
				while($rows=mysqli_fetch_array($zl))
				{
					echo '<img class="img-circle" width="150px" height="150px" src="data:image/jpeg;base64,'.base64_encode($rows['pic']).'"/>';//image ka code
				}
				?>
					<form class="form" action="profileupload.php" method="post" enctype="multipart/form-data"><!--multimedia ko post method sy kro or enctype="multipart/form-data is thr html tag-->
					<input style="margin-top: 20px;"  class="btn btn-default form-control" type="file" name="ups"/>
					<input style="margin-top: 10px;"  class="btn btn-default form-control"  type="submit" value="Edit Picture">
					
					</form>
    		</div>
    	
    		<div class="col-md-6">
    			<h3><b>Online product Store</b></h3>
 <pre style="font-style: verdana; font-size: 15px;">
Buy, add or favourite products into your cart. 
We offers the best services in all the brand products including adidas, nike and many more.
We deal in all sorts of products such as:
1.Home appliances
2.Mobile & accessries
3.Digital Camera
4.Toys and Childrens stuff....

Atlast, I would recormend you to have look in our website,
and shop in the name of love.
Happy Shooping
Regards:- Our Team.
<pre>
    		
    		</div>

			<!--notification panel from compose.php page on 18-6-18-->
    		<div class="col-md-3">
				<div style="position: absolute; background: none; width: 150%; overflow: scroll; border: none;">
					<h1 style="text-align: center; color: #333; ">Notification</h1>
					<marquee direction="up" onmouseout="start();" onmouseover="stop();">
						<?php
						$q="select * from notification";
						$z=mysqli_query($con,$q);
						while ($rows=mysqli_fetch_array($z)) 
						{
							$sub=$rows["subject"];
							$msg=$rows["message"];
							?>
				<div style="position: relative; background: white; overflow: scroll; 
				margin-left:10px; width: 100%; height: 68px;">
					<?php echo $sub; echo "<br>"; echo $msg; ?>
				</div>
							<?php echo "<br>"; ?>
							<?php
						}
						?>
					</marquee>
				</div>
			</div>
		</div>
	</div>

	<!-- displaying selected product here from welcome.php jo user ny select kia us product ki id,name,price upr get hori url meh 20-6-18-->
	<div style="margin:20px 0 10px 0;" class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			
				<h1 style="text-align: center;">
					<marquee style="color:white; font-size: 35px;" bgcolor="gray" Behavior=alternate>
					Weekend sale @60% off</marquee>
				</h1>
			
			<?php

			$productname=$_GET["pname"];// get k undr "" pichy wale  welcome page k hyperreference k aage jo ?get k badh walle names hai 
			$productprice=$_GET["pprice"];
			$productid=$_GET["pid"];
			?>

			<form class="form " action="products.php" method="post">

				<div class="form-group">
			 		<label for="pi">Product Id:</label>
				<input class="form-control" type="text" name="pid" id="pi" readonly value="<?php echo $productid;?>">
				</div>

				<div class="form-group">
					<label for="pn">Product Name:</label>
			 			<input class="form-control" type="text" name="pnm" id="pn" readonly value="<?php echo $productname;?>">
			 	</div>

			 	
				<div class="form-group">
					<label for="pn">Product Price:</label>
						<input class="form-control" type="text" name="pp" id="pn" readonly value="<?php echo $productprice;?>">
				</div>

				<div class="form-group">
					<label for="pn">No of quantity:</label>
				<input class="form-control" type="number" name="qnt">
				</div>
				
				<div class="form-group"><!--butto as a image online sy li hai-->
				<input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif">
				</div>
			</form>	

			</div>
			
		</div>
	</div>

   		 <div class="footer">
    	 		<p>Designed by Mukul Garg</p> 
         </div>

	


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</body>
</html>

