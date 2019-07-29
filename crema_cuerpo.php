<?php
// require 'funciones.php';
include 'init.php';

if (isset($_COOKIE["email"])){
  loguearUsuario($_COOKIE["email"]);
}

$usuario = $dbAll->traerUsuarioLogueado();
$usuarioLogueado = $auth->usuarioLogueado();

//var_dump($_FILES);
if ($usuarioLogueado) {
  $img = glob("imagen-usuario/" . $usuario->getEmail() . '*')[0]; // busca un patron dentro de carpetas o directorios
  //var_dump($img);
}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Libre+Franklin|Playfair+Display" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css">
     <title></title>
   </head>
   <body>
     <?php include_once "header.php" ?>
     <br>
     <br>
     <br>
     <br>
     <div class="crema_cuerpo row">
       <div class="articulo col-xs-12 col-md-6 col-lg-4">
         <img class="img-fluid"src="img/cuerpo/aceiteCorporal.png" alt="">
         <br>
         <a href="#">AceiteCorporal</a>
       </div>
       <div class="articulo col-xs-12 col-md-6 col-lg-4">
         <img class="img-fluid"src="img/cuerpo/bodyLotion.png" alt="">
         <br>
         <a href="#">Body lotion</a>
       </div>
       <div class="articulo col-xs-12 col-md-6 col-lg-4">
         <img class="img-fluid"src="img/cuerpo/bodyScrub.png" alt="">
         <a href="#">Body Scrub</a>
       </div>
       <div class="articulo  col-xs-12 col-md-6 col-lg-4">
         <img class="img-fluid"src="img/cuerpo/bodySplashEnergy.png" alt="">
         <br>
         <a href="#">Body Splash Energy</a>
       </div>
       <div class="articulo col-xs-12 col-md-6 col-lg-4">
         <img class="img-fluid"src="img/cuerpo/bodySplashRelax.png" alt="">
         <br>
         <a href="#">Body Splash Relax</a>
       </div>
       <div class="articulo col-xs-12 col-md-6 col-lg-4">
         <img class="img-fluid"src="img/cuerpo/gelDeDucha.png" alt="">
         <br>
         <a href="#">Gel de ducha</a>
       </div>
       <div class="articulo col-xs-12 col-md-6 col-lg-4">
         <img class="img-fluid"src="img/cuerpo/kit-cremas-cuerpo-y-pelo.jpg" alt="">
         <br>
         <a href="#">Kit cremas cuerpo y pelo</a>
       </div>
       <div class="articulo col-xs-12 col-md-6 col-lg-4">
         <img class="img-fluid"src="img/cuerpo/crema-para-pies.jpg" alt="">
         <br>
         <a href="#">Crema para pies</a>
       </div>
     </div>
     <br>
     <br>
     <br>
     <br>
     <?php include_once "footer.php" ?>
   </body>
 </html>
