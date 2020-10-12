<?php
session_start();
$con=mysqli_connect("localhost","root","","suwapiyasa");
if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$decrypted_pass = sha1($password);
		$query = "SELECT * FROM login where username='$username' && password='$decrypted_pass'";
		$result = mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0){
			$query1  = "SELECT * from login";
			$result2 = mysqli_query($con,$query1);
			while($row=mysqli_fetch_array($result2)){
			if($row['username']==$username && $row['password']==$decrypted_pass && $row['type']=="Doctor"){
				$_SESSION['username'] = $row['id'];
				header("location:doctor.php");
			}
			else if($row['username']==$username && $row['password']==$decrypted_pass && $row['type']=="Staff"){
				$_SESSION['username'] = $row['id'];
				header("location:staff.php");
			}
			else if($row['username']==$username && $row['password']==$decrypted_pass && $row['type']=="Admin"){
				$_SESSION['username'] = $row['id'];
				header("location:new_admin.php");
			}
		}
		}else{
			echo '<script>alert("Wrong Details")</script>';
			echo "<script>window.open('home.php','_self')</script>";
		}
}
?>
