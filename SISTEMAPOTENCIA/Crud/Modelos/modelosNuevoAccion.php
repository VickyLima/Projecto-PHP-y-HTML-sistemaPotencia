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
        $claveModelos=$_POST['claveModelos'];
        $modelo=$_POST['modelo'];
        //$query = mysqli_query($conn,$q);
        $sql = mysqli_query($conexion,"INSERT INTO modelos (claveModelos,modelo) VALUES ('$claveModelos','$modelo')");
    }
?>

    <a class="btn btn-info" type="submit" name="regresar" href="modelosListado.php"> Regresar </a><br><br>

    <?php
    
    ?>