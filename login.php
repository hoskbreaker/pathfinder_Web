 <?php
session_start();
?>

<?php

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

$user = $_POST['user'];
$pass = $_POST['pass'];
//$hash = password_hash($pass, PASSWORD_DEFAULT); 
$sql = "SELECT id FROM $tbl_name WHERE username = '$user' and password = '$pass'";
$result = mysqli_query($conexion,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);

if ($count==1) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Logueate! " . $_SESSION['username'];
	sleep(3);
    header("location:inicio.html");
} else { 
   echo "Username o Password estan incorrectos.";
   header("location:Log_in.html");
}
 mysqli_close($conexion); 
 ?>