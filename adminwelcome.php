<?php
session_start();
if(!empty($_SESSION["adminid"]))
{
	echo "Your welcome ".$_SESSION["adminid"];
	echo"<br><br>";

}
else
{
	echo"<script>window.location='index.php';</script>";
	echo"<br><br>";

}
?>
<!DOCTYPE html>
<html>
<head>
	<style>

		body{
			margin: 0;
		}

		header{
			background: #999;
			color: white;
			padding: 15px 15px  15px;
		}
		header h1{
			display: inline;
			margin: 0;
		}
		nav ul{
			display: inline;
			margin: 0;
			padding: 0 0 0 15px;
			

		}
		nav ul li{
			display: inline-block;
			list-style-type: : none;
			background: black;
			color: white;
			padding: 5px 15px;
			border: none;
			border-radius: 5px;

		}

		nav ul li a{
			text-decoration: none;
			color: white;
			
		}
		nav ul li a:hover{
			background-color: blue;
		}
		
		.row{
			
			clear: both;
		}

		.row:after{
			clear: both;
		}
		
		.col{
			background: #333;
			border: 1px solid white;
			border-radius: 4px;
			color: white;
			padding: 10px 0.5px;
			float: left;
			width:33%; /*use % so that width will will responsive to the user window*/
			margin-top: 10px;
		}

		footer{
			background: #999;
			color: white;
			text-align: center;
			padding: 15px 15px  15px;
			margin-top: 500px;
		}

		/*a:link, a:visited {
		border: none;
		border-radius: 5px;
   	 	background-color: dodgerblue;
    	color: white;
    	padding: 5px 5px;
    	text-align: center;
    	text-decoration: none;
    	display: inline-block;

}
		a:hover, a:active {
    	background-color: blue;
}
*/
		
</style>
	<header>
	<nav>
		<h1>Admin Page</h1>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="compose.php">Compose</a></li>
			<li><a href="inbox.php">Inbox</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			
			<li><a href="manageprofile.php" >ManageProfile</a></li>
			<li><a href="logout.php">Logout</a></li>
	       
		</ul>
	</nav>
	</header>
	<div class="row">
		<div class="col">col1</div>
		<div class="col">col2</div>
		<div class="col">col3</div>
	</div>


	<footer>Admin @Netmax 2018</footer>
</head>
<body>
	
































	


</body>
</html>

