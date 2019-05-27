<?php

if (isset($_POST['login-submit'])){

	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];
	$prevPage = $_POST['prevPage'];


	if (empty($mailuid) || empty($mailuid)){
		header("Location: ../clogin.php?error=emptyfields");
		exit();
	}
	else {
		$sql = "SELECT * FROM customers WHERE customerEmail=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../index.php?error=sqlerror");
			exit();
		}
		else {

			mysqli_stmt_bind_param($stmt, "s", $mailuid);
			mysqli_stmt_execute($stmt);

			$result =mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)){

				$pwdCheck = password_verify($password, $row['customerPassword']);
				if($pwdCheck == false) {
					header("Location: ../clogin.php?error=wrongpwd");
					exit();
				}
				else if($pwdCheck == true) {
					session_start();
					$_SESSION['userid'] = $row['cid'];
					$_SESSION['userName'] = $row['customerName'];
					$_SESSION['userMail'] = $row['customerEmail'];
					$_SESSION['page'] = 'customer';

					header("Location: ..".$prevPage."?login=success");
					exit();


				}
				else {
					header("Location: ../clogin.php?error=wrongpwd");
					exit();
				}

			}
			else {
				header("Location: ../clogin.php?error=nouser");
				exit();
			}

		}
	}

}
else{
	header("Location: ../index.php");
	exit();
}