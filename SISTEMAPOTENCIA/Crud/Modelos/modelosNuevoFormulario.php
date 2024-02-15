<?php
// SESIONES//
include "../../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();

?>
<!DOCTYPE html>
<html>
<head>
 <title>NuevoModelo</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method=post action="modelosNuevoAccion.php">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Agregar nuevo modelo </h1>
 </div><br>

 <label> Número: </label>
 <input type="text" name="claveModelos" class="form-control"> <br>

 <label> Modelo: </label>
 <input type="text" name="modelo" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Enviar </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="modelosListado.php"> Cancelar </a><br>
 </div>
 </form>
 </div>
</body>
</html>