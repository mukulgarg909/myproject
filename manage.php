<?php // block unblock yhan sy hora

	$emailid=$_GET["b"];
	$status=$_GET["m"];
	include "config.php";

	if($status=="unblock")
	{
		$q="update signup set accountstatus='Block' where emailid='$emailid'";
		if(mysqli_query($con,$q)==true)
		{
			echo"<script>alert('This account is block');</script>";
			echo"<script>window.location='manageprofile.php';</script>";
		} 
	}
	elseif ($status=="Block") 
	{
		$ql="update signup set accountstatus='unblock' where emailid='$emailid'";
		if(mysqli_query($con,$ql)==true)
		{
			echo"<script>alert('This account is unblock');</script>";
			echo"<script>window.location='manageprofile.php';</script>";
		} 
	}


?>