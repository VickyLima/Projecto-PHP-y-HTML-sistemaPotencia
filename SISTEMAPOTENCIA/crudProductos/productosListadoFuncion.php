<?php
include 'Funcion.php';
banner();
    // SESIONES
    include '../cerrarS/MantenerSesion.php';
    $usuario = mantenerSesion();
    
    include 'productosListadoAccion.php';
    include 'conexionn.php';

    list ($consulta, $conexion) = consultarProducto();
    
?>

<!doctype html>
<html lang="en">
<head>
    <title>Catalogo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php
menu();
?>
     <div class="container my-4">
        <table class="table">
            <th><a href="productosNuevoFuncion.php" aria-current="page" class="btn btn-primary">Crear Nuevo</a></th>
            <th><a href="productosBuscarVerFormulario.php" aria-current="page" class="btn btn-secondary">Buscar</a></th>
            <th><a href="../crudProductos/FPDF/reporteProductosGeneral.php" aria-current="page" class="btn btn-warning">Descargar PDF</a></th>
            <th><a href=""  class="btn btn-dark">Descargar Excel</a></th>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Número</th>
                            <th>Clave</th>
                            <th>Marca</th>
                            <th>Modelo</th> 
                            <th>Descripcion<th>
                            <th></th> 
                            <th></th> 
                            <th></th>  
                            <th></th> 
                       
                        </tr>
                    </thead>
                    <?php 
                        while( $fila = mysqli_fetch_array($consulta)){
                            $idProducto = consultarId($fila['idProducto'], $conexion);
                            $claveProducto = consultarClave($fila['idProducto'], $conexion);
                            $idMarca = consultarMarca($fila['idMarca'], $conexion);
                            $claveModelos = consultarModelo($fila['claveModelos'], $conexion);
                            $descripcion = consultarDescripcion($fila['descripcion'], $conexion);
                    ?>
                            <tr>
                        <td> <?php echo $idProducto['idProducto'] ?> </td>
                        <td> <?php echo $claveProducto['claveProducto']?> </td>
                        <td> <?php echo $idMarca['marca']?> </td>
                        <td> <?php echo $claveModelos['modelo']?></td>
                        <td> <?php echo $descripcion['descripcion']?></td>
                        <th>
                        
      <th><a href="productosVerFuncion.php?idProducto=<?php echo $fila['idProducto'] ?>" class="btn btn-success btn-sm">Ver</a></th>
      <th><a href="productosActualizarFuncion.php?idProducto=<?php echo $fila['idProducto'] ?>" class="btn btn-info">Editar</a></th>
      <th><a onclick="return Confirm()" href="productosBorrarAccion.php?idProducto=<?php echo $fila['idProducto'] ?>" class="btn btn-danger">Eliminar</a></th>
      <th><a href="../crudProductos/FPDF/reporteProductosRegistro.php?idProducto=<?php echo $fila['idProducto'] ?>" class="btn btn-warning">Descargar PDF</a></th>
    
    </th>
                    <?php } ?>
                </tbody>
            </table>
       </div>

    </body>
</html>

<script>
    function Confirm(){
        var respuesta = confirm ("¿Estás seguro que deseas eliminar este registro?");
        if (respuesta == true){
            return true;
        }else{
            return false;
        }
    }
</script>

<?php
pie();
?>