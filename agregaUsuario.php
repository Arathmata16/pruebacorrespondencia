<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Usuario</title>



  <!-- Incluye los estilos de Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>
  <div style="font-size: 60px; text-align: center; background-color: white;">
    <img src="Imagenes/SEDIF.png" style="height: 10%; width: 10%;">
    <a>CORRESPONDENCIA SEDIF</a>
    <img src="Imagenes/LOGO-ESTADO.png" style="height: 10%; width: 10%;">
  </div>

  <div class="container" style="margin: 5%;">
    <form class="row g-3 needs-validation"  action="conexion.php" method="post">
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombre(s)</label>
        <input type="text" class="form-control" id="validationCustom01" name="nombre">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="validationCustom02"  name="apellidos">
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Usuario</label>
        <div class="input-group has-validation">
          <input type="text" class="form-control" id="validationCustomUsername" name="usuario">
          <div class="invalid-feedback">
            Elige un nombre de usuario
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom03" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="validationCustom03"  name="contraseña">
        <div class="invalid-feedback">
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Confirmar contraseña</label>
        <input type="password" class="form-control" id="validationCustom05">
        <div class="invalid-feedback">

        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Area</label>
        <select class="form-select" id="validationCustom04"  name="area">
          <option selected disabled value="">Selecciona area...</option>
          <option><?=obtenerAreas($conexion); ?></option>
        </select>
        <div class="invalid-feedback">
          Selecciona area.
        </div>
      </div>


      <div class="col-12">
        <a href="usuarios.php">
        <button class="btn btn-primary" name="registrar" type="submit">Registrar</button>
        </a>
      </div>
    </form>
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