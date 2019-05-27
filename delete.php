
<?php include('header4.php'); 

if($_SERVER['REQUEST_URI'] == '/zoyo/delete.php?delete=success'){
	echo "<div class='alert alert-success' role='alert'>
	  <p class='alertP'>The hotel has been deleted.</p>
	</div>";
}
else if($_SERVER['REQUEST_URI'] == '/zoyo/delete.php?delete=fail'){
	echo "<div class='alert alert-danger' role='alert'>
	  <p class='alertP'>The hotel can't be deleted as there is an ongoing booking.</p>
	</div>";
}


?>
<ul class="nav nav-pills subHeader" style="margin: 20px;">
        <li><a type="button"  class="btn" href="hotelProfile.php">Go Back</a></li>
        <li><a type="button"  class="btn" href="edit.php">Edit Accomodation</a></li>
        <li><a type="button"  class="btn btn-primary active" href="delete.php">Delete Accomodation</a></li>
</ul>

<!-- <form action="includes/addHotel.inc.php" method="post">

          
          <div style="background-color: #fff; border: 1px solid #BDBDBD; height: 680px; border-radius: 4px; margin: 20px; padding: 40px;">
            
            <div class="row">

              <div class="col-sm-3">
                <div class="form-group">
                  <label for="today_datePicker">ROOMS AVAILABLE FROM</label><br>
                  <input  style="border:1px solid #CBCBCB; padding-left:15px; width:377px; height: 33px; border-radius: 4px; margin: 0px;" id="today_datePicker" type="date" data-date="" data-date-format="DD MMMM YYYY" name="roomfrom">
              
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="tomorrow_datePicker">ROOMS AVAILABLE TILL</label>
                  <input  style="border:1px solid #CBCBCB; padding-left:15px; width:377px; height: 33px; border-radius: 4px; margin: 0px;" id="tomorrow_datePicker" type="date" data-date="" data-date-format="DD MMMM YYYY" name="roomtill">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">NUMBER OF AVAILABLE ROOMS</label>
                  <select name="room" class="form-control" id="exampleFormControlSelect1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>
             

            </div><br>
            <div class="row">

               <div class="col-sm-3">
                <div class="form-group">
                  <label for="pwd">BRANCH NAME</label>
                  <input type="text" name="bname" class="form-control" id="pwd">
                </div>
              </div>
              <div class="col-sm-3">
                  <label for="pwd">CITY</label>
                  <input type="text" name="bcity" class="form-control" id="pwd">
              </div>
              <div class="col-sm-3">
                  <label for="pwd">LOCALITY</label>
                  <input type="text" name="blocality" class="form-control" id="pwd">
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
                <input type="file" name="photos" multiple="multiple"/>(*Upload Maximum 3 photos.)
              </div>
              <div class="col-sm-3"></div>
              <div class="col-sm-3">
                <br>
                <button class="btn btn-primary" name="addhotelsubmit" type="submit" style="padding: 10px 40px;">Submit</button>
              </div>
            </div>
            

          </div> 
          </form>  -->


<h3 style="margin: 20px 60px;">Select the Hotel</h3>
<ul>
<?php
	$hotelid = $_SESSION['userid'];
	require 'includes/dbh.inc.php';
    $sql = "SELECT * FROM hotels WHERE htOwnerId = $hotelid ORDER BY htid DESC";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
        		Echo"
					<li>
						<div class='oBookingCard'>
							<div class='row'>
								<div class='col-sm-1'>
								</div>
								<div class='col-sm-2'>
									<h5><b>BRANCH NAME</b></h5>
									<p style='font-size: 25px;'>Hotel ".ucwords(strtolower($row['htBranchName']))."</p>
								</div>
								<div class='col-sm-3'>
									<h5><b>BRANCH ADDRESS</b></h5>
									<p style='font-size: 25px;'>".strtoupper($row['htAddress'])."</p>
								</div>
								<div class='col-sm-2'>
									<h5><b>ROOMS</b></h5>
									<p style='font-size: 25px;'>".$row['htRooms']."</p>
								</div>
								<div class='col-sm-1'>
									
									<button type='submit' class='btn btn-danger' data-toggle='modal' data-target='#".$row['htid']."' style='margin-top: 25px; width: 120px;'>Delete</button>
								
								</div>
							</div>
						</div>

						<!-- Modal -->
                        <div id='".$row['htid']."' class='modal fade' role='dialog'>
                          <div class='modal-dialog'>

                            <!-- Modal content-->
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                              </div>
                              <div class='modal-body'>
                                <h4><b>Are you sure, you want to delete?</b></h4>
                              </div>
                              <div class='modal-footer'>
                                <form action='includes/delete.inc.php' method='get'>
                                <button type='submit' class='btn btn-danger' name='cancel-submit' value='".$row['htid']."'>Yes</button>
                                <button type='button' class='btn btn-success' data-dismiss='modal'>No</button>
                                </form>
                              </div>
                            </div>

                          </div>
                        </div>
					</li>";
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

<script type="text/javascript">
	setTimeout(function(){
    $('.alert').removeClass('alert').addClass('hide');
	},2000);

	setTimeout(function(){
    $('.alertP').removeClass('alertP').addClass('hide');
	},2000);
</script>