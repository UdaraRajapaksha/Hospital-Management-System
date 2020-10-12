<?php session_start(); ?>
<?php
	if(!isset($_SESSION['username'])){
		header('Location: home.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Staff</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="./css/adminstyle.css">
   <link rel="stylesheet" type="text/css" href="./css/navbar.css">
   <link rel="stylesheet" type="text/css" href="./css/staffstyle.css">
	  <link rel="stylesheet" type="text/css" href="./css/doctorstyle.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                <h4>Logged in as:- &nbsp;<?php echo $_SESSION['username']; ?></h4>
								<h4>
									Designation :- &nbsp;
									<?php
		                   $con=mysqli_connect("localhost","root","","suwapiyasa");
		                   $query = "SELECT abstype from login where id='".$_SESSION['username']."'";
		                   $result = mysqli_query($con,$query);
		                   while($row= mysqli_fetch_array($result)){
		                     echo $row['abstype'];
		                   }
		              ?>
								</h4>
				 <div class="vertical-menu">
					<a onclick="document.getElementById('salary').style.display='inline';document.getElementById('profile').style.display='none'">My Salary Details</a>
					<a onclick="document.getElementById('profile').style.display='inline';document.getElementById('salary').style.display='none'">Manage My Profile</a>
					<a id="logout" href="logout.php">Logout</a>
				</div> 
              </div>
           </div>
         </div>
				 <div class="col-md-8" style="background-color:black;opacity:0.7;color:white;">
					 <div id="salary" style:"display:inline;">
						 <div class="card-body" style="background-color:#262626;color:white;padding-top:10px;margin-top:20px;">
						 	<center><h5 style="color:white;font-size:25px"> Your Salary Details</h5></center>
						 </div>
						 <?php
									$con=mysqli_connect("localhost","root","","suwapiyasa");
									$query = "SELECT * from salary where nic_no='".$_SESSION['username']."'";
									$result = mysqli_query($con,$query);
									while($row= mysqli_fetch_array($result)){
										echo "<b>Basic Salary: </b>".$row['basic_sal'];echo "</br>";
										echo "</br>";
										echo "<b>OT Rate: </b>".$row['ot_rate'];echo "</br>";
										echo "</br>";
										echo "<b>OT Hours: </b>".$row['ot_hours'];echo "</br>";
										echo "</br>";
										echo "<b>Allowance: </b>".$row['allowance'];echo "</br>";
										echo "</br>";
										echo "<b>Total Salary: </b>".$row['total'];echo "</br>";
									}
						 ?>
					 </div>
					 <div id="profile" style="display:none;">
							 <div class="card-body" style="background-color:#262626;color:white;padding-top:10px;margin-top:20px;">
							 <center><h5 style="color:white;font-size:25px">Manage My Profile</h5></center>
							 </div>
							 <form name="profle" id="profile" method="post" class="form-group" enctype="multipart/form-data">
								 <?php
								 	$con=mysqli_connect("localhost","root","","suwapiyasa");
									if(isset($_POST['edit_profile'])){
									$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
									$username = $_POST['username'];
									$password = $_POST['password'];
									$encripted_pass = sha1($password);
									$query = "UPDATE login set username='$username',password ='$encripted_pass',image='$image' where id='".$_SESSION['username']."' ";
									$result=mysqli_query($con,$query);
										if($result){
											echo "<script>alert('Profile Changed')</script>";
											echo "<script>window.open('staff.php','_self')</script>";
										}else{
											echo "<script>alert('Error')</script>";
											echo "<script>window.open('staff.php','_self')</script>";
										}
									}
								 ?>
								 <label>Profile Picture</label><input type="file" name="image" id="image" required><br/>
								 <label>Username:</label><input type="text" class="form-control" name="username" required title="Please enter a username"></br>
								 <label>Password:</label><input type="password" class="form-control" name="password" required title="Please enter a password"></br>
								 <input type="submit" name="edit_profile" value="Edit Profile" class="btn btn-primary" id="book_btn">
							 </form>
						</div>
				 </div>
			</div>
  </body>
</html>
