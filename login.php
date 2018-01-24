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
 die("Error en la conexion: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_BCRYPT);
 
$sql = "SELECT * FROM $tbl_name WHERE nombre_usuario = '$username'";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {     
 $row = $result->fetch_array(MYSQLI_ASSOC);
 }
 if (password_verify($password, $hash)) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    echo "Bienvenido! " . $_SESSION['username'];
	sleep(3);
	header('Location: /inicio.html');
    /*echo "<br><br><a href=panel-control.php>Panel de Control</a>"; */

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='Log_in.html'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>