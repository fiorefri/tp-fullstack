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
    <title>Preguntas frecuentes</title>
  </head>
  <body>
    <?php include_once "header.php" ?>
    <main>
      <div class="preg_frecuentes">
        <h3>Preguntas Frecuentes</h3>
        <br>
        <h4>Sobre los productos:</h4  >
        <h5>¿Cómo se elaboran los productos Nature?</h5>

        <p>Elaboramos nuestros productos de manera artesanal, teniendo todas las precauciones y cuidados necesarios para poder
        garantizar a nuestros clientes un producto en buen estado y de excelente calidad. Fabricamos nuestras propias cremas base
        y a estas les agregamos los activos que la convierten en el producto final (crema de limpieza facial, crema hidratante
        corporal, etc.).</p>

        <h5>¿Qué tipos de ingredientes puedo encontrar en los productos Nature?</h5>

        <p>Tanto en la crema base como en el producto final utilizamos solamente ingredientes de origen vegetal y otros
          componentes (por ejemplo, conservantes) aprobados por standards internacionales de cosmética natural, a saber:<br>

        Aceites vegetales<br>
        Extractos vegetales<br>
        Aceites esenciales<br>
        Conservante EUXYL PE9010<br>
        Emulsionantes: Olivem 1000 / Alcohol Cetílico<br>
        Glicerina<br></p>



        <h5>¿Pueden causar alergias los productos Nature?</h5>

        <p>TODO puede causar alergias. De todas formas, en MeL usamos componentes que en la enorme mayoría de los casos no
          irritan y no causan alergia. Existen algunos casos en partícular (están informados en la descripción de cada producto
          que así lo requiera) tenemos versiones alternativas para aquellos clientes que sepan que son alérgicos a determinado
          ingrediente. Recomendamos probar primero cada producto en una zona pequeña de la piel unas horas antes de utilizarlo
          normalmente.</p>





        <h4>Sobre el proceso de compra:</h4>
        <h5>¿Qué formas de pago puedo aprovechar para realizar mi compra?</h5>

        <p>Podés pagar por medio de MercadoPago hasta en 12 cuotas o, en caso de pedir envío directo o retiro por Balvanera,
        podés pagar también en efectivo!</p>

        <h5>¿Cuál es el costo de envío?</h5>

        <p>Por el momento solo hacemos envíos dentro de la ciudad de Buenos Aires. El mismo tiene un costo fijo de $200.
        También se puede retirar el pedido por el barrio de Balvanera, previa coordinación por cualquiera de nuestros
        medios de contacto.</p>

        <h5>¿Cómo se realizan los envíos?</h5>

        <p>Los productos MeL se elaboran por demanda. Es decir, cada semana se preparan los pedidos realizados durante la semana
        anterior (desde las 00:00 hs del día lunes hasta las 23:59 hs del día domingo), Una vez elaborados nos pondremos en contacto
        para coordinar la entrega.</p>

        <h5>¿Dónde puedo recibir mi pedido?</h5>

        <p>Por el momento solo se realizan envíos dentro de la ciudad de Buenos Aires.</p>

        <h5>¿Cuál es la política de cambios o devoluciones?</h5>

        <p>En caso de recibir un producto en mal estado o no estar satisfecho/a con el producto, se realiza la devolución del
        dinero previa devolución del producto en cuestión. Los motivos válidos para devolución se evaluarán en cada caso en particular.
        El plazo máximo para devolver un producto es de 7 (siete) días corridos una vez recibido el producto.</p>

      </div>

    </main>
    <?php include_once "footer.php" ?>
  </body>
</html>
