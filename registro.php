<?php
 $host_db = "localhost";
 $user_db = "pi";
 $pass_db = "raspberry";
 $db_name = "login";
 $tbl_name = "usuarios";
 
 $form_pass = $_POST['password'];
 
 /*$hash = password_hash($form_pass, PASSWORD_BCRYPT); */
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE username = '$_POST[username]' ";
 $result = $conexion->query($buscarUsuario);
 $count = mysqli_num_rows($result);
 
 
 if (strcmp($_POST['password'], $_POST['verificate']) !== 0) {
    echo "<br />".'la contraseña de verificación es distinta'. "<br />";
	echo "<a href='signup.html'>Repita el registro por favor</a>";
}
 
 
 if ($count == 1) {
 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";
 echo "<a href='signup.html'>Repita el registro por favor</a>";
 
 }
 else{
 /* $query = "INSERT INTO usuarios (username, password, email)
           VALUES ('$_POST[username]', '$hash', '$_POST[email]')"; */
	$query = "INSERT INTO usuarios (username, password, email)
           VALUES ('$_POST[username]', '$_POST[password]', '$_POST[email]')";
 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='Log_in.html'>Login</a>" . "</h5>"; 
 }
 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>