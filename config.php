<?php

$conexion = mysqli_connect('localhost', 'root', '', 'correspondencia') or die(mysqli_error($mysql1));

function configFondoP($conexion){
$consulta="SELECT * FROM configuracion";
$resultado= mysqli_query($conexion, $consulta);
if(mysqli_num_rows($resultado)>0){
    while($fila = mysqli_fetch_assoc($resultado)){
        $fondo=$fila["colorPagPrincipal"]; 
        echo "style=background-color:$fondo";
    }
}
mysqli_close($conexion);
}
function configBotones($conexion){
    $consulta="SELECT * FROM configuracion";
    $resultado= mysqli_query($conexion, $consulta);
    if(mysqli_num_rows($resultado)>0){
        while($fila = mysqli_fetch_assoc($resultado)){
            $boton=$fila["colorBotones"]; 
            echo "style=background-color:$boton";
        }
    }
    mysqli_close($conexion);
    }

function actualizarConf($conexion){
    $consulta="UPDATE configuracion SET colorPagPrincipal='#84272D' WHERE idconf=0";
}

?>