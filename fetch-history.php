<?php
$con=mysqli_connect("localhost","root","","suwapiyasa");
session_start();
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($con, $_POST["query"]);
	$query = "SELECT * FROM patient_history
	WHERE doc_id='".$_SESSION['username']."' AND fname LIKE '%".$search."%' OR lname LIKE '%".$search."%' OR nic_no LIKE '%".$search."%'";

}
else
{
	$query="select * from patient_history WHERE doc_id='".$_SESSION['username']."'";
}

$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>NIC No</th>
							<th>Contact No</th>
                            <th>Prescription</th>
                            <th>Date</th>

                        </tr>';

	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row['fname'].'</td>
				<td>'.$row['lname'].'</td>
				<td>'.$row['nic_no'].'</td>
                <td>'.$row['contact'].'</td>
                <td>'.$row['priscription'].'</td>
                <td>'.$row['date'].'</td>

			</tr>
		';
	}
	echo $output;

}
else
{
	echo 'No Data Found';
}
?>
