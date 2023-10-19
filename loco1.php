<?php include('conexion.php');
include('config.php');

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
  <title>Configuración</title>



  <!-- Incluye los estilos de Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>

  <div style="font-size: 60px; text-align: center; background-color: white;">
    <img src="Imagenes/SEDIF.png" style="height: 10%; width: 10%;">
    <a>CORRESPONDENCIA</a>
    <img src="Imagenes/LOGO-ESTADO.png" style="height: 10%; width: 10%;">
  </div>
  <!--BARRA DE MENU-->
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
                  <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active"aria-current="page" href="#">Configuración</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link active" aria-current="page" href="#">Cerrar sesion</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
</div>
<!--CONTENEDOR-->
  <div class="container" style="margin: 5%;">
  <div style="aling-text:center">
  <label for="colorPicker">Selecciona un color de fondo principal:</label>
    <input type="color" id="colorPicker" name="colorPicker">

    <div id="colorDisplay" style="width: 100px; height: 100px;"></div>

    <script>
        // Escucha el evento "input" en el selector de colores
        document.getElementById("colorPicker").addEventListener("input", function() {
            // Obtiene el valor seleccionado
            var selectedColor = this.value;
        });
    </script>
    </div>

    
  <label for="colorPicker">Selecciona un color para los botones:</label>
    <input type="color" id="colorPicker" name="colorPicker">

    <div id="colorDisplay" style="width: 100px; height: 100px;"></div>

    <script>
        // Escucha el evento "input" en el selector de colores
        document.getElementById("colorPicker").addEventListener("input", function() {
            // Obtiene el valor seleccionado
            var selectedColor = this.value;
        });
    </script>

<label for="colorPicker">Selecciona un color para el hover botones:</label>
    <input type="color" id="colorPicker" name="colorPicker">

    <script>
        // Escucha el evento "input" en el selector de colores
        document.getElementById("colorPicker").addEventListener("input", function() {
            // Obtiene el valor seleccionado
            var selectedColor = this.value;
        });
    </script>
    

  </div>
</body>
<!-- Incluye los archivos JavaScript de Bootstrap (jQuery es requerido) -->
<script src="bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/jquery.js"></script>

<style>
  .my-custom-btn {
    background-color: #CB7169;
    border-color: #8F3D38;
    color: white;
  }

  .my-custom-btn:hover {
    background-color: white;
    border-color: #8F3D38;
    color: #8F3D38;

  }
</style>