<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Agenda | Smart Dental</title>
  <link rel="icon" href="../../img/logo.ico" />
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../../css/style.css" />
</head>

<body>
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
            <a href="#" onmouseenter="changeImage('../../img/agenda-min.png')">
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

  <div class="seccion">
    <div class="contenido-agenda">
      <div class="contenedor-agenda">
        <div class="ubicacion">
          <span>Agenda</span>
        </div>
        <div class="opciones">
          <button class="btn btn-info" id="modal-agendar">
            <i class="far fa-calendar-alt"></i>Agendar
          </button>
        </div>
        <div class="fecha">
          <div class="fecha-content">
            <div class="flechas" id="anterior-d">
              <i class="fas fa-chevron-circle-left"></i>
            </div>
            <div class="datos-fecha">
              <div id="mes"></div>
              <div id="nom-dia"></div>
              <div id="num-dia"></div>
              <div id="ano"></div>
            </div>
            <div class="flechas" id="siguiente-d">
              <i class="fas fa-chevron-circle-right"></i>
            </div>
          </div>
        </div>
        <div class="agendados">
          <table>
            <tr>
              <th>Hora</th>
              <th>Paciente</th>
              <th>Doctor</th>
              <th>Estado de la consulta</th>
              <th>Situación</th>
            </tr>

            <?php

            require_once '../../php/conexion.php';

            $consulta = "SELECT * FROM tbl_agendados";
            $resultado = mysqli_query($conexion, $consulta);

            if (mysqli_num_rows($resultado) > 0) {
              # code...
              foreach ($resultado as $fila) {
                # code...
            ?>
                <tr>
                  <td><?php echo $fila['hora'] ?></td>
                  <td><?php echo $fila['paciente'] ?></td>
                  <td><?php echo $fila['doctor'] ?></td>
                  <td><?php echo $fila['estado_consulta'] ?></td>
                  <td><button class="btn btn-danger"><?php echo $fila['situacion'] ?></button></td>
                </tr>
            <?php
              }
            } else {
              # code...
              echo "No hay ningun registro";
            }
            ?>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div id="modal-agenda">
    <div class="contenido-modal">
      <div class="cabecera-agendar">
        <h5>Agendar</h5>
        <i class="fas fa-times" id="cerrar-modal"></i>
      </div>
      <form id="agendar-form">
        <div class="tab">
          <div id="select-patient">
            <div class="radio">
              <div class="form-check checkeo">
                <label class="form-check-label" for="radio1">
                  <input type="radio" class="form-check-input" id="radio1" checked name="optradio" value="option2" />Paciente existente
                </label>
              </div>
              <div class="form-check checkeo">
                <label class="form-check-label" for="radio2">
                  <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2" />Nuevo paciente
                </label>
              </div>
            </div>
            <div class="formulario-agenda">
              <div id="paciente-existente">
                <div class="form-group">
                  <input type="text" placeholder="Nombre" class="form-control" id="nombre" name="nombre" />
                </div>
                <div class="form-group">
                  <label for="comentario">Comentario:</label>
                  <textarea class="form-control" rows="5" id="comentario"></textarea>
                </div>
                <div class="d-flex flex-row-reverse bg">
                  <button type="button" class="btn btn-primary">
                    Siguiente
                  </button>
                </div>
              </div>
              <div id="nuevo-paciente">
                <div class="form-group">
                  <input type="text" class="form-control" id="email" placeholder="Nombre" name="nombre" />
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="pwd" placeholder="Apellidos" name="apellidos" />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="email" placeholder="Rut" name="rut" />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="email" placeholder="Telefono fijo" name="telefono-fijo" />
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="email" placeholder="Telefono movil" name="telefono-movil" />
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" />
                </div>
                <div class="d-flex flex-row-reverse bg">
                  <button type="button" class="btn btn-primary">
                    Siguiente
                  </button>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="../../js/jquery-3.5.1.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/script.js"></script>
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>

</html>