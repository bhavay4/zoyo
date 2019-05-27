<?php
if (isset($_POST['updatehotelsubmit'])){

	session_start();
	require 'dbh.inc.php';

	// $url = explode('=',$_SERVER['REQUEST_URI']);
	// $id = (int)$url[1];

	$tid = $_POST['id'];
	$tid2 = (int)$_POST['id'];
	$room = (int)$_POST['room'];
	$aroom = $room;
	$bname = strtolower($_POST['bname']);
	$bcity = strtolower($_POST['bcity']);
	$blocality = strtolower($_POST['blocality']);
	$baddress = strtolower($_POST['baddress']);
	$roomprice = (int)$_POST['roomprice'];
	$checkinafter = strtolower($_POST['checkinafter']);
	$checkoutbefore = strtolower($_POST['checkoutbefore']);
	$image = $_FILES['image']['name'];
	$target = "images/".$_FILES['image']['name'];
	$temp_loc = $_FILES['image']['tmp_name'];

	$image2 = $_FILES['image2']['name'];
	$target2 = "images/".$_FILES['image2']['name'];
	$temp_loc2 = $_FILES['image2']['tmp_name'];

	$image3 = $_FILES['image3']['name'];
	$target3 = "images/".$_FILES['image3']['name'];
	$temp_loc3 = $_FILES['image3']['tmp_name'];


	if(isset($_POST['awifi'])){
    $awifi = $_POST['awifi'];
	}else{
	$awifi = 0;
	}

	if(isset($_POST['atv'])){
    $atv = $_POST['atv'];
	}else{
	$atv = 0;
	}

	if(isset($_POST['aparking'])){
    $aparking = $_POST['aparking'];
	}else{
	$aparking = 0;
	}

	if(isset($_POST['abreakfast'])){
    $abreakfast = $_POST['abreakfast'];
	}else{
	$abreakfast = 0;
	}

	if(isset($_POST['amicrowave'])){
    $amicrowave = $_POST['amicrowave'];
	}else{
	$amicrowave = 0;
	}

	if(isset($_POST['abed'])){
    $abed = $_POST['abed'];
	}else{
	$abed = 0;
	}

	if(isset($_POST['ageyser'])){
    $ageyser = $_POST['ageyser'];
	}else{
	$ageyser = 0;
	}

	if(isset($_POST['apower'])){
    $apower = $_POST['apower'];
	}else{
	$apower = 0;
	}

	if(isset($_POST['afridge'])){
    $afridge = $_POST['afridge'];
	}else{
	$afridge = 0;
	}

	$email =  $_SESSION['userMail'];
	$hid = $_SESSION['userid'];

	if(empty($bname) || empty($bcity) || empty($blocality) || empty($roomprice) || empty($baddress)){

		// echo $tid;
		// echo gettype($tid);
		header('Location: /zoyo/edit.inc.php?emptyfields/edit-submit='.$tid);
		exit();

	}
	else if(empty($image) || empty($image2) || empty($image3)){
		header('Location: /zoyo/edit.inc.php?noimage/edit-submit='.$tid);
		exit();
	}
	else{

		$sql = "SELECT * FROM bookings WHERE hid=$tid2 AND bStatus='ongoing'";
        if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){

          		header('Location: /zoyo/edit.inc.php?ongoingbooking='.$tid);
				exit();

          	} else{

    			$sql = "UPDATE hotels SET htCity = '$bcity', htLocation = '$blocality', htAddress = '$baddress', htRoomPrice = '$roomprice', htRooms = '$room', htARooms = '$aroom', htBranchName = '$bname', htCheckinAfter = '$checkinafter', htCheckoutBefore = '$checkoutbefore', image = '$image', image2 = '$image2', image3 = '$image3' WHERE htid=$tid2 AND htOwnerId=$hid ";
	    			mysqli_query($conn, $sql) or die(mysqli_error($conn));

	    			move_uploaded_file($temp_loc, $target);
	    			move_uploaded_file($temp_loc2, $target2);
	    			move_uploaded_file($temp_loc3, $target3);

	    			$sql = "UPDATE  amenities SET wifi = '$awifi', tv = '$atv', parking = '$aparking', breakfast = '$abreakfast', microwave = '$amicrowave', bed = '$abed', geyser = '$ageyser', power = '$apower', fridge = '$afridge' WHERE hid=$tid2";
	    			mysqli_query($conn, $sql) or die(mysqli_error($conn));

	    			header('Location: /zoyo/edit.inc.php?updatesuccess='.$tid);
					exit();


            }
            mysqli_free_result($result);

        }
        else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }






	    			
                    
                
              
		


	}

	
	      
		mysqli_close($conn);
	}
	
		 
else {
	header('Location: /zoyo/edit.inc.php?edit-submit='.$tid);
	exit();
}
