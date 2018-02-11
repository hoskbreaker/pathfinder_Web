 <?php
session_start();
?>

<?php

$host_db = "localhost";
$user_db = "pi";
$pass_db = "raspberry";
$db_name = "login";
$tbl_name = "general";

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
$race=$_POST['raza'];
$tall=$_POST['tam'];
$sex=$_POST['sexo'];
$age=$_POST['edad'];
$weight=$_POST['peso'];
$eyes=$_POST['ojos'];

$buscarPersonaje = "SELECT * FROM $tbl_name
 WHERE nombre = '$name' ";
 $result = $conexion->query($buscarPersonaje);

 $count = mysqli_num_rows($result);
 $row = mysqli_fetch_row($result);

 if ($count == 1) {
	 echo "existe";
	$query = "INSERT INTO $tbl_name
	(nombre, alineamiento, jugador, clase, nivel, dios, tierra, raza, tamano, sexo, edad, peso, ojos)
	   VALUES ('$name', '$alin', '$player', '$class', '$level', '$god', '$hl', '$race', '$tall', '$sex', '$age', '$weight', '$eyes');
	   ON DUPLICATE KEY UPDATE nombre=VALUES(nombre),
	   alineamiento=VALUES(alineamiento),
	   jugador=VALUES(jugador),
	   clase=VALUES(clase),
	   nivel=VALUES(nivel),
	   dios=VALUES(dios),
	   tierra=VALUES(tierra),
	   raza=VALUES(raza),
	   tamano=VALUES(tamano),
	   sexo=VALUES(sexo),
	   edad=VALUES(sexo),
	   peso=VALUES(peso),
	   ojos=VALUES(ojos)";
		
	 if ($conexion->query($query) === TRUE) {
	 	 echo "datos actualizados";
	}else {
		echo "error al actualizar datos";
	}
 }else{
	echo "no existe";
		$query = "INSERT INTO $tbl_name (nombre, alineamiento, jugador, clase, nivel, dios, tierra, raza, tamano, sexo, edad, peso, ojos)
		   VALUES ('$name', '$alin', '$player', '$class', '$level', '$god', '$hl', '$race', '$tall', '$sex', '$age', '$weight', '$eyes')";
	if ($conexion->query($query) === TRUE) {
	 	 echo "datos guardados";
	}else {
		echo "error en el guardado de datos";
	}
}
 mysqli_close($conexion);
?>