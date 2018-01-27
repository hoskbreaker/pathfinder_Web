<?php 
session_start();
if($_SESSION["id"]!="SI"){ 
	echo "no se ha iniciado sesion";
	header('Location:Log_in.html');
}
?>
<!doctype html>

<html>
<meta charset="UTF-8">
<head>
	<title>Pathfinder</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<div class="cuadro">
		<div class="titulo">
			<ul>
				<li><a href="inicio.php">Home</a></li>	
			</ul>
			<h2>Personajes</h2>
		</div>
		<div class="encuadre">
			<form action="CS.php">
				<button type="submit" name="submit">Crear Personaje</button>
			</form>
		</div>					
	</div>	
</body>
</meta>
</html>