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
                <img src="img/carousel-1.jpg" class="d-block w-100 banner" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p>Somos una marca joven, enfocados en crear verdadera cosmética natural, cuidando hasta los mas mínimos detalles en cuanto a ingredientes, producción y envasado, utilizando materias primas naturales de la mas alta calidad.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/carousel-2.jpg" class="d-block w-100 banner" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p>Nuestros productos están certificados por ANMAT, certificados SIN TACC, no testeamos en animales y no utilizamos parabenos.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/carousel-3.jpg" class="d-block w-100 banner" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
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
        <section class="pagina-principal">
          <div class="producto row d-flex justify-content-around">
            <div class="rostro categoria col-xs-3">
              <img class="item img-fluid"src="img/categoria-rostro.jpg" alt="">
              <a href="more">Rostro</a>
            </div>
            <div class="cuerpo categoria col-xs-3">
              <img class="item img-fluid"src="img/categoria-cuerpo.jpg" alt="">
              <a href="more">Cuerpo</a>
            </div>
          </div>
          <div class="separator">
            <hr>
            <h2>Productos Destacados</h2>
          </div>
          <div class="articulosMasVendidos row">
              <div class="articulo col-xs-12 col-md-6 col-lg-4">
                <img class="img-fluid"src="img/crema-para-pies.jpg" alt="">
                <a href="#">Crema para pies con aceite de coco</a>
              </div>
              <div class="articulo col-xs-12 col-md-6 col-lg-4">
                <img class="img-fluid"src="img/kit-cremas-cuerpo-y-pelo.jpg" alt="">
                <a href="#">Kit cremas cuerpo y pelo</a>
              </div>
              <div class="articulo col-xs-12 col-md-6 col-lg-4">
                <img class="img-fluid"src="img/serum-antiarrugas.jpg" alt="">
                <a href="#">Serum antiarrugas con retinol</a>
              </div>
              <div class="articulo  col-xs-12 col-md-6 col-lg-4">
                <img class="img-fluid"src="img/crema-pelo.jpg" alt="">
                <a href="#">Marcarilla para el pelo con aceite de oliva</a>
              </div>
              <div class="articulo col-xs-12 col-md-6 col-lg-4">
                <img class="img-fluid"src="img/mascarilla-carbon.jpg" alt="">
                <a href="#">Mascarilla de carbon reductora de poros</a>
              </div>
              <div class="articulo col-xs-12 col-md-6 col-lg-4">
                <img class="img-fluid"src="img/tonico-facial.jpg" alt="">
                <a href="#">Tónico de caléndula para piel sensible</a>
              </div>
            </div>
          </div>
        </section>
      </main>
      <?php include_once "footer.php" ?>

     <!-- Js -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>
