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
$general='';
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
// if (isset($_POST["points"])) {
    // // Decode our JSON into PHP objects we can use
    // $general = json_decode($_POST["general"]);
// }
// $name=$general->nombre;
// $alin=$general->alineamiento;
// $player=$general->jugador;
// $class=$general->clase;
// $level=$general->nivel;
// $god=$general->deidad;
// $hl=$general->homeland;
// $race=$general->raza;
// $tall=$general->tam;
// $sex=$general->sexo;
// $age=$general->edad;
// $weight=$general->peso;
// $eyes=$general->ojos;

$buscarPersonaje = "SELECT * FROM $tbl_name
 WHERE nombre = '$name' ";

 $result = $conexion->query($buscarPersonaje);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
	 // header("location:Signup.html");
 }else{
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