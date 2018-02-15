<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.php';

	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	$rpwd = mysqli_real_escape_string($conn,$_POST['rpwd']);


	//Error Handlers
	//Check for empty fields
	if (empty($uid)||empty($email)||empty($pwd)||empty($rpwd)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else{
		//check if email is valid
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../signup.php?signup=email");
			exit();
		} else{
			//$sql="SELECT * FROM users WHERE user_uid='$uid'";//servidor cerrato
			$sql="SELECT * FROM usuarios WHERE username='$uid'";//servidor sanchez
			$result=mysqli_query($conn, $sql);
			$resultCheck=mysqli_num_rows($result);

			if ($resultCheck > 0) {
				header("Location: ../signup.php?signup=usertaken");
				exit();
			}else{
				if ($rpwd!=$pwd) {
					header("Location: ../signup.php?signup=differentpassword");
					exit();
				}else{
					//hashing the password
					$hashedPWD = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					//$sql="INSERT INTO users (user_email, user_uid, user_pwd) VALUES ('$email', '$uid', '$hashedPWD');";//servidor cerrato
					$sql="INSERT INTO usuarios (username, password, email) VALUES ('$uid', '$hashedPWD', '$email')";//servidor sanchez
					$result=mysqli_query($conn, $sql);
					header("Location: ../login.php?signup=success");
					exit();
				}
			}
		}	
	}

}else{
	header("Location: ../signup.php");
	exit();
}

?>