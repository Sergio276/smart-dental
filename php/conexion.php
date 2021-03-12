<?php 
$bd_host = "localhost";
$bd_usuario = "root";
$bd_contra = "";
$bd_nombre = "bd_smart_dental";

$conexion =new mysqli($bd_host, $bd_usuario, $bd_contra);
if (mysqli_connect_errno()) {
	echo "Fallo al conectar con la base de datos";
	exit();
}
mysqli_select_db($conexion, $bd_nombre) or die ("No se encontró la base de datos");
?>