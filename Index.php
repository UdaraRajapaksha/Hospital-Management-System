<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
      <title>Suwapiyasa Hospitals</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="./bootstrap-3.3.6-dist/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="./css/navbar.css">
      <link rel="stylesheet" type="text/css" href="./css/style_index.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      
      
	  <script src="./JQuery Library.js"></script>
	  <script src="./bootstrap-3.3.6-dist/js/bootstrap.js"></script>
	  
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  
	  
  </head>
  <body>

      <div class="row">
		<div class="col-md-12">
			<div id="navigator">
				<header>
				  <div class="logo">Suwapiyasa Hospital</div>
				  <nav>
					<ul>
					  <li><a href="#" class="active">Home</a></li>
					  <li><a href="#">Services</a></li>
					  <li><a href="#">Staff</a></li>
					  <li><a href="#">Contact</a></li>
					  <li><a href="login.php">Login</a></li>
					</ul>
				  </nav>
				  <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i>
				  </div>
				</header>
				<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
				<script type="text/javascript">
				  $(document).ready(function(){
					$('.menu-toggle').click(function(){
					  $('nav').toggleClass('active')
					})
				  })
				</script>
			  </div>
		</div>  
       </div>
	   
	   <div class="row">
			<div class="col-md-12">
				  <div class="middle" style="width:100%;margin-top:50px;height:70%;">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img id="img_sli" src="./imgs/img_3.jpg" alt="./photoes/31.jpg"">
									<div class="carousel-caption">
									
									</div>
							</div>
							<div class="item">
								<img id="img_sli" src="./imgs/img_4.jpg" alt="..." >
									<div class="carousel-caption">
									
									</div>
							</div>
							<div class="item">
								<img id="img_sli" src="./imgs/img_5.jpg" alt="...">
									<div class="carousel-caption">
									
									</div>
							</div>
						</div>

						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				  </div>
			</div>
	   </div>
      <div class="middle-text">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <h3 id="headding">Welcome To Suwapiyasa Hospitals</h3>
                <p id="text">Suwapiyas Hospitals is the most accredited hospital in the healthcare sector.
                  Since 2002, Lanka Hospitals has revolutionized the healthcare
                  industry through infrastructure development and advancement
                  of products and services, with a view to deliver healthcare that is on par with global medical standards. </p>
                  <center><a href="apmt.php" class="btn btn-half">Book an Appointment</a><center>
            </div>
            <div class="col-md-1">
            </div>
          </div>
      </div>
	  <br/>
		<div class="cc">
		
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-2">
					<center>
					<h4>Trust</h4>
					<div class="chart" data-percent="83"></div>
					</center>
				</div>
				<div class="col-md-2">
					<center>
					<h4>Care</h4>
					<div class="chart" data-percent="83"></div>
					</center>
				</div>
				<div class="col-md-2">
					<center>
					<h4>Excellence</h4>
					<div class="chart" data-percent="83"></div>
					</center>
				</div>
				<div class="col-md-3">
				</div>
				<script src="jquery.easypiechart.js"></script>
				<script>
					$(function() {
						$('.chart').easyPieChart({
							//your options goes here
						});
					});
				</script>
			</div>
		
		</div>
		<div id="staff">
			<center><h3 id="headding" style="font-size:45px;">Experianced Doctors</h3></center>
			<br>
			<div class="row">
				<div class="col-md-3">
					<div class="card">
					  <img src="./imgs/pic2.png" alt="John" style="width:100%">
					  <h1>Dr.Pubudu Ranasinghe</h1>
					  <p class="title">Visiting Physician(VP)</p>
					  <p>General Hospital Badulla</p>
					  <a href="#"><i class="fa fa-dribbble"></i></a>
					  <a href="#"><i class="fa fa-twitter"></i></a>
					  <a href="#"><i class="fa fa-linkedin"></i></a>
					  <a href="#"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
					  <img src="./imgs/pic5.jpg" alt="John" style="width:100%">
					  <h1>Dr.Yasantha Fonseka</h1>
					  <p class="title">Cardiologist</p>
					  <p>General Hospital Nuwara Eliya</p>
					  <a href="#"><i class="fa fa-dribbble"></i></a>
					  <a href="#"><i class="fa fa-twitter"></i></a>
					  <a href="#"><i class="fa fa-linkedin"></i></a>
					  <a href="#"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
					  <img src="./imgs/pic1.png" alt="John" style="width:100%">
					  <h1>Dr.Samadini Withanage</h1>
					  <p class="title">Obstetrician & Gynecologist (vog)</p>
					  <p>General Hospital Badulla</p>
					  <a href="#"><i class="fa fa-dribbble"></i></a>
					  <a href="#"><i class="fa fa-twitter"></i></a>
					  <a href="#"><i class="fa fa-linkedin"></i></a>
					  <a href="#"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
					  <img src="./imgs/pic3.png" alt="John" style="width:100%">
					  <h1>Dr.Saneth Mahadoowage</h1>
					  <p class="title">ENT Surgen</p>
					  <p>General Hospital Badulla</p>
					  <a href="#"><i class="fa fa-dribbble"></i></a>
					  <a href="#"><i class="fa fa-twitter"></i></a>
					  <a href="#"><i class="fa fa-linkedin"></i></a>
					  <a href="#"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
		</div>
		
		
  </body>
</html>
