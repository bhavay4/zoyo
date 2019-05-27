<?php include('header2.php'); 
  
  if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: index.php');
    exit;
}
// $url = explode('/',$_SERVER['HTTP_REFERER']);
// $u1 = $url[4];
// $u = '/'.$u1;

 // $_SERVER['HTTP_CACHE_CONTROL'] = 'max-age=1';
// if(isset($_SERVER['HTTP_CACHE_CONTROL'])){
  // if($_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0'){
    

      
  //   // echo "success";
  // }
  // else{
    if($_SERVER['REQUEST_URI'] == '/zoyo/customerProfile.php?canceled=success'){
    echo "<div class='alert alert-success' role='alert'>
            <p class='alertP'>Your booking has been canceled.</p>
          </div>";
        }
    // $_SERVER['HTTP_CACHE_CONTROL'] = 'max-age=1';
  // }
// }


  

?>

<div style="padding: 20px 120px;">
      <ul class="nav nav-pills subHeader">
        <li class="active"><a data-toggle="pill" href="#home" onclick="refresh()">Open Bookings</a></li>
        <li><a data-toggle="pill" href="#menu1">Previous Bookings</a></li>
      </ul>
      
      <div class="tab-content">
        <?php 
        $cid = (int)$_SESSION['userid'];
        require 'includes/dbh.inc.php';
        $sql = "SELECT * FROM bookings WHERE bStatus = 'ongoing' AND cid = $cid ORDER BY bid DESC";
            if($result = mysqli_query($conn, $sql)){
              if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                      if($row['bRoom'] == 1){
                        $room = $row['bRoom']." Room";
                      }
                      else{
                        $room = $row['bRoom']." Rooms";
                      }

        echo"
        <div id='home' class='tab-pane fade in active'>
          <ul>
            <li>
              <div class='oBookingCard'>
                <div class='row'>
                  <div class='col-sm-3'>
                    <img src='images/sample.jpg' style='width: 300px; object-fit: cover'><br>
                  </div>
                  <div class='col-sm-9'>
                    <div class='row'>
                      <div class='col-sm-4'>
                        <h3><b>Hotel ".ucwords(strtolower($row['bBranchName']))."</b></h3>
                        <h4 class='subHeading'>".strtoupper($row['bAddress'])."</h4>
                        <button class='btn btn-primary'  data-toggle='modal' data-target='#".$row['bid']."' style='margin-top:60px; width: 180px;'>Cancel</button>

                        <!-- Modal -->
                        <div id='".$row['bid']."' class='modal fade' role='dialog'>
                          <div class='modal-dialog'>

                            <!-- Modal content-->
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              </div>
                              <div class='modal-body'>
                                <h4><b>Are you sure, you want to cancel?</b></h4>
                              </div>
                              <div class='modal-footer'>
                                <form action='includes/cancel.inc.php' method='get'>
                                <button type='submit' class='btn btn-danger' name='cancel-submit' value='".$row['bid']."'>Yes</button>
                                <button type='button' class='btn btn-success' data-dismiss='modal'>No</button>
                                </form>
                              </div>
                            </div>

                          </div>
                        </div>

                      </div>
                      <div class='col-sm-8'>
                        <div class='row'>
                          <div class='col-sm-6'>
                            <h5><b>CHECK-IN</b></h5>
                            <p class='prevDetails'>".$row['bCheckin']."</p>
                          </div>
                          <div class='col-sm-6'>
                            <h5><b>CHECK-OUT</b></h5>
                            <p class='prevDetails'>".$row['bCheckout']."</p>
                          </div>
                        </div>
                        <div class='row'>
                          <div class='col-sm-6'>
                            <h5><b>ROOMS</b></h5>
                            <p class='prevDetails'>".$room."</p>
                          </div>
                          <div class='col-sm-6'>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>";

         }
                    mysqli_free_result($result);
                } else{
                    echo " <div id='home' class='tab-pane fade in active'>
          <ul>
            <li>
              <div class='oBookingCard' style='height:200px;'>
                <h3 style='text-align:center; padding:35px;'>No Ongoing Bookings.</h3>
              </div>
            </li>
          </ul>
        </div>";
                }

            }
            else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }

              mysqli_close($conn);

        ?>


       
        <?php 
        echo "
             <div id='menu1' class='tab-pane fade'>
          <ul> ";

        require 'includes/dbh.inc.php';
        $cid = (int)$_SESSION['userid'];
        $sql = "SELECT * FROM bookings WHERE (cid = $cid AND bStatus = 'complete') OR (cid = $cid AND bStatus = 'canceled') ORDER BY bid DESC";
            if($result = mysqli_query($conn, $sql)){
              if(mysqli_num_rows($result) > 0){

                    while($row = mysqli_fetch_array($result)){
                      if($row['bRoom'] == 1){
                        $room = $row['bRoom']." Room";
                      }
                      else{
                        $room = $row['bRoom']." Rooms";
                      }

             echo "
             <li>
              <div class='oBookingCard'>
                <div class='row'>
                  <div class='col-sm-3'>
                    <img src='images/sample.jpg' style='width: 300px; opacity: 0.7;'><br>
                  </div>
                  <div class='col-sm-9'>
                    <div class='row'>
                      <div class='col-sm-4'>
                        <h3><b>Hotel ".ucwords(strtolower($row['bBranchName']))."</b></h3>
                        <h4 class='subHeading'>".strtoupper($row['bAddress'])."</h4>
                        <form action='rating.php' method='get'>
                        <button class='btn btn-success' type='submit' name='review-submit' value='".$row['hid']."' style='margin-top:20px; width: 180px;'>Review</button>
                        </form>";

                         if($row['bStatus'] == 'complete'){
                            echo"<h5 style='margin-top:5px; width: 180px; padding: 8px; text-align:center; border: 1px solid #BDBDBD; border-radius: 4px;'>".ucwords($row['bStatus'])."d</h5>";
                         }
                         else{
                            echo"<h5 style='margin-top:5px; width: 180px; padding: 8px; text-align:center; border: 1px solid #BDBDBD; border-radius: 4px;'>".ucwords($row['bStatus'])."</h5>";
                         }                

                        echo"
                        

                      </div>
                      <div class='col-sm-8'>
                        <div class='row'>
                          <div class='col-sm-6'>
                            <h5><b>CHECK-IN</b></h5>
                            <p class='prevDetails'>".$row['bCheckin']."</p>
                          </div>
                          <div class='col-sm-6'>
                            <h5><b>CHECK-OUT</b></h5>
                            <p class='prevDetails'>".$row['bCheckout']."</p>
                          </div>
                        </div>
                        <div class='row'>
                          <div class='col-sm-6'>
                            <h5><b>ROOMS</b></h5>
                            <p class='prevDetails'>".$room."</p>
                          </div>
                          <div class='col-sm-6'>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </li>
          ";  } ?>
          


        <?php

        
                    mysqli_free_result($result);
                } else{
                    echo "
                            <li>
                              <div class='oBookingCard' style='height:200px;'>
                                <h3 style='text-align:center; padding:35px;'>No Previous Booking History.</h3>
                              </div>
                            </li>
                         ";
                }

            }
            else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }

              mysqli_close($conn);

              echo " </ul>
                        </div>";

        ?>

      </div>
