<?php
// SESIONES//
include "../../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();
    include 'conexionn.php';
    $datoEliminar = $_GET['claveColor'];

    $consulta = "DELETE FROM colores WHERE claveColor = '$datoEliminar'";
    
    $result=mysqli_query($conexion,$consulta);

    if($result){
        include 'coloresListado.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos eliminados");
            window.location = "coloresListado.php";
            } </script>';
    }else{
        echo "error";
    }
?>
