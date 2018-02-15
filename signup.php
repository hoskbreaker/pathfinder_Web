<!doctype html>

<html>

<meta charset="UTF-8">

<head>
	<title>NWT | Signup</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$("form").submit(function(event) {
				event.preventDefault();
				var uid = $("#uid").val();
				var email = $("#email").val();
				var pwd = $("#pwd").val();
				var rpwd = $("#rpwd").val();
				var submit = $("#submit").val();

				$(".form-message").load("./includes/signup-inc-ajax.php", {
					uid: uid,
					email: email,
					pwd: pwd,
					rpwd: rpwd,
					submit: submit
				});
			});
		});
	</script>
</head>

<body class="login">
	
	<section>
		<div class="cuadro">
			<div class="logbg">
				<div class="Title">
					<h1>SIGN <spam class="highlight">UP</spam></h1>
					<hr>
				</div>
				<div class="logform2">
					<div class="logform">
						<p>Rellene los siguientes datos: </p>
						<p class="form-message"></p>
						<br><br>
						<form action="includes/signup-inc.php" method="POST">
							<input id="uid" type="text" name="uid" placeholder="Nombre de Usuario" /><br>
							<input id="email" type="text" name="email" placeholder="E-mail" /><br>
							<input id="pwd" type="password" name="pwd" placeholder="Contraseña" /><br>
							<input id="rpwd" type="password" name="rpwd" placeholder="Repita la contraseña" /><br>
							<button id="submit" type="submit" name="submit">Hecho</button>
						</form>
						<a href="login.php">Volver</a>
					</div>
				</div>
			</div>	
			<div class="map"></div>	
		</div>
	</section>
	
</body>
</meta>
</html>