<?php

require_once 'conexion.php';

$consulta = "SELECT * FROM tbl_agendados";
$resultado = mysqli_query($conexion, $consulta);

if (!$resultado) {
    echo $response = "Error inesperado en la consulta";
}
if (mysqli_num_rows($resultado) > 0) {
    foreach ($resultado as $fila) {
        $response[] = array(
            "hora" => $fila['hora'],
            "paciente" => $fila['paciente'],
            "doctor" => $fila['doctor'],
            "estado_consulta" => $fila['estado_consulta'],
            "situacion" => $fila['situacion']
        );
    }
    echo json_encode($response);
} else {
    echo $response = "<p> No hay ningun registro </p> <img src='../../img/error-empty-min.svg' alt=''>";
}


$conexion->close();
