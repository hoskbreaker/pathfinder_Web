<?php
session_start();
if (isset($_POST['submit'])) {
	include_once 'dbh.php';

	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	$rpwd = mysqli_real_escape_string($conn,$_POST['rpwd']);

	$errorEmpty = false;
	$errorEmail = false;
	$errorUid = false;
	$errorRpwd = false;

	//$sql="SELECT * FROM users WHERE user_uid='$uid'";//servidor cerrato
	$sql="SELECT * FROM usuarios WHERE username='$uid'";//servidor sanchez
	$result=mysqli_query($conn, $sql);
	$resultCheck=mysqli_num_rows($result);

	//Error Handlers
	//Check for empty fields
	if (empty($uid)||empty($email)||empty($pwd)||empty($rpwd)) {
		echo "<span class='form-error'>te has dejado alguno sin rellenar.</span>";
		$errorEmpty = true;
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<span class='form-error'>Escriba correctamente el e-mail.</span>";
		$errorEmail = true;
	} elseif ($resultCheck > 0) {
		echo "<span class='form-error'>Este nombre de usuario ya existe.</span>";
		$errorUid = true;
	}elseif ($rpwd!=$pwd) {
		echo "<span class='form-error'>Contraseñas distintas.</span>";
		$errorRpwd = true;
	}else{
		//hashing the password
		$hashedPWD = password_hash($pwd, PASSWORD_DEFAULT);
		//Insert the uder into the database
		//$sql="INSERT INTO users (user_email, user_uid, user_pwd) VALUES ('$email', '$uid', '$hashedPWD')";//servidor cerrato
		$sql="INSERT INTO usuarios (username, password, email) VALUES ('$uid', '$hashedPWD', '$email')";//servidor sanchez
		$result=mysqli_query($conn, $sql);
		echo "<span class='form-success'>Se ha registrado correctamente</span>";
		/*header("Location: ../login.php?signup=success");
		exit();	*/
	}

}else{
	echo "<span class='form-error'>Ha habido un error!</span>";
}

?>

<script>

	$("#uid, #email, #pwd, #rpwd").removeClass("input-error");

	var errorEmpty="<?php echo $errorEmpty; ?>";
	var errorEmail="<?php echo $errorEmail; ?>";
	var errorUid="<?php echo $errorUid; ?>";
	var errorRpwd="<?php echo $errorRpwd; ?>";

	if (errorEmpty == true) {
		$("#uid, #email, #pwd, #rpwd").addClass("input-error");
	}
	if(errorEmail==true){
		$("#email").addClass("input-error");
	}
	if (errorUid==true) {
		$("#uid").addClass("input-error");
	}
	if (errorRpwd==true) {
		$("#pwd").addClass("input-error");
		$("#rpwd").addClass("input-error");
	}
	if (errorEmpty == false && errorEmail==false && errorUid==false && errorRpwd==false) {
		$("#uid, #email, #pwd, #rpwd").val("");
	}
</script>





