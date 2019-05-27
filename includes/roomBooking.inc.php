<?php

	 session_start();

	 // if(isset($_SESSION['page'])){
		// 		if($_SESSION['page'] == "customer"){
		// 		header("Location: /zoyo/clogin.php");
		// 		exit();
		// 		}
		// 	}

	 if(isset($_SESSION['userid'])){
	    $cin = $_GET['cin'];
		$cout = $_GET['cout'];
		$croom = (int)$_GET['croom'];
		$cid = (string)$_SESSION['userid'];
		$cID = (int)$cid;
		$dateToday = date("Y-m-d");

		$d1 = explode('-',$cout);
		$d2 = explode('-',$dateToday);

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

		$url = explode('=',$_SERVER['REQUEST_URI']);
		$hotelid = $url[4]; 
		$hotelID = (int)$hotelid;


		require 'dbh.inc.php';


		$sql = "SELECT * FROM hotels WHERE htid = $hotelid";
		if($result = mysqli_query($conn, $sql)){
			if(mysqli_num_rows($result) > 0){
		        $row = mysqli_fetch_array($result);
		        $branchName = $row['htBranchName'];
		        $htid = $row['htid'];
		        $bAddress = $row['htAddress'];
		        $bOwnerId = $row['htOwnerId'];
		        $ARooms = $row['htARooms'];
		        $rooms = $ARooms - $croom;

		        echo $rooms;

		        $sql = "UPDATE hotels SET  htARooms = $rooms WHERE htid=$htid"; 
                mysqli_query($conn, $sql);
		   		
		        $sql = "SELECT * FROM customers WHERE cid = $cid";
				if($result2 = mysqli_query($conn, $sql)){
					if(mysqli_num_rows($result2) > 0){
				        $row2 = mysqli_fetch_array($result2);
				        $customerName = $row2['customerName'];

				   		
				        $sql = "INSERT INTO bookings (hid, cid, bCustomerName, bBranchName, bOwnerId, bAddress, bCheckin, bCheckout, bRoom, bStatus) VALUES($hotelID, $cID, '$customerName', '$branchName', $bOwnerId, '$bAddress', '$cin', '$cout', $croom, '$status')";
		    			$data = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		    			if($data){
		    				header("Location: ../roomBooked.php?booked=success");
							exit();
		    			}
		    			else{
		    				echo "Fail";
		    			}
				   		
				        	
				        mysqli_free_result($result2);
				    } else{
				        echo "Error";
				    }

				}

		        	
		        mysqli_free_result($result);
		    } else{
		        echo "Error";
		    }

		}

		    


		mysqli_close($conn);		 

	  }else{
	    header("Location: ../clogin.php");
		exit();
	  }

	