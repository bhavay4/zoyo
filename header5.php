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

		<!-- HEADER -->
		<div class="loginHeader">

			<?php

			if(isset($_SESSION['page'])){
				if($_SESSION['page'] == "hotel"){
				header("Location: /zoyo/clogin.php");
				exit();
				}
			}
			
			
				if (isset($_SESSION['userid'])){
					$name = ucwords(strtolower($_SESSION['userName']));
						echo'<form action="includes/logout.inc.php" method="post" >
								<div style=" margin-right: 375px; float: right;" class="dropdown">
								  <button style="color:#fff; background-color: #ef5350; border:none; border-radius: 4px;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="glyphicon glyphicon-user" style="color: #fff; padding-right: 10px;"></i><b>'.$name.'</b>
								  <span class="caret"></span></button>
								  <ul class="dropdown-menu">
								    <li><a href="customerProfile.php">View Account</a></li>
								    <li><a href="includes/logout.inc.php" type="submit">SignOut</a></li>
								  </ul>
								</div>
							</form>';
					}
				else {
					echo'
						<form action="clogin.php" method="post" >
						<button type="submit" name="login-submit" style="color:#fff; background-color: #ef5350; border:none; border-radius: 4px; margin-top: 6px; margin-right: 375px; float: right;"><i class="glyphicon glyphicon-user" style="color: #fff; padding-right: 10px;"></i><b>Log In / Sing Up</b></button>
						</form>
						';
				}	

			
		
				

			?>

		</div>

		<div id="header">
			
			<div class="container">

				<div class="logo">
					<a href="index.php" style="text-decoration: none;"><h2><b>ZOYO</b></h2></a>
				</div>

				<div style="margin-top: 20px;" class="row"> <!-- filter -->

					<form action="search.php" method="post">
						<div class="col-sm-4">
						<input type="text" placeholder="Search City, Locality or Hotels" style="width:391px; padding:15px; border:1px solid #BDBDBD; height:60px; border-top-left-radius: 4px; border-bottom-left-radius: 4px;" name="searchBar"/> 
						</div>

						<div class="col-sm-2">
							  <div style="display:inline-block; border-radius:0px; width: 200px; height: 60px; background-color: #fff; border:1px solid #BDBDBD; padding: 10px;">
							  	<p style="padding: 0px; margin: 0px;"><b>CHECK-IN</b></p>
							  	<input  style="border:none; margin: 0px; padding: 0px;" id="today_datePicker" type="date" data-date="" min='<?php echo date("Y-m-d");?>' onclick='test()' data-date-format="DD MMMM YYYY" value="" name="checkin">
							  </div>
						</div>

						<div class="col-sm-2">
							  <div style="display:inline-block; border-radius:0px; width: 200px; height: 60px; background-color: #fff; border:1px solid #BDBDBD; padding: 10px;">
							  	<p style="padding: 0px; margin: 0px;"><b>CHECK-OUT</b></p>
							  	<input  style="border:none; margin: 0px; padding: 0px;" id="tomorrow_datePicker" type="date" data-date="" min='<?php echo date("Y-m-d");?>' data-date-format="DD MMMM YYYY" value="" name="checkout">
							  </div>
						</div>

						<div class="col-sm-2">
							<div style="display:inline-block; border-radius:0px; width: 200px; height: 60px; background-color: #fff; border:1px solid #BDBDBD; padding: 12px;">
						  	<p style="padding: 0px; margin: 0px;"><b>ROOMS</b></p>
						  	<select style="border:none; background-color: #fff; width: 130px; margin: 0px; height: 20px; padding: 0px;" name="room">
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
						  	</select>
						  </div>
						</div>

						<div class="col-sm-2">
							<button style="width: 165px; display: inline-block; background-color: #212121; color: #fff; border-top-right-radius: 4px; border:none; border-bottom-right-radius: 4px; height: 60px; font-size: 14px;" type="submit" name="search-submit"><b>Search</b></button>
						</div>
					</form>

				</div>  <!-- filter -->

			</div>

		</div>

		<script type="text/javascript">
			function test(){
				var x = document.getElementById('today_datePicker').value;
				document.getElementById('tomorrow_datePicker').min = x;

			}
		</script>
		<!-- HEADER END -->
<!-- 
		<script type="text/javascript">
			document.getElementById('today_datePicker').setAttribute(min, '2019-04-12');
		</script> -->