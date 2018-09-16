<?php        
	if(isset($_POST["em"]))//yeh nhi b likhoge tbi b chlyga or yahn session lgany ki jrurt nhi abi user ny login hi nhi kra hai
	{
		$email=$_POST["em"];
		include "config.php";
		$q="select * from signup where emailid='$email'";
		$m=0;
		$z=mysqli_query($con,$q);
		while($rows=mysqli_fetch_array($z))
		{
			$m++;
			$mobileno=$rows["mobileno"];// "" k under walla mobileno is db ki column feild hai
			$password=$rows["password"];
			$name=$rows["username"];
			$message="Hi, $name Your lost password is $password";
			$number="91".$mobileno;//textlocal walla mobile no tha sayd??

			//textlocal code
			$username = 'mukulgarg909@gmail.com'; //textlocal wali id
			$hash = 'Mukul2800';
			$numbers = array($number);//$number jo db sy aaya
			$sender = urlencode('TXTLCL');
			$message = rawurlencode($message);
			$numbers = implode(',', $numbers);
			$data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
			$ch = curl_init('http://api.textlocal.in/send/');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			curl_close($ch);

			echo"<script>alert('Password send to Register mobileno');</script>";
		}
		if($m==0)
		{
			echo"<script>alert('This Emailid is not registor');</script>";
		}
		
	}

?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  width:48%;
  height: auto;
  margin-left: 25%;
  margin-top: 5%;
  font-size: 18px;
  background: #F8F8FF;
 
}
form{
	color:black;
	width: 60%;
	height: auto;
	margin: 50px;
	padding: 50px;
	display: inline-block;
	text-align: left;
	font-family: italic;
	border: 1px solid black;
	border-radius: 4px;
	position: relative;

}	

div .input-group {
  
  font-weight: bold;
  font-size: 20px;
  margin-top: 5px;

}
div .input-group input{
	width: 200px;
	height: 20px;
	margin-top: 5px;
}
.btn{
    border: none;
    border-radius: 5px;
	color: white;
	padding: 7px 14px;
	width: 95%;
	cursor: pointer;
    font-size: 15px;
    background-color: dodgerblue;
    display: inline-block;
    
}

.success{
		  color: white; 
  		  background: dodgerblue; 
  		  border: 1px solid #3c763d;
  		  margin-bottom: 20px;
          display: inline;
}
.success:hover{
	background-color: blue;
}

</style>

</head>
<body>
<div>
		<form action="forgotpassword.php" method="post">
		<div class=input-group>
			Enter Emailid: <input type="text" name="em" placeholder="enter email address..." /><br><br>
		</div>
		<div class=input-group>
			<button class="btn success">Forgot Password</button>
		</div>
		<div class=input-group>
			<button class="btn success" ><a style="text-decoration: none; color:white;" href="index.php">Back</a></button>
	</div>
		</form>
</div>

</body>
</html>
