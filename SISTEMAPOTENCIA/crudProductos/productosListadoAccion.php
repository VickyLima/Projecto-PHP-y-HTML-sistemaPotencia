<?php
    function consultarProducto(){
        include 'conexionn.php';
        $consulta = mysqli_query($conexion, "SELECT * FROM productos");

        return [$consulta, $conexion];
    }
    function consultarId($idProducto, $conexion){
        $idProducto = mysqli_fetch_array(
            mysqli_query(
                $conexion,"SELECT * FROM productos WHERE idProducto='$idProducto'"));

        return $idProducto;
    }

    function consultarClave($idProducto, $conexion){
        $claveProducto = mysqli_fetch_array(
            mysqli_query(
                $conexion,"SELECT * FROM productos WHERE idProducto='$idProducto'"));

        return $claveProducto;
    }

    function consultarMarca($idMarca, $conexion){
        $marca = mysqli_fetch_array(
            mysqli_query(
                $conexion,"SELECT * FROM marcas WHERE idMarca='$idMarca'"));

        return $marca;
    }

    function consultarModelo($claveModelos, $conexion){
        $modelo = mysqli_fetch_array(
            mysqli_query(
                $conexion,"SELECT * FROM modelos WHERE claveModelos='$claveModelos'"));

        return $modelo;
    }

    function consultarDescripcion($descripcion, $conexion){
        $descripcion = mysqli_fetch_array(
            mysqli_query(
                $conexion,"SELECT * FROM productos WHERE descripcion='$descripcion'"));

        return $descripcion;
    }
?>