<?php
// SESIONES//
include "../../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();
    include 'conexionn.php';
    $datoEliminar = $_GET['claveModelos'];

    $consulta = "DELETE FROM modelos WHERE claveModelos = '$datoEliminar'";
    
    $result=mysqli_query($conexion,$consulta);

    if($result){
        include 'modelosListado.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos eliminados");
            window.location = "modelosListado.php";
            } </script>';
    }else{
        echo "error";
    }
?>
