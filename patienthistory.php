<?php session_start(); ?>
<?php
	if(!isset($_SESSION['username'])){
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Patient History</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-10">
				<div class="card">
    				<div class="card-body">
    				<center><h4 style="text-decoration:underline;">Search Patient History</h4></center>

										<div class="row" style="margin-top:3%;">
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<input class="form-control" name="search_text" id="search_text" type="text" placeholder="search by client details">
							</div>
							<div class="col-sm-4">
								<button type="button" class="btn btn-outline-primary" name="search_text" id="search_text">Search</button>
							</div>

						</div>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm-10">
								<div id="result"></div>
								<div id="con1"></div>
								<div style="clear:both"></div>
							</div>
							<div class="col-sm-2"></div>
						</div>


   				</div>
  				</div>
				</div>
    </div>
    <div class="col-md-1">
    </div>
  </div>
  </body>
</html>

<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch-history.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
	});


});
</script>
