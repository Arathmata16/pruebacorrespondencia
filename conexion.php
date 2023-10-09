<?php

$conexion = mysqli_connect('localhost', 'root', '', 'correspondencia') or die(mysqli_error($mysql1));


diferencia($conexion);


function diferencia($conexion){
    if(isset($_POST['registrar'])){
        insertar($conexion);
    }
    if(isset($_POST['agregar'])){
        insertaArea($conexion);
    }
    if(isset($_POST['iniciar'])){
        login($conexion);
    }
    if(isset($_POST['area'])){
        obtenerAreas($conexion);
    }
}

function login($conexion){
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    // Realiza la consulta para verificar las credenciales
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contrasena'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        // Verifica si se encontró un usuario con las credenciales proporcionadas
        if (mysqli_num_rows($resultado) == 1) {
            header("Location: index.php");
            exit();
        } else {
            // Credenciales incorrectas
            echo "Credenciales incorrectas. Intente de nuevo.";
        }
    } else {
        // Error en la consulta
        echo "Error en la consulta: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}

function insertar($conexion)
{
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $area = $_POST['area'];

    // Use prepared statements to prevent SQL injection
    $consulta = "INSERT INTO usuarios (Nombre_us,Apellidos,usuario,contraseña,area) 
    VALUES ('$nombre','$apellidos' ,'$usuario','$contraseña','$area' )";
     header('Location: usuarios.php');
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
}

function insertaArea($conexion){
    $nombreArea= $_POST['nombre_area'];
    $responsable=$_POST['responsable'];

    $consulta = "INSERT INTO areas (nombre_area,responsable) 
    VALUES ('$nombreArea','$responsable')";
    header('Location: areas.php');
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
}

function cargarTabla($conexion){
    $consulta = "SELECT * FROM usuarios ";
    $resultado= mysqli_query($conexion, $consulta);

    while($fila= mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila['id_us'];
        echo "<td>".$fila['Nombre_us'];
        echo "<td>".$fila['Apellidos'];
        echo "<td>".$fila['usuario'];
        echo "<td>".$fila['area'];
        echo '<td>
        <form method="post" action="">
            <input type="hidden" name="id_usuario" value="' . $fila['id_us'] . '">
            <button type="submit" name="eliminar" class="btn my-custom-btn" style="font-size: 10px; width: 60px; height: 30px; text-align:left;"
            onclick="return confirm(\'¿Estás seguro de que deseas eliminar este usuario?\')">Eliminar</button>
            <button type="submit" name="editar" class="btn my-custom-btn" style="font-size: 10px; width: 50px; height: 30px;">Editar</button>
         </form>
    </td>';

    echo "</tr>";

    // Agregar lógica para eliminar el usuario si se hace clic en el botón
    if (isset($_POST['eliminar']) && $_POST['id_usuario'] == $fila['id_us']) {
        $idUsuario = $_POST['id_usuario'];

        // Realiza la eliminación del usuario en la base de datos
        $consultaEliminacion = "DELETE FROM usuarios WHERE id_us = $idUsuario";
        mysqli_query($conexion, $consultaEliminacion);

        // Redirige de nuevo a la misma página después de la eliminación
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    }if(isset($_POST['editar']) && $_POST['id_usuario'] == $fila['id_us']){
        $idUsuario=$_POST['id_usuario'];
        header('Location: EditaUsuario.php?id_us='.$fila['id_us']);
        exit();
    }
        echo"<tr>";
    }
    mysqli_close($conexion);
}

function cargarTablaAreas($conexion){
    $consulta = "SELECT * FROM areas ";
    $resultado= mysqli_query($conexion, $consulta);

    while($fila= mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila['id_area']; 
        echo "<td>".$fila['nombre_area'];
        echo "<td>".$fila['responsable'];
        echo '<td>
        <form method="post" action="">
            <input type="hidden" name="id_area" value="' . $fila['id_area'] . '">
            <button type="submit" name="eliminar" class="btn my-custom-btn" style="font-size: 10px; width: 60px; height: 30px; text-align:left;"
            onclick="return confirm(\'¿Estás seguro de que deseas eliminar este usuario?\')">Eliminar</button>
            <button type="submit" name="editar" class="btn my-custom-btn" style="font-size: 10px; width: 50px; height: 30px;">Editar</button>
         </form>
    </td>';

    echo "</tr>";

    // Agregar lógica para eliminar el usuario si se hace clic en el botón
    if (isset($_POST['eliminar']) && $_POST['id_area'] == $fila['id_area']) {
        $idarea = $_POST['id_area'];

        // Realiza la eliminación del usuario en la base de datos
        $consultaEliminacion = "DELETE FROM areas WHERE id_area= $idarea";
        mysqli_query($conexion, $consultaEliminacion);

        // Redirige de nuevo a la misma página después de la eliminación
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    }
        echo"<tr>";
        echo"<tr>";
    } 
    mysqli_close($conexion);
}
function obtenerAreas($conexion){
    $consulta = "SELECT nombre_area FROM areas";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $nombre_area = $fila["nombre_area"];
            echo "<option>$nombre_area</option>";
        }
    }

    mysqli_close($conexion);
}
function editarUsuario($conexion){
    // Recuperar el ID del usuario que se desea editar
    $id_usuario = $_GET['id_us']; // Asegúrate de obtener el ID de alguna manera

    // Realizar una consulta para obtener los datos del usuario
    $consulta = "SELECT Nombre_us, Apellidos, usuario, contraseña, area FROM usuarios WHERE id_us = $id_usuario";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        $nombre = $fila['Nombre_us'];
        $apellidos = $fila['Apellidos'];
        $usuario = $fila['usuario'];
        $contraseña = $fila['contraseña'];
        $area = $fila['area'];
    } else {
        // Manejar el caso en el que no se encuentre el usuario
        echo "El usuario no se encontró en la base de datos.";
    }

    // Llenar los campos del formulario con los datos obtenidos
    echo '<input type="text" class="form-control" id="validationCustom01" name="nombre" value="' . $nombre . '" required>';
    echo '<input type="text" class="form-control" id="validationCustom02" name="apellidos" value="' . $apellidos . '" required>';
    echo '<input type="text" class="form-control" id="validationCustomUsername" name="usuario" value="' . $usuario . '" required>';
    echo '<input type="password" class="form-control" id="validationCustom03" name="contraseña" value="' . $contraseña . '" required>';
    echo '<select class="form-select" id="validationCustom04" name="area" required>';
    
    // Llenar el select con las opciones de área obtenidas de tu función obtenerAreas($conexion)
    $areas = obtenerAreas($conexion);
    foreach ($areas as $area_option) {
        echo '<option value="' . $area_option . '" ' . ($area_option == $area ? 'selected' : '') . '>' . $area_option . '</option>';
    }
    
    echo '</select>';
}






?>
