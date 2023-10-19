<?php include('conexion.php');

if (isset($_SESSION['user_id'])) {
    // El usuario ha iniciado sesión, puedes acceder a los datos de la sesión
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    // ... otros datos de sesión ...

    // El resto del contenido de tu página para usuarios autenticados va aquí
} else {
    // El usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correspondencia SEDIF</title>


    <!-- Incluye los estilos de Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>

<div style="font-size: 60px; text-align: center;">
    <img src="Imagenes/SEDIF.png" style="height: 10%; width: 10%;">
    <a >CORRESPONDENCIA SEDIF</a>
    <img src="Imagenes/LOGO-ESTADO.png" style="height: 10%; width: 10%;">
</div>
<div style="height:50px;background-color:#d9d9d9">
    <div>
         <nav class="navbar bg-body-tertiary ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"
          style="height: 40%;width: 20%;margin: 3%;">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active"aria-current="page" href="#">Configuración</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link active" aria-current="page" href="#">Cerrar sesion</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!--CONTENEDOR-->
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
                <table class="table" style="background-color:d9d9d9">
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