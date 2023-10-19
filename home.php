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
        <a >CORRESPONDENCIA</a>
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
                  <a class="nav-link active" aria-current="page" href="home.html">Inicio</a>
                </li>
            
                <li class="nav-item ">
                  <a class="nav-link active" aria-current="page" href="#">Cerrar sesion</a>
                  
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
</div>
        <div class="container" style="margin-top:50px">
            <div class="row" style="padding:1%;">
                <div class="col-md-6">
                    <!-- Fila 1, Columna 1 -->
                    <button class="btn my-custom-btn" style="font-size: 30px; width: 100%; height: 150px; ">
                        Documentos
                        <img src="Imagenes/documento.png" style="height: 120px; width: 120px;">
                    </button>
                </div>
                <div class="col-md-6">
                    <!-- Fila 1, Columna 2 -->
                    <button class="btn my-custom-btn" style="font-size: 30px; width: 100%; height: 150px;">
                        Recibidos
                        <img src="Imagenes/correo-electronico.png" style="height: 120px; width: 120px;">
                    </button>
                </div>
                
            </div>
            <div class="row" style="padding: 1%;">
               
                <div class="col-md-6">
                    <!-- Fila 2, Columna 1 -->
                    <button class="btn my-custom-btn" style="font-size: 30px; width: 100%; height: 150px; ">
                        Agenda
                        <img src="Imagenes/calendario.png" style="height: 120px; width: 120px;">
                    </button>
                </div>
                <div class="col-md-6">
                    <!-- Fila 1, Columna 3 -->
                    <button class="btn my-custom-btn" style="font-size: 30px; width: 100%; height: 150px; ">
                        Llamadas
                        <img src="Imagenes/telefono (1).png" style="height: 120px; width: 120px;">
                    </button>
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
    </style>
  
</body>

</html>