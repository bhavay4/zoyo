<?php
if (isset($_POST['log-submit'])){


	require 'includes/dbh.inc.php';

	$test1 = $_POST['username'];
	$test2 = $_POST['selectf'];
	$test3 = $_POST['roomtill'];
	$test4 = $_POST['checkinafter'];


    $sql = "INSERT INTO test (name, selectj, datej, timej) VALUES($test1, $test2, $test3, $test4)";
    $data = mysqli_query($conn, $sql);

    if($data){
    	echo "Success";
    }
    else{
    	echo "Failure";
    	echo $test1;
    	echo $test2;
    	echo $test3;
    	echo $test4;
    }
	// $stmt = mysqli_stmt_init($conn);
	// if(!mysqli_stmt_prepare($stmt, $sql)){
	// 	header("Location: ../hotelProfile.php?error=sqlerror");
	// 	exit();
	// }
	// else {
	// 	mysqli_stmt_bind_param($stmt, "sssssssssss", $hid, $bcity, $blocality, $baddress, $roomprice, $room, $bname, $checkinafter, $checkoutbefore, $roomfrom, $roomtill);
	// 	mysqli_stmt_execute($stmt);
	// 	header("Location: ../hotelProfile.php?addHotel=success");
	// 	exit();
	// }

	// mysqli_stmt_close($stmt);
	// mysqli_close($conn);			 
}
else {
	header("Location: ../hotelProfile.php");
	exit();
}





// 	if (empty($bname) || empty($bcity) || empty($blocality) || empty($baddress)){
// 		header("Location: ../hotelProfile.php?error=emptyfields");
// 		exit();
// 	}
// 	else {

// 		// $sql = "SELECT customerEmail FROM customers WHERE customerEmail=?";
// 		// $stmt = mysqli_stmt_init($conn);
// 		// if(!mysqli_stmt_prepare($stmt, $sql)){
// 		// 	header("Location: ../csignup.php?error=sqlerror");
// 		// 	exit();
// 		// }
// 		// else {
// 		// 	mysqli_stmt_bind_param($stmt, "s", $email);
// 		// 	mysqli_stmt_execute($stmt);
// 		// 	mysqli_stmt_store_result($stmt);
// 		// 	$resultCheck = mysqli_stmt_num_rows($stmt);
// 		// 	if ($resultCheck > 0){
// 		// 		header("Location: ../csignup.php?error=usertaken&mail=".$email);
// 		// 		exit();
// 		// 	}
// 		// 	else {
		
// 				$sql = "INSERT INTO hotels (htOwnerId, htRating, htCity, htLocation, htAddress, htRoomPrice, htRooms, htBranchName, htCheckinAfter, htCheckoutBefore, htAvailableFrom, htAvailableTill, htPhoto1, htPhoto2, htPhoto3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
// 				$stmt = mysqli_stmt_init($conn);
// 				if(!mysqli_stmt_prepare($stmt, $sql)){
// 					header("Location: ../hotelProfile.php?error=sqlerror");
// 					exit();
// 				}
// 				else {
// 					session_start();
// 					$email =  $_SESSION['userMail'];
// 					$sql = "SELECT hotelOwnerEmail FROM hotelOwnerss WHERE hotelOwnerEmail=?";
// 					$stmt = mysqli_stmt_init($conn);
// 					if(!mysqli_stmt_prepare($stmt, $sql)){
// 						header("Location: ../hotelProfile.php?error=sqlerror");
// 						exit();
// 					}
// 					else {
// 						mysqli_stmt_bind_param($stmt, "s", $email);
// 						mysqli_stmt_execute($stmt);
// 						$result =mysqli_stmt_get_result($stmt);
// 						if ($row = mysqli_fetch_assoc($result)){

// 							$hid = $row['hid'];
							

// 						}
// 						else {
// 							header("Location: ../hotelProfile.php?error=nouser");
// 							exit();
// 						}
// 						// mysqli_stmt_store_result($stmt);
// 						// $resultCheck = mysqli_stmt_num_rows($stmt);
// 						// if ($resultCheck > 0){
// 						// 	header("Location: ../csignup.php?error=usertaken&mail=".$email);
// 						// 	exit();
// 						// }

// 					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
// 					mysqli_stmt_execute($stmt);
// 					header("Location: ../hotelProfile.php?process=success");
// 					exit();
// 				}			

// 		// 	}
// 		// // }

// 	}
// 	mysqli_stmt_close($stmt);
// 	mysli_close($conn);
// }
