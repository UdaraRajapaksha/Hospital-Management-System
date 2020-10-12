<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Welcome to Suwapiyasa Hospital</title>
		<link rel="stylesheet" type="text/css" href="./css/homestyle.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		
		<!--<script src="./JQuery Library.js"></script>-->
		<script>
			function myFunction() {
			  var dots = document.getElementById("dots");
			  var moreText = document.getElementById("more");
			  var btnText = document.getElementById("myBtn");

			  if (dots.style.display === "none") {
				dots.style.display = "inline";
				btnText.innerHTML = "Read more";
				moreText.style.display = "none";
			  } else {
				dots.style.display = "none";
				btnText.innerHTML = "Read less";
				moreText.style.display = "inline";
			  }
			} 
		</script>
		<script>
			function myFunction2() {
			  var dots = document.getElementById("dots2");
			  var moreText = document.getElementById("more2");
			  var btnText = document.getElementById("myBtn2");

			  if (dots.style.display === "none") {
				dots.style.display = "inline";
				btnText.innerHTML = "Read more";
				moreText.style.display = "none";
			  } else {
				dots.style.display = "none";
				btnText.innerHTML = "Read less";
				moreText.style.display = "inline";
			  }
			} 
		</script>
		<script>
			function myFunction3() {
			  var dots = document.getElementById("dots3");
			  var moreText = document.getElementById("more3");
			  var btnText = document.getElementById("myBtn3");

			  if (dots.style.display === "none") {
				dots.style.display = "inline";
				btnText.innerHTML = "Read more";
				moreText.style.display = "none";
			  } else {
				dots.style.display = "none";
				btnText.innerHTML = "Read less";
				moreText.style.display = "inline";
			  }
			} 
		</script>
		<script>
			// Get the modal
			var modal = document.getElementById('id01');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
		</script>
	</head>
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			  <a class="navbar-brand" href="#myPage">Suwapiyasa Hospital</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="#about">ABOUT</a></li>
				<li><a href="#services">SERVICES</a></li>
				<li><a href="#portfolio">PORTFOLIO</a></li>
				<li><a href="#pricing">PACKAGES</a></li>
				<li><a href="#contact">CONTACT</a></li>
				<li><a href="comments.php">COMMENTS</a></li>
				<li><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;cursor:pointer;">LOGIN</a></li>
			  </ul>
			</div>
		  </div>
	</nav>
	<!-- Login form-->
	<div id="id01" class="modal" style="opacity:0.9;">
		<div class="login_frm">  
		  <form action="loginfunc.php" class="modal-content animate"  method="post">
			<div class="imgcontainer">
			  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			  <img src="./imgs/login.png" alt="Avatar" class="avatar">
			</div>

			<div class="container">
			  <label for="uname"><b>Username</b></label>
			  <input type="text" class="form-control" placeholder="Enter Username"  name="username" required><br/>

			  <label for="psw"><b>Password</b></label>&nbsp;
			  <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
				
			  <button type="submit" name="login" style="width:86.5%;">Login</button>
			</div>

				<div class="container">
				  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				</div>
		 </form>
		</div>
	</div>
	<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		  <div class="item active">
			<img style="width:100%;" id="img_sli" src="./imgs/img_3.jpg" alt="./photoes/31.jpg">
		  </div>
		  <div class="item">
			<img style="width:100%;" id="img_sli" src="./imgs/img_4.jpg" alt="..." >
		  </div>
		  <div class="item">
			<img style="width:100%;" id="img_sli" src="./imgs/img_5.jpg" alt="..." >
		  </div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	</div>

	<!-- Container (About Section) -->
	<div id="about" class="container-fluid">
	  <div class="row">
		<div class="col-sm-8">
		  <h2>About Suwapiyasa Hospital</h2><br>
		  <h4>A Hospital trusted By Thousands</h4><br>
		  <p>The entry of Suwapiyasa Hospitals into the state dominated healthcare sector in 1985, saw the private health care system take root in Sri Lanka. 
		  The launch of the hospital and the overwhelming response it received from the people 
		  demonstrated a long felt need for superior healthcare in a pleasant environment. </p>
		  <br><a href="apmt.php"><button class="btn btn-default btn-lg">Book an appointment</button></a>
		</div>
		<div class="col-sm-4">
		  <img class="carousel slide text-center" src="./imgs/clp_1.jpg">
		</div>
	  </div>
	</div>

	<div class="container-fluid bg-grey">
	  <div class="row">
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-globe logo slideanim"></span>
		</div>
		<div class="col-sm-8">
		  <h2>Our Values</h2><br>
		  <h4><strong>MISSION:</strong>To evaluate the status of the hospital to a modern, leading, health care facility and training center
		  by developing and sustaining the infastructure and human resources and by creating a patient friendly environment where patients care</h4><br>
		  <p><strong>VISION:</strong>TO BE THE CENTER OF EXCELLENCE IN HEALTH CARE</p>
		</div>
	  </div>
	</div>

	<!-- Container (Services Section) -->
	<div id="services" class="container-fluid text-center">
	  <h2>SERVICES</h2>
	  <h4>What we offer</h4>
	  <br>
	  <div class="row slideanim">
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-home logo-small"></span>
		  <h4>Friendly Staff</h4>
		  <p>Friendy staff members offering the best care to the patients </p>
		</div>
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-heart logo-small"></span>
		  <h4>Careing Service</h4>
		  <p>Careing service to all the patients visiting the hospital</p>
		</div>
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-bed logo-small"></span>
		  <h4>Best Accommodation</h4>
		  <p>Offering the best accommodation facilities for the patients</p>
		</div>
	  </div>
	  <br><br>
	  <div class="row slideanim">
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-leaf logo-small"></span>
		  <h4>Eco-Friendly Environment</h4>
		  <p>Creating a pleasent environment for the patients</p>
		</div>
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-certificate logo-small"></span>
		  <h4>Certified Staff</h4>
		  <p>Hiring the most qualified doctors in the area to provide a good quality service for the patients</p>
		</div>
		<div class="col-sm-4">
		  <span class="glyphicon glyphicon-blackboard logo-small"></span>
		  <h4 style="color:#303030;">Latest Technology</h4>
		  <p>Using the latest technology available to teat the patients</p>
		</div>
	  </div>
	</div>

	<!-- Container (Portfolio Section) -->
	<div id="portfolio" class="container-fluid text-center bg-grey">
	  <h2>Portfolio</h2><br>
	  <h4>What we have created</h4>
	  <div class="row text-center slideanim">
		<div class="col-sm-4">
		  <div class="thumbnail">
			<img src="./imgs/acc.jpg"width="400" height="300">
			<p><strong>Accommodation</strong></p>
			<p>Best accommodation facilities</p>
		  </div>
		</div>
		<div class="col-sm-4">
		  <div class="thumbnail">
			<img src="./imgs/nurse.jpg"width="400" height="300">
			<p><strong>Careing Service</strong></p>
			<p>Careing service to all the patients</p>
		  </div>
		</div>
		<div class="col-sm-4">
		  <div class="thumbnail">
			<img src="./imgs/tech.jpg"width="400" height="300">
			<p><strong>Latest Technology</strong></p>
			<p>Using the latest technology available</p>
		  </div>
		</div>
	  </div><br>
	  
	  <h2>What our patients told us say</h2>
		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel" style="background:url(./imgs/back.jpg);background-size:cover;width:100%;">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  <div class="item active">
				<h4>"The best service offered . I am so happy with the service!"<br><span>Mr Ruwan Pathirana</span></h4>
			  </div>
			  <div class="item">
				<h4>"Friendly Staff"<br><span>Mrs Shriyani</span></h4>
			  </div>
			  <div class="item">
				<h4>"Good accommodation facilities for addmited patients with good food and bevarages"<br><span>Mr Dhammika</span></h4>
			  </div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<!-- Container (Packages Section) -->
	<div id="pricing" class="container-fluid">
	  <div class="text-center">
		<h2>Packages</h2>
		<h4>Select your package and call us today to enjoy discounts</h4>
	  </div>
	  <div class="row slideanim">
		<div class="col-sm-4 col-xs-12">
			<div class="card">
			  <img src="./imgs/sc_care.jpg" alt="John" style="width:100%">
			  <h3>Senior Citizens Package– Special (Female)</h3>
			  <p class="title">Specially for senior citizens</p>
			  <p>LKR 7,000.00</p>
			  <p  id="dots">....
				<ul id="more" style="display:none;">
					<li>Full Blood Count</li>
					<li>Urine Full Report</li>
					<li>E.S.R.</li>
					<li>Fasting Blood Sugar</li>
					<li>C.A.E</li>
				</ul>
			  </p>
			  <p><button onclick="myFunction()" id="myBtn">Read More</button></p>
			</div>      
		</div>     
		<div class="col-sm-4 col-xs-12">
			<div class="card">
			  <img src="./imgs/surgery2.jpg" alt="John" style="width:100%">
			  <h3>General Surgery – Carpal Tunnel Release</h3>
			  <p class="title">A surgical procedure performed to treat carpal tunnel</p>
			  <p>LKR 20,000.00</p>
			  <p  id="dots2">....
				<ul id="more2" style="display:none;">
					<li>Type of case – Minor</li>
					<li>Anesthesia type – Local /GA</li>
				</ul>
			  </p>
			  <p><button onclick="myFunction2()" id="myBtn2">Read More</button></p>
			</div>     
		</div>       
		<div class="col-sm-4 col-xs-12">
			<div class="card">
			  <img src="./imgs/men.jpg" alt="John" style="width:100%">
			  <h3>Health Packages For Over 50 Years for Men</h3>
			  <p class="title">Middle aged men experience illnesses with age</p>
			  <p>LKR 10,000.00</p>
			  <p  id="dots3">....
				<ul id="more3" style="display:none;">
					<li>Full Blood Count</li>
					<li>Urine Full Report</li>
					<li>E.S.R.</li>
					<li>Fasting Blood Sugar</li>
					<li>C.A.E</li>
				</ul>
			  </p>
			  <p><button onclick="myFunction3()" id="myBtn3">Read More</button></p>
			</div>      
		</div>    
	  </div>
	</div>

	<!-- Container (Contact Section) -->
	<div id="contact" class="container-fluid bg-grey">
	  <h2 class="text-center">COMMENTS</h2>
	  <div class="row">
		<div class="col-sm-5">
		  <p>Contact us and we'll get back to you within 24 hours.</p>
		  <p><span class="glyphicon glyphicon-map-marker"></span> Hospital Rd,Welimada Srilanka</p>
		  <p><span class="glyphicon glyphicon-phone"></span> 057 2558866</p>
		  <p><span class="glyphicon glyphicon-envelope"></span> suwapiyasahospitals@gmail.com</p>
		</div>
		<div class="col-sm-7 slideanim">
		<form method="post">
			<?php
			$con=mysqli_connect("localhost","root","","suwapiyasa");
			if(isset($_POST['post'])){
				$name=$_POST['name'];
				$comment = $_POST['comments'];
				$query="INSERT INTO comment_table(name,comment)values('$name','$comment')";
				$result = mysqli_query($con,$query);
				if($result){
					echo "<script>alert('Thankyou, We value your comments')</script>";
				}else{
					echo "<script>alert('Try again, something went wrong')</script>";
				}		
			}	
			?>
			
			  <div class="row">
				<div class="col-sm-6 form-group">
				  <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
				</div>
			  </div>
			  <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
			  <div class="row">
				<div class="col-sm-12 form-group">
				  <button class="btn btn-default pull-right" type="submit" name="post">Post Comment</button>
				</div>
			  </div>
			</div>
		</form>
	  </div>
	</div>

	
	<img src="./imgs/img_5.jpg" class="w3-image w3-greyscale-min" style="width:100%">

	<footer class="container-fluid bg-grey">
	  <a href="#myPage" title="To Top">
		<center><span class="glyphicon glyphicon-chevron-up"></span></center>
	  </a>
		<div id="footer">
				<center>
				<p>&copy; Project-1<br/>
				Computer Science And Technology<br/>
				Uva Wellassa University</p>
				</center>
		</div>
	</footer>

	<script>
	$(document).ready(function(){
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
	  
	  $(window).scroll(function() {
		$(".slideanim").each(function(){
		  var pos = $(this).offset().top;

		  var winTop = $(window).scrollTop();
			if (pos < winTop + 600) {
			  $(this).addClass("slide");
			}
		});
	  });
	})
	</script>

	</body>
</html>
