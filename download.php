<!DOCTYPE html>
<html>
<head>
	<title>Downloading</title>
<style>
	header{
	font-size: 30px;
	text-align: center;
	border: 1px solid black;
	border-radius: 4px;
	background-color:  #222;
	color: white;
	padding: 30px;
	margin: 10px 10px 20px 10px;
}

table, th, td {
    border: 1px solid grey;
    border-radius: 2px;
    border-collapse: collapse;
    background-color: white;
    color: black;
    width: 98%;
    margin-left: 10px;
}
th, td {
    padding: 5px;
}
th {
    text-align: left;
    background-color: #333;
    color: white;
    font-size: 20px;
    padding: 10px;
    margin: 10px;

}
tr:hover {background-color:#f5f5f5;}

a:link, a:visited {
	border: none;
	border-radius: 2px;
    background-color: #999;
    color: white;
    padding: 10px;
    margin-top: 15px;
    text-align: center;
    text-decoration: none;
     float: right;
     clear: both;
   

}


a:hover, a:active {
    background-color: blue;
}
</style>

</head>
<body>
	<header>Downloading</header>
		<table border="1">
		 <tr>
		 <th>Id</th>
		 <th>Server Location</th>
		 <th>File </th>
		 <th>Action</th>
		 </tr>
		 <?php
		  include "config.php";
		  $q="select * from upload";//downloadin at user end aur yeh upload table sy data fetch kr rha puri rows ka jo humny upload.php file meh bnaya hai admin end py
		  $z=mysqli_query($con,$q);
		  while($rows=mysqli_fetch_array($z))
		  {
			  echo "<tr>";
			  echo "<td>";
			  echo $rows["id"];
			  echo "</td>";
			  echo "<td>";
		      echo $rows["city"];
			  echo "</td>";
			  echo "<td>";
			  echo $rows["name"];
			  echo "</td>";
			  echo "<td>";
			  $y=$rows["id"];
			  echo "<a style='margin:10px 20px 10px 20px;' href='dwn.php?id=$y'>Download</a>";//get kr rhy id ki value dwn.php meh taki where condition lgakr file download ho
			  echo "</td>";
			  echo "</tr>";
		  }
		 ?>
		 </table>

		 <a style="margin-right:55px;" href="welcome.php">Back</a>
</body>
</html>
 