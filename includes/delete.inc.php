<?php

	 session_start();

		require 'dbh.inc.php';
		$url = explode('=',$_SERVER['REQUEST_URI']);
		$id = (int)$url[1];


				   		$sql = "SELECT * FROM hotels WHERE htid = $id";
					    if($result = mysqli_query($conn, $sql)){
					        if(mysqli_num_rows($result) > 0){
						        $row = mysqli_fetch_array($result);
						        $htid = $row['htid'];

						        $sql = "SELECT * FROM bookings WHERE hid=$id;";
						        if($result2 = mysqli_query($conn, $sql)){
							        if(mysqli_num_rows($result2) > 0){
							        	 while($row2 = mysqli_fetch_array($result2)){
							        	 	$status = $row2['bStatus'];

							        	 	if($status == 'ongoing'){
									        	header("Location: ../delete.php?delete=fail");
												exit();
									        }


							        	 }
							        	
							        	$sql = "DELETE FROM hotels WHERE htid=$htid;";
								        $data = mysqli_query($conn, $sql) or die(mysqli_error($conn));

								        if($data){
					    				header("Location: ../delete.php?delete=success");
										exit();
						    			}
						    			else{
						    				echo "Fail";
						    			}

							        	mysqli_free_result($result2);
							        } 
								    else{
								        $sql = "DELETE FROM hotels WHERE htid=$htid;";
								        $data = mysqli_query($conn, $sql) or die(mysqli_error($conn));

								        if($data){
					    				header("Location: ../delete.php?delete=success");
										exit();
						    			}
						    			else{
						    				echo "Fail";
						    			}
								    }

								}
								else{
								  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
								}

						 

					        	mysqli_free_result($result);
					        
						    } 
						    else{
						        // header("Location: ../delete.php");
						        // exit();
						    }

						}
						else{
						  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
						}

				        
				   		


		mysqli_close($conn);		 

	  