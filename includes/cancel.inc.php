<?php

	 session_start();

		require 'dbh.inc.php';
		$url = explode('=',$_SERVER['REQUEST_URI']);
		$id = (int)$url[1];


				   		
				       
		    			// if($data){

		    				$sql = "SELECT * FROM bookings WHERE bid = $id";
							if($result2 = mysqli_query($conn, $sql)){
								if(mysqli_num_rows($result2) > 0){
							        $row2 = mysqli_fetch_array($result2);
							        $hid = $row2['hid'];
							        $htARooms = $row2['bRoom'];

							        $sql = "SELECT * FROM hotels WHERE htid = $hid";
									if($result3 = mysqli_query($conn, $sql)){
										if(mysqli_num_rows($result3) > 0){
											$row3 = mysqli_fetch_array($result3);

											$htaRooms = $row3['htARooms']+$htARooms;



									        $sql = "UPDATE bookings SET bStatus='canceled' WHERE bid=$id";
				    						mysqli_query($conn, $sql) or die(mysqli_error($conn));

									        $sql = "UPDATE hotels SET htARooms = $htaRooms WHERE htid=$hid";
				    						mysqli_query($conn, $sql) or die(mysqli_error($conn));

				    						header("Location: ../customerProfile.php?canceled=success");
											exit();

											mysqli_free_result($result3);
									    } else{
									        
									    }

									}
									else{
										echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
									}

							        
							        mysqli_free_result($result2);
							    } else{
							        
							    }

							}
							else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							}
		    				
		    				
		    			// }
		    			// else{
		    			// 	echo "Fail";
		    			// }
				   		


		mysqli_close($conn);		 

	  