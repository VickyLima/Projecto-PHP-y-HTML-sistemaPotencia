<?php
$conexion=mysqli_connect('localhost','root','','crudmarcas');
include ("Funcion.php");
banner();
// SESIONES//
include "../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();
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
<!--<div>
    <form action="marcaBuscarVerFormulario.php" method="GET">
        <input type="text" name="buscar" idMarca="">
        <input type="submit" value="Buscar">
        <a href="marcaVerAccion.php">Nuevo</a>
</form>
</div>-->

<?php
echo 'Hola estás en: ' . basename($_SERVER['SCRIPT_FILENAME']);
?>

    <div class="container my-4">
        <table class="table">
            <th><a href="marcaNuevoFormulario.php" aria-current="page" class="btn btn-primary">Crear Nuevo</a></th>
            <th><a href="marcaBuscarVerFormulario.php" aria-current="page" class="btn btn-secondary">Buscar</a></th>
            <th><a href="../Crud/FPDF/reporteMarcasGeneral.php" aria-current="page" class="btn btn-warning">Descargar PDF General</a></th>
            <th><a href="../PhpExcel/phpExcel.php" aria-current="page" class="btn btn-dark">Descargar Excel</a></th>
            
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Número</th>
                            <th>Marca</th>
                            <th>Color</th>
                            <th>Carroceria</th>
                            <th></th>  
                            <th></th> 
                            <th></th> 
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                      $sql="SELECT * FROM marcas";
                      $result=mysqli_query($conexion,$sql);

                      while($nombre=mysqli_fetch_array($result)){
                      ?>  
                    <tr>
                        <td><?php echo $nombre['idMarca'] ?></td>
                        <td><?php echo $nombre['marca'] ?></td>
                        <td><?php echo $nombre['color'] ?></td>
                        <td><?php echo $nombre['carroceria'] ?></td>
       <th><a href="marcaVerAccion.php?idMarca=<?php echo $nombre['idMarca'] ?>" class="btn btn-success btn-sm">Ver</a></th>
      <th><a href="marcaActualizaFormulario.php?idMarca=<?php echo $nombre['idMarca'] ?>" class="btn btn-info">Editar</a></th>
      <th><a onclick="return Confirm()" href="marcaEliminarAccion.php?idMarca=<?php echo $nombre['idMarca'] ?>" class="btn btn-danger">Eliminar</a></th>
      <th><a href="../Crud/FPDF/reporteMarcas.php?idMarca=<?php echo $nombre['idMarca'] ?>" class="btn btn-warning">Descargar PDF</a></th>
    </th>


                      </tr>
                      </form>
                      </div>
                      </div>
                    <?php
  }
  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
                </table>

                </body>           
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