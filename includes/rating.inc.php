<?php
if (isset($_GET['ratingid'])){

	session_start();
	require 'dbh.inc.php';

	$title = mysqli_real_escape_string($conn, $_GET['title']);
	$desc = mysqli_real_escape_string($conn, $_GET['desc']);
	$r1 = $_GET['r1'];
	$r2 = $_GET['r2'];
	$r3 = $_GET['r3'];
	$r4 = $_GET['r4'];
	$r5 = $_GET['r5'];
	$url = explode('=',$_SERVER['REQUEST_URI']);
	$id = (int)$url[8];

	if($r1 == '1'){
		$rating = '1';
	}
	else if($r2 == '1'){
		$rating = '2';
	}
	else if($r3 == '1'){
		$rating = '3';
	}
	else if($r4 == '1'){
		$rating = '4';
	}
	else if($r5 == '1'){
		$rating = '5';
	}
	else{
		$rating = '0';
	}

	$cid = (int)$_SESSION['userid'];


	if(empty($title) || empty($desc) || $rating == '0'){

		header("Location: ../rating.php?submitempty=$id");
		exit();

	}
	else{

		$sql = "SELECT * FROM Ratings WHERE hid=$id AND cid=$cid";
            if($result = mysqli_query($conn, $sql)){
              if(mysqli_num_rows($result) > 0){

                    $sql = "UPDATE Ratings SET rating = $rating, title = '$title', des = '$desc' WHERE hid=$id AND cid=$cid ";
	    			mysqli_query($conn, $sql) or die(mysqli_error($conn));

	    			header("Location: ../rating.php?updatesuccess=$id");
					exit();

                    
                } else{
                  
                  	$sql = "INSERT INTO Ratings (hid, cid, rating, title, des) VALUES($id, $cid, '$rating', '$title', '$desc')";
	    			mysqli_query($conn, $sql) or die(mysqli_error($conn));

	    			header("Location: ../rating.php?insertsuccess=$id");
					exit();

                }
                mysqli_free_result($result);

            }
            else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }

              mysqli_close($conn);
		


	}

	
	      
		
	}
		 
else {
	header("Location: ../rating.php");
	exit();
}
