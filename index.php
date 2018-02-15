<?php
	session_start();

	if ($_SESSION['u_id'] == 0) {
		header("Location: ../login.php?loginFirst");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>NWT | Home</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body class="index">

	<header>
		<div class="container">
			<div id="branding">
				<a href="index.php"><h1>NW<spam class="highlight">T</spam></h1></a>
			</div>
			<nav>
				<form action="includes/logout-inc.php" method="POST">
					<p> <?php echo $_SESSION['u_uid'] ?> </p>  <!--Nombre del Usuario Logged In-->
					<button type="submit" name="submit">Salir</button> 	<!--Boton de log out-->
				</form>
			</nav>
		</div>	
	</header>

	<section class="wrapper">
		<div class="view third-effect">  
 			<img src="" />  
    			<a href="gm.php">
    				<div class="mask"></div>
    			</a>  
  			<div class="content"><a href="gm.php" class="info">Game Master</a></div>  
		</div> 
		<div class="view third-effect">  
 			<img src="" />  
    			<a href="camp.php">
    				<div class="mask"></div>
    			</a>   
  			<div class="content"><a href="camp.php" class="info">Campañas</a></div>  
		</div>
		<div class="view third-effect">  
 			<img src="" />  
  			  
    			<a href="pj.php">
    				<div class="mask"></div>
    			</a>  
  			<div class="content"><a href="pj.php" class="info">Personajes</a></div>  
		</div>
	</section>

</body>
</html>