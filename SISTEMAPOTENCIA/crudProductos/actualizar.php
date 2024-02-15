<?php
    include 'conexionn.php';

    $idProducto =$_POST['idProducto'];
    $claveProducto = $_POST['claveProducto'];
    $idMarca = $_POST['marcas'];
    $claveColor = $_POST['colores'];
    $claveModelos = $_POST['modelos'];
    $descripcion = $_POST['descripcion'];
    $carroceria = $_POST['carroceria'];

    $sqlActualizar = "UPDATE productos SET idProducto = '$idProducto', claveProducto = '$claveProducto', idMarca = '$idMarca',
                        claveColor = '$claveColor', claveModelos = '$claveModelos', descripcion = '$descripcion', carroceria = '$carroceria' WHERE idProducto = '$idProducto'";
    $ejecucion = mysqli_query ($conexion, $sqlActualizar);
    if ($ejecucion){
        include 'productosListadoFuncion.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos actualizados");
            window.location = "productosListadoFuncion.php";
            } </script>';
    }else{
        echo "Error";
}
?>