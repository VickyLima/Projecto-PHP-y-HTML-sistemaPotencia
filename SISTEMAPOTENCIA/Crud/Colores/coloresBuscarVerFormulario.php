<?php
// SESIONES//
include "../../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();
include 'conexionn.php';
include ("Funcion.php");

?>

<!doctype html>
<html lang="en">
<head>
    <title>Buscar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php
banner();
menu();
?>
        <div class="formulario">
           <form method="REQUEST" action="">
		   <br><div class="card">
 <div class="card-header bg-primary">
 <h1 class="text-white text-center"> Buscar colores </h1>
 </div></br>

                <font color="black"><label type="text">Numero:</label></font> 
                <input placeholder="Escribe el numero de marca" name="claveColor" class="cajaTexto" value="">
				
                <br><a href="coloresVerAccion.php?claveColor=<?php echo !isset($_GET['claveColor']); ?>" class="btn btn-info enlace">Buscar</a></br>
				<th><a href="coloresListado.php" class="btn btn-success btn-sm enlace">Regresar</a></th>
            </form>
        </div>
        <?php 
    pie();
    ?>
</body>
