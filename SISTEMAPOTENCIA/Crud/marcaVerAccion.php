<?php
include ("Funcion.php");

// SESIONES//
include "../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();

?>
<?php

 $dato = $_GET['idMarca'];
 include 'conexionn.php';
        $consulta = "SELECT * FROM marcas WHERE idMarca = '$dato'";
        $resultado=mysqli_query($conexion,$consulta);
        $nombre = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <title>Document</title>
</head>
<body>
    <?php
 banner();
 menu();
 ?>
     <div class="formulario">
         <form method="REQUEST" action="marcaVerAccion.php">
         <br><div class="card">
 <div class="card-header bg-primary">
 <h1 class="text-white text-center"> Detalles de la marca </h1>
 </div></br>
             
             <label type="text">Numero: <?php echo $dato; ?><br><br>

             <label type="text">Marca: </label><?php echo $nombre['marca']; ?><br><br>

             <label type="text">Color: <?php echo $nombre['color']; ?><br><br>

             <label type="text">Carroceria: <?php echo $nombre['carroceria']; ?><br><br>
             
             <br><a href="marcaListado.php" class="btn btn-success btn-sm enlace">Regresar</a></th>
         </form>
     </div>
</br>
     <?php 
 pie();
 ?>
</body>
</html>
