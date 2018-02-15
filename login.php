<?php
	session_start();
?>

<!doctype html>

<html>
<head>
	<meta charset="UTF-8">
	<title>NWT | Login</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body class="login">
	
	<section>
		<div class="cuadro">
			<div class="logbg">
				<div class="Title">
					<h1>LOG <spam class="highlight">IN</spam></h1>
					<hr>
				</div>
				<div class="logform">
					<div class="logform1">
						<p>Inicie sesión aquí:</p>
						<br>
						<form action="./includes/login-inc.php" method="POST">
							<input id="uid" type="text" name="uid" placeholder="E-mail/Nombre de Usuario" /><br>
							<input id="pwd" type="password" name="pwd" placeholder="Contraseña" /><br>
							<button id="submit" type="submit" name="submit">Entrar</button><br>
						</form>
						<a href="signup.php">Regístrate</a>
					</div>	
				</div>
			</div>	
			<div class="map"></div>	
		</div>
	</section>
	
</body>
</meta>
</html>