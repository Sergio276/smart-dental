<?php 

require 'conexion.php';

if (isset($_GET['eli-pacientes'])) {
	# code...
	$eliminar_pacientes = $_GET['eli-pacientes'];

	$consulta = "DELETE FROM tbl_pacientes WHERE idtbl_pacientes = '$eliminar_pacientes'";

	$resultado = mysqli_query($conexion, $consulta);

	if ($resultado == true) {
	# code...
		echo '<script type="text/javascript">
		alert("Se elimino el paciente correctamente");
		window.location.href = "../roles/Admin/pacientes.php";
		</script>';
	} else {
	# code...
		echo '<script type="text/javascript">
		alert("Error al eliminar el paciente");
		window.location.href = "../roles/Admin/pacientes.php";
		</script>';
	}

} else {
	# code...
	echo '<script type="text/javascript">
	alert("Realize adecuadamente los pasos para eliminar el paciente");
	window.location.href = "../roles/Admin/pacientes.php";
	</script>';
}


?>