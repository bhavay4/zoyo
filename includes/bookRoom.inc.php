<?php
if (isset($_POST['book-submit'])){


	// require 'dbh.inc.php';

	// $roomfrom = strtolower($_POST['roomfrom']);
	// $roomtill = strtolower($_POST['roomtill']);
	// $room = (int)$_POST['room'];
	// $bname = strtolower($_POST['bname']);
	// $bcity = strtolower($_POST['bcity']);
	// $blocality = strtolower($_POST['blocality']);
	// $baddress = strtolower($_POST['baddress']);
	// $roomprice = (int)$_POST['roomprice'];
	// $checkinafter = strtolower($_POST['checkinafter']);
	// $checkoutbefore = strtolower($_POST['checkoutbefore']);
	// $photos = strtolower($_POST['photos']);

	// if(isset($_POST['awifi'])){
 //    $awifi = $_POST['awifi'];
	// }else{
	// $awifi = 0;
	// }

	// if(isset($_POST['atv'])){
 //    $atv = $_POST['atv'];
	// }else{
	// $atv = 0;
	// }

	// if(isset($_POST['aparking'])){
 //    $aparking = $_POST['aparking'];
	// }else{
	// $aparking = 0;
	// }

	// if(isset($_POST['abreakfast'])){
 //    $abreakfast = $_POST['abreakfast'];
	// }else{
	// $abreakfast = 0;
	// }

	// if(isset($_POST['amicrowave'])){
 //    $amicrowave = $_POST['amicrowave'];
	// }else{
	// $amicrowave = 0;
	// }

	// if(isset($_POST['abed'])){
 //    $abed = $_POST['abed'];
	// }else{
	// $abed = 0;
	// }

	// if(isset($_POST['ageyser'])){
 //    $ageyser = $_POST['ageyser'];
	// }else{
	// $ageyser = 0;
	// }

	// if(isset($_POST['apower'])){
 //    $apower = $_POST['apower'];
	// }else{
	// $apower = 0;
	// }

	// if(isset($_POST['afridge'])){
 //    $afridge = $_POST['afridge'];
	// }else{
	// $afridge = 0;
	// }

	// session_start();
	// $email =  $_SESSION['userMail'];
	// $hid = $_SESSION['userid'];
	
	// if (empty($bname) || empty($bcity) || empty($blocality) || empty($baddress)){
	// 	header("Location: ../hotelProfile.php?error=emptyfields");
	// 	exit();
	// }
	// else{
	// 	$sql = "INSERT INTO hotels (htOwnerid, htCity, htLocation, htAddress, htRoomPrice, htRooms, htBranchName, htCheckinAfter,htCheckoutBefore, htAvailableFrom, htAvailableTill) VALUES($hid, '$bcity', '$blocality', '$baddress', $roomprice, $room, '$bname', '$checkinafter', '$checkoutbefore', '$roomfrom', '$roomtill')";
	//     $data = mysqli_query($conn, $sql);

	//     if($data){
	//     	$sql = "SELECT * FROM hotels ORDER BY htid DESC LIMIT 1";
	//     	if($result = mysqli_query($conn, $sql)){
	//     		if(mysqli_num_rows($result) > 0){
	// 		        $row = mysqli_fetch_array($result);
	// 		        $hotelId = $row['htid'];
	// 	        	$sql = "INSERT INTO amenities (hid, wifi, tv, parking, breakfast, microwave, bed, geyser, power, fridge) VALUES($hotelId, '$awifi', '$atv', '$aparking', '$abreakfast', '$amicrowave', '$abed', '$ageyser', '$apower', '$afridge')";
	// 				$data = mysqli_query($conn, $sql) or die(mysql_error());
	// 				if($data){
	// 					header("Location: ../hotelProfile.php?addHotel=success");
	// 					exit();}
	// 				else{echo "fail".mysql_error();}	
	// 		        mysqli_free_result($result);
	// 		    } else{
	// 		        echo "Error";
	// 		    }

	//     	}
	//     	else{
	//     		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	//     	}
	//     }
	//     else{
	//     	echo "Failure";
	//     }
	      
					
	// }


	// mysqli_close($conn);		 
}
else {
	header("Location: ../hotelView.php");
	exit();
}
