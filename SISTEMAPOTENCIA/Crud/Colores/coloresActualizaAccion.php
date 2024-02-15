<?php

// SESIONES//
include "../../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();

     include 'conexionn.php';

     $datoActualizar = $_GET['claveColor'];
     $colores = $_GET['colores'];
     $marca=$_GET['marca'];
     $modelo=$_GET['modelo'];


    $consulta="UPDATE colores SET colores = '$colores', marca = '$marca', modelo = '$modelo' WHERE claveColor='$datoActualizar'";
    $result=mysqli_query($conexion,$consulta);

    if($result){
        include 'coloresListado.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos Actualizados con ¡Exito!");
            window.location = "coloresListado.php";
            } </script>';
        
    }else{
        echo "error";
    }
?>