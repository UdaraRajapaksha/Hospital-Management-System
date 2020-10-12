<?php session_start(); ?>
<?php
	if(!isset($_SESSION['username'])){
		header('Location: home.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Admin Dashboard</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="./css/newadminstyle.css">
   <link rel="stylesheet" type="text/css" href="./css/navbar.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script language="JavaScript" type="text/javascript">
	$(document).ready(function(){
		$("a.delete").click(function(e){
			if(!confirm('Are you sure?')){
				e.preventDefault();
				return false;
			}
			return true;
		});
	});
	</script>
  </head>
  <body style="background:url(./imgs/back.jpg);background-size:cover;">
	<div class="header" >
		<div class="row">
			<div class="col-md-12">
				<div class="logo" style="margin-left:15px">Suwapiyasa Hospital</div>
			</div>
		</div>
	</div>
	<!-- The sidebar -->
	
		<div class="sidebar">
		  <a onclick="document.getElementById('admit_form').style.display='inline';document.getElementById('view-apmt').style.display='none';document.getElementById('Add_Doctor').style.display='none';document.getElementById('Add_Staff').style.display='none';document.getElementById('Remove_Staff').style.display='none';document.getElementById('Staff_salary').style.display='none';document.getElementById('view-ward').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('Remove_doctor').style.display='none';document.getElementById('assign').style.display='none';">Register Patient to ward</a>
		  <a onclick="document.getElementById('view-apmt').style.display='inline';document.getElementById('admit_form').style.display='none';document.getElementById('Add_Doctor').style.display='none';document.getElementById('Add_Staff').style.display='none';document.getElementById('Remove_Staff').style.display='none';document.getElementById('Staff_salary').style.display='none';document.getElementById('view-ward').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('Remove_doctor').style.display='none';document.getElementById('assign').style.display='none';">View All Appointments</a>
		  <a onclick="document.getElementById('Add_Doctor').style.display='inline';document.getElementById('view-apmt').style.display='none';document.getElementById('admit_form').style.display='none';document.getElementById('Add_Staff').style.display='none';document.getElementById('Remove_Staff').style.display='none';document.getElementById('Staff_salary').style.display='none';document.getElementById('view-ward').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('Remove_doctor').style.display='none';document.getElementById('assign').style.display='none';">Add Doctor</a>
		  <a onclick="document.getElementById('Remove_doctor').style.display='inline';document.getElementById('view-apmt').style.display='none';document.getElementById('admit_form').style.display='none';document.getElementById('Add_Staff').style.display='none';document.getElementById('Remove_Staff').style.display='none';document.getElementById('Staff_salary').style.display='none';document.getElementById('view-ward').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('assign').style.display='none';">Remove Doctor</a>
		  <a onclick="document.getElementById('Add_Staff').style.display='inline';document.getElementById('view-apmt').style.display='none';document.getElementById('admit_form').style.display='none';document.getElementById('Add_Doctor').style.display='none';document.getElementById('Remove_Staff').style.display='none';document.getElementById('Staff_salary').style.display='none';document.getElementById('view-ward').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('Remove_doctor').style.display='none';document.getElementById('assign').style.display='none';">Add Staff Member</a>
		  <a onclick="document.getElementById('Remove_Staff').style.display='inline';document.getElementById('view-apmt').style.display='none';document.getElementById('admit_form').style.display='none';document.getElementById('Add_Staff').style.display='none';document.getElementById('Add_Doctor').style.display='none';document.getElementById('Staff_salary').style.display='none';document.getElementById('view-ward').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('Remove_doctor').style.display='none';document.getElementById('assign').style.display='none';">Remove Staff Member</a>
		  <a onclick="document.getElementById('Staff_salary').style.display='inline';document.getElementById('Remove_Staff').style.display='none';document.getElementById('view-apmt').style.display='none';document.getElementById('admit_form').style.display='none';document.getElementById('Add_Staff').style.display='none';document.getElementById('Add_Doctor').style.display='none';document.getElementById('view-ward').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('Remove_doctor').style.display='none';document.getElementById('assign').style.display='none';">Enter Staff Salary</a>
		  <a onclick="document.getElementById('view-ward').style.display='inline';document.getElementById('Staff_salary').style.display='none';document.getElementById('Remove_Staff').style.display='none';document.getElementById('view-apmt').style.display='none';document.getElementById('admit_form').style.display='none';document.getElementById('Add_Staff').style.display='none';document.getElementById('Add_Doctor').style.display='none';document.getElementById('discharge-ward').style.display='none';document.getElementById('Remove_doctor').style.display='none';document.getElementById('assign').style.display='none';">View Ward Details</a>
		  <a onclick="document.getElementById('discharge-ward').style.display='inline';document.getElementById('view-ward').style.display='none';document.getElementById('Staff_salary').style.display='none';document.getElementById('Remove_Staff').style.display='none';document.getElementById('view-apmt').style.display='none';document.getElementById('admit_form').style.display='none';document.getElementById('Add_Staff').style.display='none';document.getElementById('Add_Doctor').style.display='none';document.getElementById('Remove_doctor').style.display='none';document.getElementById('assign').style.display='none';">Discharge Patient</a>
		  <a onclick="document.getElementById('assign').style.display='inline';document.getElementById('discharge-ward').style.display='none';document.getElementById('view-ward').style.display='none';document.getElementById('Staff_salary').style.display='none';document.getElementById('Remove_Staff').style.display='none';document.getElementById('view-apmt').style.display='none';document.getElementById('admit_form').style.display='none';document.getElementById('Add_Staff').style.display='none';document.getElementById('Add_Doctor').style.display='none';document.getElementById('Remove_doctor').style.display='none';">Reset password</a>
		 
		  <a href="logout.php">Logout</a>
		</div>

		<!-- Page content -->
		<div class="content" style="background-color:black;opacity:0.7;color:white;">
			<div class="sub_content" style="margin-top:50px;">
				   <!--- Register Patients to ward------------------>
				   <div id="admit_form" style="margin-top:50px;">
					<div class="card">
						<div class="card-body" style="background-color:#262626;color:white;padding-top:10px;margin-top:20px;">
							<center><h5 style="color:white;font-size:25px">Register patient to ward</h5></center>
						</div>
						<div class="card-body" >
							<form class="form-group" method="post">
								<?php
									$con=mysqli_connect("localhost","root","","suwapiyasa");
									if(isset($_POST['admit'])){
										$fname = $_POST['fname'];
										$lname = $_POST['lname'];
										$nic = $_POST['nic'];
										$phone = $_POST['tele'];
										$doct = $_POST['docapt'];
										$date = date("Y-m-d");
										$sql="SELECT count(number) AS total FROM ward";
										$result2=mysqli_query($con,$sql);
										$values=mysqli_fetch_assoc($result2);
										$num_rows=$values['total'];
										$max_number = 10;
										if($num_rows!=$max_number){
											$query = "INSERT INTO ward(fname,lname,nic_no,contact,doctor,date)values('$fname','$lname','$nic','$phone','$doct','$date')";
											$result=mysqli_query($con,$query);
											if($result){
												echo "<script>alert('Patient registered to ward')</script>";
											}else{
												echo "<script>alert('Something went wrong')</script>";
											}	
										}else{
											echo "<script>alert('Cannot Register Patient To Ward There are no free beds available')</script>";
										}	
									}
								?>
								<label>First Name:</label><input type="text" class="form-control" name="fname" id="admit-fname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
								<label>Last Name:</label><input type="text" class="form-control" name="lname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
								<label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[0-9]{9}[v]" title="Please enter NIC to correct format"></br>
								<label>Contact Number:</label><input type="text" class="form-control" name="tele" required pattern="[0]{1}[1-9]{9}" title="Please enter number to correct format"></br>
								<label>Select Doctor:</label><select class="form-control" name="docapt" required>
																<option hidden >Select Specialist</option>
																<option value="ENT">ENT Surgen</option>
																<option value="VOG">VOG Surgen</option>
																<option value="Cardiologist">Cardiologist</option>
																<option value="EYE">EYE Surgen</option>
																<option value="VP">VP Surgen</option>
															</select><br/>
								<input type="submit" name="admit" value="Register patient to ward" class="btn btn-primary">
							</form>
						</div>
					</div>
				  </div>
				  <!-- End of Register Patients to ward----------->
				  
				  <!-- View All Appointments---------------------------------------------->
				  <div id="view-apmt" style="display:none;margin-top:70px;">
					<table class="table table-hover"id="userTbl">
						<?php
						  $con=mysqli_connect("localhost","root","","suwapiyasa");
						  $date = date("Y-m-d");
						  $query="SELECT * FROM appointment WHERE date>='$date'";
						  $search_result=mysqli_query($con,$query); 
						 ?>
						<tr id="txt">
							<th>First Name</th>
							<th>Last Name</th>
							<th>NIC No</th>
							<th>email</th>
							<th>Telephone</th>
							<th>Doctor</th>
							<th>Appointment Date</th>
						<tr>
						  <tbody>
								<?php while($row=mysqli_fetch_array($search_result)):?>
								<tr id="txt">
									<td><?php echo $row['fname'];?></td>
									<td><?php echo $row['lname'];?></td>
									<td><?php echo $row['nic_no'];?></td>
									<td><?php echo $row['email'];?></td>
									<td><?php echo $row['contact'];?></td>
									<td><?php echo $row['doctor'];?></td>
									<td><?php echo $row['date'];?></td>
								</tr>
								<?php endwhile;?>
						  </tbody>
					</table>
				  </div>
				  
				  <!-- End of View All Appointments---------------------------------------------->
				  
				  <!-- Add new Doctor ------------------>
						<div id="Add_Doctor" style="display:none;margin-top:50px;">
							<div class="card-body" style="background-color:#262626;color:white;padding-top:10px;margin-top:50px;">
								<center><h5 style="color:white;font-size:25px">Add Doctor</h5></center>
							</div>

								<form method="post" action="" enctype="multipart/form-data">
								<?php
								$con=mysqli_connect("localhost","root","","suwapiyasa");
								if(isset($_POST['reg_doc'])){
								  $fname = $_POST['fname'];
								  $lname = $_POST['lname'];
								  $nic = $_POST['nic'];
								  $phone = $_POST['tele'];
								  $hospital = $_POST['hospital'];
								  $time = $_POST['time'];
								  $email = $_POST['mail'];
								  $abstype = $_POST['doct_type'];
								  $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
								  $username = $_POST['username'];
								  $password = $_POST['password'];
								  $encripted_pass = sha1($password);
								  $sql="SELECT count(number) AS total FROM doctor WHERE specialized_area='$abstype'";
									$result2=mysqli_query($con,$sql);
									$values=mysqli_fetch_assoc($result2);
									$num_rows=$values['total'];
								
									if($num_rows>0){
										echo "<script>alert('Cannot add the same doctor type twice')</script>";
									}else{	
									  $query ="INSERT INTO login(id,username,password,type,abstype,image)values('$nic','$username','$encripted_pass','Doctor','$abstype','$image')";
									  $result1 = mysqli_query($con,$query);
									  if($result1){
										$query2 ="INSERT INTO doctor(fname,lname,email,contact,specialized_area,nic_no,hospital,time)values('$fname','$lname','$email','$phone','$abstype','$nic','$hospital','$time')";
										$result2 = mysqli_query($con,$query2);
										if($result2){
											echo "<script>alert('Doctor Added')</script>";
										}else{
											echo "<script>alert('Error')</script>";
										}		
									  }else{
										echo "<script>alert('Doctor Not Added')</script>";
									  }	
									}
								}
								?>
								<label>First Name:</label><input type="text" class="form-control" name="fname" id="admit-fname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
								<label>Last Name:</label><input type="text" class="form-control" name="lname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
								<label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[0-9]{9}[v]" title="Please enter NIC to correct format"></br>
								<label>Contact Number:</label><input type="text" class="form-control" name="tele" required pattern="[0]{1}[1-9]{9}" title="Please enter NIC to correct format"></br>
								<label>Hospital:</label><input type="text" name="hospital" class="form-control" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"><br/>
								<label>Time:</label><input type="time" name="time" class="form-control" required><br/>
								<label>Email:</label><input type="email" name="mail" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"><br/>
								<label>Specialized Area:</label><select class="form-control" name="doct_type" required>
												<option hidden >Select Type</option>
												<option value="ENT">ENT</option>
												<option value="EYE">Eye Surgeon</option>
												<option value="Cardiologist">Cardiologist</option>
												<option value="VP">VP</option>
												<option value="VOG">VOG</option>
								</select><br/>
								<label>Profile Picture</label><input type="file" name="image" id="image" required><br/>
								<label>Username:</label><input type="text"  name="username" class="form-control" required></br>
								<label>Password:</label><input type="password"  name="password" class="form-control" required></br>
								<input type="submit" name="reg_doc" value="Register" class="btn btn-primary">
							  </form>
						</div>
				  <!--------------End Of Add Doctor---------------------->
				  <!-------------- Remove Doctor------------------------->
					<div id="Remove_doctor" style="display:none;margin-top:70px;">
						<div class="card-body" style="background-color:#262626;color:white;">
							<center><h5 style="color:white;font-size:25px">Remove Doctor</h5></center>
						</div>
						<form method="post">
							<?php
								$con=mysqli_connect("localhost","root","","suwapiyasa");
								if(isset($_POST['rem_doc'])){
									$nic = $_POST['nic'];
									$query = "DELETE FROM doctor WHERE nic_no='$nic'";
									$result = mysqli_query($con,$query);
									if($result){
										$query2 = "DELETE FROM login WHERE id='$nic'";
										$result2 = mysqli_query($con,$query2);
										if($result2){
											echo"<script>alert('Successfull')</script>";
										}else{
											echo"<script>alert('Fail')</script>";
										}	
									}else{
										echo"<script>alert('Something Wrong')</script>";
									}	
								}	
							?>
							<label>NIC Number of Doctor:</label><input type="text" class="form-control" name="nic" required pattern="[0-9]{9}[v]" title="Please enter NIC to correct format"></br>
							<input type="submit" name="rem_doc" value="Remove" class="btn btn-danger">
						</form>
						<br/>
						<table class="table table-hover"id="userTbl">
							<?php
							  $con=mysqli_connect("localhost","root","","suwapiyasa");
							  $date = date("Y-m-d");
							  $query="SELECT * FROM doctor";
							  $search_result=mysqli_query($con,$query); 
							 ?>
							<tr id="txt">
								<th>First Name</th>
								<th>Last Name</th>
								<th>NIC No</th>
								<th>Specialized Area</th>
								<th>DELETE</th>
							<tr>
							  <tbody>
									<?php while($row=mysqli_fetch_array($search_result)):?>
									<tr id="txt">
										<td><?php echo $row['fname'];?></td>
										<td><?php echo $row['lname'];?></td>
										<td><?php echo $row['nic_no'];?></td>
										<td><?php echo $row['specialized_area'];?></td>
										<td><b><a id="dele" style="color:red;" href="delete.php?nic_no=<?php echo $row['nic_no'];?>" class="delete">Delete</a></b></td>
									</tr>
									<?php endwhile;?>
							  </tbody>
						</table>
					</div>
				  <!----------------------------------------------------->
				  <!-------------- Add Staff Member --------------------->
					<div id="Add_Staff" style="display:none;margin-top:70px;">
						<div class="card-body" style="background-color:#262626;color:white;">
							<center><h5 style="color:white;font-size:25px">Add Staff</h5></center>
						</div>

						<form method="post" action="" enctype="multipart/form-data">
								<?php
								$con=mysqli_connect("localhost","root","","suwapiyasa");
								if(isset($_POST['reg_staff'])){
								  $number = $_POST['number'];
								  $fname = $_POST['fname'];
								  $lname = $_POST['lname'];
								  $nic = $_POST['nic'];
								  $phone = $_POST['tele'];
								  $email = $_POST['mail'];
								  $abstype = $_POST['staff_type'];
								  //$type = $_POST['s_type'];
								  $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
								  $username = $_POST['username'];
								  $password = $_POST['password'];
								  $encripted_pass = sha1($password);
								  $query ="INSERT INTO login(id,username,password,type,abstype,image)values('$nic','$username','$encripted_pass','Staff','$abstype','$image')";
								  $result=mysqli_query($con,$query);
								  if($result){
									$query2 ="INSERT INTO staff(number,firstname,lastname,contact,email,type,nic_no)values('$number','$fname','$lname','$phone','$email','$abstype','$nic')";
									$result2=mysqli_query($con,$query2);
									if($result2){
									  echo"<script>alert('Successfull')</script>";
									}else{
									  echo"<script>alert('Fail')</script>";
									}
								  }else{
									echo"<script>alert('Not Successfull')</script>";
								  }
								}
								?>
							<label>Emp Number:</label><input type="text" name ="number" class="form-control" required pattern="[s][0-9][1-9]"><br/>
							<label>First Name:</label><input type="text" class="form-control" name="fname" id="admit-fname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
							<label>Last Name:</label><input type="text" class="form-control" name="lname" required pattern="[a-zA-Z]{3,}" title="Please enter a valied name"></br>
							<label>Contact Number:</label><input type="text" class="form-control" name="tele" required pattern="[0]{1}[1-9]{9}" title="Please enter NIC to correct format"></br>
							<label>Email:</label><input type="email" name="mail"class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"><br/>
							<label>Staff Type:</label><select class="form-control" name="staff_type" required>
														<option hidden >Select Type</option>
														<option value="Optition">Optition</option>
														<option value="X-Ray">X-Ray Technition</option>
														<option value="Nurse">Nurse</option>
													  </select><br/>
							<label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[0-9]{9}[v]" title="Please enter NIC to correct format"></br>
							<label>Profile Picture</label><input type="file" name="image" id="image" required><br/>
							<label>Username:</label><input type="text"  name="username" class="form-control" required></br>
							<label>Password:</label><input type="password"  name="password" class="form-control" required></br>
							<input type="submit" name="reg_staff" value="Register" class="btn btn-primary">
						</form>
					</div>
				  <!-------------- End Of Add Staff Member -------------->
				  <!-------------- Remove Staff Member ------------------>
					<div id="Remove_Staff" style="display:none;margin-top:70px;">
						<div class="card-body" style="background-color:#262626;color:white;">
							<center><h5 style="color:white;font-size:25px">Remove Staff</h5></center>
						</div>
						<form method="post">
							<?php
								$con=mysqli_connect("localhost","root","","suwapiyasa");
								if(isset($_POST['rem_staff'])){
									$num = $_POST['number'];
									$nic = $_POST['nic'];
									$query = "DELETE FROM staff WHERE number='$num'";
									$result = mysqli_query($con,$query);
									if($result){
										$query2 = "DELETE FROM login WHERE id='$nic'";
										$result2 = mysqli_query($con,$query2);
										if($result2){
											echo"<script>alert('Successfull')</script>";
										}else{
											echo"<script>alert('Fail')</script>";
										}	
									}else{
										echo"<script>alert('Something Wrong')</script>";
									}	
								}	
							?>
							<label>Emp Number:</label><input type="text" name ="number" class="form-control" required pattern="[s][0][1-9]"><br/>
							<label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[0-9]{9}[v]" title="Please enter NIC to correct format"></br>
							<input type="submit" name="rem_staff" value="Remove" class="btn btn-danger">
						</form>
						<br/>
						<table class="table table-hover" id="userTbl">
							<?php
							  $con=mysqli_connect("localhost","root","","suwapiyasa");
							  $date = date("Y-m-d");
							  $query="SELECT * FROM staff";
							  $search_result=mysqli_query($con,$query); 
							 ?>
							<tr id="txt">
								<th>Employee Number</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>contact</th>
								<th>Email</th>
								<th>Type</th>
								<th>Nic No</th>
								<th>Remove</th>
							<tr>
							  <tbody>
									<?php while($row=mysqli_fetch_array($search_result)):?>
									<tr id="txt">
										<td><?php echo $row['number'];?></td>
										<td><?php echo $row['firstname'];?></td>
										<td><?php echo $row['lastname'];?></td>
										<td><?php echo $row['contact'];?></td>
										<td><?php echo $row['email'];?></td>
										<td><?php echo $row['type'];?></td>
										<td><?php echo $row['nic_no'];?></td>
										<td><b><a id="dele" style="color:red;" href="deletestaff.php?nic_no=<?php echo $row['nic_no'];?>" class="delete">Delete</b></a></td>
									</tr>
									<?php endwhile;?>
							  </tbody>
						</table>
					</div>
				  <!--------------End Of Remove Staff Member--------------->
				  
				  <!-------------- Staff Salary---------------------------->
					<div id="Staff_salary" style="display:none;margin-top:20px;">
						<div class="card-body" style="background-color:#262626;color:white;padding-top:10px;margin-top:20px;">
						<center><h5 style="color:white;font-size:25px">Enter Staff Salary</h5></center>
						</div>
						<form class="form-group" action="" method="post" enctype="multipart/form-data">
							<?php
								$con=mysqli_connect("localhost","root","","suwapiyasa");
								if(isset($_POST['Enter_salary'])){
									$snumber = $_POST['staff_no'];
									$nic = $_POST['nic'];
									$basic_sal = $_POST['Basic'];
									$ot_hrs = $_POST['ot'];
									$ot_rate = $_POST['rate'];
									$allowance = $_POST['allow'];
									$total = ($basic_sal + ($ot_hrs*$ot_rate) + $allowance);
									$query2 = "SELECT * FROM salary WHERE number='$snumber'";
									$result2 = mysqli_query($con,$query2);
									if(mysqli_num_rows($result2)>0){
										$query3 = "UPDATE salary SET nic_no='$nic',ot_rate='$ot_rate',basic_sal='$basic_sal',ot_hours='$ot_hrs',allowance='$allowance',total='$total' WHERE number='$snumber'";
										$result3 = mysqli_query($con,$query3);
										if($result3){
											echo "<script>alert('Salary Entered')</script>";
										}else{
											echo "<script>alert('Salary Not Entered')</script>";
										}		
									}else{
										$query = "INSERT into salary(number,nic_no,ot_rate,basic_sal,ot_hours,allowance,total)values('$snumber','$nic','$ot_rate','$basic_sal','$ot_hrs','$allowance','$total')";
										$result = mysqli_query($con,$query);
										if($result){
											echo "<script>alert('Salary Entered')</script>";
											
										}else{
											echo "<script>alert('Error please check staff number')</script>";	
										}
									}
								}
							?>
							<label>Staff Number:</label><input type="text" class="form-control" name="staff_no" required pattern="[s][0-9][1-9]"  title="Please enter a valied number"></br>
							<label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[0-9]{9}[v]" title="Please enter NIC to correct format"></br>
							<label>Basic Salary:</label><input type="text" class="form-control" name="Basic" required pattern="\d*" title="Please enter a valied amount"></br>
							<label>OT Hours:</label><input type="text" class="form-control" name="ot" required pattern="\d*" title="Please enter a valied hours"></br>
							<label>OT Rate:</label><input type="text" class="form-control" name="rate" required pattern="\d*" title="Please enter a valied Rate"></br>
							<label>Allowance:</label><input type="text" class="form-control" name="allow" required pattern="\d*" title="Please enter a valied Rate"></br>
							<input type="submit" name="Enter_salary" value="Enter Salary" class="btn btn-primary" id="book_btn">
						</form>
						<table class="table table-hover" id="userTbl">
							<?php
							  $con=mysqli_connect("localhost","root","","suwapiyasa");
							  $date = date("Y-m-d");
							  $query="SELECT * FROM staff";
							  $search_result=mysqli_query($con,$query); 
							 ?>
							<tr id="txt">
								<th>Employee Number</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>contact</th>
								<th>Email</th>
								<th>Type</th>
								<th>Nic No</th>
							<tr>
							  <tbody>
									<?php while($row=mysqli_fetch_array($search_result)):?>
									<tr id="txt">
										<td><?php echo $row['number'];?></td>
										<td><?php echo $row['firstname'];?></td>
										<td><?php echo $row['lastname'];?></td>
										<td><?php echo $row['contact'];?></td>
										<td><?php echo $row['email'];?></td>
										<td><?php echo $row['type'];?></td>
										<td><?php echo $row['nic_no'];?></td>
									</tr>
									<?php endwhile;?>
							  </tbody>
						</table>
					</div>
				  <!-------------- End of Staff Salary--------------------->
				  <!-------------- Ward Details---------------------------->
					<div id="view-ward" style="display:none;margin-top:20px;">
						<table class="table table-hover" style="margin-top:20px;" id="userTbl">
							<?php
							  $con=mysqli_connect("localhost","root","","suwapiyasa");
							  $query="SELECT * FROM ward";
							  $search_result=mysqli_query($con,$query);
							 ?>
							<tr id="txt">
								<th>First Name</th>
								<th>Last Name</th>
								<th>NIC No</th>
								<th>Telephone</th>
								<th>Doctor</th>
								<th>Admited Date</th>
							<tr>
							<tbody>
								 <?php while($row=mysqli_fetch_array($search_result)):?>
								<tr id="txt">
									<td><?php echo $row['fname'];?></td>
									<td><?php echo $row['lname'];?></td>
									<td><?php echo $row['nic_no'];?></td>
									<td><?php echo $row['contact'];?></td>
									<td><?php echo $row['doctor'];?></td>
									<td><?php echo $row['date'];?></td>
									<!--<td><a href="discharge-patients.php" style="text-decoration:none;"><input type="button" style="background-color:red;color:white;border-radius:5px;border-color:red;" value="Discharge Patient" name="discharge"></a></td>-->
								</tr>
								<?php endwhile;?>
							</tbody>
						</table>
					</div>
				  <!-------------- End of ward Details--------------------->
				  
				  <!-------------- Discharge Patients----------------------->
					<div id="discharge-ward" style="display:none;margin-top:20px;">
						<form class="form-group" action="adminfunc.php" method="post">
							<table class="table table-hover" style="margin-top:20px;" id="userTbl">
							  <?php
								$con=mysqli_connect("localhost","root","","suwapiyasa");
								$query="SELECT * FROM ward";
								$search_result=mysqli_query($con,$query);
							   ?>
  								<tr id="txt">
  									<th>First Name</th>
  									<th>Last Name</th>
  									<th>NIC No</th>
  									<th>Telephone</th>
  									<th>Doctor</th>
  									<th>Admited Date</th>
  								<tr>
								<tbody>
  								  <?php while($row=mysqli_fetch_array($search_result)):?>
  									<tr id="txt">
  										<td><?php echo $row['fname'];?></td>
  										<td><?php echo $row['lname'];?></td>
  										<td><?php echo $row['nic_no'];?></td>
  										<td><?php echo $row['contact'];?></td>
  										<td><?php echo $row['doctor'];?></td>
  										<td><?php echo $row['date'];?></td>
  									</tr>
  								  <?php endwhile;?>
								</tbody>
  							</table>
						</form>

						<div class="card-body" style="background-color:#262626;color:white;padding-top:10px;margin-top:20px;">
							<center><h5 style="color:white;font-size:25px">Patient Discharge Form</h5></center>
						</div>
						<form class="form-group" method="post">
							<?php
								use PHPMailer\PHPMailer\PHPMailer;
								use PHPMailer\PHPMailer\Exception;
								require 'vendor/autoload.php';
								$mail = new PHPMailer(true);
								$con=mysqli_connect("localhost","root","","suwapiyasa");
								if(isset($_POST['discharge'])){
									$sql="SELECT count(number) AS total FROM ward";
									$result2=mysqli_query($con,$sql);
									$values=mysqli_fetch_assoc($result2);
									$num_rows=$values['total'];

									$email=$_POST['email'];
									$nic = $_POST['nic'];
									$payment=$_POST['payment'];

									if($num_rows!=0){
										$query2 = "SELECT COUNT(number) as valied From Ward WHERE nic_no='$nic'";
										$result3 = mysqli_query($con,$query2);
										$values2 = mysqli_fetch_assoc($result3);
										$num_rows_2 = $values2['valied'];
										if($num_rows_2!=0){
											$query = "DELETE FROM ward WHERE nic_no='$nic'";
											$result= mysqli_query($con,$query);
											if($result){
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
												echo "<script>alert('E-mail cannot be sent')</script>";//echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
											}
												echo "<script>alert('Discharged')</script>";
												echo "<script>window.open('new_admin.php','_self')</script>";
											}else{
												echo "<script>alert('Inavlied NIC')</script>";	
												echo "<script>window.open('new_admin.php','_self')</script>";
											}
										}else{
											echo "<script>alert('No patients to discharge')</script>";
											echo "<script>window.open('new_admin.php','_self')</script>";
										}
									}
								}	
								?>
							<label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[0-9]{9}[v]" title="Please enter NIC to correct format"></br>
 							<label>Email:</label><input type="text" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></br>
							<label>Amount to Pay:</label><input type="text" class="form-control" name="payment" required pattern="\d*" title="Please enter valied amount"></br>
							<input type="submit" name="discharge" value="Discharge" class="btn btn-danger" id="book_btn">
						</form>
					</div>
				  <!-------------- End of Discharge Patients------------------->
				  <!-------------- Assign passwords----------------------------->
					<div id="assign" style="display:none;">
						<form class="form-group" method="post">
							<?php
								$con=mysqli_connect("localhost","root","","suwapiyasa");
								if(isset($_POST['reset'])){
									$nic = $_POST['nic'];
									$username = $_POST['username'];
									$password = $_POST['password'];
									$encripted_pass = sha1($password);
									$query = "UPDATE login SET username='$username',password='$encripted_pass' WHERE id='$nic'";
									$result=mysqli_query($con,$query);
									if($result){
										echo "<script>alert('Updated')</script>";	
										echo "<script>window.open('new_admin.php','_self')</script>";
									}else{
										echo "<script>alert('Not Updated')</script>";	
										echo "<script>window.open('new_admin.php','_self')</script>";
									}		
								}	
							?>
							<label>Username:</label><input type="text" class="form-control" name="username" required title="Please enter a username"></br>
							<label>Password:</label><input type="password" class="form-control" name="password" required title="Please enter a password"></br>
							<label>NIC Number:</label><input type="text" class="form-control" name="nic" required pattern="[0-9]{9}[v]" title="Please enter NIC to correct format"></br>
							<input type="submit" name="reset" value="Reset" class="btn btn-danger" id="book_btn">
						</form>
					</div>
				  <!-------------- End of Assign passwords----------------------------->
			</div>
		</div>
  </body>
</html>