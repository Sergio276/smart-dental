<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pacientes registrados | Smart Dental</title>
  <link rel="icon" href="../../img/logo.ico" />
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../../css/style.css" />
</head>

<body>
  <!--Loader -->
  <div class="preloader">
      <div class="load">
        <hr/><hr/><hr/><hr/>
      </div>
    </div>

  <!-- inicia Navbar-->

  <nav class="navbar navbar-expand-sm navbar-dark fixed-top barra">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
      <img src="../../img/logo-smart-dental-min.png" alt="logo" style="width: 60px" />
    </a>

    <div class="container-fluid">
      <h2 class="h2-responsive frase">
        <i class="fas fa-quote-left"></i> Siempre sonrie
        <i class="fas fa-quote-right"></i>
      </h2>
    </div>

    <div class="container_busqueda">
      <input type="text" name="" value="" placeholder="Buscar..." id="busqueda" class="barra_busqueda" />
      <button class="icon">
        <img src="../../img/buscar-min.png" alt="" style="width: 20px" />
      </button>
    </div>
    <div class="menuToggle" onclick="ToggleMenu();"></div>
    <div class="navigation">
      <div class="navArea">
        <ul>

          <li>
            <a href="agenda.html" onmouseenter="changeImage('../../img/agenda-min.png')">
              Agenda
            </a>
          </li>
          <li>
            <a href="pacientes.php" onmouseenter="changeImage('../../img/pacientes-min.jpg')">
              Pacientes
            </a>
          </li>
          <li>
            <a href="#" onmouseenter="changeImage('../../img/img4-min.jpg')">
              Portfolio
            </a>
          </li>
          <li>
            <a href="#" onmouseenter="changeImage('../../img/img5-min.jpg')">
              Team
            </a>
          </li>
          <li>
            <a href="#" onmouseenter="changeImage('../../img/img6-min.jpg')">
              Contact
            </a>
          </li>
        </ul>
      </div>
      <div class="imgArea">
        <img src="../../img/inicio-min.jpg" alt="" id="slider" />
      </div>
    </div>
  </nav>

  <!-- pacientes-->

  <div class="contenedor-pacientes">
    <div>
      <h2>Pacientes registrados</h2>
    </div>

    <div class="botones">

      <button type="button" class="boton-ver-pacientes">
        <i class="fas fa-house-user"></i> <a href="pacientes.php">Regresar</a>
      </button>

    </div>

    <div class="tabla-pacientes">

      <table class="table">

        <thead>

          <tr>
            <th>ID</th>
            <th>Fecha de ingreso</th>
            <th>Genero</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Municipio</th>
            <th>Direcci??n</th>
            <th>Acciones</th>

          </tr>

        </thead>

        <?php

        require("../../php/conexion.php");

        $consulta = "SELECT * FROM tbl_pacientes ORDER BY idtbl_pacientes DESC LIMIT ";
        $resultado = mysqli_query($conexion, $consulta);

        ?>

        <?php while ($row = $resultado->fetch_assoc()) { ?>

          <tbody>

            <tr>
              <td><?php echo $row['idtbl_pacientes']; ?></td>
              <td><?php echo $row['fecha_registro']; ?></td>
              <td><?php echo $row['genero']; ?></td>
              <td><?php echo $row['nombre']; ?></td>
              <td><?php echo $row['apellidos']; ?></td>
              <td><?php echo $row['telefono']; ?></td>
              <td><?php echo $row['municipio']; ?></td>
              <td><?php echo $row['direccion']; ?></td>
              <td><button type="button" class="boton-ver-ficha"><i class="fas fa-edit"></i>
                  <a href="#">Ver ficha</a></button>
                <button type="button" class="boton-eliminar" data-toggle="modal" data-target="#modal-eliminar_<?php echo $row['idtbl_pacientes']; ?>"> <i class="fas fa-trash-alt"></i> Eliminar</button>
              </td>

            </tr>

            <!-- The Modal -->
            <div class="modal fade" id="eliminar-<?php echo $row['idtbl_pacientes']; ?>">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal body -->
                  <div class="modal-body text-center">
                    ??Desea eliminar este paciente?
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <a href="../../php/eliminar-paciente.php?eli-pacientes=<?php echo $row['idtbl_pacientes']; ?>">
                      <button type="button" class="btn btn-dark">Elimnar</button></a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  </div>

                </div>
              </div>
            </div>


          <?php } ?>
          </tbody>
      </table>


    </div>

  </div>

  <script src="../../js/jquery-3.5.1.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/script.js"></script>
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>

</html>