<?php
function banner(){
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Document</title>
    <link rel="stylesheet" href="../../Banner/index.css">
    <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="carrousel">
        <div class="conteCarrousel">
            <div class="itemCarrousel" id="itemCarrousel-1">
                <img src="../../Banner/imagenes/bamber.png" alt="item-1-Carrousel">
                <div class="itemCarrouselArrows">
                    <a href="#itemCarrousel-3">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#itemCarrousel-2">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-2">
                <img src="../../Banner/imagenes/banner3.jpg" alt="item-1-Carrousel">
                <div class="itemCarrouselArrows">
                    <a href="#itemCarrousel-1">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#itemCarrousel-3">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-3">
                <img src="../../Banner/imagenes/banner5.png" alt="item-1-Carrousel">
                <div class="itemCarrouselArrows">
                    <a href="#itemCarrousel-2">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#itemCarrousel-1">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
<?php
}
?>



<?php
function menu(){
?>
<menu class="clearfix">
  <div class="logo fab fa-hooli"></div>
  <ul class="main-menu clearfix">
  <link rel="stylesheet" href="../../Menu/estil.css">
  <title>Home</title>
</head>
    <li>
      <a href="../../Menu/menu.php">Inicio</a>
      <div class="dropdown clearfix">
</div>
</li>
<li>
      <a href="../../Noticias/noticias.php">Noticias</a>
      <div class="dropdown clearfix">
</div>
</li>
<li>
      <a href="#">Servicios</a>
      <div class="dropdown clearfix">
        <ul>
          <li><a href="#">Servicios</a></li>
          <li><a href="../../Servicios/Sobre/nosotros.php">Sobre nosotros</a></li>
          <li><a href="../../Servicios/Ofertas/ofertas.php">Ofertas</a></li>
          <li><a href="../../Servicios/Galerias/indice.php">Galerias</a></li>
        </ul>
    <li>
    <a href="#">Catalogos</a>
      <div class="dropdown clearfix">
        <ul>
          <li><a href="#">Marcas</a></li>
          <li><a href="../../Crud/marcaListado.php">Listado</a></li>
          <li><a href="../../Crud/marcaBuscarVerFormulario.php">Ver</a></li>
          <li><a href="../../Crud/marcaBuscarActualizar.php">Editar</a></li>
          <li><a href="../../Crud/marcaListado.php">Eliminar</a></li>
          </ul>
        <ul>
          <li><a href="#">Colores</a></li>
          <li><a href="../../Crud/Colores/coloresListado.php">Listado</a></li>
          <li><a href="../../Crud/Colores/coloresBuscarVerFormulario.php">Ver</a></li>
          <li><a href="../../Crud/Colores/coloresActualizaFormulario.php">Editar</a></li>
          <li><a href="../../Crud/Colores/coloresListado.php">Eliminar</a></li>
</ul>
            <ul>
          <li><a href="#">Modelos</a></li>
          <li><a href="../../Crud/Modelos/modelosListado.php">Listado</a></li>
          <li><a href="../../Crud/Modelos/modelosBuscarVerFormulario.php">Ver</a></li>
          <li><a href="../../Crud/Modelos/modelosBuscarActualizar.php">Editar</a></li>
          <li><a href="../../Crud/marcaBuscarEliminar.php">Eliminar</a></li>
</ul>
<ul>
          <li><a href="#">Productos</a></li>
          <li><a href="../crudProductos/productosListadoFuncion.php">Listado</a></li>
          <li><a href="../../crudProductos/productosBuscarVerFormulario.php">Ver</a></li>
          <li><a href="../../crudProductos/productosBuscarActualizar.php">Editar</a></li>
          <li><a href="../../crudProductos/productosBuscarEliminar.php">Eliminar</a></li>
</ul>
</div>
</li>
    <li>
      <a href="#">Contactanos</a>
      <div class="dropdown clearfix">
        <ul>
          <li><a href="#">Contacto</a></li>
          <li><a href="../../Contacto/contacto.php">Contactanos</a></li>
        </ul>
          </div>
    </li>
    <li>
      <a href="#">Perfil</a>
      <div class="dropdown clearfix">
        <ul>
        <li><a href="#">Perfil</a></li>
          <li><a href="#">Cerrar Sesión</a></li>
          <li></a><font color="black">USUARIO ACTIVO: <?php echo $usuario; ?></font></li>
    </div>
        </ul>
      </div>
    </li>
  </ul>
</menu>
<?php
}
?>

<?php
function pie(){
    ?>
<head>
    <meta charset="UTF-8">
    <title>Pie de pagina</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../../piePagina/estilos.css">
     <!--Iconos-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body>
<!--::::Pie de Pagina::::::-->
    <div class = "color">
    <footer class="pie-pagina" id="pie">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../../piePagina/logito.png" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Gracias por tu preferencia</p>
                <p>Contactanos en cualquier medio de comunicación</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Vicky Ramos L</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    </div>
</body>
</menu>
   <?php 
}
?>
