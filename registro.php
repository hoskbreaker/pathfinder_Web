 <?php
session_start();
?>


<?php

$host_db = "localhost";
$user_db = "pi";
$pass_db = "raspberry";
$db_name = "login";
$tbl_name = "usuarios";
 
 $form_pass = $_POST['pass'];
 
 //$hash = password_hash($form_pass, PASSWORD_DEFAULT); 

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
	 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";
	 sleep(3);
	 header("location:Log_in.html");
 }else{
	$query = "INSERT INTO $tbl_name (username, password, email)
		   VALUES ('$user', '$form_pass', '$email')";

	if ($conexion->query($query) === TRUE) {
	 
	 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
	 echo "<h4>" . "Bienvenido: " . $user . "</h4>" . "\n\n";
	 sleep(3);
	 header("location:Log_in.html");
	}else {
	 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
	 sleep(3);
	 header("location:Signup.html");
	}
}
 mysqli_close($conexion);
?>