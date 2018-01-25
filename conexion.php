<?php 
// datos para la coneccion a mysql 
define('DB_SERVER','localhost'); 
define('DB_NAME','login'); 
define('DB_USER','pi'); 
define('DB_PASS','raspberry'); 

$con = mysql_connect(DB_SERVER,DB_NAME,DB_USER,DB_PASS); 
mysql_select_db(DB_NAME,$con); 
?>