 <?php
session_start();
?>

<?php

$host_db = "localhost";
$user_db = "pi";
$pass_db = "raspberry";
$db_name = "login";
$tbl_name = "jugadores";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
	die("La conexion falló: " . $conexion->connect_error);
}

$name=$_POST['nombre'];
$alin=$_POST['alineamiento'];
$player=$_POST['jugador'];
$class=$_POST['clas'];
$level=$_POST['niv'];
$god=$_POST['deidad'];
$hl=$_POST['homeland'];
$buscarPersonaje = "SELECT * FROM $tbl_name
 WHERE personaje = '$name' ";

 $result = $conexion->query($buscarPersonaje);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
	 // header("location:Signup.html");
 }else{
	$query = "INSERT INTO $tbl_name (personaje, alineamiento, jugador, clase, nivel, dios, tierra)
		   VALUES ('$name', '$alin', '$player', '$class', '$level', '$god', '$hl')";

	if ($conexion->query($query) === TRUE) {
	 	 echo "datos guardados"
	}else {
		echo "error en el guardado de datos"
	}
}
 mysqli_close($conexion);
?>