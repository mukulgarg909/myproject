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
      background-color: #444;
      color: white;
      border: none;
      border-radius: 4px;
      padding: 5px;
    }

    footer:hover{
    	background-color: black;
    }
  </style>

</head>
<body>

	<!--navbar design-->
	<nav class="navbar navbar-inverse">
    	<div class="container-fluid">
    		<div class="navbar-header">
    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
			</button>
      			<a class="navbar-brand" href="#">Home</a>
    		</div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
    	<ul class="nav navbar-nav">
     		<li><a href="bsprofile.php">My Profile</a></li>
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
	<!--jumbotron
	<div class="jumbotron">
		<a href="IMG_20180429_090431.jpg" target="_blank"></a>
  <div class="container text-center">
    <h1>I'm Mukul Garg</h1>      
    <p>Photographer and Web Developer.</p>
  </div>
</div>-->

<!-- image layout using Bootstrap grid-->
<div class="center-image">
  <img src="bg.jpg" class="img-responsive" alt="Shoot" style="width:100%;">
  <div class="centered text-center">
  	<h1 style="font-size:60px;"><strong>I'm Mukul Garg</strong></h1>
  	<h3>Photographer and Web Developer.</h3>
  </div>
</div>

<div class="container-fluid bg-3 text-center">    
  <h2 class="page-header" style="margin-top: 30px; color: black;">Some of my work</h2><br>
  <div class="row">
    <div class="col-xs-4">
    	<div class="thumbnail">
    		<a href="Isar.jpg" target="_blank">
      			<img src="sar.jpg" class="img-responsive" style="width:100%" alt="Sar pass">
      				<div class="caption">
           				 <p>Sar pass, kasol, Distt-kullu(April 2018)</p>
     				 </div>
    		</a>
    	</div>
	</div>
    <div class="col-xs-4"> 
     <div class="thumbnail">
    		<a href="DSC_0627.jpg" target="_blank">
      			<img src="DSC_0627.jpg" class="img-responsive" style="width:100%" alt="Kugti">
      				<div class="caption">
          	  			<p>Kugti valley, Distt-Chamba(H.P)</p>
          			</div>
          	</a>
     </div>
    </div>
    <div class="col-xs-4"> 
    	 <div class="thumbnail">
    	 	<a href="DSC_1317.jpg" target="_blank">
      			<img src="DSC_1317.jpg" class="img-responsive" style="width:100%" alt="Chakund lake">
      			<div class="caption">
            		<p>Dainkund Peak, Distt-Chamba(H.P)</p>
          		</div>
          	</a>
      </div>
    </div>
  

    <div class="col-xs-4"> 
     <div class="thumbnail">
    		<a href="bj.jpg" target="_blank">
      			<img src="bj.jpg" class="img-responsive" style="width:100%" alt="Jhumar">
      				<div class="caption">
          	  			<p>Jhumar Valley, Distt-Chamba(H.P)</p>
          			</div>
          	</a>
     </div>
    </div>
    <div class="col-xs-4"> 
    	 <div class="thumbnail">
    	 	<a href="cht.jpg" target="_blank">
      			<img src="cht.jpg" class="img-responsive" style="width:100%" alt="chatrari">
      			<div class="caption">
            		<p>Chatrari Village,Bharmour</p>
          		</div>
          	</a>
      </div>
    </div>
    
    <div class="col-xs-4"> 
    	 <div class="thumbnail">
    	 	<a href="cl.jpg" target="_blank">
      			<img src="cl.jpg" class="img-responsive" style="width:100%" alt="lake">
      			<div class="caption">
            		<p>Chamera lake,koti</p>
          		</div>
          	</a>
      </div>
    </div>
  </div>

  <!--skills using h1 ans small-->
  <div class="container">
  <h1 style="color: black;" class="page-header">My skills</h1>
  <h2 style="text-align: left;">1. Web Designing and Development<small>(Intermidiate)</small></h2>
  <h2 style="text-align: left;">2. Photography<small>(Amateur Photographer)</small></h2>
  <h2 style="text-align: left;">3. Photoshop<small>(Intermidiate)</small></h2>
  <h2 style="text-align: left;">4. Lightroom<small>(Intermidiate)</small></h2>
</div>

<!--Contact Section-->
<div id="contact" class="container">
  <h2 style="color: black;" class="page-header text-center">Contact Me</h2>
  

  <div class="row" style="padding-top:30px;">
    <div class="col-md-4">
      <p style="text-align: left;">Drop a note.</p>
      <p style="text-align: left;"><span class="glyphicon glyphicon-map-marker"></span>Chamba, HP</p>
      <p style="text-align: left;"><span class="glyphicon glyphicon-phone"></span>Phone: +91 7018936121</p>
      <p style="text-align: left;"><span class="glyphicon glyphicon-envelope"></span>Email: mukulgarg909@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>

<!--<footer class="container-fluid text-center">
  <h4><em>Designed By Mukul Garg</em></h4>
</footer>-->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="bswelcome.php" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p class="page-header">Designed by Mukul Garg</p> 
</footer>

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
