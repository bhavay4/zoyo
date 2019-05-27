<?php
if (isset($_POST['signup-submit'])){


	require 'dbh.inc.php';

	$hotelname = $_POST['hName'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];

	if (empty($hotelname) || empty($email) || empty($password) || empty($passwordRepeat)){
		header("Location: ../crsignup.php?error=emptyfields&uid=&mail=");
		exit();
	}
	// else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $hotelname)){
	// 	header("Location: ../crsignup.php?error=invalidmailuid");
	// 	exit();
	// }
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: ../crsignup.php?error=invalidmail&mail=".$hotelname);
		exit();
	}
	// else if (!preg_match("/^[a-zA-Z0-9]*$/", $hotelname)){
	// 	header("Location: ../crsignup.php?error=invaliduid&mail=".$mail);
	// 	exit();
	// }
	else if(strlen($password)<8){
		header("Location: ../crsignup.php?error=minimumlength");
		exit();
	}
	else if($password !== $passwordRepeat){
		header("Location: ../crsignup.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();
	}
	else {

		$sql = "SELECT hotelOwnerEmail FROM hotelOwners WHERE hotelOwnerEmail=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../crsignup.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0){
				header("Location: ../crsignup.php?error=usertaken&mail=".$email);
				exit();
			}
			else {
		
				$sql = "INSERT INTO hotelOwners (hotelName, hotelOwnerEmail, hotelOwnerPassword) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)){
					header("Location: ../crsignup.php?error=sqlerror");
					exit();
				}
				else {
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "sss", $hotelname, $email, $hashedPwd);
					mysqli_stmt_execute($stmt);
					header("Location: ../crlogin.php?signup=success");
					exit();
				}			

			}
		}

	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else {
	header("Location: ../crsignup.php");
	exit();
}