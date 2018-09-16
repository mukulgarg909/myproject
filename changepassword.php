<?php
session_start();
	if(!empty($_SESSION["username"]))
	{
		$k=$_SESSION["username"];// jo user present time py login hai use ka data store kr rha session variable or multiple pages meh yhi stat likh k access hora ek particular user ka data
	}
	else {
		echo "<script>window.location='index.php';</script>";
	}
?>
		<?php
		if(!empty($_POST["oldp"]) and !empty($_POST["newp"]) and !empty($_POST["cp"]))
		{
			$oldpassword=$_POST["oldp"];
			$newpassword=$_POST["newp"];
			$confirmpassword=$_POST["cp"];
			if($newpassword==$confirmpassword)
			{
					include "config.php";
					$m=0;//flag if $m=0 old password incorrect jbki new or confirm same thy
					$q="select * from signup where emailid='$k' and password='$oldpassword'";
					$z=mysqli_query($con,$q);
					while($rows=mysqli_fetch_array($z))
					{
						$m++;
						$ql="update signup set password='$newpassword' where emailid='$k' and password='$oldpassword'";
						if(mysqli_query($con,$ql)==true)
						{
							echo "<script>alert('Password Changed Successfully');</script>";
							echo "<script>window.location='index.php';</script>";
						}
						else
						{
							echo"<script>lert('Password not changed');</script>";
							echo"<script>window.location='index.php';</script>";
						}
					}
					if($m==0)
					{
						echo "<script>alert('old password incorrect')</script>";
					}
			}
		else
			{
			echo"<script>alert('Confirm password not matched')</script>";
			}

		}


	?>

<!DOCTYPE html>
<html>
<head>
<style>

input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
a:link, a:visited {
	width: 50%;
	border: none;
	border-radius: 4px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    text-align: center;
    text-decoration: none;
    display: inline;

}


a:hover, a:active {
    background-color: #45a049;
}
</style>
</head>
<body>
<div>
	<form action="changepassword.php" method="post">
	Old Password <input type="password" name="oldp" placeholder="enter your old password"><br><br>
	New Password <input type="password" name="newp" placeholder="enter the new password"><br><br>
	Confirm Password<input type="password" name="cp" placeholder="reenter to confirm new password"><br><br>
	<input type="submit" value="Change Password">&nbsp;&nbsp;
	<a href="welcome.php">Back</a>
</form>
</div>
</body>
</html>
