<?php

require_once 'conexion.php';

$consulta = "SELECT * FROM tbl_agendados";
$resultado = mysqli_query($conexion, $consulta);

if (!$resultado) {
    $response = "Error inesperado en la consulta";
}

if (mysqli_num_rows($resultado) > 0) {
    $response = "<table>
    <tr>
      <th>Hora</th>
      <th>Paciente</th>
      <th>Doctor</th>
      <th>Estado de la consulta</th>
      <th>Situación</th>
    </tr>
    ";

    foreach ($resultado as $fila) {
        $response .= "<tr>
            <td> " . $fila['hora'] . " </td>
            <td> " . $fila['paciente'] . " </td>
            <td> " . $fila['doctor'] . " </td>
            <td> " . $fila['estado_consulta'] . " </td>
            <td><button class='btn btn-danger'> " . $fila['situacion'] . " </button></td>
        </tr>
        ";
    }
    $response .= "</table>";
} else {
    $response = "<p> No hay ningun registro </p> <img src='../../img/error-empty-min.svg' alt=''>";
}

echo $response;

$conexion->close();
