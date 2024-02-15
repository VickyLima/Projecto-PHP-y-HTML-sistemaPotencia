<?php 

    require 'productosActualizarAccion.php';
    list($consultarProducto, $consultarMarca, $consultarColor, $consultarModelo) = consultas();
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

    <?php include "../crudProductos/Funcion.php"; 
    banner();
    menu();
    ?>
    <div class="col-lg-6 m-auto">
 
 <form method="POST" action="productosNuevoAccion.php">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Agregar Nuevo Producto </h1>
 </div><br>

               <label>Numero:</label> 
                <textarea name="idProducto" rows="1" cols="30" required></textarea><br><br>

                <label>Clave:</label> 
                <textarea name="claveProducto" rows="1" cols="30" required></textarea><br><br>

            <label>Marca:</label>
                <select name="marcas" required>
                    <option value="" selected="selected">- Selecciona -</option>
                    <?php
                        while ($datos = mysqli_fetch_array($consultarMarca)){
                            echo '<option value="'.$datos['idMarca'].'">'.$datos['marca'].'</option>';
                        }   
                    ?>
                </select><br><br>
                
                <label>Color:</label>
                <select name="colores" required>
                    <option value="" selected="selected">- Selecciona -</option>
                    <?php
                        while ($datos = mysqli_fetch_array($consultarColor)){
                            echo '<option value="'.$datos['claveColor'].'">'.$datos['colores'].'</option>';
                        }   
                    ?>
                </select><br><br>
                
                <label>Modelo:</label>
                <select name="modelos" required>
                    <option value="" selected="selected">- Selecciona -</option>
                    <?php
                        while ($datos = mysqli_fetch_array($consultarModelo)){
                            echo '<option value="'.$datos['claveModelos'].'">'.$datos['modelo'].'</option>';
                        }   
                    ?>
                    </select><br><br>
                <label>Descripción:</label>
                <textarea name="descripcion" rows="1" cols="30" required></textarea><br><br>

                <label>Carroceria:</label>
                <input name="carroceria" type="int" required><br><br>

                <button class="btn btn-success" type="submit" name="submit"> Agregar </button><br>
              <a class="btn btn-info" type="submit" name="cancel" href="productosListadoFuncion.php"> Cancelar </a><br>

 </form>
        </div>
 </div>
    </body>
</html>

<?php
pie();
?>