<?php
    include "conexionn.php";
    
    $producto= $_POST['idProducto'];
    $clave= $_POST['claveProducto'];
    $marca= $_POST['marcas'];
    $claveColor= $_POST['colores'];
    $claveModelos= $_POST['modelos'];
    $descripcion= $_POST['descripcion'];
    $carroceria= $_POST['carroceria'];

    $sql = "INSERT INTO productos VALUES ('$producto','$clave','$marca','$claveColor','$claveModelos','$descripcion','$carroceria')";
    $valores = mysqli_query($conexion, $sql);

           if($valores){
               include 'productosListadoFuncion.php';
               echo '<script type="text/javascript">
                   window.onload = function () { alert("Datos correctamente guardados");
                       window.location = "productosListadoFuncion.php"; }
                   </script>';
           }else{
               $error = mysqli_error($conexion);
               echo("Error: ".$error);
               
           }
?>