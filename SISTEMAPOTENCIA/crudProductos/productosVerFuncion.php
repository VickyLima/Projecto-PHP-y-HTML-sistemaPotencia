<?php
include 'Funcion.php';
banner();

include 'productosActualizarAccion.php';
include 'productosVerAccion.php';
$idProducto = $_GET['idProducto'];
    list($filas, $conexion) = recuperarDatos($idProducto);

    list($idProducto, $marca, $colores, $modelo) = recuperarNombres($conexion, $filas['idProducto'],$filas['idMarca'],$filas['claveColor'],$filas['claveModelos']);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Ver</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    <?php
    menu();
    ?>

<div class="col-lg-6 m-auto">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center"> Detalles del Producto </h1>
 </div><br>

        <div>
        <b><label>Numero:</label></b><label><?php echo $idProducto['idProducto']; ?></label><br><br>
        <b><label>Clave:</label></b><label><?php echo $idProducto['claveProducto']; ?></label><br><br>
        <b><label>Marca:</label></b><?php echo $marca['marca']; ?><label></label><br><br>
        <b><label>Color:</label></b><?php echo $colores['colores']; ?></label><br><br>
        <b><label>Modelo:</label></b><?php echo $modelo['modelo']; ?></label><br><br>
        <b><label>Descripcion:</label></b><label><?php echo $filas['descripcion']; ?></label><br><br>
        <b><label>Carroceria:</label></b><label><?php echo $filas['carroceria']; ?></label><br><br>
        
        <br><a href="productosListadoFuncion.php" class="btn btn-success btn-sm enlace">Regresar</a></th><br><br>
        </div>
</div>
</div>
</head>
</body>
</html>

<?php
pie();
?>