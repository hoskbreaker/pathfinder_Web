<?php
session_start();
$host_db = "localhost";
$user_db = "pi";
$pass_db = "raspberry";
$db_name = "login";
$tbl_name = "usuarios";
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

if($_POST['user'] == '' or $_POST['pass'] == '' or $_POST['repass'] == '' or POST['email'] == '')
{ 
	echo 'Por favor llene todos los campos.';
	header("location:Log_in.html");
}

//lo comentado así es para deshashear una contraseña. no funciona

$user = $_POST['user'];
$pass = $_POST['pass'];
//$hash = password_hash($pass, PASSWORD_DEFAULT); 
$sql = "SELECT * FROM $tbl_name WHERE username = '$user' and password = '$pass'";
//$aux = "SELECT * FROM $tbl_name";
$result = mysqli_query($conexion,$sql);
//$rlt = mysqli_query($conexion,$aux);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//col = mysqli_fetch_array($rlt,MYSQLI_ASSOC);
//$active = $row['active'];
//$passwd= $row['password'];//lo de dentro es el nombre que tiene la columna de contraseñas en mysql

//$compare=password_verify($hash,$passwd);
$count = mysqli_num_rows($result);

//if ($compare==true) { 
if ($count==1) { 
 
    $_SESSION["id"] = "SI";
    $_SESSION['username'] = $user;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

	sleep(3);
    header("location:inicio.php");
} else { 
   echo "Username o Password estan incorrectos.";
   header("location:Log_in.html");
}
 mysqli_close($conexion); 
 ?>