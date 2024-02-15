<?php
// SESIONES//
include "../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();
     include 'conexionn.php';

     $datoActualizar = $_GET['idMarca'];

    $consulta = "SELECT * FROM marcas WHERE idMarca = '$datoActualizar'";
    $resultado=mysqli_query($conexion,$consulta);
    $nombre = mysqli_fetch_array ($resultado)
?>
<html>
    <body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
 
<div class="formulario">
           <form method="POST" action="marcaActualizaAccion.php">
		   <br><div class="card">
 <div class="card-header bg-primary">
 <h1 class="text-white text-center"> Modifica marca </h1>
 </div></br>

 <input name="idMarca" type="hidden" value="<?php echo $nombre['idMarca']?>">

 <label class="etiquetaFormulario">Numero:</label>
                <input type="text" name="idMarca" value="<?php echo $nombre['idMarca']?>" class="cajaTexto"><br>

</br><label class="etiquetaFormulario">Marca:</label>
                <input type="text" name="marca" value="<?php echo $nombre['marca']?>" class="cajaTexto"><br>

</br><label class="etiquetaFormulario">Color:</label>
                <input type="text" name="color" value="<?php echo $nombre['color']?>" class="cajaTexto"><br>

</br><label class="etiquetaFormulario">Carroceria:</label>
                <input type="text" name="carroceria" value="<?php echo $nombre['carroceria']?>" class="cajaTexto">
                
               
                <button onclick="return Confirm()" class="custom-btn btn-11 enlace"> Actualizar</button>
                
            </form>
        </div>
    </body>
</html>
<script>
    function Confirm(){
        var respuesta = confirm ("¿Estás seguro que deseas modificar este registro?");
        if (respuesta == true){
            return true;
        }else{
            return false;
        }
    }
</script>