<?php session_start(); ?>
<?php
	if(!isset($_SESSION['username'])){
		header('Location: home.php');
	}
?>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';
$con = mysqli_connect("localhost","root","","suwapiyasa");
function sendEmail($email,$name){
			$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
			try {
				//Server settings
				//$mail->SMTPDebug = 2;                                 // Enable verbose debug output
				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'suwapiyasahospitals@gmail.com';                 // SMTP username
				$mail->Password = 'himath159';                           // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;
				//Recipients
				$mail->setFrom('suwapiyasahospitals@gmail.com', 'Suwapiyasa Hospital');
				$mail->addAddress($email);     // Add a recipient
				

				//Attachments
				//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
				//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

				//Content
				$mail->isHTML(true);                                  // Set email format to HTML
				$mail->Subject = 'Appoitment';
				$mail->Body    = 'Dear '.$name.' The appointment has been cancelled';
				//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				$mail->send();
				//echo 'Message has been sent to '.$email.' <br>';
			} catch (Exception $e) {
				echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
}
function sendSMS($number,$date){
	// Authorisation details.
	$username = "prabathmahadoowage@gmail.com";
	$hash = "1f8eaf66c77444a3e574f2f9e21545885c59d7de8cabf050396a739f7169bef4";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "Suwapiyasa"; // This is who the message appears to be from.
	$numbers = $number; // A single number or a comma-seperated list of numbers
	$message = 'Your Appointment For '.$date.' Was cancelled';
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	//echo ($result);
}	
if(isset($_POST['cancel_apt'])){
	$date = date("Y-m-d");
	$query="SELECT * FROM appointment WHERE date='$date' AND doc_id='".$_SESSION['username']."'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
		$email = $row['email'];
		$name = $row['fname'];
		$date = $row['date'];
		$number = $row['contact'];
		sendEmail($email,$name);
		//sendSMS($number,$date);
	}
	$query2 = "DELETE FROM appointment WHERE date='$date' AND doc_id='".$_SESSION['username']."'";
	$result2=mysqli_query($con,$query2);
	if($result2){
		echo "<script>alert('Appointments Cancelled')</script>";
		echo "<script>window.open('doctor.php','_self')</script>";
	}else{
		echo "<script>alert('Appointments Not Cancelled')</script>";
		echo "<script>window.open('doctor.php','_self')</script>";
	}		
}	