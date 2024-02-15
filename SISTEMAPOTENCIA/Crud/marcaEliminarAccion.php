<?php
// SESIONES//
include "../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();
    include 'conexionn.php';
    $nombre = $_GET['idMarca'];

    $consulta = "DELETE FROM marcas WHERE idMarca = '$nombre'";
    $result=mysqli_query($conexion,$consulta);

if($result){
        //include 'marcaListado.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos eliminados");
            window.location = "marcaListado.php";
            } </script>';
    }else{
        echo "error";
    }
?>
