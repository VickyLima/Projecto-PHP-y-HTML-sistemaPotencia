<?php
// SESIONES//
include "../../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();
include ("Funcion.php");
?>

<!doctype html>
<html lang="en">
<head>
    <title>BuscarEliminar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php
banner();
menu();
?>
        <div class="formulario">
           <form method="GET" action="coloresEliminarAccion.php">
		   <br><div class="card">
 <div class="card-header bg-primary">
 <h1 class="text-white text-center"> Buscar marca </h1>
 </div></br>

                <font color="black"><label type="text">Numero:</label></font> 
                <input placeholder="Escribe el numero de marca" name="claveColor" class="cajaTexto" value=""><br>
				
                <button onclick="return Confirm()" class="btn btn-danger enlace">Eliminar</button>
<!--<th><a onclick="return Confirm()" href="marcaEliminarAccion.php?idMarca=<?php echo ['idMarca'] ?>" class="btn btn-danger">Eliminar</a></th>-->
				
            </form>
        </div>
        
        <?php 
    pie();
    ?>
</body>
