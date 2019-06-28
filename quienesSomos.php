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
    <title>Quiénes Somos</title>
  </head>
  <body>
    <?php include_once "header.php" ?>
    <main>
      <div class="about-us">
        <p><strong>Nature</strong> es una marca joven, enfocada en crear verdadera cosmética natural, cuidando hasta los mas mínimos detalles en cuanto a ingredientes, producción y envasado, utilizando materias primas naturales de la mas alta calidad. <br>A pesar del corto camino transitado, nuestro equipo tiene basta experiencia en el rubro de materias primas cosméticas.
        </p>
        <h5><strong>Por que decimos que creamos verdadera cosmética natural?</strong></h5>
        <p>En <strong>Nature</strong> elegimos rigurosamente cada materia prima utilizada en todas nuestras líneas, importamos nosotros mismos casi la totalidad de ingredientes, analizando previamente cada uno de ellos para certificar la calidad de los mismos.<br>Nuestros productos se fabrican a base de aceites vegetales puros, tales como aceite de almendras, aceite de coco, aceite de argán, aceite de jojoba, manteca de karité, entre otros. Evitamos en todo proceso y en nuestras formulas materia primas derivadas del petróleo, tales como parafina, vaselina, siliconas, entre otras
        </p>
        <h5><strong>¿Que nos diferencia?</strong></h5>
        <p>Nuestros productos están certificados por ANMAT, certificados SIN TACC, no testeamos en animales y no utilizamos parabenos.<br>Nuestros productos orgánicos estan certificado por ECO-CERT (certificadora de origen Francés).</p>
      </div>
    </main>
    <?php include_once "footer.php" ?>
  </body>
</html>
