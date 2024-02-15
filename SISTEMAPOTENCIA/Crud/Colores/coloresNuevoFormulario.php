<?php
// SESIONES//
include "../../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();
include ("Funcion.php");
banner();

?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php
menu();
?>

 <div class="col-lg-6 m-auto">
 
 <form method=post action="coloresNuevoAccion.php">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Agregar nuevo color </h1>
 </div><br>

 <label> Número: </label>
 <input type="text" name="claveColor" class="form-control"> <br>

 <label> Colores: </label>
 <input type="text" name="colores" class="form-control"> <br>

 <label> Marca: </label>
 <input type="text" name="marca" class="form-control"> <br>

 <label> Modelo: </label>
 <input type="text" name="modelo" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Enviar </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="coloresNuevoFormulario.php"> Cancelar </a><br>
 </div>
 </form>
 </div>
</body>
</html>

<?php
  pie();
  ?> 