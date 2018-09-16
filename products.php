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
				$name=$rows["username"];// username db ka hai
				$time=$rows["time"];
				$date=$rows["date"];
		}
	}
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
table, th, td {
    border: 1px solid grey;
    border-radius: 2px;
    border-collapse: collapse;
    background-color: white;
    color: black;
    width: 100%;
}
th, td {
    padding: 5px;
    width: 30%;
    
}
th {
    text-align: left;
    background-color: #333;
    color: white;
    font-size: 20px;
    padding: 10px;
    margin: 10px;

}

.footer{
    background-color: #777;
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

	<!--navbar design A standard navigation tab is created using navbar navbar-inverse tab-->
	<nav class="navbar navbar-default">
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
    	<ul class="nav navbar-nav"> <!--A standard navigation bar is created with class="nav navbar-nav"-->
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
<!-- displaying product here 20-6-18-->
	<div class="container-fluid">
		
				<h1 class="page-header" style="text-align: center;">
				Payment Check-out Details
				</h1>
			
			<?php
			$productname=$_POST["pnm"];// FORM FEILD WALE NAME HAI "" MEH peechly page productbuys sy linked or edr form hta di hai and peechly feilds ki values edr $variable meh store kra li or nichy table meh php k throw echo krwa li
			$productid=$_POST["pid"];
			$productprice=$_POST["pp"];
			$quantity=$_POST["qnt"];
			$finalprice=$productprice*$quantity;
			?>

			<h3 class="header" style="text-align: center;">Product Recipt</h3>
				<table  style="margin-top: 20px;">
					<tr>
						<th>Product Id</th>
						<th>Product Name</th>
						<th>Total Amount</th>
					</tr>
					<tr>
						<td><?php echo $productid;?></td>
						<td><?php echo $productname;?></td>
						<td><?php echo $finalprice;?>Rs</td>
					</tr>
				
			</table>

<!-- Payment gateway on clicking on proceed to pay button  21-6-18-->
		<?php
			   $paypalURL = "https://www.sandbox.paypal.com/cgi-bin/webscr"; //by default url paypal ka aur nichy jo form meh name ki feilds hai vhi nam likho kuki paypal vhi name accept krta hai or form action payapal gateway ko lekr jara or success and fail ka normal code attach kia hai jo payment gateway k last meh resilt dega
               $paypalID = "mukulgarg909@gmail.com";//paypal meh sandbox k accound sy login kro or merchant sy login kro using -buyer id given by sandbox udr notifaication meh sari details check kr lo transactios ki and paypal currency_code dollars usd meh leta hai
			  ?>
			    <form action="<?php echo $paypalURL; ?>" method="post"> <!--yha name jo hai voh paypal smjtah hai toh vhi use kro-->
						<input type="hidden" name="business" value="<?php echo $paypalID; ?>"> 
						<input type="hidden" name="cmd" value="_xclick"> 
						<input type="hidden" name="item_name" value="<?php echo $productname;?>"> 
						<input type="hidden" name="item_number" value="<?php echo $productid; ?>"> 
						<input type="hidden" name="amount" value="<?php echo $finalprice; ?>"> 
						<input type="hidden" name="currency_code" value="USD"> 
						<input type='hidden' name='cancel_return' value='http://localhost/myproject/cancel.php'>
						<input type='hidden' name='return' value='http://localhost/myproject/success.php'>
						<input style="float: right; margin-top: 20px;" type="submit" value="Proceed to pay" class="btn btn-danger">
				</form>

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

