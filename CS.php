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
				<h2>Hoja de Personaje</h2>
			</div>
			<div class="encuadre">
				<form>
					<table>
						<tr>
							<td colspan="6"><h3>General</h3></td>
						</tr>
						<tr>
							<td colspan="3">Nombre: <input type="text" id="nombre" /></td>
							<td>Alineamiento: <input type="text" id="alineamiento" /></td> 
							<td colspan="2">Nombre del Jugador: <input type="text" id="jugador" /></td>
						</tr>
						<tr>
							<td colspan="2">Clase y Nivel: <input type="text" id="clasniv" /></td> 
							<td colspan="2">Deidad: <input type="text" id="deidad" /></td> 
							<td colspan="2">Tierra natal: <input type="text" id="homeland" /></td>
						</tr>
						<tr>
							<td>Raza: <input type="text" id="raza" /></td> 
							<td>Tamaño: <input type="text" id="tam" /></td> 
							<td>Sexo: <input type="text" id="sexo" /></td> 
							<td>Edad: <input type="text" id="edad" /></td> 
							<td>Peso: <input type="text" id="peso" /></td> 
							<td>Ojos: <input type="text" id="ojos" /></td>
						</tr> 
					</table>
					<table class="estadistica">
						<tr>
							<td colspan="15"><h3>Estadisticas</h3></td>
						</tr>
						<tr>
							<td>Fue</td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td>Des</td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td>Con</td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
						</tr>
						<tr class="descripcion">
							<td>Fuerza</td>
							<td>Puntuación</td>
							<td>Modificador</td>
							<td>Puntuacion Temporal</td>
							<td>Modificador Temporal</td>
							<td>Destreza</td>
							<td>Puntuación</td>
							<td>Modificador</td>
							<td>Puntuacion Temporal</td>
							<td>Modificador Temporal</td>
							<td>Constitución</td>
							<td>Puntuación</td>
							<td>Modificador</td>
							<td>Puntuacion Temporal</td>
							<td>Modificador Temporal</td>
						</tr>
						<tr>
							<td>Int</td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td>Sab</td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td>Car</td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
						</tr>
						<tr class="descripcion">
							<td>Inteligencia</td>
							<td>Puntuación</td>
							<td>Modificador</td>
							<td>Puntuacion Temporal</td>
							<td>Modificador Temporal</td>
							<td>Sabiduria</td>
							<td>Puntuación</td>
							<td>Modificador</td>
							<td>Puntuacion Temporal</td>
							<td>Modificador Temporal</td>
							<td>Carisma</td>
							<td>Puntuación</td>
							<td>Modificador</td>
							<td>Puntuacion Temporal</td>
							<td>Modificador Temporal</td>
						</tr>
					</table>
					<table>
						<tr>
							<td colspan="14"><h3>Defensa</h3></td>
						</tr>
						<tr>
							<td>CA</td>
							<td><input type="text" /></td>
							<td>10 +</td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td colspan="6"><input type="text" /></td>
						</tr>
						<tr class="descripcion">
							<td>Clase de Armadura</td>
							<td>Total</td>
							<td></td>
							<td>Bonus Armadura</td>
							<td>Bonus Escudo</td>
							<td>Modificador Destreza</td>
							<td>Modificador Tamaño</td>
							<td>Armadura Natural</td>
							<td>Defleccion</td>
							<td colspan="6">Otros Modificadores</td>
						</tr>
						<tr>
							<td>PG</td>
							<td><input type="text" /></td>
							<td colspan="3"><input type="text" /></td>
							<td colspan="4"><input type="text" /></td>
							<td>RD</td>
							<td colspan="2"><input type="text" /></td>
							<td>RM</td>
							<td colspan="2"><input type="text" /></td>
						</tr>
						<tr class="descripcion">
							<td>Puntos de golpe</td>
							<td>Total</td>
							<td colspan="3">Heridas</td>
							<td>Daño no letal</td>
							<td colspan="11">Otros Modificadores</td>
							<tr>
							<td>Toque</td>
							<td><input type="text" /></td>
							<td>Desprevenido</td>
							<td><input type="text" /></td>
							<td colspan="11"><input type="text" /></td>
						</tr>
						<tr class="descripcion">
							<td>Armadura</td>
							<td></td>
							<td>Armadura</td>
							<td></td>
							<td colspan="11">Otros Modificadores</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
</body>
</meta>
</html>