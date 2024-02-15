<?php

     include 'conexionn.php';

     $idMarca = $_POST['idMarca'];
     $marca = $_POST['marca'];
     $color=$_POST['color'];
     $carroceria=$_POST['carroceria'];


    $consulta="UPDATE marcas SET marca = '$marca', color = '$color', carroceria = '$carroceria' WHERE idMarca='$idMarca'";
    $resultado=mysqli_query($conexion,$consulta);

    if($resultado){
        include 'marcaListado.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos Actualizados con ¡Exito!");
            window.location = "marcaListado.php";
            } </script>';
        
    }else{
        echo "error";
    }
?>