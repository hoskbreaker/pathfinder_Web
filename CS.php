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
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

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
				<form id="formulario" method="POST">
					<table>
						<tr>
							<td colspan="6"><h3>General</h3></td>
						</tr>
						<tr>
							<td colspan="3">Nombre: <input type="text" id="nombre" value=''/></td>
							<td>Alineamiento: <input type="text" id="alineamiento" value='' /></td> 
							<td colspan="2">Nombre del Jugador: <input type="text" id="jugador" value=''/></td>
						</tr>
						<tr>
							
							<td colspan="2">Clase: <input type="text" id="clas" value='' /></td>
							<td>Nivel: <input type="text" id="niv" value='' /></td> 
							<td>Deidad: <input type="text" id="deidad" value='' /></td> 
							<td colspan="2">Tierra natal: <input type="text" id="homeland" value='' /></td>
						</tr>						
						<tr>
							<td>Raza: <input type="text" id="raza" /></td> 
							<td>Tamaño: <input type="text" id="tam" /></td> 
							<td>Sexo: <input type="text" id="sexo" /></td> 
							<td>Edad: <input type="text" id="edad" /></td> 
							<td>Peso: <input type="text" id="peso" /></td> 
							<td>Ojos: <input type="text" id="ojos" /></td>
						</tr> 
						<div id="resp"></div>
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
							<td>Toque</td>
							<td><input type="text" /></td>
							<td>Desprevenido</td>
							<td><input type="text" /></td>
							<td colspan="11"><input type="text" /></td>
						</tr>
						<tr class="descripcion">
							<td>Armadura</td>
							<td>Total</td>
							<td>Armadura</td>
							<td>Total</td>
							<td colspan="11">Otros Modificadores</td>
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
							<td colspan="4">Daño no letal</td>
							<td>Resistencia al daño</td>
							<td colspan="2">Total</td>
							<td>Resistencia Magica</td>
							<td colspan="2">Total</td>
						</tr>
						<tr>
							<td>Fortaleza</td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td colspan="9"><input type="text" /></td>
						</tr>
						<tr class="descripcion">
							<td>(Constitucion)</td>
							<td>Total</td>
							<td>Base</td>
							<td>Modificador de Estadistica</td>
							<td>Modificador Magico</td>
							<td>Modificador Temporal</td>
							<td colspan="9">Otros Modificadores</td>
						</tr>
						<tr>
							<td>Reflejos</td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td colspan="9"><input type="text" /></td>
						</tr>
						<tr class="descripcion">
							<td>(Destreza)</td>
							<td>Total</td>
							<td>Base</td>
							<td>Modificador de Estadistica</td>
							<td>Modificador Magico</td>
							<td>Modificador Temporal</td>
							<td colspan="9">Otros Modificadores</td>
						</tr>
						<tr>
							<td>Voluntad</td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td colspan="9"><input type="text" /></td>
						</tr>
						<tr class="descripcion">
							<td>(Sabiduria)</td>
							<td>Total</td>
							<td>Base</td>
							<td>Modificador de Estadistica</td>
							<td>Modificador Magico</td>
							<td>Modificador Temporal</td>
							<td colspan="9">Otros Modificadores</td>
						</tr>
						<tr>
							<td>Resistencias</td>
							<td colspan="6"><input type="text" /></td>
							<td>Inmunidades</td>
							<td colspan="7"><input type="text" /></td>
						</tr>
						<tr class="descripcion">
							<td></td>
							<td colspan="6">Elementales y otras</td>
							<td></td>
							<td colspan="7">Elementales y otras</td>
						</tr>
						<tr>
							<td>DMC</td>
							<td><input type="text" /></td>
							<td>10 +</td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td colspan="4"><input type="text" /></td>
							<td colspan="4"><input type="text" /></td>
						</tr>
						<tr class="descripcion">
							<td>Defensa Maniobras Combate</td>
							<td>Total</td>
							<td></td>
							<td>Ataque Base</td>
							<td>Modificador Fuerza</td>
							<td>Modificador Destreza</td>
							<td>Modificador Tamaño</td>
							<td colspan="4">Otros Modificadores</td>
							<td colspan="4">Modificadores Temporales</td>
						</tr>
					</table>
					<table>
						<tr>
							<td colspan="14"><h3>Ataque</h3></td>
						</tr>
						<tr>
							<td>Iniciativa</td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td>BAB</td>
							<td><input type="text" /></td>
							<td>Condicional</td>
							<td colspan="4"><input type="text" /></td>
						</tr>
						<tr class="descripcion">
							<td>Modificador</td>
							<td>Total</td>
							<td>Modificador Destreza</td>
							<td>Otros Modificadores</td>
							<td>Bonus Ataque Base</td>
							<td></td>
							<td>Modificador</td>
							<td colspan="4"></td>
						</tr>
						<tr>
							<td>Velocidad</td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td colspan="4"><input type="text" /></td>
						</tr>
						<tr class="descripcion">
							<td>Tierra</td>
							<td>Base</td>
							<td>Con Armadura</td>
							<td>Volar</td>
							<td>Nadar</td>
							<td>Trepar</td>
							<td>Agachado</td>
							<td colspan="4">Modificadores Temporales</td>
						</tr>
						<tr>
							<td>BMC</td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td><input type="text" /></td>
							<td colspan="3"><input type="text" /></td>
							<td colspan="3"><input type="text" /></td>
						</tr>
						<tr class="descripcion">
							<td>Bpnus Maniobras Combate</td>
							<td>Total</td>
							<td>Ataque Base</td>
							<td>Modificadore Fuerza</td>
							<td>Modificador Tamaño</td>
							<td colspan="3">Otros Modificadores</td>
							<td colspan="3">Modificadores Temporales</td>
						</tr>
						<tr>
							<td class="add"></td> <td class="add"></td>
						</tr>
					</table>
					<table>
						<tr>
							<td colspan="14"><h3>Habilidades</h3></td>
						</tr>
						<tr>
							<td>Habilidad de Clase</td>
							<td colspan="2">Nombre de Habilidad</td>
							<td>Total</td>
							<td>Estadistica</td>
							<td>Modificador</td>
							<td>Rango</td>
							<td>Clase</td>
							<td>Modificadores Varios</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="acrobacias"></td>
							<td colspan="2" id="hab">Acrobacias</td>
							<td><input type="text"</td>
							<td>Des:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="artesania"></td>
							<td colspan="2" id="hab">Artesania <input type="text"></td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="artesania"></td>
							<td colspan="2" id="hab">Artesania <input type="text"></td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="artesania"></td>
							<td colspan="2" id="hab">Artesania <input type="text"></td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="intenciones"></td>
							<td colspan="2" id="hab">Averiguar Intenciones</td>
							<td><input type="text"></td>
							<td>Sab:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="con.conjuros"></td>
							<td colspan="2" id="hab">Conocimiento de Conjuros *</td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="curar"></td>
							<td colspan="2" id="hab">Curar</td>
							<td><input type="text"></td>
							<td>Sab:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="diplomacia"></td>
							<td colspan="2" id="hab">Diplomacia</td>
							<td><input type="text"></td>
							<td>Car:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="disfraz"></td>
							<td colspan="2" id="hab">Disfrazarse</td>
							<td><input type="text"></td>
							<td>Car:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="engañar"></td>
							<td colspan="2" id="hab">Engañar</td>
							<td><input type="text"></td>
							<td>Car:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="escapismo"></td>
							<td colspan="2" id="hab">Escapismo</td>
							<td><input type="text"></td>
							<td>Des:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="interpretar"></td>
							<td colspan="2" id="hab">Interpretar <input type="text"></td>
							<td><input type="text"></td>
							<td>Car:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="interpretar"></td>
							<td colspan="2" id="hab">Interpretar <input type="text"></td>
							<td><input type="text"></td>
							<td>Car:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="intimidar"></td>
							<td colspan="2" id="hab">Intimidar</td>
							<td><input type="text"></td>
							<td>Car:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="in.mecanismo"></td>
							<td colspan="2" id="hab">Inutilizar Mecanismo *</td>
							<td><input type="text"></td>
							<td>Des:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="jue.manos"></td>
							<td colspan="2" id="hab">Juego de Manos *</td>
							<td><input type="text"></td>
							<td>Des:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="linguistica"></td>
							<td colspan="2" id="hab">Linguistica</td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="montar"></td>
							<td colspan="2" id="hab">Montar</td>
							<td><input type="text"></td>
							<td>Des:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="nadar"></td>
							<td colspan="2" id="hab">Nadar</td>
							<td><input type="text"></td>
							<td>Fue:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="percepcion"></td>
							<td colspan="2" id="hab">Percepcion</td>
							<td><input type="text"></td>
							<td>Sab:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="profesion"></td>
							<td colspan="2" id="hab">Profesion<input type="text"></td>
							<td><input type="text"></td>
							<td>Sab:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="profesion"></td>
							<td colspan="2" id="hab">Profesion<input type="text"></td>
							<td><input type="text"></td>
							<td>Sab:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="saber.arc"></td>
							<td colspan="2" id="hab">Saber (Arcano) *</td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="saber.dun"></td>
							<td colspan="2" id="hab">Saber (Dungeons) *</td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="saber.geo"></td>
							<td colspan="2" id="hab">Saber (Geografia) *</td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="saber.his"></td>
							<td colspan="2" id="hab">Saber (Historia) *</td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="saber.ing"></td>
							<td colspan="2" id="hab">Saber (Ingenieria) *</td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="saber.local"></td>
							<td colspan="2" id="hab">Saber (Local) *</td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="saber.planos"></td>
							<td colspan="2" id="hab">Saber (Planos) *</td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="saber.nat"></td>
							<td colspan="2" id="hab">Saber (Naturaleza) *</td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="saber.nob"></td>
							<td colspan="2" id="hab">Saber (Nobleza) *</td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="saber.rel"></td>
							<td colspan="2" id="hab">Saber (Religion) *</td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="percepcion"></td>
							<td colspan="2" id="hab">Percepcion</td>
							<td><input type="text"></td>
							<td>Sab:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="sigilo"></td>
							<td colspan="2" id="hab">Sigilo</td>
							<td><input type="text"></td>
							<td>Des:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="supervivencia"></td>
							<td colspan="2" id="hab">Supervivencia</td>
							<td><input type="text"></td>
							<td>Sab:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="tasacion"></td>
							<td colspan="2" id="hab">Tasacion</td>
							<td><input type="text"></td>
							<td>Int:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="animales"></td>
							<td colspan="2" id="hab">Trato con animales *</td>
							<td><input type="text"></td>
							<td>Car:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="trepar"></td>
							<td colspan="2" id="hab">Trepar</td>
							<td><input type="text"></td>
							<td>Fue:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="obj.magico"></td>
							<td colspan="2" id="hab">Usar objeto Magico</td>
							<td><input type="text"></td>
							<td>Car:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="volar"></td>
							<td colspan="2" id="hab">Volar</td>
							<td><input type="text"></td>
							<td>Des:</td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	<script>
    $(document).on('ready',function(){

     // $('#resp').setInterval(function(){
     setInterval(function(){
        var url = "savePJ.php";                                      

        $.ajax({                        
           type: "POST",                 
           url: url,                    
           data: $("#formulario").serialize(),
           success: function(data)            
           {
             $('#resp').innerHTML = "datos guardados";
				alert("datos guardados");
           },
		   error: function(){
			   alert("error al guardar");
		   }		   
         });
      },5000);
    });
    </script>
</body>
</meta>
</html>