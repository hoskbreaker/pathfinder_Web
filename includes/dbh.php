<?php
 
$dbServername = "localhost";
$dbUsername = "pi";
//$dbPassword = "ServWeb";//servidor cerrato
$dbPassword = "raspberry";//servidor sanchez
//$dbName = "PathWeb";//servidor cerrato
$dbName = "login";//servidor sanchez

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);