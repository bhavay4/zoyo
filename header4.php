<?php
	session_start();
	require 'statusUpdate.php';
?>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<title>ZOYO | Hotel Booking India, Branded hotels, Affordable Stays - ZOYO</title>
		<link rel='shortcut icon' type='image/x-icon' href='images/favicon.png' />

	</head>

	<body>

		<div class="header2">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<h2 style="color: #ef5350; font-size: 47px; margin-top: 12px; margin-left: -50px;"><b>ZOYO</b></h2>
					</div>
					<div class="col-sm-6">

						<?php

						if (isset($_SESSION['userid'])){
							echo '<form action="includes/crlogout.inc.php" method="post" >
								<button style="color:#fff; background-color: #212121; border:none; border-radius: 4px; padding: 13px; margin-left: 650px; margin-top: 14px;"><i class="glyphicon glyphicon-user" style="color: #fff; padding-right: 10px;"></i>SignOut</button>
							</form>';
								
						}
						else {
							header("Location: crlogin.php");
							exit();
						}

						?>

						
					</div>
				</div>
			</div>
		</div>