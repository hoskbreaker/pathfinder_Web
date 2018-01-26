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
	<table width="100%" cellpadding="30">
		<tr>
			<td><a href="GM.php"><img src="img/GM_Text.png" /></a></td> 
			<td><a href="Camp.php"><img src="img/Cam_Text.png" /></a></td> 
			<td><a href="PJ.php"><img src="img/PJ_Text.png" /></a></td>

		</tr>
	</table>
</body>
</meta>
</html>
