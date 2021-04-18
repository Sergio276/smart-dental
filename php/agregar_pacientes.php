<?php 

if(isset ($_POST['registrar']))
{
require ('conexion.php');

$fecha_ingreso = $_POST['fecha_ingreso'];
$genero = $_POST['genero'];
$t_documento = $_POST['t_documento'];
$documeto = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$municipio = $_POST['municipio'];
$departamento = $_POST['departamento'];
$zona = $_POST['zona'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$l_nacimiento = $_POST['l_nacimiento'];
$estado_civil = $_POST['estado_civil'];
$nacionalidad = $_POST['nacionalidad'];
$ocupacion = $_POST['ocupacion'];
$doctor_valora = $_POST['doctor_valora'];
$doctor_tratante = $_POST['doctor_tratante'];
$correo = $_POST['correo'];
$eps = $_POST['eps'];
$nosotros = $_POST['nosotros'];
$edad = $_POST['edad'];
$n_acudiente = $_POST['n_acudiente'];
$estado = $_POST['estado'];


$consulta = "INSERT INTO tbl_pacientes (fecha_registro, genero, tipo_de_documento, documento, nombre, apellidos, telefono, 
direccion, municipio, departamento, zona, fecha_de_nacimiento, lugar_de_nacimiento, estado_civil, nacionalidad, ocupacion,
doctor_valoracion, doctor_tratante, correo_electronico, eps_convenio, entero_de_nosotros, edad, nombre_acudiente, estado) 
VALUES ('$fecha_ingreso','$genero','$t_documento','$documeto','$nombre','$apellidos','$telefono','$direccion','$municipio',
'$departamento','$zona','$fecha_nacimiento','$l_nacimiento','$estado_civil','$nacionalidad','$ocupacion','$doctor_valora',
'$doctor_tratante','$correo','$eps','$nosotros','$edad','$n_acudiente','$estado')";

$resultado = mysqli_query($conexion,$consulta);

echo '<script> 
		alert("Paciente registrado correctamente");
		window.location.href="../roles/admin/pacientes.php";
		</script>';


}

?>