<?php
session_start(); // agr welcome meh else krky kra toh php preprosser hai toh sari value ko phly hi null kr dega bina permission liye
	session_destroy();//current page ki info sare page py null ho jayegi essiliye logout ka page bnaye
	session_unset();
	echo "<script>window.location='index.php';</script>";
?>