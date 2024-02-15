<?php
include 'Funcion.php';
banner();

    include 'productosActualizarAccion.php';
    $idProducto = $_GET['idProducto'];

    list($filas, $conexion) = recuperarDatos($idProducto); 
    list($consultarProducto, $consultarMarca, $consultarColor, $consultarModelo) = consultas();
?>
<!doctype html>
<html lang="en">
<head>

    <title>Catalogo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <?php
menu();
    ?>

<div class="col-lg-6 m-auto">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Editar Producto </h1>
 </div><br>

        <div>
            <form method="POST" action="actualizar.php">
            <input name="idProducto" type="hidden" value="<?php echo $filas['idProducto']?>"><br>

            <b><label>Seleccione los siguientes datos: </label></b><br><br>

            </select>
            <b><label>Clave: </label><br></b>
            <textarea name="claveProducto" rows="2" cols="40"><?php echo $filas['claveProducto']?></textarea><br>

            </select><br>
            <b><label>Marca: </label></b><br>
            <select name="marcas">
                <?php
                while($valores = mysqli_fetch_array($consultarMarca)){
                    if($valores['idMarca'] == $filas['idMarca']){
                        echo '<option value="'.$valores['idMarca'].'"selected="selected">'.$valores['marca'].'</option>';
                    }else{
                        echo '<option value="'.$valores['idMarca'].'">'.$valores['marca'].'</option>';
                    }
                } ?>
            </select><br><br>
            <b><label>Color: </label></b><br>
            <select name="colores">
                <?php
                while($valores = mysqli_fetch_array($consultarColor)){
                    if($valores['claveColor'] == $filas['claveColor']){
                        echo '<option value="'.$valores['claveColor'].'"selected="selected">'.$valores['colores'].'</option>';
                    }else{
                        echo '<option value="'.$valores['claveColor'].'">'.$valores['colores'].'</option>';
                    }
                } ?>
            </select><br><br>
            <b><label>Modelo: </label></b><br>
            <select name="modelos">
                <?php
                while($valores = mysqli_fetch_array($consultarModelo)){
                    if($valores['claveModelos'] == $filas['claveModelos']){
                        echo '<option value="'.$valores['claveModelos'].'"selected="selected">'.$valores['modelo'].'</option>';
                    }else{
                        echo '<option value="'.$valores['claveModelos'].'">'.$valores['modelo'].'</option>';
                    }
                } ?>

           </select><br><br>
            <b><label>Descripción: </label><br></b>
            <textarea name="descripcion" rows="2" cols="40"><?php echo $filas['descripcion']?></textarea><br><br>
            <b><label>Carroceria: </label><br></b>
            <textarea name="carroceria" rows="2" cols="40"><?php echo $filas['carroceria']?></textarea><br><BR>
        
            <br><button class="btn btn-info enlace">Actualizar</button></br><br>
        </form>
        </div> 
            </div> 
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
   

<?php
pie();
    ?>