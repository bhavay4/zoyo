<?php

if (isset($_POST['login-submit'])){

	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];

	if (empty($mailuid) || empty($mailuid)){
		header("Location: ../crlogin.php?error=emptyfields");
		exit();
	}
	else {
		$sql = "SELECT * FROM hotelOwners WHERE hotelOwnerEmail=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../crlogin.php?wrror=sqlerror");
			exit();
		}
		else {

			mysqli_stmt_bind_param($stmt, "s", $mailuid);
			mysqli_stmt_execute($stmt);

			$result =mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)){

				$pwdCheck = password_verify($password, $row['hotelOwnerPassword']);
				if($pwdCheck == false) {
					header("Location: ../crlogin.php?error=wrongpwd");
					exit();
				}
				else if($pwdCheck == true) {
					session_start();
					$_SESSION['userid'] = $row['hid'];
					$_SESSION['userMail'] = $row['hotelOwnerEmail'];
					$_SESSION['page'] = 'hotel';

					header("Location: ../hotelProfile.php?login=success");
					exit();
				}
				else {
					header("Location: ../crlogin.php?error=wrongpwd");
					exit();
				}

			}
			else {
				header("Location: ../crlogin.php?error=nouser");
				exit();
			}

		}
	}

}
else{
	header("Location: ../crlogin.php");
	exit();
}