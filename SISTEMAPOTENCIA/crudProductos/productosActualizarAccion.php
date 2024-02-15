<?php
    function recuperarDatos($idProducto){
        include 'conexionn.php';
        $datos = mysqli_query($conexion, "SELECT * FROM productos WHERE idProducto = '$idProducto'");
        $filas = mysqli_fetch_array ($datos);

        return [$filas, $conexion];
    }
   
    function consultas(){
        include 'conexionn.php';
        $consultarProducto = mysqli_query($conexion, "SELECT * FROM productos");
        $consultarMarca = mysqli_query($conexion, "SELECT * FROM marcas");
        $consultarColor = mysqli_query($conexion, "SELECT * FROM colores");
        $consultarModelo = mysqli_query($conexion, "SELECT * FROM modelos");

        return [$consultarProducto, $consultarMarca, $consultarColor, $consultarModelo];
    }
?>