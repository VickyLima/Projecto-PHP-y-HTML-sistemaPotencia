<?php
// SESIONES//
include "../../cerrarS/MantenerSesion.php";
$usuario = mantenerSesion();
     include 'conexionn.php';

     $datoActualizar = $_GET['claveColor'];

    $consulta = "SELECT * FROM colores WHERE claveColor = '$datoActualizar'";
    $result=mysqli_query($conexion,$consulta);
    $nombre = mysqli_fetch_array ($result)
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
           <form method="POST" action="coloresActualizaAccion.php">
		   <br><div class="card">
 <div class="card-header bg-primary">
 <h1 class="text-white text-center"> Modifica marca </h1>
 </div></br>

 <label class="etiquetaFormulario">Numero:</label>
                <input type="" name="claveColor" value="<?php echo $nombre['claveColor']?>" class="cajaTexto"><br>

</br><label class="etiquetaFormulario">Marca:</label>
                <input type="" name="colores" value="<?php echo $nombre['colores']?>" class="cajaTexto"><br>

</br><label class="etiquetaFormulario">Color:</label>
                <input type="" name="marca" value="<?php echo $nombre['marca']?>" class="cajaTexto"><br>

</br><label class="etiquetaFormulario">Carroceria:</label>
                <input type="" name="modelo" value="<?php echo $nombre['modelo']?>" class="cajaTexto">
                
               
                <br><a href="coloresActualizaAccion.php?claveColor=<?php echo !isset($_GET['claveColor']); ?>" onclick="return Confirm()" class="btn btn-info enlace">Actualizar</a></br>
                
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