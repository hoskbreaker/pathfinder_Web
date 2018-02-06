<?php 
session_start();
if($_SESSION["id"]!="SI"){ 
	echo "no se ha iniciado sesion";
	header('Location:login.html');
}
?>

<!doctype html>

<html>
<meta charset="UTF-8">
<head>
	<title>Pathfinder</title>
	<style type="text/css">
		table {text-align:center;}
		body{
			background-image:url(img/Bg.jpg);
			color:white;
		}
		h1 {text-align:center;}
	</style>
</head>

<body>
	<h1>Crea tu propia Campaña</h1>
	<a href="inicio.php">Inicio</a>
</body>
</meta>
</html>