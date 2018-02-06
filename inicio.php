<?php 
session_start();
if($_SESSION["id"]!="SI"){ 
	echo "no se ha iniciado sesion";
	header('Location:login.html');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>NWT | Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="index">

	<header>
		<div class="container">
			<div id="branding">
				<a href="inicio.php"><h1>NW<spam class="highlight">T</spam></h1></a>
			</div>
			<nav>
				<form action="logout.php" method="POST">
					<input type="text" name="Username" value= "<?php echo $_SESSION['username']?>" readonly> <!--Nombre del Usuario Logged In-->
					<button type="submit">Salir</button> 	<!--Boton de log out-->
				</form>
			</nav>
		</div>	
	</header>

	<section>
		<div class="view third-effect">  
 			<img src="img/GM.jpg" />  
    			<a href="GM.php">
    				<div class="mask"></div>
    			</a>  
  			<div class="content"><a href="GM.php" class="info">Game Master</a></div>  
		</div> 
		<div class="view third-effect">  
 			<img src="img/Camp.jpg" />  
    			<a href="Camp.php">
    				<div class="mask"></div>
    			</a>   
  			<div class="content"><a href="Camp.php" class="info">Campañas</a></div>  
		</div>
		<div class="view third-effect">  
 			<img src="img/PJ.jpg" />  
  			  
    			<a href="PJ.php">
    				<div class="mask"></div>
    			</a>  
  			<div class="content"><a href="PJ.php" class="info">Personajes</a></div>  
		</div>
	</section>

</body>
</html>