<?php
	 include('header4.php'); 

	require 'includes/dbh.inc.php';
	$url = explode('=',$_SERVER['REQUEST_URI']);
	$id = (int)$url[1];
	$id4 = $url[1];
	$id2 = explode('/',$id4);
	$id3 = (int)$id2[0];


 if($_SERVER['REQUEST_URI'] == '/zoyo/edit.inc.php?emptyfields/edit-submit='.$id3){
		    echo "<div class='alert alert-danger' role='alert'>
		          <p class='alertP' style='text-align:center'>Please fill in all the fields.</p>
		        </div>";
  }
  else if($_SERVER['REQUEST_URI'] == '/zoyo/edit.inc.php?noimage/edit-submit='.$id3){
    echo "<div class='alert alert-danger' role='alert'>
          <p class='alertP' style='text-align:center'>No image selected. Select images for hotel.</p>
        </div>";
  }
  else if($_SERVER['REQUEST_URI'] == '/zoyo/edit.inc.php?ongoingbooking='.$id3){
    echo "<div class='alert alert-danger' role='alert'>
          <p class='alertP' style='text-align:center'>There is an ongoing booking. You can update the details once it is completed.</p>
        </div>";
  }
  else if($_SERVER['REQUEST_URI'] == '/zoyo/edit.inc.php?updatesuccess='.$id3){
    echo "<div class='alert alert-success' role='alert'>
          <p class='alertP' style='text-align:center'>Your hotel has been successfully updated.</p>
        </div>";
  }


						echo "<ul class='nav nav-pills subHeader' style='margin: 20px;'>
						        <li><a type='button'  class='btn' href='edit.php'>Go Back</a></li>
						        <li><a type='button'  class='btn btn-primary active' href='delete.php'>Delete Accomodation</a></li>
						</ul>";

				   		$sql = "SELECT * FROM hotels WHERE htid = $id";
					    if($result = mysqli_query($conn, $sql)){
					        if(mysqli_num_rows($result) > 0){
					        while($row = mysqli_fetch_array($result)){
					     
					        	echo "<form action='includes/hotelUpdate.inc.php' method='post' enctype='multipart/form-data'>

          
								          <div style='background-color: #fff; border: 1px solid #BDBDBD; height: 680px; border-radius: 4px; margin: 40px 20px; padding: 40px;'>
								            
								            <div class='row'>

								              <div class='col-sm-3'>
								                <div class='form-group'>
								                  <label for='pwd'>BRANCH NAME</label>
								                  <input type='text' name='bname' value='".$row['htBranchName']."' style='background-color:#F8F7BD;' class='form-control inBc' id='pwd'>
								                </div>
								              </div>
								              <div class='col-sm-3'>
								                <div class='form-group'>
								                  <label for='pwd'>CITY</label>
								                  <input type='text' name='bcity' value='".$row['htCity']."' style='background-color:#F8F7BD;' class='form-control' id='pwd'>
								                </div>
								              </div>
								              
								              <div class='col-sm-3'>
								                <div class='form-group'>
								                  <input type='hidden' name='id' value='".$id4."'>
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
								                  <label for='pwd'>LOCALITY</label>
								                  <input type='text' name='blocality' value='".$row['htLocation']."' style='background-color:#F8F7BD;' class='form-control' id='pwd'>
								                </div>
								              </div>
								              <div class='col-sm-3'>
								                  <label for='exampleFormControlSelect1'>NUMBER OF AVAILABLE ROOMS</label>
								                  <select name='room' class='form-control' style='background-color:#F8F7BD;' id='exampleFormControlSelect1'>
								                    <option id='1' value='1'>1</option>
								                    <option id='2' value='2'>2</option>
								                    <option id='3' value='3'>3</option>
								                    <option id='4' value='4'>4</option>
								                    <option id='5' value='5'>5</option>
								                  </select>
								              </div>
								              <div class='col-sm-3'>
								                  
								              </div>

								            </div><br>
								            <div class='row'>

								              <div class='col-sm-6'>
								                <div class='form-group'>
								                  <label for='usr'>ADDRESS</label>
								                  <input type='text' name='baddress' value='".$row['htAddress']."' style='background-color:#F8F7BD;' class='form-control' id='usr'>
								                </div>
								              </div>

								               <div class='col-sm-3'>
								                <div class='form-group'>
								                  <label for='pwd'>PRICE PER ROOM</label>
								                  <input type='text' name='roomprice' value='".$row['htRoomPrice']."' style='background-color:#F8F7BD;' class='form-control' id='pwd'>
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
								                  <input style='margin-right:3px; margin-left: 10px;' class='amenitites' type='checkbox' name='amicrowave' value='1'>Microwave<br>
								                  <input style='margin-right:3px; margin-left: 0px;' class='amenitites' type='checkbox' name='abed' value='1'>Queen Sized Bed
								                  <input style='margin-right:3px; margin-left: 10px;' class='amenitites' type='checkbox' name='ageyser' value='1'>Geyser
								                  <input style='margin-right:3px; margin-left: 10px;' class='amenitites' type='checkbox' name='apower' value='1'>Power Backup
								                  <input style='margin-right:3px; margin-left: 10px;' class='amenitites' type='checkbox' name='afridge' value='1'>Mini Fridge
								                </div>
								              </div>
								              <div class='col-sm-6'>
								                <div class='row'>
								                  <div class='col-sm-3'>
								                    <div class='form-group'>
								                      <label for='exampleFormControlSelect1'>CHECK-IN AFTER</label>
								                      <input style='width:172px; height: 34px; border-radius: 4px; border:1px solid #CBCBCB; padding-left:10px; background-color:#F8F7BD;' type='time' name='checkinafter' value='".$row['htCheckinAfter']."'>
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
								                      <input style='width:172px; height: 34px; border-radius: 4px; border:1px solid #CBCBCB; padding-left:10px; background-color:#F8F7BD;' type='time' name='checkoutbefore' value='".$row['htCheckoutBefore']."'>
								                    </div>
								                  </div>
								                  
								                </div>
								                
								              </div>
								              
								              
								            </div><hr>
								            <div class='row'>
								              <div class='col-sm-3'>
								                <h5><b>UPLOAD PHOTOS</b></h5>
								                <div class='row'>
								                  <div class='col-sm-6'>
								                     <input type='file' name='image'/>Select Hotel Image 1
								                  </div>
								                  <div class='col-sm-6'>
								                     <input type='file' name='image2'/>Select Hotel Image 2
								                  </div>
								                </div><br>
								                <div class='row'>
								                  <div class='col-sm-6'>
								                     <input type='file' name='image3'/>Select Hotel Image 3
								                  </div>
								                </div>
								              </div>
								              <div class='col-sm-3'></div>
								              <div class='col-sm-3'>
								                <br>
								                <button class='btn btn-primary' name='updatehotelsubmit' type='submit' value='".$id4."' style='padding: 10px 40px;'>Submit</button>
								              </div>
								            </div>
								            

								          </div> 
								          </form>";
								          }

					        	mysqli_free_result($result);
						    } 
						    else{
						        // header("Location: noResultFound.php");
						        // exit();
						        
						        echo "fail";
						    }

						}
						else{
						  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
						}


		mysqli_close($conn);		 
?>
		<script>
			function myFunction() {
			  document.getElementsByTagName("SELECT")[0].setAttribute("selected", "selected"); 
			}
			myFunction();

			setTimeout(function(){
		      $('.alert').removeClass('alert').addClass('hide');
		    },2000);

		</script>

	  