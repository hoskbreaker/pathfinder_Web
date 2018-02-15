<?php
	session_start();

	if ($_SESSION['u_id'] == 0) {
		header("Location: ../login.php?loginFirst");
		exit();
	}
?>

<!doctype html>

<html>
<head>
	<meta charset="utf-8">
	<title>NWT | Personajes</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
	<header>
		<div class="container">
			<div id="branding">
				<a href="index.php"><h1>NW<spam class="highlight">T</spam></h1></a>
			</div>
			<nav>
				<form action="includes/logout-inc.php" method="POST">
					<p> <?php echo $_SESSION['u_uid'] ?> </p> <!--Nombre del Usuario Logged In-->
					<button type="submit" name="submit">Salir</button> 	<!--Boton de log out-->
				</form>
			</nav>
		</div>
	</header>

	<div class="recuadro">

		<div class="Title">
			<h1>Personajes</h1>
			<hr>
		</div>
		<div class="pj">
			<ul>
				<li>
					<form action="cs.php">
						<button type="submit" name="submit">+</button>
					</form>
				</li>
				<li>
					<div class="pjinfo">
						<p>Aquí va el personaje guardado</p>
					</div>
				</li>
				<li>
					<a href="#">X</a>
				</li>
			</ul>
		</div>
		
	</div>
</body>
</html>







