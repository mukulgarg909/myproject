<!DOCTYPE html>
<html>
<head>
<style>

header{
	text-align: center;
	border: 1px solid black;
	border-radius: 4px;
	background-color:  #222;
	color: white;
	padding: 10px;
	margin: 10px 10px 20px 10px;
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
    display: inline-block;

}


a:hover, a:active {
    background-color: blue;
}

</style>
</head>
<body>
	<header>
		<h2>The Database Details are: </h2>
	</header>

<?php
session_start();
$k=$_SESSION["adminid"];
if(!empty($_SESSION["adminid"]))
{
	//echo "<script>alert('You are welcome $k');</script>";
}
else
{
	echo"<script>window.location='index.php';</script>";
}
?>
<!-- adding pagination to manageprofie on 26-6-18 yhan sy shuru hai fir nichy wali php hai es code ki-->
<?php

	$limit=3;// ek page py ek time py 3 record dikayega
	if(isset($_GET["page"]))// pehly false hora kuki kuch b get nhi hoga jb page laod hoga
	{
		$page=$_GET["page"];
	}
	else
	{
		$page=1;
	}
	$start_from=($page-1) * $limit;//formula hai and it will start counting from 0
?>

<!--db sy details add krna using table-->
<table >
	<tr>
		<th>Username</th>
		<th>Email ID</th>
		<th>D.O.B</th>
		<th>Gender</th>
		<th>Password</th>
		<th>Mobile No</th>
		<th>Address</th>
		<th>Date</th>
		<th>Time</th>
		<th>Picture</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
<?php
include "config.php";
$q="select * from signup order by date asc limit $start_from, $limit";//pagination query in asc order acc to date feild
$z=mysqli_query($con,$q);

	while ($rows=mysqli_fetch_array($z)) 
	{   
		$em=$rows["emailid"];//db wala emailid apni value em ko assign kregi
		echo "<tr>";
		echo "<td>";
		echo $rows["username"];
		echo "</td>";
		echo "<td>";
		echo $rows["emailid"];
		echo "</td>";
		echo "<td>";
		echo $rows["dob"];
		echo "</td>";
		echo "<td>";
		echo $rows["gender"];
		echo "</td>";
		echo "<td>";
		echo $rows["password"];
		echo "</td>";
		echo "<td>";
		echo $rows["mobileno"];
		echo "</td>";
		echo "<td>";
		echo $rows["address"];
		echo "</td>";
		echo "<td>";
		echo $rows["date"];
		echo "</td>";
		echo "<td>";
		echo $rows["time"];
		echo "</td>";
		echo "<td>";
		echo '<img width="80px" height="40px" src="data:image/jpeg;base64,'.base64_encode($rows['pic']).'"/>';
		echo "</td>";

		echo "<td>";
		echo $rows["accountstatus"];
		echo "</td>";

		$s=$rows["accountstatus"];// hr actsts col ki value $row meh jayegi

		echo"<td>";
		echo"<a href='profiledelete.php?emailid=$em'>Delete</a>";// upr url py email aari jo delete hogi by the admin
		

		if($s=="unblock")
		{
			echo"<a href='manage.php?b=$em&m=$s'>Block</a>";// ? k badh passing two var into $em voh lia kuki humhy user ko block krna hai naki admin ko tbi uski emailid carry kri in $em
		}
		else
		{
			echo"<a href='manage.php?b=$em&m=$s'>Unblock</a>";
		}
		//echo"<a href='manage.php'>Block</a>";
		echo"</td>";
		echo"</tr>";
	}
?>

</table>
<!--apply pagination jahn sy b database ko fetch kia joki hum edr manage pofile py lga rhy hai-->
<?php
	$r=0;//initializing row to zero
	$w="select * from signup";
	$t=mysqli_query($con,$w);
	while($rows=mysqli_fetch_array($t))
	{
		$r++;//counts the no of rows
		//echo "$r";
	}
	$total_pages=ceil($r/$limit);//formula to calculate the no of pages ceil(3.3)=3 but ceil(3.7)=4 used to round off integer value
	for($i=1;$i<=$total_pages;$i++)
	{
		echo"&nbsp;&nbsp;";
		echo"<a style='' href='manageprofile.php?page=$i'>$i</a>";// utny href link krega jo divide hoky result aaya aur ab upr if meh page get kr ra value acc to $i value
	}


?>


<a href="bsadminwelcome.php" style="text-decoration: none; color: white; float: right;">Back</a>
<a href="logout.php" style="text-decoration: none; color: white; float: right; margin-right: 10px;">Logout</a>
<a href="excel.php" style="text-decoration: none; color: white; float: right; margin-right: 10px;">Export into Excel</a>



</body>
</html>