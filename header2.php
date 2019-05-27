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
						<a href="index.php" style="text-decoration: none;"><h2 style="color: #ef5350; font-size: 47px; margin-top: 12px; margin-left: -50px;"><b>ZOYO</b></h2></a>
					</div>
					<div class="col-sm-6">

						<?php

						if (isset($_SESSION['userid'])){
							echo '<form action="includes/logout.inc.php" method="post" >
								<div style="padding: 13px; margin-left: 650px;" class="dropdown">
								  <button style="color:#fff; background-color: #212121; border:none; border-radius: 4px; font-size:15px;" class="btn btn-lg btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="glyphicon glyphicon-user" style="color: #fff; padding-right: 10px;"></i><b>'.ucwords(strtolower($_SESSION['userName'])).'</b>
								  <span class="caret"></span></button>
								  <ul class="dropdown-menu">
								    <li><a href="customerProfile.php">View Account</a></li>
								    <li><a href="includes/logout.inc.php" type="submit">SignOut</a></li>
								  </ul>
								</div>
							</form>
								';
						}
						else {
							echo'
							<form action="clogin.php" method="post" >
								<button style="color:#fff; background-color: #212121; border:none; border-radius: 4px; padding: 13px; margin-left: 650px; margin-top: 14px;"><i class="glyphicon glyphicon-user" style="color: #fff; padding-right: 10px;"></i>Log In / Sing Up</button>
							</form>';
						}

						?>

						
					</div>
				</div>
			</div>
		</div>