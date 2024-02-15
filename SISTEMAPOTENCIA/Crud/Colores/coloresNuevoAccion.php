<?php
// SESIONES//
include "../../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();
    include "conexion.php";
    $conexion= conexion();
    if(!$conexion)
    {
        die("Error de conexion de la base datos".mysql_error());
    }else{
      echo "La base de datos se ha conectado exitosamente <br>";
        $claveColor=$_POST['claveColor'];
        $colores=$_POST['colores'];
        $marca=$_POST['marca'];
        $modelo=$_POST['modelo'];
        //$query = mysqli_query($conn,$q);
        $sql = mysqli_query($conexion,"INSERT INTO colores (claveColor,colores,marca,modelo) VALUES ('$claveColor','$colores','$marca','$modelo')");
    }
?>

    <a href="coloresListado.php" class="btn btn-info" type="submit" name="regresar" href="coloresListado.php"> Regresar </a><br><br>

    <?php
    
    ?>