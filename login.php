<?php

$hostbd="localhost";
$userbd="root";
$passbd="";
$bd="USU";
$conexion=mysqli_connect($hostbd,$userbd,$passbd,$bd);
mysqli_select_db($conexion,$bd);
print "SELECT USU_NOM FROM USU WHERE USU_NOM = '" . $_POST['nombre'] . "'";
        $consulta = mysqli_query($conexion, "SELECT USU_NOM FROM USU WHERE USU_NOM = '" . $_POST['nombre'] . "'");
        $nombre = mysqli_fetch_row($consulta);
        $nombre = $nombre[0];
        $consulta = mysqli_query($conexion, "SELECT USU_PAS FROM USU WHERE USU_PAS = '" . $_POST['password'] . "'");
        $contrasenya = mysqli_fetch_row($consulta);
        $contrasenya = $contrasenya[0];
        $jugador = trim($_POST['nombre']);
        $llave = trim($_POST['password']);

		 if ($contrasenya==$llave && $jugador==$nombre && $jugador!=null&& $llave!=null) {
                       header('Location: email.html');
        }
		else{  header('Location: adios.html');}
	

?>