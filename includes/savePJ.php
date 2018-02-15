 <?php
session_start();

include 'dbh.php';
include 'userjoin.php';
if ($conn->connect_error) {
	die("La conexion falló: " . $conn->connect_error);
}
$tbl_name = "general";

$name = mysqli_real_escape_string($conn, $_POST['nombre']);
$alin = mysqli_real_escape_string($conn, $_POST['alineamiento']);
$player = mysqli_real_escape_string($conn, $_POST['jugador']);
$class = mysqli_real_escape_string($conn, $_POST['clas']);
$level = mysqli_real_escape_string($conn, $_POST['niv']);
$god = mysqli_real_escape_string($conn, $_POST['deidad']);
$hl = mysqli_real_escape_string($conn, $_POST['homeland']);
$race = mysqli_real_escape_string($conn, $_POST['raza']);
$tall = mysqli_real_escape_string($conn, $_POST['tam']);
$sex = mysqli_real_escape_string($conn, $_POST['sexo']);
$age = mysqli_real_escape_string($conn, $_POST['edad']);
$weight = mysqli_real_escape_string($conn, $_POST['peso']);
$eyes = mysqli_real_escape_string($conn, $_POST['ojos']);

$buscarPersonaje = "SELECT * FROM $tbl_name WHERE nombre = '$name'";
$result = $conn->query($buscarPersonaje);

$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
$id =$row['IDpj'];

if ($count == 1) {
	echo "existe\n";
	
	$resp = "UPDATE $tbl_name 
	SET nombre = '$name', 
	alineamiento = '$alin', 
	jugador = '$player', 
	clase = '$class', 
	nivel = '$level', 
	dios = '$god', 
	tierra='$hl', 
	raza='$race', 
	tamano='$tall', 
	sexo='$sex', 
	edad='$age', 
	peso='$weight', 
	ojos='$eyes' 
	WHERE IDpj='$id'\n";
		
	if ($conn->query($resp) === TRUE) {
		 echo "datos actualizados\n";
		 echo $id;
		 
	}else {
		echo "error al actualizar datos";
		echo $resp;
		echo $conn->error;
	}
}else{
	echo "no existe\n";
	$resp = "INSERT INTO $tbl_name (nombre, alineamiento, jugador, clase, nivel, dios, tierra, raza, tamano, sexo, edad, peso, ojos)
	   VALUES ('$name', '$alin', '$player', '$class', '$level', '$god', '$hl', '$race', '$tall', '$sex', '$age', '$weight', '$eyes')";
	
	if ($conn->query($resp) === TRUE) {
		echo "datos guardados";
		User_Join();
	}else {
		echo "error en el guardado de datos";
		echo $resp;
		echo $conn->error;
	}
}
mysqli_close($conn);
?>