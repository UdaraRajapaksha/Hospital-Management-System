<!DOCTYPE html>
<html>
	<head>
		<title>Book an Appointment</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./bootstrap-3.3.6-dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="./JQuery Library.js"></script>
		<script src="./bootstrap-3.3.6-dist/js/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="./css/homestyle.css">
		<link rel="stylesheet" type="text/css" href="./css/navbar.css">
		<link rel="stylesheet" type="text/css" href="./css/apmtstyle.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href = "https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script> 
			$(document).ready(function () {
					var minDate = new Date();
					$("#date").datepicker({
						showAnim: 'drop',
						numberOfMonth: 1,
						minDate: minDate,
						dateFormat:'yy/mm/dd'
						
					});
			})
		</script>
	</head>
	<body style="background:url(./imgs/back.jpg);background-size:cover;">
		<div class="row">
			<div class="col-md-12">
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
						<li><a href="home.php#about">ABOUT</a></li>
						<li><a href="home.php#services">SERVICES</a></li>
						<li><a href="home.php#portfolio">PORTFOLIO</a></li>
						<li><a href="home.php#pricing">PACKAGES</a></li>
						<li><a href="home.php#contact">CONTACT</a></li>
					  </ul>
					</div>
				  </div>
				</nav>
			</div>
		</div>  
		 <div class="container" style="margin-top:65px;">
			<div class="row">
				<div class="col-md-6" style="background-color:black;opacity:0.7;border-radius:2px;">
					<h1 id="heading">Suwapiyasa Channeling</h1>
					<hr>
					<h3 style="color:white;">Doctor Information</h3>
					<hr>
					<p style="color:white;">Prior your booking check the availability of the consultant. Incase if you experiance any 
					problem Please make sure you call Suwapiyasa Hospital and reserve a Date & Time</p>
					 
					 
					<form class="form-group" method="post">
						<?php
							use PHPMailer\PHPMailer\PHPMailer;
							use PHPMailer\PHPMailer\Exception;
							require 'vendor/autoload.php';
							$mail = new PHPMailer(true);
							$con=mysqli_connect("localhost","root","","suwapiyasa");
							if(isset($_POST['book_apt'])){
								$fname = $_POST['fname'];
								$lname = $_POST['lname'];
								$nic = $_POST['nic'];
								$phone = $_POST['tele'];
								$email = $_POST['email'];
								$date = $_POST['date'];
								$mindate = date("Y-m-d");
								$doct = $_POST['docapt'];
								$query="SELECT nic_no from doctor where specialized_area='$doct'";
								$result8=mysqli_query($con,$query);
								$row=mysqli_fetch_array($result8);
								$doc_id = $row[0];
								
								$sql="SELECT count(no) AS total FROM appointment WHERE doctor='$doct' and date='$date'";
								$result2=mysqli_query($con,$sql);
								$values=mysqli_fetch_assoc($result2);
								$num_rows=$values['total'];
								$max = 20;
								if($num_rows>=$max){
									echo "<script>alert('Cannot book appointments for the day, Maximum appointments reached')</script>";
								}else{	
									$query1 = "INSERT INTO appointment(fname,lname,nic_no,email,contact,doctor,doc_id,date)VALUES('$fname','$lname','$nic','$email','$phone','$doct','$doc_id','$date')";
									$result=mysqli_query($con,$query1);
									if($result){
											echo "<script>alert('Appointment Registered. A detailed Email has been sent to you.')</script>";
											try {
											//Server settings
										   // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
											$mail->isSMTP();                                      // Set mailer to use SMTP
											$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
											$mail->SMTPAuth = true;                               // Enable SMTP authentication
											$mail->Username = 'suwapiyasahospitals@gmail.com';                 // SMTP username
											$mail->Password = 'himath159';                           // SMTP password
											$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
											$mail->Port = 587;                                    // TCP port to connect to

											//Recipients
											$mail->setFrom('suwapiyasahospitals@gmail.com', 'Suwapiyasa Hospital');
											$mail->addAddress("$email");     // Add a recipient
											$content = 'Dear <b>'.$fname.'!</b> your appointment has been scheduled for '.$date.'. we will be in touch with you for further details';
											//Content
											$mail->isHTML(true);                                  // Set email format to HTML
											$mail->Subject = 'Appointment Details';
											$mail->Body    = $content;

											$mail->send();
														//echo 'Message has been sent';
											} catch (Exception $e) {
												echo "<script>alert('Message cannot be sent')</script>";//echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
											}
									}
									else{
										echo "<script>alert('Somthing Went Wrong')</script>";
									}
								}
							}
						?>
						<label>First Name:</label><br><input type="text" class="form-control" name="fname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
						<label>Last Name:</label><br><input type="text" class="form-control" name="lname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
						<label>NIC Number:</label><br><input type="text" class="form-control" name="nic" pattern="[0-9]{9}[v]" required  title="Please enter NIC to correct format"></br>
						<label>Email:</label><br><input type="email" class="form-control" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please enter Email to correct format"></br>
						<label>Contact Number:</label><br><input type="text" class="form-control" name="tele" required pattern="[0]{1}[1-9]{9}" title="Please enter NIC to correct format"></br>
						<label>Select Doctor:</label><br><select class="form-control" name="docapt" required>
									<option hidden >Select Specialist</option>
									<option value="ENT">ENT Surgen</option>
									<option value="VOG">VOG</option>
									<option value="Cardiologist">Cardiologist</option>
									<option value="EYE">EYE Surgen</option>
									<option value="VP">VP</option>
									</select><br/>
						<label  for="date">Date:</label><input  class="form-control" id="date" required placeholder="Select Date" name="date" autocomplete="off"><br>
						<input type="submit" name="book_apt" value="Book Appointment" class="btn btn-primary" id="book_btn">
					</form>
				</div>
				 <div class="col-md-6" style="background-color:black;opacity:0.7;border-radius:2px;">
					 <div id="time_table" style="padding-top:100px;">
							<form class="form-group" action="adminfunc.php" method="post">
								 <table class="table table-hover" style="margin-top:20px;" id="userTbl">
										 <?php
											 $con=mysqli_connect("localhost","root","","suwapiyasa");
											 $query="SELECT * FROM doctor";
											 $search_result=mysqli_query($con,$query);
											?>
										 <tr style="color:white;background-color:#262626">
											 <th>Doctor</th>
											 <th>Specialized Area</th>
											 <th>Hospital</th>
											 <th>Available Time</th>
										 <tr>
											 <tbody>
											 <?php while($row=mysqli_fetch_array($search_result)):?>
											 <tr>
												 <td><?php echo $row['fname'];?><?php echo" "?><?php echo $row['lname'];?></td>
												 <td><?php echo $row['specialized_area'];?></td>
												 <td><?php echo $row['hospital'];?></td>
												 <td><?php echo $row['time'];?></td>
											 </tr>
											 <?php endwhile;?>
											 </tbody>
									 </table>
							</form>
					 </div>
					 <div class="tandc">
						<h2 style="color:white;">Terms and Conditions</h2>

						<p style="color:white;"><strong>Important</strong></p>

						<p style="color:white;">Incase if the Doctor is unable to come, the appointment is cancelled. If so, the patient is notified via a SMS message therefore the patients are requested to enter a valied telephone number.</p>
						<p style="color:white;">A Detailed E-mail will be sent to the patient after booking an appointment, the patient is kindly requested to check the E-mail and contact Suwapiyasa Hospital if there are any changes</p>
						<p style="color:white;">The maximum number of appointments for a doctor per day is 30 and the patients will not be able to book an appointment if the maximum number is reached, In such cases the patients are requested to contact Suwapiyasa Hospital to inquire possible slots</p>
						<p></p>
					</div>
				 </div>
				 
			 </div>
		 </div>
	</body>
</html>
