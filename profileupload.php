<?php
session_start();//yahn session essiliye start kra taki jo username login hai uski ki pic upload ho
$em=$_SESSION["username"];// session ka name hai username
include "config.php";
$ims=addslashes(file_get_contents($_FILES["ups"]["tmp_name"]));//file ko welcome ki form sy leny k liye use hota hai $_FILES['image ki feild ka name']['tmp_name']

$q="update signup set pic='$ims' where emailid='$em'";
if(mysqli_query($con,$q)==true)
{
	echo"<script>alert('Profile pic uploaded');</script>";
	echo"<script>window.location='welcome.php';</script>";

}
else
{

	echo"<script>alert('Profile pic not uploaded');</script>";
	echo"<script>window.location='welcome.php';</script>";

}
?>