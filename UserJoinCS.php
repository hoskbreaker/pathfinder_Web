<?php 
session_start();
if($_SESSION["id"]!="SI"){ 
	echo "no se ha iniciado sesion";
	header('Location:login.html');
}
?>
<?php

$host_db = "localhost";
$user_db = "pi";
$pass_db = "raspberry";
$db_name = "login";
$tbl_name = "personajes";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
	die("La conexion falló: " . $conexion->connect_error);
}
$buscarPersonaje = "SELECT * FROM $tbl_name WHERE IDuser = '$_SESSION['username']'";
$result = $conexion->query($buscarPersonaje);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

if ($count == 1) {
	 echo "tiene personajes\n";
	$resp = 
		
	 if ($conexion->query($resp) === TRUE) {
	 	 echo "datos actualizados\n";
		 echo $id;
		 
	}else {
		echo "error al actualizar datos";
		echo $resp;
		echo $conexion->error;
	}
 }else{
	echo "no tiene personajes\n";
	$resp = 
	if ($conexion->query($resp) === TRUE) {
	 	 echo "datos guardados";
	}else {
		echo "error en el guardado de datos";
		echo $resp;
		echo $conexion->error;
	}
}