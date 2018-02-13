 <?php
session_start();
?>

<?php
$host_db = "localhost";
$user_db = "pi";
$pass_db = "raspberry";
$db_name = "login";
$tbl_name = "general";

$db = new mysqli($host_db, $user_db, $pass_db, $db_name);

if($db->connect_error){
    die("La conexión ha fallado" . $db->connect_error);
}
// //todos los datos a usar
// $name=$_POST['nombre'];
// $alin=$_POST['alineamiento'];
// $player=$_POST['jugador'];
// $class=$_POST['clas'];
// $level=$_POST['niv'];
// $god=$_POST['deidad'];
// $hl=$_POST['homeland'];
// $race=$_POST['raza'];
// $tall=$_POST['tam'];
// $sex=$_POST['sexo'];
// $age=$_POST['edad'];
// $weight=$_POST['peso'];
// $eyes=$_POST['ojos'];
	
echo "funciona?";
if ($stmt = $mysqli->prepare("SELECT IDpj FROM $tbl_name where nombre = ?")) {
	$id='';
	$name=$_POST['nombre'];
	$insertar->bind_param('s', $name);
	//obtener ID
    $stmt->execute();
    // Vinculamos variables a columnas y comprobamos si existe el dato
    if(!$stmt->bind_result($id)){//si no existe el ID
		echo "el valor ID es $id";
		//inserta el dato
		if ($insertar = $mysqli->prepare("INSERT INTO $tbl_name (nombre, alineamiento, jugador, clase, nivel, dios, tierra, raza, tamano, sexo, edad, peso, ojos) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
			
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
			
			$insertar->bind_param('ssssdsssdsdds', $name, $alin, $player, $class, $level, $god, $hl, $race, $tall, $sex, $age, $weight, $eyes);
			$insertar->execute();
		}
		$insertar->close();
	}else{
		echo "el valor ID es $id";
		//actualiza el dato
		if ($actualizar = $mysqli->prepare("UPDATE $tbl_name SET nombre=?, alineamiento=?, jugador=?, clase=?, nivel=?, dios=?, tierra=?, raza=?, tamano=?, sexo=?, edad=?, peso=?, ojos=?")) {
			
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
			
			$actualizar->bind_param('ssssdsssdsdds', $name, $alin, $player, $class, $level, $god, $hl, $race, $tall, $sex, $age, $weight, $eyes);
			$actualizar->execute();
		}
		$actualizar->close();
	}
    $stmt->close();
}
?>