<?php

    function recuperarNombres($conexion, $idProducto, $marca, $colores, $modelo){
        $consultarProducto = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM productos WHERE idProducto = '$idProducto'"));
        $consultarMarca = mysqli_fetch_array( mysqli_query($conexion, "SELECT * FROM marcas WHERE idMarca = '$marca'"));
        $consultarColor = mysqli_fetch_array( mysqli_query($conexion, "SELECT * FROM colores WHERE claveColor = '$colores'"));
        $consultarModelo = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM modelos WHERE claveModelos = '$modelo'"));

        return [$consultarProducto, $consultarMarca, $consultarColor, $consultarModelo];
    }
    
?>