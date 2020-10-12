<?php
	$con=mysqli_connect("localhost","root","","suwapiyasa");
	$nic = $_GET['nic_no'];
	$query = "DELETE FROM staff WHERE nic_no='$nic'";
	$result = mysqli_query($con,$query);
	if($result){
		$query2 = "DELETE FROM login WHERE id='$nic'";
		$result2 = mysqli_query($con,$query2);
		if($result2){
			echo"<script>alert('Successfull')</script>";
			echo "<script>window.open('new_admin.php','_self')</script>";
		}else{
			echo"<script>alert('Fail')</script>";
			echo "<script>window.open('new_admin.php','_self')</script>";
		}	
	}else{
		echo"<script>alert('Something Wrong')</script>";
		echo "<script>window.open('new_admin.php','_self')</script>";
	}	
?>