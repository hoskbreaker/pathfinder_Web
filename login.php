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
	sleep(3);
	header("location:Log_in.html");
} else{
	$user = $_POST['user'];
	$password = $_POST['pass'];
}
 $hash = password_hash($password, PASSWORD_BCRYPT); 
$sql = "SELECT * FROM $tbl_name WHERE username = '$user'";

$result = $conexion->query($sql);


$busqueda= mysql_query("SELECT * FROM $tbl_name where username='$user' and password='$hash'"); 
$pul=mysql_num_rows($busqueda); 

if if ($pul==1) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Logueate! " . $_SESSION['username'];
	sleep(3);
    header("location:inicio.html");
 } else { 
   echo "Username o Password estan incorrectos.";
   sleep(3);
   header("location:Log_in.html");
 }
 mysqli_close($conexion); 
 ?>