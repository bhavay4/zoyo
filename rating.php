		
		<?php
		 require "header2.php"; 
		 require "includes/dbh.inc.php";
		 $url = explode('=',$_SERVER['REQUEST_URI']);
		 $id = (int)$url[1];
		
		 if($_SERVER['REQUEST_URI'] == '/zoyo/rating.php?submitsuccess='.$id.''){
		    echo "<div class='alert alert-success' role='alert'>
		          <p class='alertP'>Your review has been added.</p>
		        </div>";
		  }

		  else if($_SERVER['REQUEST_URI'] == '/zoyo/rating.php?submitempty='.$id.''){
		    echo "<div class='alert alert-danger' role='alert'>
		          <p class='alertP'>Please fill in all the fields..</p>
		        </div>";
		  }

		
			echo "<div class='container' style='height: auto; background-color: #fff; margin-top: 15px;'>

				<h1 style='padding: 50px;'><b>Ratings & Reviews</b></h1>
				<hr>

				<div style='padding:0px 150px; text-align: justify;'>
						<br>
						<form action='includes/rating.inc.php' method='get'>
						<h4><b>Select Rating</b></h4>
						<div class='form-group' id='rating-ability-wrapper'>
                            <label class='control-label' for='rating'>
                            <span class='field-label-info'></span>
                            <input type='hidden' id='selected_rating' required='required'>
                            </label>
                           
                            <button type='button' name='r1' value='0' onclick='one()' class='btnrating btn btn-default btn-lg' onclick='one()' data-attr='1' id='rating-star-1'>
                            	<input type='hidden' name='r1' id='r1'/>
                                <i class='glyphicon glyphicon-star' aria-hidden='true'></i>
                            </button>
                            <button type='button' name='r2' value='0' onclick='two()' class='btnrating btn btn-default btn-lg' data-attr='2' id='rating-star-2'>
                            	<input type='hidden' name='r2' id='r2'/>
                                <i class='glyphicon glyphicon-star' aria-hidden='true'></i>
                            </button>
                            <button type='button' name='r3' value='0' onclick='three()' class='btnrating btn btn-default btn-lg' data-attr='3' id='rating-star-3'>
                            	<input type='hidden' name='r3' id='r3'/>
                                <i class='glyphicon glyphicon-star' aria-hidden='true'></i>
                            </button>
                            <button type='button' name='r4' value='0' onclick='four()' class='btnrating btn btn-default btn-lg' data-attr='4' id='rating-star-4'>
                            	<input type='hidden' name='r4' id='r4'/>
                                <i class='glyphicon glyphicon-star' aria-hidden='true'></i>
                            </button>
                            <button type='button' name='r5' value='0' onclick='five()' class='btnrating btn btn-default btn-lg' data-attr='5' id='rating-star-5'>
                            	<input type='hidden' name='r5' id='r5'/>
                                <i class='glyphicon glyphicon-star' aria-hidden='true'></i>
                            </button>
                        </div><br>
						<h4><b>Review Title</b></h4><input type='text' name='title' style='width:840px; height: 30px;'>
						<h4><b>Review Description</b></h4>
						<textarea rows='8' cols='103' name='desc'></textarea><br><br>
						<button type='submit' class='btn btn-success' name='ratingid' value='".$id."' style='width: 100px;'>Submit</button>
					</form>
				</div><br><hr><h2 style='padding-top: 50px; padding-left: 50px;'><b>Reviews</b></h2><br>
				<ul>";

				// $sql = "SELECT DISTINCT cid, hid FROM bookings WHERE hid = $id";
    //               if($result3 = mysqli_query($conn, $sql)){
    //                 if(mysqli_num_rows($result3) > 0){
    //                 while($row3 = mysqli_fetch_array($result3)){

    //                 	$id2 = (int)$row3['hid'];
    //                 	echo $id2."<br>";

                    
					$sql = "SELECT * FROM Ratings WHERE hid = $id";
			                  if($result = mysqli_query($conn, $sql)){
			                    if(mysqli_num_rows($result) > 0){
			                    	while($row = mysqli_fetch_array($result)){
			                    	if($row['rating'] == '0'){
			                    		
			                    	}
			                    	else{
										echo "
											<li>
												<div style='padding:0px 150px; text-align: justify;'>
												<br>";
												$cid = (int)$row['cid'];
												$sql = "SELECT * FROM customers WHERE cid = $cid";
								                  if($result2 = mysqli_query($conn, $sql)){
								                    if(mysqli_num_rows($result2) > 0){
								                    	$row2 = mysqli_fetch_array($result2);

								                    			echo "<h3><b>".ucwords(strtolower($row2['customerName']))."</b></h3>";
								                    	
											                    mysqli_free_result($result2);
											                } else{
											                    header("Location: noResultFound.php");
											                    exit();
											                }

											            }
											            else{
											              echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
											            }
											            echo"
												
												 <div class='form-group' id='rating-ability-wrapper'>
						                            
						                            <!-- <button type='button' class='btnrating btn btn-warning btn-sm' data-attr='1' id='rating-star-1'>
						                                <i class='glyphicon glyphicon-star' aria-hidden='true'></i>
						                            </button> -->";
						                         		 
						                         		    $x = 1;
						                         		    $y = (int)$row['rating'];
						                         		    $z = 5 - $y;
						                         			while($x <= $y){
						                         				echo "<i class='glyphicon glyphicon-star' style='padding: 5px; border:1px solid #F0AD4E; margin-right:2px; background-color: #F0AD4E; color: #fff; border-radius: 4px;' aria-hidden='true'></i>";
						                         				$x++;
						                         			}
						                         			$x=1;
						                         			while($x <= $z){
						                         				echo "<i class='glyphicon glyphicon-star' style='padding: 5px; border:1px solid #A8A8A8; margin-right:2px; border-radius: 4px;' aria-hidden='true'></i>";
						                         				$x++;
						                         			}


						                         			
											                      		echo"
													                        </div><br>
																			<h3><b>".ucwords(strtolower($row['title']))."</b></h3>
																			<p>".ucwords(strtolower($row['des']))."</p></div><br><hr>

																		</li>
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

						      // }
	           //          mysqli_free_result($result3);
	           //      } else{
	           //          header("Location: noResultFound.php");
	           //          exit();
	           //      }

	           //  }
	           //  else{
	           //    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	           //  }

						      	
                            
			
			?>
			</ul>

			</div>
			<script type="text/javascript">
		        jQuery(document).ready(function($){
		      
		          $(".btnrating").on('click',(function(e) {
		          
		          var previous_value = $("#selected_rating").val();
		          
		          var selected_value = $(this).attr("data-attr");
		          $("#selected_rating").val(selected_value);
		          
		          $(".selected-rating").empty();
		          $(".selected-rating").html(selected_value);
		          
		          for (i = 1; i <= selected_value; ++i) {
		          $("#rating-star-"+i).toggleClass('btn-warning');
		          $("#rating-star-"+i).toggleClass('btn-default');
		          }
		          
		          for (ix = 1; ix <= previous_value; ++ix) {
		          $("#rating-star-"+ix).toggleClass('btn-warning');
		          $("#rating-star-"+ix).toggleClass('btn-default');
		          }
		          
		          }));
		          
		            
		        });

		        function one(){
		        	document.getElementById('r1').value = 1;
		        	document.getElementById('r2').value = 0;
		        	document.getElementById('r3').value = 0;
		        	document.getElementById('r4').value = 0;
		        	document.getElementById('r5').value = 0;
		        }

		        function two(){
		        	document.getElementById('r1').value = 0;
		        	document.getElementById('r2').value = 1;
		        	document.getElementById('r3').value = 0;
		        	document.getElementById('r4').value = 0;
		        	document.getElementById('r5').value = 0;
		        }

		        function three(){
		        	document.getElementById('r1').value = 0;
		        	document.getElementById('r2').value = 0;
		        	document.getElementById('r3').value = 1;
		        	document.getElementById('r4').value = 0;
		        	document.getElementById('r5').value = 0;
		        }

		        function four(){
		        	document.getElementById('r1').value = 0;
		        	document.getElementById('r2').value = 0;
		        	document.getElementById('r3').value = 0;
		        	document.getElementById('r4').value = 1;
		        	document.getElementById('r5').value = 0;
		        }

		        function five(){
		        	document.getElementById('r1').value = 0;
		        	document.getElementById('r2').value = 0;
		        	document.getElementById('r3').value = 0;
		        	document.getElementById('r4').value = 0;
		        	document.getElementById('r5').value = 1;
		        }

		        setTimeout(function(){
		          $('.alert').removeClass('alert').addClass('hide');
		        },2000);
		        
    		</script>
		

		<?php
		 require "footer.php"; 
		?>