		
		<?php
		 require "header.php"; 
		 require "includes/dbh.inc.php";

		 if($_SERVER['REQUEST_URI'] == '/zoyo/index.php?invaliddates'){
		    echo "<div class='alert alert-danger' role='alert'>
		          <p class='alertP' style='text-align:center'>Invalid date range. Please select a valid date.</p>
		        </div>";
		  }
		  else if($_SERVER['REQUEST_URI'] == '/zoyo/index.php?error=emptysearchfield'){
		    echo "<div class='alert alert-danger' role='alert'>
		          <p class='alertP' style='text-align:center'>Search field can't be empty.</p>
		        </div>";
		  }
		
		?>

		<div class="container">

			<?php

					


						require 'includes/dbh.inc.php';


						$sql = "SELECT * FROM hotels ORDER BY htid Desc";
						if($result = mysqli_query($conn, $sql)){
							if(mysqli_num_rows($result) > 0){
						        while($row = mysqli_fetch_array($result)){
						        	$arooms = $row['htARooms'];
						        	$checkin = "";
						        	$checkout = "";
						        	$room = "";

						        	$rating = 0;
									$count = 0;
						        	$hid = (int)$row['htid'];
						        	
						        	$sql = "SELECT * FROM Ratings WHERE hid = $hid";
									if($result2 = mysqli_query($conn, $sql)){
										if(mysqli_num_rows($result2) > 0){
									        while($row2 = mysqli_fetch_array($result2)){
									        	$r = (int)$row2['rating'];
									        	$rating = $rating + $r;
									        	$count = $count + 1;
									        }
									        mysqli_free_result($result2);
									    } else{
									        $rating = 0;
									        $count = 1;
									    }

									}
									else{
										echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
									}

									$ARating = $rating/$count;
									
									if($ARating == 0){
										$rDesc = 'No Rating';
									}
									else if($ARating > 0 && $ARating <= 1){
										$rDesc = 'Poor';
									}
									else if($ARating > 1 && $ARating <= 2){
										$rDesc = 'Satisfactory';
									}
									else if($ARating > 2 && $ARating <= 3){
										$rDesc = 'Average';
									}
									else if($ARating > 3 && $ARating <= 4){
										$rDesc = 'Very Good';
									}
									else if($ARating > 4 && $ARating <= 5){
										$rDesc = 'Excellent';
									}

									if($arooms == 0){

									}
									else{

						        echo "
						        <div class='card'><!-- card -->

								<div class='row'>
								<div class='col-sm-7'>
								<form action='hotelView.php' method='get'>
									<div class='row'>
										<div class='col-sm-7'>
											<div class='row' style='height: 200px; padding-left:15%; padding-top:5%;'>
												<h2 name='hotelname'><b>Hotel ".ucwords(strtolower($row['htBranchName']))."</b></h2>
												<h3 class='subHeading' name='hoteladdress'>".ucwords(strtoupper($row['htAddress']))."</h3>
												<div class='row' style='width: 180px; padding-left:15px; text-align: center;'>
													<div class='col-sm-4' style='height: 25px; background-color: #43A047; border-bottom-left-radius: 4px; border-top-left-radius: 4px; border:1px solid #43A047'>
														<p style='color:#fff; padding-top: 2px;' name='rating' value='3.8'><b>".round($ARating,1)."</b></p>
													</div>
													<div class='col-sm-8' style='height: 25px; background-color: #C8E6C9; border-bottom-right-radius: 4px; border-top-right-radius: 4px; border:1px solid #43A047'>
														<p style='color:#43A047; padding: 2px; text-align: center;'><b>".$rDesc."</b></p>
													</div>
												</div>
											</div>
											<div class='row' style='height: 100px; padding-left:15%;'>
												<h2 name='price'><b>&#8377;".ucwords(strtolower($row['htRoomPrice']))."</b></h2>
												<h4 class='subPrice'>per Night</h4>
											</div>
										</div>
										<div class='col-sm-5'>
											<div class='row' style='height: 200px; padding-top:40px; padding-left: 85px; '>
												<h5><b>CITY</b></h5>
			                            		<p style='margin-top:-10px; font-size: 16px;' name='city'>".ucwords(strtolower($row['htCity']))."</p><br>
			                            		<h5><b>LOCALITY</b></h5>
			                            		<p style='margin-top:-10px; font-size: 16px;' name='locality'>".ucwords(strtolower($row['htLocation']))."</p>
											</div>
											<div class='row' style='height: 100px; padding-left:32%; padding-top:10%;'>
												<button class='btn btn-lg btn-default' type='submit' name='view-submit' value='".$row['htid']."=".$checkin."=".$checkout."=".$room."' style='background-color: #212121; color: #fff;'>View Details</button>
											</div>
										</div>
									</div>
								</form>
								
							</div>
							<div class='col-sm-5'>
						
									<img src='images/".$row['image']."' style='border-top-right-radius:4px; border-bottom-right-radius:4px; margin-left:1px; width:100%; height:100%; overflow:hidden; object-fit: cover'>
							
							</div>

							</div>
				
			</div><!-- card end -->

		";
		}
						    }
						        mysqli_free_result($result);
						    } else{
						        header("Location: noResultFound.php");
								exit();
						    }

						}
						else{
							echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
						}

					
					?>

		</div>

		<script type="text/javascript">

			setTimeout(function(){
		      $('.alert').removeClass('alert').addClass('hide');
		    },2000);


			var today = new Date();
			var tomorrow = new Date();
			tomorrow.setDate(today.getDate()+1);
			var dd = String(today.getDate()).padStart(2, '0');
			var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
			var yyyy = today.getFullYear();
			var ndd = String(tomorrow.getDate()).padStart(2, '0');
			var nmm = String(tomorrow.getMonth() + 1).padStart(2, '0'); //January is 0!
			var nyyyy = tomorrow.getFullYear();
			today = yyyy + '-' + mm + '-' + dd;
			tomorrow = nyyyy + '-' + nmm + '-' + ndd;
			document.getElementById('today_datePicker').value=today;
			document.getElementById('tomorrow_datePicker').value=tomorrow;

		
			function test(){
				var x = document.getElementById('today_datePicker').value;
				document.getElementById('tomorrow_datePicker').min = x;

			}
		
		</script>

		<?php
		 require "footer.php"; 
		?>