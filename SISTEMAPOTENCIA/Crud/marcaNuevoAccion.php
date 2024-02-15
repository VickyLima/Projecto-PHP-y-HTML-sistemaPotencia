<?php
// SESIONES//
include "../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();

    include "conexion.php";
    $conexion= conexion();
    if(!$conexion)
    {
        die("Error de conexion de la base datos".mysql_error());
    }else{
      echo "La base de datos se ha conectado exitosamente <br>";
        $idMarca=$_POST['idMarca'];
        $marca=$_POST['marca'];
        $color=$_POST['color'];
        $carroceria=$_POST['carroceria'];
        //$query = mysqli_query($conn,$q);
        $sql = mysqli_query($conexion,"INSERT INTO marcas (idMarca,marca,color,carroceria) VALUES ('$idMarca','$marca','$color','$carroceria')");
    }
?>

    <a href="marcaNuevoFormulario.php" class="btn btn-info" type="submit" name="regresar" href="marcaListado.php"> Regresar </a><br><br>

    <?php
    
    ?>