<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.php';
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	 //error handlers
	//check if inputs are empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../login.php?login=empty");
		exit();
	}else{
		//$sql="SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";//servidor cerrato
		$sql="SELECT * FROM usuarios WHERE username ='$uid' OR email='$uid'";//servidor sanchez
		$result= mysqli_query($conn, $sql);
		$resultCheck=mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../login.php?login=error1");
			exit();
		} else{
			if ($row=mysqli_fetch_assoc($result)) {
				//Dehashing password
				// $hashedPwdCheck= password_verify($pwd, $row['user_pwd']);//servidor cerrato
				$hashedPwdCheck= password_verify($pwd, $row['password']);//servidor sanchez
				if ($hashedPwdCheck == false) {
					header("Location: ../login.php?login=error2");
					exit();
				}elseif ($hashedPwdCheck == true) {
					//Log in the user here
					// $_SESSION['u_id']=$row['user_id'];
					// $_SESSION['u_email']=$row['user_email'];
					// $_SESSION['u_uid']=$row['user_uid'];
					$_SESSION['u_id']=$row['ID'];
					$_SESSION['u_email']=$row['email'];
					$_SESSION['u_uid']=$row['username'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
	}
}else{
	header("Location: ../login.php?login=error3");
	exit();
}