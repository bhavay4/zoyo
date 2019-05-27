<?php
	 include('../header4.php'); 

		require 'dbh.inc.php';
		$url = explode('=',$_SERVER['REQUEST_URI']);
		$id = (int)$url[1];

		echo "<form action='includes/addHotel.inc.php' method='post'>

          
          <div style='background-color: #fff; border: 1px solid #BDBDBD; height: 680px; border-radius: 4px; margin-top: 20px; padding: 40px;'>
            
            <div class='row'>

              <div class='col-sm-3'>
                <div class='form-group'>
                  <label for='today_datePicker'>ROOMS AVAILABLE FROM</label><br>
                  <input  style='border:1px solid #CBCBCB; padding-left:15px; width:377px; height: 33px; border-radius: 4px; margin: 0px;' id='today_datePicker' type='date' data-date='' data-date-format='DD MMMM YYYY' name='roomfrom'>
                  <!-- <select class='form-control' id='exampleFormControlSelect1'>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select> -->
                </div>
              </div>
              <div class='col-sm-3'>
                <div class='form-group'>
                  <label for='tomorrow_datePicker'>ROOMS AVAILABLE TILL</label>
                  <input  style='border:1px solid #CBCBCB; padding-left:15px; width:377px; height: 33px; border-radius: 4px; margin: 0px;' id='tomorrow_datePicker' type='date' data-date='' data-date-format='DD MMMM YYYY' name='roomtill'>
                </div>
              </div>
              <div class='col-sm-3'>
                <div class='form-group'>
                  <label for='exampleFormControlSelect1'>NUMBER OF AVAILABLE ROOMS</label>
                  <select name='room' class='form-control' id='exampleFormControlSelect1'>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                  </select>
                </div>
              </div>
              <!-- <div class='col-sm-3'>
                <h5><b>CHECK-IN</b></h5>
                <p class='prevDetails'>Sun 09 Mar 19</p>
              </div> -->

            </div><br>
            <div class='row'>

               <div class='col-sm-3'>
                <div class='form-group'>
                  <label for='pwd'>BRANCH NAME</label>
                  <input type='text' name='bname' class='form-control' id='pwd'>
                </div>
              </div>
              <div class='col-sm-3'>
                  <label for='pwd'>CITY</label>
                  <input type='text' name='bcity' class='form-control' id='pwd'>
              </div>
              <div class='col-sm-3'>
                  <label for='pwd'>LOCALITY</label>
                  <input type='text' name='blocality' class='form-control' id='pwd'>
              </div>

            </div><br>
            <div class='row'>

              <div class='col-sm-6'>
                <div class='form-group'>
                  <label for='usr'>ADDRESS</label>
                  <input type='text' name='baddress' class='form-control' id='usr'>
                </div>
              </div>

               <div class='col-sm-3'>
                <div class='form-group'>
                  <label for='pwd'>PRICE PER ROOM</label>
                  <input type='text' name='roomprice' class='form-control' id='pwd'>
                </div>
              </div>

            </div><br>
            <hr>
            <div class='row'>
              <div class='col-sm-6'>
                <div class=''>
                  <h5><b>AMENITIES</b></h5>
                  <input style='margin-right:3px; margin-left: 0px;' class='amenitites' type='checkbox' name='awifi' value='1'>Free Wifi
                  <input style='margin-right:3px; margin-left: 10px;' class='amenitites' type='checkbox' name='atv' value='1'>TV
                  <input style='margin-right:3px; margin-left: 10px;' class='amenitites' type='checkbox' name='aparking' value='1'>Parking
                  <input style='margin-right:3px; margin-left: 10px;' class='amenitites' type='checkbox' name='abreakfast' value='1'>Complimentary Veg Breakfast
                  <input style='margin-right:3px; margin-left: 10px;' class='amenitites' type='checkbox' name='abed' value='1'>Queen Sized Bed
                  <input style='margin-right:3px; margin-left: 10px;' class='amenitites' type='checkbox' name='ageyser' value='1'>Geyser
                  <input style='margin-right:3px; margin-left: 10px;' class='amenitites' type='checkbox' name='afridge' value='1'>Mini Fridge
                </div>
              </div>
              <div class='col-sm-6'>
                <div class='row'>
                  <div class='col-sm-3'>
                    <div class='form-group'>
                      <label for='exampleFormControlSelect1'>CHECK-IN AFTER</label>
                      <input style='width:172px; height: 34px; border-radius: 4px; border:1px solid #CBCBCB; padding-left:10px;' type='time' name='checkinafter' value='12:00'>
                        <!-- <select class='form-control' style=' height:auto; overflow:scroll' id='exampleFormControlSelect1'>
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
                  <div class='col-sm-3'>
                    <div class='form-group'>
                      <label for='exampleFormControlSelect1'>CHECK-OUT BEFORE</label>
                      <input style='width:172px; height: 34px; border-radius: 4px; border:1px solid #CBCBCB; padding-left:10px;' type='time' name='checkoutbefore' value='11:00'>
                    </div>
                  </div>
                  
                </div>
                
              </div>
              
              
            </div><hr>
            <div class='row'>
              <div class='col-sm-3'>
                <h5><b>UPLOAD PHOTOS</b></h5>
                <input type='file' name='photos' multiple='multiple'/>(*Upload Maximum 3 photos.)
              </div>
              <div class='col-sm-3'></div>
              <div class='col-sm-3'>
                <br>
                <button class='btn btn-primary' name='addhotelsubmit' type='submit' style='padding: 10px 40px;'>Submit</button>
              </div>
            </div>
            

          </div> 
          </form>";


				  //  		$sql = "SELECT * FROM bookings WHERE hid = $id";
					 //    if($result = mysqli_query($conn, $sql)){
					 //        if(mysqli_num_rows($result) > 0){
					 //        $row = mysqli_fetch_array($result);
					     

					 //        	mysqli_free_result($result);
					        
						//     } 
						//     else{
						//         header("Location: noResultFound.php");
						//         exit();
						//     }

						// }
						// else{
						//   echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
						// }


		mysqli_close($conn);		 

	  