<?php 
session_start();
if($_SESSION["id"]!="SI"){ 
	echo "no se ha iniciado sesion";
	header('Location:login.html');
}
?>