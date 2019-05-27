<?php include('header4.php'); 

  if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: crlogin.php');
    exit;
  }

  if($_SERVER['REQUEST_URI'] == '/zoyo/hotelProfile.php?addHotel=success'){
    echo "<div class='alert alert-success' role='alert'>
          <p class='alertP' style='text-align:center'>Hotel has been added successfully.</p>
        </div>";
  }
  else if($_SERVER['REQUEST_URI'] == '/zoyo/hotelProfile.php?error=emptyfields'){
    echo "<div class='alert alert-danger' role='alert'>
          <p class='alertP' style='text-align:center'>Please fill in all the fields.</p>
        </div>";
  }
  else if($_SERVER['REQUEST_URI'] == '/zoyo/hotelProfile.php?error=noimage'){
    echo "<div class='alert alert-danger' role='alert'>
          <p class='alertP' style='text-align:center'>Please Upload hotel picture.</p>
        </div>";
  }


?>



<div style="padding: 20px 120px;">
      <ul class="nav nav-pills subHeader">
        <li class="active"><a data-toggle="pill" href="#home">Add Accomodation</a></li>
        <li><a data-toggle="pill" href="#menu1">Bookings</a></li>
        <li><a type="button" style="margin-left:1000px;" class="btn btn-default" href="edit.php">Edit Accomodation</a></li>
        <li><a type="button" style="margin-left:10px;" class="btn btn-default" href="delete.php">Delete Accomodation</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <form action="includes/addHotel.inc.php" method="post" enctype="multipart/form-data">

            <input type="hidden" name="size" value="1000000">
 
          
          <div style="background-color: #fff; border: 1px solid #BDBDBD; height: 680px; border-radius: 4px; margin-top: 20px; padding: 40px;">
            
            <div class="row">

              <div class="col-sm-3">
                <div class="form-group">
                  <label for="pwd">BRANCH NAME</label>
                  <input type="text" name="bname" class="form-control" id="pwd">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="pwd">CITY</label>
                  <input type="text" name="bcity" class="form-control" id="pwd">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  
                </div>
              </div>
              <!-- <div class="col-sm-3">
                <h5><b>CHECK-IN</b></h5>
                <p class="prevDetails">Sun 09 Mar 19</p>
              </div> -->

            </div><br>
            <div class="row">

               <div class="col-sm-3">
                <div class="form-group">
                  <label for="pwd">LOCALITY</label>
                  <input type="text" name="blocality" class="form-control" id="pwd">
                </div>
              </div>
              <div class="col-sm-3">
                  <label for="exampleFormControlSelect1">NUMBER OF AVAILABLE ROOMS</label>
                  <select name="room" class="form-control" id="exampleFormControlSelect1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
              </div>
              <div class="col-sm-3">
                  
              </div>

            </div><br>
            <div class="row">

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="usr">ADDRESS</label>
                  <input type="text" name="baddress" class="form-control" id="usr">
                </div>
              </div>

               <div class="col-sm-3">
                <div class="form-group">
                  <label for="pwd">PRICE PER ROOM</label>
                  <input type="text" name="roomprice" class="form-control" id="pwd">
                </div>
              </div>

            </div><br>
            <hr>
            <div class="row">
              <div class="col-sm-6">
                <div class="">
                  <h5><b>AMENITIES</b></h5>
                  <input style="margin-right:3px; margin-left: 0px;" class="amenitites" type="checkbox" name="awifi" value="1">Free Wifi
                  <input style="margin-right:3px; margin-left: 10px;" class="amenitites" type="checkbox" name="atv" value="1">TV
                  <input style="margin-right:3px; margin-left: 10px;" class="amenitites" type="checkbox" name="aparking" value="1">Parking
                  <input style="margin-right:3px; margin-left: 10px;" class="amenitites" type="checkbox" name="abreakfast" value="1">Complimentary Veg Breakfast
                  <input style="margin-right:3px; margin-left: 10px;" class="amenitites" type="checkbox" name="amicrowave" value="1">Microwave<br>
                  <input style="margin-right:3px; margin-left: 0px;" class="amenitites" type="checkbox" name="abed" value="1">Queen Sized Bed
                  <input style="margin-right:3px; margin-left: 10px;" class="amenitites" type="checkbox" name="ageyser" value="1">Geyser
                  <input style="margin-right:3px; margin-left: 10px;" class="amenitites" type="checkbox" name="apower" value="1">Power backup
                  <input style="margin-right:3px; margin-left: 10px;" class="amenitites" type="checkbox" name="afridge" value="1">Mini Fridge
                </div>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">CHECK-IN AFTER</label>
                      <input style="width:172px; height: 34px; border-radius: 4px; border:1px solid #CBCBCB; padding-left:10px;" type="time" name="checkinafter" value="12:00">
                        <!-- <select class="form-control" style=" height:auto; overflow:scroll" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select> -->
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">CHECK-OUT BEFORE</label>
                      <input style="width:172px; height: 34px; border-radius: 4px; border:1px solid #CBCBCB; padding-left:10px;" type="time" name="checkoutbefore" value="11:00">
                    </div>
                  </div>
                  
                </div>
                
              </div>
              
              
            </div><hr>
            <div class="row">
              <div class="col-sm-3">
                <h5><b>UPLOAD PHOTOS</b></h5>
                <div class="row">
                  <div class="col-sm-6">
                     <input type="file" name="image"/>Select Hotel Image 1
                  </div>
                  <div class="col-sm-6">
                     <input type="file" name="image2"/>Select Hotel Image 2
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-sm-6">
                     <input type="file" name="image3"/>Select Hotel Image 3
                  </div>
                </div>
              </div>
              <div class="col-sm-3"></div>
              <div class="col-sm-3">
                <br>
                <button class="btn btn-primary" name="addhotelsubmit" type="submit" style="padding: 10px 40px;">Submit</button>
              </div>
            </div>
            

          </div> 
          </form>
        </div>
        
        <div id='menu1' class='tab-pane fade'>
          <ul>
            <?php 
              $hotelid = $_SESSION['userid'];
              require 'includes/dbh.inc.php';
              $sql = "SELECT * FROM bookings WHERE bOwnerId = $hotelid ORDER BY bid DESC";
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
                            <li>
                              <div class='oBookingCard'>
                                <div class='row'>
                                  <div class='col-sm-2'>
                                    <h5 style='text-align: center;'><b>CUSTOMER NAME</b></h5>
                                    <p style='font-size: 25px; text-align: center;'>".ucwords(strtolower($row['bCustomerName']))."</p>
                                  </div>
                                  <div class='col-sm-2'>
                                    <h5><b>BRANCH NAME</b></h5>
                                    <p style='font-size: 25px;'>".ucwords(strtolower($row['bBranchName']))."</p>
                                  </div>
                                  <div class='col-sm-2'>
                                    <h5><b>CHECK-IN</b></h5>
                                    <p class='prevDetails'>".$row['bCheckin']."</p>
                                  </div>
                                  <div class='col-sm-2'>
                                    <h5><b>CHECK-OUT</b></h5>
                                    <p class='prevDetails'>".$row['bCheckout']."</p>
                                  </div>
                                  <div class='col-sm-2'>
                                    <h5><b>ROOM</b></h5>
                                    <p class='prevDetails'>".$room."</p>
                                  </div>
                                  <div class='col-sm-2'>
                                    <h5><b>STATUS</b></h5>";

                                     if($row['bStatus'] == 'ongoing'){
                                        echo" <p class='prevDetails' style='background-color: #38C55B; color: #fff;'><b>".ucwords(strtolower($row['bStatus']))."</b></p>";
                                     }
                                     elseif($row['bStatus'] == 'complete'){
                                        echo" <p class='prevDetails' style='background-color: #337AB7; color: #fff;'><b>".ucwords(strtolower($row['bStatus']))."d"."</b></p>";
                                     }
                                     else{
                                        echo" <p class='prevDetails' style='background-color: #EF5350; color: #fff;'><b>".ucwords(strtolower($row['bStatus']))."</b></p>";
                                     }
                                    
                                    echo"
                                  </div>
                                </div>
                              </div>
                            </li>
                            ";
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
            </ul>
          </div>
      </div>
</div>

<!-- <div style="width: 100%; background-color: #000; height: 50px; margin-top: 180px;">
      <h5 style="color: #fff; padding-top: 20px; padding-left: 20px;">© 2019 ZOYO & all affiliates - All rights reserved</h5>
    </div>
 -->

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
    

  </script>

  </body>
</html>
