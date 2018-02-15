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

 $buscarPersonaje = "SELECT * FROM $tbl_name WHERE nombre = '$name'";
 $result = $conexion->query($buscarPersonaje);

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
		
	 if ($conexion->query($resp) === TRUE) {
	 	 echo "datos actualizados\n";
		 echo $id;
		 
	}else {
		echo "error al actualizar datos";
		echo $resp;
		echo $conexion->error;
	}
 }else{
	echo "no existe\n";
		$user=$_SESSION['n_ID'];
		$resp = "INSERT INTO $tbl_name (nombre, alineamiento, jugador, clase, nivel, dios, tierra, raza, tamano, sexo, edad, peso, ojos)
		   VALUES ('$name', '$alin', '$player', '$class', '$level', '$god', '$hl', '$race', '$tall', '$sex', '$age', '$weight', '$eyes')";
		$sol= $conexion->query($resp);
	if ( $sol === TRUE) {
	 	 echo "datos guardados";
		 $rw = mysqli_fetch_assoc($sol);
		 $nid=$rw['IDpj'];
		 $qry="INSERT INTO personajes (IDuser,IDchar) 
		 VALUES ('$user',$nid')";
		 
		 if ($conexion->query($qry) === TRUE) {
			echo "personaje enlazado con usuario\n";
		}else {
			echo "error al enlazar personaje con usuario\n";
			echo $qry;
			echo $conexion->error;
		}
	}else {
		echo "error en el guardado de datos";
		echo $resp;
		echo $conexion->error;
	}
}
unset($id);
unset($name);
unset($alin);
unset($player);
unset($class);
unset($level);
unset($god);
unset($hl);
unset($race);
unset($tall);
unset($sex);
unset($age);
unset($weight);
unset($eyes);
 mysqli_close($conexion);
?>