<?php
	$id=$_GET["id"];
	include "config.php";
	$q="select name,size,type,content from upload where id='$id'";
	$z=mysqli_query($con,$q);
	list($name, $type, $size, $content) =mysqli_fetch_array($z);//voilet color indicate error in sublime aur yahn list (php inbuilt function) k under jo variable declare kry voh kuch b ho skty


//header funtion is used to download file and redirect it
	header("Content-length: $size");
	header("Content-type: $type");
	header("Content-Disposition: attachment; filename=$name");
	echo $content;
	exit;
?>