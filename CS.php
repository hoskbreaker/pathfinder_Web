	<?php 

	session_start();
	if($_SESSION["id"]!="SI"){ 
		echo "no se ha iniciado sesion";
		header('Location:login.html');
	}
	?>
	<!doctype html>

	<html>
	<head>
		<meta charset="utf-8">
		<title>NWT | Personajes</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="PJ2.js"></script>
	</head>

	<body>
		<header>
			<div class="container">
				<div id="branding">
					<a href="inicio.php"><h1>NW<spam class="highlight">T</spam></h1></a>
				</div>
				<nav>
					<form action="logout.php" method="POST">
						<input type="text" name="Username" value="<?php echo $_SESSION['username']; ?>" readonly> <!--Nombre del Usuario Logged In-->
						<button type="submit">Salir</button> 	<!--Boton de log out-->
					</form>
				</nav>
			</div>
		</header>

		<section class="recuadro">
			<div class="Title">
				<h1>Hoja de Personaje</h1>
				<hr>
			</div>
			<form id="formulario" action="" method="POST" class="form">
				<div class="general">
					<h3>General</h3>
					<table>
						<tr>
							<td colspan="3">Nombre:</td> 
							<td>Alineamiento:</td>
							<td colspan="2">Nombre del jugador:</td>
						</tr>
						<tr>
							<td colspan="3"><input type="text" id="nombre" /></td>
							<td><input type="text" id="alineamiento" /></td> 
							<td colspan="2"><input type="text" id="jugador" /></td>
						</tr>
						<tr>
							<td colspan="2">Clase:</td> 
							<td>Nivel:</td>
							<td>Deidad:</td>
							<td colspan="2">Tierra Natal:</td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" id="clas" /></td> 
							<td><input type="text" id="niv" /></td>
							<td><input type="text" id="deidad" /></td> 
							<td colspan="2"><input type="text" id="homeland" /></td>
						</tr>
						<tr>
							<td>Raza:</td>
							<td>Tamaño:</td>
							<td>Sexo:</td>
							<td>Edad:</td>
							<td>Peso:</td>
							<td>Ojos:</td>
						</tr>
						<tr>
							<td><input type="text" id="raza" /></td> 
							<td><input type="text" id="tam" /></td> 
							<td><input type="text" id="sexo" /></td> 
							<td><input type="text" id="edad" /></td> 
							<td><input type="text" id="peso" /></td> 
							<td><input type="text" id="ojos" /></td>
						</tr> 
					</table>
				</div>
				<div class="estadistica">
					<h3>Estadisticas</h3>
					<table>
						<tr>
							<?php
							$list = array("Fue","Des","Con");

							foreach ($list as $car) {
								?>
								<td><?= $car; ?></td>
								<?php

								for($i = 0; $i < 4; $i++)
								{
									?>
									<td><input type="text" /></td>
									<?php
								}
							}	
							?>
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
							<?php
							$list = array("Int","Sab","Car");

							foreach ($list as $car) {
								?>
								<td><?= $car; ?></td>
								<?php

								for($i = 0; $i < 4; $i++)
								{
									?>
									<td><input type="text" /></td>
									<?php
								}
							}	
							?>
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
				</div>
				<div class="general">
					<h3>Defensa</h3>
					<table>
						<tr>
							<td>CA</td>
							<td><input type="text" /></td>
							<td>10 +</td>
							<?php
							for($i = 0; $i<6; $i++)
							{
								?>	
								<td><input type="text" /></td>
								<?php

							}
							?>
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

							<?php

							$list = array("Fortaleza","(Constitucion)","Reflejos","(Destreza)","Voluntad","(Sabiduria)");

							for($j=0;$j<3;$j++)
							{

							?>
								<td><?= $list[$j];?></td>
								<?php

								for($i = 0; $i<5; $i++)
								{
									?>	
									<td><input type="text" /></td>
									<?php

								}
								?>
								<td colspan="9"><input type="text" /></td>
							</tr>
							<tr class="descripcion">
								<td><?= $list[$j+1]; ?></td>
								<td>Total</td>
								<td>Base</td>
								<td>Modificador de Estadistica</td>
								<td>Modificador Magico</td>
								<td>Modificador Temporal</td>
								<td colspan="9">Otros Modificadores</td>
							</tr>

						<?php
							}
						?>
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
				</div>
				<div class="general">
					<h3>Ataque</h3>
					<table>
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
							<td>Bonus Maniobras Combate</td>
							<td>Total</td>
							<td>Ataque Base</td>
							<td>Modificadore Fuerza</td>
							<td>Modificador Tamaño</td>
							<td colspan="3">Otros Modificadores</td>
							<td colspan="3">Modificadores Temporales</td>
						</tr>
						<tr>
							<td colspan="6"><a href="javascript:void(0)" onclick="toggle_visibility('melee')">Añadir Ataque Melee</a></td> 
							<td colspan="5"><a href="javascript:void(0)" onclick="toggle_visibility('melee')">Añadir Ataque a Distancia</a></td>
						</tr>
					</table>
				</div>
			</form>
		</section>

	</body>
	</html>