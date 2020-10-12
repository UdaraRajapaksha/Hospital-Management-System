<?php session_start(); ?>
<?php
	if(!isset($_SESSION['username'])){
		header('Location: home.php');
	}
?>
<?php
$con=mysqli_connect("localhost","root","","suwapiyasa");
$query="select * from doctor where nic_no='".$_SESSION['username']."'";
$query2 = "SELECT image from login where id='".$_SESSION['username']."'";
$result = mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
    $name = $row['fname'];
    $lname = $row['lname'];
    $type =$row['specialized_area'];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Doctor Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/doctorstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>
  </head>
  <body style="background:url(./imgs/back.jpg);background-size:cover;">
    <div class="row">
      <div class="col-md-12">
        <div class="header">
          <div class="logo" style="margin-left:15px">Suwapiyasa Hospital</div>
        </div>
      </div>
    </div>
    <div class="row">
          <div class="col-md-3">
            <div class="card" style="margin-top:10px; margin-left:10px;">
              <?php
                   $con=mysqli_connect("localhost","root","","suwapiyasa");
                   $query = "SELECT image from login where id='".$_SESSION['username']."'";
                   $result = mysqli_query($con,$query);
                   while($row= mysqli_fetch_array($result)){
                     echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" style="width:100%;height:250px;"/>';
                   }
              ?>
               <div class="container">
                 <h4>Dr. &nbsp;<?php echo $name." ".$lname; ?></h4>
                 <p><?php echo $type ?></p>
                 <p>No.of Appointments today:</p>
                 <?php
            					$con2=mysqli_connect("localhost","root","","suwapiyasa");
            					$date =date("Y-m-d");
            					$sql="SELECT count(nic_no) AS total FROM appointment WHERE doc_id='".$_SESSION['username']."' and date='$date'";
            					$result2=mysqli_query($con2,$sql);
            					$values=mysqli_fetch_assoc($result2);
            					$num_rows=$values['total'];
            					echo  $num_rows;
          				?><br/>
                  <div class="cancel_apt">
                    <ul>
                      <li id="cancel"><a href="logout.php" style="text-decoration:none;color:#fff">Logout</a></li>
                    </ul>
					<form method="post" action="cancel-apmts.php">
						<center><input style="width:250px;"type="submit" name="cancel_apt" class="btn btn-danger" value="Cancel Today Appointments"></center>
					</form>
                  </div>
               </div>
            </div>

          </div>
          <div class="col-md-8" style="background-color:black;opacity:0.7;border-radius:5px;">
            <div class="sub_nav" style="padding-top:30px;">
				<div class="navbar">
					<a onclick="document.getElementById('welcome').style.display='none';document.getElementById('appoitments').style.display='inline';document.getElementById('mg-profile').style.display='none';document.getElementById('patients').style.display='none';"><i class="glyphicon glyphicon-user"></i> Appointments</a>
					<a onclick="document.getElementById('welcome').style.display='none';document.getElementById('mg-profile').style.display='inline';document.getElementById('appoitments').style.display='none';document.getElementById('patients').style.display='none';"><i class="glyphicon glyphicon-camera"></i> Manage Profile</a>
					<a onclick="document.getElementById('welcome').style.display='none';document.getElementById('patients').style.display='inline';document.getElementById('appoitments').style.display='none';document.getElementById('mg-profile').style.display='none';"><i class="glyphicon glyphicon-plus"></i> Register Patient</a>
					<a href="patienthistory.php"><i class="glyphicon glyphicon-search"></i>Patient History</a>
				</div>
            </div>

              <div id="welcome" style="display:inline;">
                <h1 style="margin-left:40px;font-size:70px;">Suwapiyasa Hospitals Welimada</h1>
              </div>
              <!------------------------------Appointments------------------------------------------->
              <div id="appoitments" style="display:none;">
                  <div class="card" style="margin-top:10px">
            				<div class="card-body">
            					<center><h4 style="text-decoration:underline;">Appointment Details</h4></center>
              				<div class="card-body" >
                  					<table id="txt" class="table table-hover"style="margin-top:10px;color:black;">
                  						<thead>
                  							<tr>
                  							  <th scope="col">First Name</th>
                  							  <th scope="col">Last Name</th>
                  							  <th scope="col">NIC Number</th>
                  							  <th scope="col">Telephone</th>
                  							  <th scope="col">Email</th>
                  							  <th scope="col">Date</th>
                  							</tr>
                  						</thead>
                  						  <tbody>
                  							<?php
                  								$con=mysqli_connect("localhost","root","","suwapiyasa");
												$date =date("Y-m-d");
												$query="select * from appointment WHERE doc_id='".$_SESSION['username']."' AND date>='$date'";
                  								$result=mysqli_query($con,$query);
                  								while($row=mysqli_fetch_array($result)){
                  								$fname = $row['fname'];
                  								$lname = $row['lname'];
                  								$nic = $row['nic_no'];
                  								$phone = $row['contact'];
                  								$email = $row['email'];
                  								$date = $row['date'];
                  								echo "<tr>
                  										<td>$fname</td>
                  										<td>$lname</td>
                  										<td>$nic</td>
                  										<td>$phone</td>
                  										<td>$email</td>
                  										<td>$date</td>
                  									  </tr>";
                  							}
                  							?>
                  						  </tbody>
                  					</table>
              				</div>
            				</div>
            			</div>
                </div>
                <!-------------------------------------------------------------------------------------->

                <!-------------------------------------Manage Profile----------------------------------->
                <div id="mg-profile" style="display:none;">
                  <div class="card-body" style="background-color:#262626;color:white;padding-top:10px;margin-top:20px;">
                  <center><h5 style="color:white;font-size:25px">Manage My Profile</h5></center>
                  </div>
                  <form class="form-group" method="post" enctype="multipart/form-data">
					<?php
						$con=mysqli_connect("localhost","root","","suwapiyasa");
						if(isset($_POST['edit_profile'])){
						  $phone = $_POST['tele'];
						  $time = $_POST['time'];
						  $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
						  $hospital = $_POST['hospital'];
						  $username = $_POST['username'];
						  $password = $_POST['password'];

						  $query1 = "UPDATE doctor Set contact='$phone', time='$time',hospital='$hospital' WHERE nic_no='".$_SESSION['username']."'";
						  $result=mysqli_query($con,$query1);
						  if($result){
							$encripted_pass = sha1($password);
							$query2 = "UPDATE login Set username='$username',password='$encripted_pass',image='$image' WHERE id='".$_SESSION['username']."'";
							$result2=mysqli_query($con,$query2);
							if($result2){
							  echo "<script>alert('Profile Altered')</script>";
							  echo "<script>window.open('doctor.php','_self')</script>";
							}else{
							  echo "<script>alert('Somethig Went Wrong')</script>";
							  echo "<script>window.open('doctor.php','_self')</script>";
							}
						  }else{
							echo "<script>alert('Somethig Went Wrong')</script>";
							echo "<script>window.open('doctor.php','_self')</script>";
						  }
						}
					?>
       				<label>Contact Number:</label><input type="text" class="form-control" name="tele" required pattern="[0]{1}[1-9]{9}" title="Please enter number to correct format"></br>
       				<label>Time:</label><input type="time" class="form-control" name="time" required></br>
					<label>Hospital:</label><input type="text" class="form-control" name="hospital" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
      				<label>Profile Picture</label><input type="file" name="image" id="image"><br/>
					<label>Username:</label><input type="text" class="form-control" name="username" required title="Please enter a username"></br>
       				<label>Password:</label><input type="password" class="form-control" name="password" required title="Please enter a password"></br>
       				<input type="submit" name="edit_profile" value="Edit Profile" class="btn btn-primary" id="book_btn">
       			  </form>
                </div>
                <!-------------------------------------------------------------------------------------------->

                <!-------------------------------------------Patients--------------------------------------------->
                <div id="patients" style="display:none;">
                  <form class="form-group" action="" method="post">
                          <?php
                          $con=mysqli_connect("localhost","root","","suwapiyasa");
                          if(isset($_POST['register'])){
                            $fname = $_POST['fname'];
                            $lname = $_POST['lname'];
                            $nic = $_POST['nic'];
                            $phone = $_POST['tele'];
                            $priscription = $_POST['priscription'];
                            $date = date("Y-m-d");
							$doc_id = $_SESSION['username'];
							//echo $doc_id;
                            $query = "INSERT INTO patient_history(fname,lname,nic_no,contact,priscription,date,doc_id)values('$fname','$lname','$nic','$phone','$priscription','$date','$doc_id')";
                            $result=mysqli_query($con,$query);
                            if($result){
                              echo "<script>alert('Registered')</script>";
                             // echo "<script>window.open('doctor.php','_self')</script>";
                            }else{
                              echo "<script>alert('Somethig Went Wrong')</script>";
                              //echo "<script>window.open('doctor.php','_self')</script>";
                            }
                          }
                          ?>
                        <label>First Name:</label><input type="text" class="form-control" name="fname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
                        <label>Last Name:</label><input type="text" class="form-control" name="lname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
                        <label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[0-9]{9}[v]" title="Please enter NIC to correct format"></br>
                        <label>Contact Number:</label><input type="text" class="form-control" name="tele" required pattern="[0]{1}[1-9]{9}" title="Please enter NIC to correct format"></br>
                        <label>Prescription And Diagnostics</label><textarea class="form-control" name="priscription" required></textarea></br>
                        <input type="submit" name="register" value="Register" class="btn btn-primary">
						<div id="HTMLtoPDF">
							<?php
								if(isset($_POST['register'])){
									$nic = $_POST['nic'];
									$date = date("Y-m-d");
									$query2 ="SELECT * from patient_history WHERE nic_no='$nic' AND date='$date'";
									$result2=mysqli_query($con,$query2);
									while($row2=mysqli_fetch_array($result2)){
										$code = $row2['priscription'];
										$Nic = $row2['nic_no'];
										$code = $row2['priscription'];
										echo "<center><b style='color:white'>Date</b>:<b style='color:white'>$date</b><center><br/>";
										echo "<center><b style='color:white'>Nic No</b>:<b style='color:white'>$Nic</b><center><br/>";
										echo "<center><b style='color:white'>Prescription</b>:<b style='color:white'>$code</b></center><br/>";
									}	
								}	
							?>
						</div>
						 <a href="#" onclick="HTMLtoPDF()">Download PDF</a>
                  </form>
				  
				 
                </div>
                <!----------------------------------------------------------------------------------------------------->
          </div>
    </div>
  </body>
</html>
