<?php
// SESIONES//
include "../../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();
     include 'conexionn.php';

     $datoActualizar = $_GET['claveModelos'];
     $modelo = $_GET['modelo'];


    $consulta="UPDATE modelos SET modelo = '$modelo' WHERE claveModelos='$datoActualizar'";
    $result=mysqli_query($conexion,$consulta);

    if($result){
        include 'modelosListado.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos Actualizados con ¡Exito!");
            window.location = "modelosListado.php";
            } </script>';
        
    }else{
        echo "error";
    }
?>