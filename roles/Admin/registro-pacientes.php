<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro pacientes | Smart Dental</title>
    <link rel="icon" href="../../img/logo.ico" />
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

    

    <!--MULTI STEP FORM REGISTRO PACIENTES-->

    <div class="container">

      <header class="header-title">Registro Pacientes</header>

      <div class="progress-bar">
        <div class="step">
          <p>Paso</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Paso</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Paso</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Paso</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>

      <div class="form-outer">

        <form action="../../php/agregar_pacientes.php" method="POST">

          <div class="page slide-page">

            <div class="title">Datos personales:</div>

            <div class="form-row">
              
              <div class="input-data">
              <div class="input-fecha">
               <label for=""  > Fecha ingreso:</label> 
              </div>
                <input type="date" name="fecha_ingreso" required  />
                <div class="underline"></div>
                
              </div>

              <div class="input-data">
                <select name="genero">

                <option value="">Genero</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino"> Femenino</option>

              </select>
                <div class="underline"></div>
                <label for=""></label>
               
              </div>
            </div>

            <div class="form-row">

              <div class="input-data">
                <select name="t_documento">

                  <option value="">Tipo de documento</option>
                  <option value="cedula">CC</option>
                  <option value="targeta de identidad"> TI</option>
  
                </select>
                <div class="underline"></div>
                
              </div>

              <div class="input-data">
                <input type="text" name="documento" required />
                <div class="underline"></div>
                <label for="">Documento:</label>
              </div>

            </div>
             
            <div class="form-row">

              <div class="input-data">
                <input type="text" name="nombre" required />
                <div class="underline"></div>
                <label for="">Nombre:</label>
              </div>

              <div class="input-data">
                <input type="text" name="apellidos" required />
                <div class="underline"></div>
                <label for="">Apellidos:</label>
              </div>
              
            </div>

            <div class="field">
              <button class="firstNext next">Siguiente</button> 
            </div>

          </div>

          <div class="page">

            <div class="title">Datos personales:</div>
           
            <div class="form-row">
              <div class="input-data">
                <input type="text" name="telefono" required />
                <div class="underline"></div>
                <label for="">telefono:</label>
              </div>
              <div class="input-data">
                <input type="text" name="direccion" required />
                <div class="underline"></div>
                <label for="">Dirección:</label>
              </div>
            </div>

            <div class="form-row">
              <div class="input-data">
                <input type="text" name="municipio" required />
                <div class="underline"></div>
                <label for="">Municipio:</label>
              </div>

              <div class="input-data">
                <input type="text" name="departamento" required />
                <div class="underline"></div>
                <label for="">Departamento:</label>
              </div>
            </div>

            <div class="form-row">
              <div class="input-data">
                <select name="zona">

                  <option value="">Zona</option>
                  <option value="urbana">Urbana</option>
                  <option value="rural"> Rural</option>
  
                </select>
                <div class="underline"></div>
                
              </div>
              
              <div class="input-data">
                <div class="input-fecha">
                  <label for=""  > Fecha nacimiento:</label> 
                 </div>
                <input type="date" name="fecha_nacimiento" required />
                <div class="underline"></div>
                
              </div>
            </div>

            <div class="field btns">
              <button class="prev-1 prev">Atras</button>
              <button class="next-1 next">Siguiente</button>
            </div>

          </div>

          <div class="page">
            <div class="title">Datos personales:</div>
             
              <div class="form-row">
              <div class="input-data">
                <input type="text" name="l_nacimiento" required />
                <div class="underline"></div>
                <label for="">Lugar de nacimiento:</label>
              </div>

              <div class="input-data">
                <input type="text" name="estado_civil" required />
                <div class="underline"></div>
                <label for="">Estado civil:</label>
              </div>
            </div>

            <div class="form-row">
              <div class="input-data">
                <input type="text" name="nacionalidad" required />
                <div class="underline"></div>
                <label for="">Nacionalidad:</label>
              </div>
              <div class="input-data">
                <input type="text" name="ocupacion" required />
                <div class="underline"></div>
                <label for="">Ocupación:</label>
              </div>
            </div>

            <div class="form-row">
              <div class="input-data">
                <input type="text" name="doctor_valora" required />
                <div class="underline"></div>
                <label for="">Doctor que valora:</label>
              </div>
              <div class="input-data">
                <input type="text" name="doctor_tratante" required />
                <div class="underline"></div>
                <label for="">Doctor tratante:</label>
              </div>
            </div>

            <div class="field btns">
              <button class="prev-2 prev">Atras</button>
              <button class="next-2 next">Siguiente</button>
            </div>

          </div>

          <div class="page">

            <div class="title">Datos personales e información adicional si es menor de edad:</div>
             
            <div class="form-row">
              <div class="input-data">
                <input type="text" name="correo" required />
                <div class="underline"></div>
                <label for="">Correo:</label>
              </div>

              <div class="input-data">
                <input type="text" name="eps" required />
                <div class="underline"></div>
                <label for="">EPS:</label>
              </div>
            </div>
              <div class="form-row">

                <div class="input-data">
                  <input type="text" name="nosotros" required />
                  <div class="underline"></div>
                  <label for="">Como se entero de nosotros?:</label>
                </div>

                <div class="input-data">
                  <input type="text" name="edad" required />
                  <div class="underline"></div>
                  <label for="">Edad:</label>
                </div>
              </div>

                <div class="form-row">
                  <div class="input-data">
                    <input type="text" name="n_acudiente" required />
                    <div class="underline"></div>
                    <label for="">Nombre acudiente:</label>
                  </div>
                </div>
                 
                <div class="form-row">
                  <div class="input-data">
                    <input type="text" name="estado" />
                    <div class="underline"></div>
                    <label for="">Estado:</label>
                  </div>
                </div>
            
            

            <div class="field btns">
              <button class="prev-3 prev">Atras</button>
              <button class="submit" name="registrar" >Registrar Paciente</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script type="text/javascript" src="../../js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../js/script.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  </body>
</html>
