<?php
	$email=$_GET["emailid"];//url k through value jari essiliye get ka use kra hai aur email "" walla manageprofile.php wala variable hai
	include "config.php";
	$q="delete from signup where emailid='$email'";//emailid db ki column feild hai aur $email var py jo php ny value li
	if(mysqli_query($con,$q)==true)
	{
		echo"<script>alert('Data deleted successfully');</script>";
		echo "<script>window.location='manageprofile.php';</script>";
	}
	else
	{
		echo"<script>alert('Data not deleted');</script>";
		echo "<script>window.location='manageprofile.php';</script>";
	}




?>