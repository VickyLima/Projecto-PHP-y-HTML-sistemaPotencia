<?php
    include 'conexionn.php';
    $datoEliminar = $_GET['idProducto'];

    $consulta = "DELETE FROM productos WHERE idProducto = '$datoEliminar'";
    $resultado=mysqli_query($conexion,$consulta);

    if($resultado){
        include 'productosListadoFuncion.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos eliminados");
            window.location = "productosListadoFuncion.php";
            } </script>';
    }else{
        echo "error";
    }
?>