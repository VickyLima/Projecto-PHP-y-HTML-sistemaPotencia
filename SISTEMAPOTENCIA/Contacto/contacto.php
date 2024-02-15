<?php
include ("Funcion.php");
banner();
menu();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactenos</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<section class="contact" id="contact">

    <h1 class="heading"> <span> Contacte </span> Con Nosotros </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="Escribe tu nombre completo" class="box">
            <input type="email" placeholder="Escribe tu email" class="box">
            <input type="number" placeholder="Escribe tu número celular" class="box">
            <textarea name="" class="box" placeholder="Escribe tu mensaje" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Enviar mensaje" class="btn">
        </form>

        <div class="image">
            <img src="images/contactanos.jpg" alt="">
        </div>

    </div>

</section>

<center>
<h1 class="heading"> <span> Mapa de como </span> llegar con nosotros </h1>
<div id="centro3">
<h2>
				<em class="encabezados t1">¡Te</em> 
				<em class="encabezados t2">esperamos!</em>
			</h2>
<br><div id="mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3880.205886558182!2d-88.16743098199365!3d13.461402473858934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x72953df7e0502a9b!2sMetrocentro+San+Miguel!5e0!3m2!1ses-419!2ssv!4v1564899753613!5m2!1ses-419!2ssv" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
                    </center>
                    </div></br>
<?php
  pie();
  ?> 