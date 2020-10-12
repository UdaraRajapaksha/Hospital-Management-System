<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Suwapiyasa Hospital | Comments</title>
		<link rel="stylesheet" type="text/css" href="./css/homestyle.css">
		<link rel="stylesheet" type="text/css" href="./css/commentstyle.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body style="background:url(./imgs/back.jpg);background-size:cover;position:fixed;">
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
	<center>
	<div class="comment">
		<div class="content">
			<table class="table table-hover"id="userTbl">
				<?php
						  $con=mysqli_connect("localhost","root","","suwapiyasa");
						  $query ="SELECT * from comment_table";
						  $search_result=mysqli_query($con,$query); 
						 ?>
						<tr id="txt">
							<th>Name</th>
							<th><center>Comment</center></th>
						<tr>
						  <tbody>
								<?php while($row=mysqli_fetch_array($search_result)):?>
								<tr id="txt">
									<td><?php echo $row['name']." :";?></td>
									<td><?php echo $row['comment'];?></td>
								</tr>
								<?php endwhile;?>
						  </tbody>
			</table>
		</div>
	</div>
	
	</body>
</html>