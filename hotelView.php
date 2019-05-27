<?php include('header2.php'); ?>

		<div class="container-fluid">
			<?php 

				require 'includes/dbh.inc.php';
				
				$url = explode('=',$_SERVER['REQUEST_URI']);
				$url2 = explode('%3D',$_SERVER['REQUEST_URI']);
				$id = (int)$url[1];
				$cin = $url2[1];
				$cout = $url2[2];
				$croom = $url2[3];
				$rating = 0;
				$count = 0;

				// $ARating = 4;
				// $rDesc = 'Good';
				// $d1 = explode('-',$cout);
    //             $d2 = explode('-',$cin);

    //                 if($d1[2] >= $d2[2]){

    //                   if($d1[1] >= $d2[1]){

    //                     if($d1[0] >= $d2[0]){
                          
    //                     }
    //                     else{
    //                     	if($urlPrev == 'http://localhost/zoyo/index.php' || $urlPrev == 'http://localhost/zoyo/index.php?invaliddates'){
    //                     		header("Location: /zoyo/index.php?invaliddates");
				// 				exit();
    //                     	}
    //                     	else if($urlPrev == 'http://localhost/zoyo/search.php' || $urlPrev == 'http://localhost/zoyo/search.php?invaliddates'){
    //                     		header("Location: /zoyo/search.php?invaliddates");
				// 				exit();
    //                     	}
    //                     }

    //                   }
    //                   else{
    //                     if($urlPrev == 'http://localhost/zoyo/index.php' || $urlPrev == 'http://localhost/zoyo/index.php?invaliddates'){
    //                     		header("Location: /zoyo/index.php?invaliddates");
				// 				exit();
    //                     	}
    //                     	else if($urlPrev == 'http://localhost/zoyo/search.php' || $urlPrev == 'http://localhost/zoyo/search.php?invaliddates'){
    //                     		header("Location: /zoyo/search.php?invaliddates");
				// 				exit();
    //                     	}
    //                   }

    //                 }
    //                 else{
    //                 	if($urlPrev == 'http://localhost/zoyo/search.php' || $urlPrev == 'http://localhost/zoyo/search.php?invaliddates'){
    //                     		header("Location: /zoyo/search.php?invaliddates");
				// 				exit();
    //                     	}
    //                   	else if($urlPrev == 'http://localhost/zoyo/index.php' || $urlPrev == 'http://localhost/zoyo/index.php?invaliddates'){
    //                     		header("Location: /zoyo/index.php?invaliddates");
				// 				exit();
    //                     	}
                        	

					
    //                 }

				$sql = "SELECT * FROM Ratings WHERE hid = $id";
				if($result = mysqli_query($conn, $sql)){
					if(mysqli_num_rows($result) > 0){
				        while($row = mysqli_fetch_array($result)){
				        	$r = (int)$row['rating'];
				        	$rating = $rating + $r;
				        	$count = $count + 1;
				        }
				        mysqli_free_result($result);
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

				$sql = "SELECT * FROM hotels WHERE htid = $id";
				if($result = mysqli_query($conn, $sql)){
					if(mysqli_num_rows($result) > 0){
				        while($row = mysqli_fetch_array($result)){

				        	$sql = "SELECT * FROM amenities WHERE hid = $id";
				        	if($result2 = mysqli_query($conn, $sql)){
							    if(mysqli_num_rows($result2) > 0){
							        $row2 = mysqli_fetch_array($result2);

							        if($row2['wifi'] == '1'){
							        	$wifi = 'show';
							        }
							        else{
							        	$wifi = 'hide';
							        }

							        if($row2['tv'] == '1'){
							        	$tv = 'show';
							        }
							        else{
							        	$tv = 'hide';
							        }

							        if($row2['parking'] == '1'){
							        	$parking = 'show';
							        }
							        else{
							        	$parking = 'hide';
							        }

							        if($row2['breakfast'] == '1'){
							        	$breakfast = 'show';
							        }
							        else{
							        	$breakfast = 'hide';
							        }

							        if($row2['microwave'] == '1'){
							        	$microwave = 'show';
							        }
							        else{
							        	$microwave = 'hide';
							        }

							        if($row2['bed'] == '1'){
							        	$bed = 'show';
							        }
							        else{
							        	$bed = 'hide';
							        }

							        if($row2['geyser'] == '1'){
							        	$geyser = 'show';
							        }
							        else{
							        	$geyser = 'hide';
							        }

							        if($row2['power'] == '1'){
							        	$power = 'show';
							        }
							        else{
							        	$power = 'hide';
							        }

							        if($row2['fridge'] == '1'){
							        	$fridge = 'show';
							        }
							        else{
							        	$fridge = 'hide';
							        }

							        if((int)$row['htCheckinAfter'] < 12){
							        	$checkinafter = $row['htCheckinAfter']." AM";
							        }
							        else{
							        	$checkinafter = $row['htCheckinAfter']." PM";
							        }

							        if((int)$row['htCheckoutBefore'] < 12){
							        	$checkoutbefore = $row['htCheckoutBefore']." AM";
							        }
							        else{
							        	$checkoutbefore = $row['htCheckoutBefore']." PM";
							        }
							        // $wifi = $row2['wifi'];
							        // $tv = $row2['tv'];
							        // $parking = $row2['parking'];
							        // $breakfast = $row2['parking'];
							        // $microwave = $row2['microwave'];
							        // $bed = $row2['bed'];
							        // $geyser = $row2['geyser'];
							        // $power = $row2['power'];
							        // $fridge = $row2['fridge'];

							  //       echo $wifi;
									// echo $tv;
									// echo $parking;
									// echo $breakfast;
									// echo $microwave;
									// echo $bed;
									// echo $geyser;
									// echo $power;
									// echo $fridge;

							        echo "<form action='includes/roomBooking.inc.php' method='get'>
									        <div class='row'>
													<div class='col-sm-7'>
														<div class='row' style='height: 67%;'>
															<div class='cardImage'>
																<div id='myCarousel' class='carousel slide' data-ride='carousel'>
																    <!-- Indicators -->
																    <ol class='carousel-indicators'>
																      <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
																      <li data-target='#myCarousel' data-slide-to='1'></li>
																      <li data-target='#myCarousel' data-slide-to='2'></li>
																    </ol>

																    <!-- Wrapper for slides -->
																    <div class='carousel-inner'>
																      <div class='item active'>
																        <img id='img' src='images/".$row['image']."' style='width:100%; height:100%; overflow: hidden; object-fit: cover'>
																      </div>

																      <div class='item'>
																        <img id='img2' src='images/".$row['image2']."' alt='No Hotel Image Present' style='width:100%;  height:100%; overflow: hidden; object-fit: cover'>
																      </div>
																    
																      <div class='item'>
																        <img id='img3' src='images/".$row['image3']."' alt='No Hotel Image Present' onerror='this.src='images/default.png';' style='width:100%; height:100%; overflow: hidden; object-fit: cover'>
																      </div>
																    </div>

																    <!-- Left and right controls -->
																    <a class='left carousel-control' href='#myCarousel' data-slide='prev'>
																      <span class='glyphicon glyphicon-chevron-left'></span>
																      <span class='sr-only'>Previous</span>
																    </a>
																    <a class='right carousel-control' href='#myCarousel' data-slide='next'>
																      <span class='glyphicon glyphicon-chevron-right'></span>
																      <span class='sr-only'>Next</span>
																    </a>
																</div>
																<!-- <img style='height: 100%; width: 100%; object-fit: contain' src='images/sample.jpg'> -->
															</div>
														</div>
														<div class='row' style='height: 26.5%;'>
															<div class='cardPrice'>

																<div class='row'>

																	<div class='col-sm-6'>
																		<div class='row' style='height: 200px; padding-left:10%; padding-top:0.5%;'>
																			<h1><b>Hotel ".ucwords(strtolower($row['htBranchName']))."</b></h1>
																			<h4 class='subHeading'>".strtoupper($row['htAddress'])."</h4>
																			<div class='row' style='width: 180px; padding-left:15px; text-align: center;'>
																				<div class='col-sm-4' style='height: 25px; background-color: #43A047; border-bottom-left-radius: 4px; border-top-left-radius: 4px; border:1px solid #43A047'>
																					<p style='color:#fff; padding-top: 2px;'><b>".round($ARating,1)."</b></p>
																				</div>
																				<div class='col-sm-8' style='height: 25px; background-color: #C8E6C9; border-bottom-right-radius: 4px; border-top-right-radius: 4px; border:1px solid #43A047'>
																					<p style='color:#43A047; padding: 2px; text-align: center;'><b>".$rDesc."</b></p>
																				</div>
																			</div>
																		</div>
																	</div>

																	<div class='col-sm-6'>

																		<div class='row' style='height: 50%;'>
																		</div>

																		<div class='row'>
																			<h1 style='text-align: right; margin-right: 70px;' id='price'><b>&#8377;".$row['htRoomPrice']."</b></h1>
																			<h4 class='subPrice' style='text-align: right; margin-right: 70px;'>per Night</h4>
																		</div>
																	</div>

																</div>
															</div>
														</div>
													</div>
													<div class='col-sm-5' style='height: 95%;'>
														<div class='cardDetails'>
															<div class='row' style='margin: 15px;'>
																<div class='col-sm-4'>
																	<div class='row'>
																		<h5><b>CHECK-IN</b></h5>
																		<input  style='border:none; margin: 0px; padding: 0px; width:180px; height: 45px; padding-left: 50px; background-color: #E5E5E5; border-radius: 4px; border: 1px solid #BDBDBD;' id='cin' type='date' min='2019-04-13' data-date='' name='cin' data-date-format='DD MMMM YYYY' onclick='test()' value='".$cin."'>
																	</div><br>
																	<div class='row' style='margin-top: 18px;'>
																		<h5><b>CITY</b></h5>
																		<h5>".ucwords(strtolower($row['htCity']))."</h5>
																	</div>
																</div>
																<div class='col-sm-4'>
																	<div class='row'>
																		<h5><b>CHECK-OUT</b></h5>
																		<input  style='border:none; margin: 0px; padding: 0px; width:180px; height: 45px; padding-left: 50px; background-color: #E5E5E5; border-radius: 4px; border: 1px solid #BDBDBD;' id='cout' type='date' min='2019-04-13' data-date='' name='cout' data-date-format='DD MMMM YYYY' value='".$cout."'>
																	</div><br>
																	<div class='row' style='margin-top: 18px;'>
																		<h5><b>LOCALITY</b></h5>
																		<h5>".ucwords(strtolower($row['htLocation']))."</h5>
																	</div>
																</div>
																<div class='col-sm-4'>
																	<div class='row'>
																		<h5><b>ROOMS</b></h5>
																		<!-- <div class='dropdown'>
																	    	<button class='btn btn-default dropdown-toggle hCustomBtn' type='button' data-toggle='dropdown'>1
																			  <span class='caret'></span></button>
																			  <ul class='dropdown-menu'>
																			    <li><a href='#'>1</a></li>
																			    <li><a href='#'>2</a></li>
																			    <li><a href='#'>3</a></li>
																			    <li><a href='#'>4</a></li>
																			  </ul>
																		</div> -->
																		<select id='roomSelect' style='border:none; margin: 0px; width:180px; height: 45px; background-color: #E5E5E5; padding:0px 20px; border-radius: 4px; border: 1px solid #BDBDBD;' name='croom' onclick='changeValue();'>";
																		$x = 1;
																		while($x <= $row['htARooms']){
																			echo"<option value='".$x."'>".$x."</option>";
																			$x++;
																		}
																		  
																		  // <option value='2'>2</option>
																		  // <option value='3'>3</option>
																		  // <option value='4'>4</option>
																		  // <option value='5'>5</option>
																	  	 echo" </select>
																	
																	</div>
																</div>
															</div>
															<hr>
															<div class='row' style='margin: 15px;'>
																<h5><b>HOTEL RULES</b></h5>
																<ul>
																	<li>Check in after ".$checkinafter."<br></li>
																	<li>Check out before ".$checkoutbefore."<br></li>
																	<li>ZOYO welcomes guests of all nationalities<br></li>
																	<li>Hazardous goods not allowed<br></li>
																</ul>
															</div>
															<hr>
															<div class='row' style='margin: 15px;'>
																<div class='col-sm-6'>
																	<h5><b>AMENITIES</b></h5>
																	<ul>
																		<li class='".$wifi."'>Free Wifi<br></li>
																		<li class='".$tv."'>TV<br></li>
																		<li class='".$parking."'>Praking Facility<br></li>
																		<li class='".$breakfast."'>Complimentary Veg Breakfast<br></li>
																		<li class='".$microwave."'>Microwave<br></li>
																		<li class='".$bed."'>King Bed<br></li>
																		<li class='".$geyser."'>Geyser<br></li>
																		<li class='".$power."'>Power Backup<br></li>
																		<li class='".$fridge."'>Mini Fridge<br></li>
																	</ul>
																</div>
																<div class='col-sm-6'>
																	<h5><b>PAYMENT OPTION AVAILABLE</b></h5>
																	<h5>Pay at Hotel</h5>
																</div>
															</div>
															<hr>
															<div class='row'>
																<div class='col-sm-6'>
																	<h4 style='margin-left: 25px; margin-top: 20px;' class='subPrice' id='priceCalcView'><b>1 x ".$row['htRoomPrice']."</b></h4>
																	<h1 style='margin-left: 25px; margin-top: -4px;' id='priceView'><b>&#8377;".$row['htRoomPrice']."</b></h1>
																</div>
																<div class='col-sm-6'>
																	<button class='btn btn-danger btnBookNow' type='submit' name='book-submit' value='".$id."' style='padding: 10px;'>Book Now</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</form>";
							           
							        mysqli_free_result($result2);
							    } else{
							        echo "No records matching your query were found.";
							    }
							} else{
							    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
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

		<!-- <div style="width: 100%; background-color: #000; height: 50px; margin-top: 60px;">
			<h5 style="color: #fff; padding-top: 20px; padding-left: 20px;">© 2019 ZOYO & all affiliates - All rights reserved</h5>
		</div> -->
		
		<script type="text/javascript">

			

			function changeValue(){
			var e = document.getElementById("roomSelect");
			var room = e.options[e.selectedIndex].value;
			
			var price = document.getElementById("price").innerText;
			price = price.substring(1);

			var cal = (parseInt(room)*parseInt(price));

			document.getElementById("priceCalcView").innerHTML ="<b>"+room+" x "+price+"</b>"
			document.getElementById("priceView").innerHTML = "<b>₹"+cal+"</b>";
			}

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

			var td = document.getElementById('cin').value;
			var tm = document.getElementById('cout').value;


			

	
			if(td == ""){
					document.getElementById('cin').value=today;
					document.getElementById('cin').min = today;
				}

			if(tm == ""){
					document.getElementById('cout').value=tomorrow;
					document.getElementById('cout').min = today;
				}


			function test(){
				var x = document.getElementById('cin').value;
				document.getElementById('cout').min = x;

			}

			// document.getElementById('img2').on("error", function() {
			//   document.getElementById('img2').attr('src', '/images/default.png');
			// });
				
			
		</script>
	</body>
</html>