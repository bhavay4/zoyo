<?php


    require 'includes/dbh.inc.php';
   




                    $sql = "SELECT * FROM bookings WHERE bStatus = 'ongoing';";
                    if($result = mysqli_query($conn, $sql)){
                      if(mysqli_num_rows($result) > 0){
                         while($row = mysqli_fetch_array($result)){
                            
                            $id = $row['bid'];
                            $checkout = $row['bCheckout'];
                            $today = date("Y-m-d");
                            
                            $d1 = explode('-',$checkout);
                            $d2 = explode('-',$today);

                            if($d1[2] >= $d2[2]){

                              if($d1[1] >= $d2[1]){

                                if($d1[0] >= $d2[0]){
                                  $status = 'ongoing';
                                }
                                else{
                                  $status = 'complete';
                                }

                              }
                              else{
                                $status = 'complete';
                              }

                            }
                            else{
                              $status = 'complete';
                            }

                            $sql = "UPDATE bookings SET  bStatus = '$status' WHERE bid=$id"; 
                            mysqli_query($conn, $sql);
                            
                         }

                        mysqli_free_result($result);
                    } 
                    else{
                       
                    }

                  }
                  else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                  }

           
              


    mysqli_close($conn);     

    