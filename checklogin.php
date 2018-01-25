<?
echo "se mete en checklogin";
if($_SESSION["loggedin"]==False){ 
	echo "no se ha iniciado sesion";
	header('Location: /Log_in.html');
}
echo "da por bueno el inicio de sesion";
?>