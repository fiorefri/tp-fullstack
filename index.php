<?php
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
     <title>Nature</title>
   </head>
   <body>
     <?php include_once "header.php" ?>
      <main>
        <div class="container">
          <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/6.jpg" class="d-block w-100 banner" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Nombre de la marca</h5>
                  <p>Somos una marca joven, enfocados en crear verdadera cosmética natural, cuidando hasta los mas mínimos detalles en cuanto a ingredientes, producción y envasado, utilizando materias primas naturales de la mas alta calidad.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/8.jpg" class="d-block w-100 banner" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Cruelty Free</h5>
                  <p>Nuestros productos están certificados por ANMAT, certificados SIN TACC, no testeamos en animales y no utilizamos parabenos.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/10.jpg" class="d-block w-100 banner" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Cosmética Natural</h5>
                  <p>Evitamos en todo proceso y en nuestras formulas materia primas derivadas del petróleo, tales como parafina, vaselina, siliconas, entre otras.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="producto row">
          <div class=" col-xs-12 col-lg-6">
            <img class=" item img-fluid"src="img/5.jpg" alt="">
            <a href="more">Rostro</a>
          </div>
          <div class=" col-xs-12 col-lg-6">
            <img class=" item img-fluid"src="img/piernas--z.jpg" alt="">
            <a href="more">Cuerpo</a>
          </div>
        </div>
        <div class="separator">
          <hr>
          <h2>Productos Destacados</h2>
        </div>
        <div class="articulosMasVendidos row">
            <div class=" col-xs-12 col-md-6 col-lg-4">
            <img class="img-fluid"src="img/cremas 1.jpg" alt="">
            <a href="#">Crema con ácido hialurónico</a>
          </div>
            <div class=" col-xs-12 col-md-6 col-lg-4">
            <img class="img-fluid"src="img/cremas 2.jpg" alt="">
            <a href="#">Crema de día con Vitamina C</a>
          </div>
            <div class="articulosMasVendidos col-xs-12 col-md-6 col-lg-4">
            <img class="img-fluid"src="img/receta serum antiarrugas antiedad casero.jpg" alt="">
            <a href="#">Serum antiarrugas</a>
          </div>
          <div class=" col-xs-12 col-md-6 col-lg-4">
          <img class="img-fluid"src="img/cremas 1.jpg" alt="">
          <a href="#">Crema con ácido hialurónico</a>
        </div>
          <div class=" col-xs-12 col-md-6 col-lg-4">
          <img class="img-fluid"src="img/cremas 2.jpg" alt="">
          <a href="#">Crema de día con Vitamina C</a>
        </div>
          <div class="articulosMasVendidos col-xs-12 col-md-6 col-lg-4">
          <img class="img-fluid"src="img/receta serum antiarrugas antiedad casero.jpg" alt="">
          <a href="#">Serum antiarrugas</a>
        </div>
          </div>
        </div>
      </main>
      <?php include_once "footer.php" ?>

     <!-- Js -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>
