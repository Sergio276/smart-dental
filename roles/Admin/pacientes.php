<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pacientes | Smart Dental</title>
  <link rel="icon" href="../../img/logo.ico" />
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../../css/style.css" />
</head>

<body>
  <!--Loader -->
  <div class="loader">
    <div class="middle">
      <div class="bar" style="--i: 1"></div>
      <div class="bar" style="--i: 2"></div>
      <div class="bar" style="--i: 3"></div>
      <div class="bar" style="--i: 5"></div>
      <div class="bar" style="--i: 6"></div>
      <div class="bar" style="--i: 7"></div>
      <div class="bar" style="--i: 8"></div>
      <div class="bar" style="--i: 9"></div>
      <div class="bar" style="--i: 10"></div>
      <div class="bar" style="--i: 11"></div>
      <div class="bar" style="--i: 12"></div>
      <div class="bar" style="--i: 13"></div>
      <div class="bar" style="--i: 14"></div>
      <div class="bar" style="--i: 15"></div>
      <div class="bar" style="--i: 16"></div>
      <div class="bar" style="--i: 17"></div>
      <div class="bar" style="--i: 18"></div>
      <div class="bar" style="--i: 19"></div>
      <div class="bar" style="--i: 20"></div>
      <div class="bar" style="--i: 21"></div>
      <div class="bar" style="--i: 22"></div>
      <div class="bar" style="--i: 23"></div>
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
      <h2>Ultimos registros...</h2>
    </div>

    <div class="botones">
      <button type="button" class="boton-añadir-pacientes">
        <i class="fas fa-user-plus icon"></i> <a href="registro-pacientes.php">Añadir paciente</a>
      </button>
      <button type="button" class="boton-ver-pacientes">
        <i class="fas fa-users icon"></i><a href="lista-pacientes.php">pacientes</a> 
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
            <th>Dirección</th>
            <th>Acciones</th>

          </tr>

        </thead>

        <?php

        require("../../php/conexion.php");

        $consulta = "SELECT * FROM tbl_pacientes ORDER BY idtbl_pacientes DESC LIMIT 10";
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
              <td> <button type="button" class="boton-ver-ficha"><i class="fas fa-edit"></i>
               <a href="#">Ver ficha</a></button></td>
            </tr>

          <?php } ?>
          </tbody>
      </table>
    </div>

  </div>

  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/jquery-3.5.1.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/script.js"></script>
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>

</html>