</div>

<div style="width: 100%; background-color: #212121; height: 50px; position: absolute; right: 0; bottom: 0; left: 0; border-top: 1px solid #BDBDBD;">
      <h5 style="color: #fff; padding-top: 10px; padding-left: 20px;">© 2019 ZOYO & all affiliates - All rights reserved</h5>
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

        function refresh(){
            location.reload();
        }

        setTimeout(function(){
          $('.alert').removeClass('alert').addClass('hide');
        },2000);

    </script>

  </body>
</html>



<!-- 
                        <div id='myModal' class='modal fade' role='dialog'>
                          <div class='modal-dialog'>

                  
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                <h4 class='modal-title'><b>Please rate the service provided by hotel</b></h4>
                              </div>
                              <div class='modal-body'>
                                <div class='form-group' id='rating-ability-wrapper'>
                                    <label class='control-label' for='rating'>
                                    <span class='field-label-info'></span>
                                    <input type='hidden' id='selected_rating' name='selected_rating' value=' required='required'>
                                    </label>
                                    <h2 class='bold rating-header' style='>
                                    <span class='selected-rating'>0</span><small> / 5</small>
                                    </h2>
                                    <button type='button' class='btnrating btn btn-default btn-lg' data-attr='1' id='rating-star-1'>
                                        <i class='glyphicon glyphicon-star' aria-hidden='true'></i>
                                    </button>
                                    <button type='button' class='btnrating btn btn-default btn-lg' data-attr='2' id='rating-star-2'>
                                        <i class='glyphicon glyphicon-star' aria-hidden='true'></i>
                                    </button>
                                    <button type='button' class='btnrating btn btn-default btn-lg' data-attr='3' id='rating-star-3'>
                                        <i class='glyphicon glyphicon-star' aria-hidden='true'></i>
                                    </button>
                                    <button type='button' class='btnrating btn btn-default btn-lg' data-attr='4' id='rating-star-4'>
                                        <i class='glyphicon glyphicon-star' aria-hidden='true'></i>
                                    </button>
                                    <button type='button' class='btnrating btn btn-default btn-lg' data-attr='5' id='rating-star-5'>
                                        <i class='glyphicon glyphicon-star' aria-hidden='true'></i>
                                    </button>
                                </div>
                                <br>
                                <h5>Review Title</h5>
                                <input type='text'/>
                              </div>
                              <div class='modal-footer'>
                                <button type='button' class='btn btn-success' data-dismiss='modal'>Submit</button>
                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                              </div>
                            </div>

                          </div>
                        </div> -->