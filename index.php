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
<div style="height:50px;background-color:#d9d9d9">
</div>
        <div class="container" style="margin-top:50px">
            <div class="row" style="padding:1%;">
                <div class="col-md-4">
                    <!-- Fila 1, Columna 1 -->
                    <button class="btn my-custom-btn" style="font-size: 30px; width: 100%; height: 150px; ">
                        Documentos
                        <img src="Imagenes/documento.png" style="height: 120px; width: 120px;">
                    </button>
                </div>
                <div class="col-md-4">
                    <!-- Fila 1, Columna 2 -->
                    <button class="btn my-custom-btn" style="font-size: 30px; width: 100%; height: 150px;">
                        Recibidos
                        <img src="Imagenes/correo-electronico.png" style="height: 120px; width: 120px;">
                    </button>
                </div>
                <div class="col-md-4">
                    <!-- Fila 1, Columna 3 -->
                    <button class="btn my-custom-btn" style="font-size: 30px; width: 100%; height: 150px; ">
                        Llamadas
                        <img src="Imagenes/telefono (1).png" style="height: 120px; width: 120px;">
                    </button>
                </div>
            </div>
            <div class="row" style="padding: 1%;">
                <div class="col-md-4">
                    <!-- Fila 2, Columna 1 -->
                    <button class="btn my-custom-btn" style="font-size: 30px; width: 100%; height: 150px; ">
                        Agenda
                        <img src="Imagenes/calendario.png" style="height: 120px; width: 120px;">
                    </button>
                </div>
                <div class="col-md-4">
                    <!-- Fila 2, Columna 2 -->
                    <a href="usuarios.php">
                    <button class="btn my-custom-btn" style="font-size: 30px; width: 100%; height: 150px;">
                        Usuarios
                        <img src="Imagenes/perfil.png" style="height: 120px; width: 120px;">
                    </button>
                    </a>
                </div>
                <div class="col-md-4">
                    <!-- Fila 2, Columna 3 -->
                    <a href="areas.php">
                    <button class="btn my-custom-btn" style="font-size: 30px; width: 100%; height: 150px;">
                        Áreas
                        <img src="Imagenes/area.png" style="height: 120px; width: 120px;">
                    </button>
                    </a>
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