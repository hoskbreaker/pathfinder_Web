 <?php
session_start();
?>


<?php

$host_db = "localhost";
$user_db = "pi";
$pass_db = "raspberry";
$db_name = "login";
$tbl_name = "usuarios";
 
 $pass = $_POST['pass'];
 
 //$hash = password_hash($pass, PASSWORD_DEFAULT); 

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
	die("La conexion falló: " . $conexion->connect_error);
}
$user=$_POST['user'];
$email=$_POST['email'];
 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE username = '$user' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
	 header("location:Signup.html");
 }else{
	$query = "INSERT INTO $tbl_name (username, password, email)
		   VALUES ('$user', '$pass', '$email')";

	if ($conexion->query($query) === TRUE) {
	 	 sleep(3);
		header("location:Log_in.html");
	}else {
		header("location:Signup.html");
	}
}
 mysqli_close($conexion);
?>