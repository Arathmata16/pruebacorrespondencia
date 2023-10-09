<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correspondencia SEDIF</title>

<div style="font-size: 60px; text-align: center;">
    <img src="Imagenes/SEDIF.png" style="height: 10%; width: 10%;">
    <a >CORRESPONDENCIA SEDIF</a>
    <img src="Imagenes/LOGO-ESTADO.png" style="height: 10%; width: 10%;">
</div>
    <!-- Incluye los estilos de Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>
    <body>
        <div class="container" style="margin: 100px;">
            <div class="boton" style="text-align: right;">
              <a href="agregaUsuario.php">
                    <button class="btn my-custom-btn" style="font-size: 10px; width: 150px; height:50px; ">
                        Nuevo Usuario
                        <img src="Imagenes/agregarUs.png" style="height: 40px; width: 40px;">
                    </button>
              </a>
            </div>

            <div>
                <table class="table">
                    <thead>
                      <tr>
                        <th >Id </th>
                        <th >Nombre(s)</th>
                        <th >Apellidos</th>
                        <th >Usuario</th>
                        <th >Area</th>
                        <th class="filaOculta"> 
                        Acciones
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        <?=cargarTabla($conexion); ?>
                        
                    </button>
                    </tbody>
                  </table>
            </div>
           
            </div>
        </div>



    <!-- Incluye los archivos JavaScript de Bootstrap (jQuery es requerido) -->
    <script src="bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/jquery.min.js"></script>
    <script src="bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>

    <style>
        .my-custom-btn{
            background-color: white;
            color: black;
            border-color: black;
        }
        .my-custom-btn:hover{
            background-color: #CB7169;

        }

        .boton-oculto {
            display: none;
        }

        /* Muestra los botones cuando se pasa el ratón por encima de una fila */
        .filaOculta:hover .boton-oculto {
            display: inline-block;
        }
    </style>
  
</body>

</html>