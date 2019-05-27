<?php

   session_start();

    require 'dbh.inc.php';
   




                    $sql = "SELECT * FROM bookings;";
                    if($result = mysqli_query($conn, $sql)){
                      if(mysqli_num_rows($result) > 0){
                         while($row = mysqli_fetch_array($result)){
                        
                            $checkout = $row['bCheckout'];
                            $today = date();
                            echo $checkout;
                            echo $today;

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

    