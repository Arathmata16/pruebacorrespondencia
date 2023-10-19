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
              <a href="agregarAreas.php">
                    <button class="btn my-custom-btn" style="font-size: 10px; width: 150px; height:50px; ">
                        Nueva Area
                        <img src="Imagenes/agregarUs.png" style="height: 40px; width: 40px;">
                    </button>
              </a>
            </div>

            <div>
                <table class="table">
                    <thead>
                      <tr>
                        <th >Id</th>
                        <th >Nombre del area</th>
                        <th >Responable</th>
                        <th >Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?=cargarTablaAreas($conexion); ?>
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
    </style>
  
</body>

</html>