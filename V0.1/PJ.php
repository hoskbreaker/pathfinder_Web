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
</head>

<body>
	<header>
		<div class="container">
			<div id="branding">
				<a href="inicio.php"><h1>NW<spam class="highlight">T</spam></h1></a>
			</div>
			<nav>
				<form action="logout.php" method="POST">
					<input type="text" name="Username" value="<?php echo $_SESSION['username']?>" readonly> <!--Nombre del Usuario Logged In-->
					<button type="submit">Salir</button> 	<!--Boton de log out-->
				</form>
			</nav>
		</div>
	</header>

	<section class="recuadro">
		<div class="Title">
			<h1>Personajes</h1>
			<hr>
		</div>
		<form action="CS.php">
			<button type="submit">+</button>
		</form>
	</section>
</body>
</html>