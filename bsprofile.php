<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style>

	body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }


    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .jumbotron{
    	font-size:10px;
    	padding: 10px;
    	background-color: #3399ff;
    	color: black;
    	border: none;
    	border-radius: 2px;
    	background-image: url('jb.jpg');
    }

    .center-image{
    position: relative;
    text-align: center;
    color: white;
    opacity: 0.9;
}

	.center-image:hover{
		opacity: 1;
	}
    
    .centered {
    font-family: "Courier New", Courier, monospace;
    position: absolute;
    color: black;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
}

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #666;
      color: white;
      border: none;
      border-radius: 4px;
      padding: 2px;
    }

    footer:hover{
    	background-color: #999;
    }
  </style>

</head>
<body>
	<!--navbar design-->
	<nav class="navbar navbar-default">
    	<div class="container-fluid">
    		<div class="navbar-header">
    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
			</button>
      			<a class="navbar-brand" href="bswelcome.php">Home</a>
    		</div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
    	<ul class="nav navbar-nav">
     		<li class="active"><a href="#">My Profile</a></li>
     		<li><a href="compose.php">Compose</a></li>
     		<li><a href="#contact">Contact</a></li>
     		<li><a href="#">About</a></li>
  		</ul>
     
    	<ul class="nav navbar-nav navbar-right">
      		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings<span class="caret"></span></a>
       			 <ul class="dropdown-menu">
          			<li><a href="feedback.php">Feedback</a></li>
          			<li><a href="changepassword.php">Change Password</a></li>
          		 </ul>
     		 <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    	</ul>
    </div>
 		</div>
	</nav>
	<!--jumbotron-->
	<div class="jumbotron">
		
  <div class="container text-center">
    <h1 style="font-size: 50px;">TravelGram</h1> 
    <p style="font-size: 20px;"><strong><em>Travel-Experience-Progress</em></strong></p>     
    <p style="font-size: 15px;">want to know and travel with me!</p>
    <p style="font-size: 15px;">scroll down...</p>
	 </div>
</div>


<div class="container">
	<h3 style="text-align: center; color: black;">About me</h3>
	<h5 class="page-header" style="text-align: center; margin-top: 5px;">I love photogarphy</h5>
	<div class="row">
		

		<div class="col-sm-12">
 				<p>I'm Mukul Garg, presently pursuing my bachelor's in Computer Science Engg. from Jaypee University, Solan(H.P) 
 				I am very much interested in web desining and development through excelling in it, I want to make my personal website for my photography and travel dairies.
 				I'm in love with all sorts of photography but the area's in which i do most is Nature, Landscape and Black & White.  </p>
 		</div>

 		<div class="col-sm-5">
			<img src="mu.jpg" alt="dp" class="img-circle img-center img-responsive" width="40%" height="30%" style="margin-left: 25%;" >
		</div>

		<div class="col-sm-7">
			<p>Welcome to my website which i have made resently. Have a look at the places i had traveled till now and enjoy the majestical scenes.</p>
		</div>
		</div>
</div>






<!--<footer class="container-fluid text-center">
  <h4><em>Designed By Mukul Garg</em></h4>
</footer>-->

<!-- Footer -->
<div class="container-fluid">
<footer class="text-center">
  <a class="up-arrow" href="bswelcome.php" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <h4>When life gets blurry, Adjust your focus</h4>
 <p class="page-header">Designed by Mukul Garg</p> 
</footer>
</div>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
