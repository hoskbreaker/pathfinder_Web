<?php

session_start();
unset ($SESSION['username']);
session_destroy();

header('Location: http://81.44.52.97/inicio.html');

?>