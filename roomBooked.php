		<?php include('header2.php'); 
		if (isset($_SESSION['userid'])){

			echo '<div class="container">

			<div class="roomBooked">
				<h3 style="margin:50px; ">Your room has been booked. Thank you for using our service.</h3>
				<a href="customerProfile.php" >View Details</a>
				<a class="btn btn-lg btn-primary" href="index.php" type="button" style="padding: 10px 20px;">Go Back</a>
			</div>
			
		</div>
		
	</body>
</html>';

		}
		else{

			header("Location: clogin.php");
			exit();

		} ?>
		