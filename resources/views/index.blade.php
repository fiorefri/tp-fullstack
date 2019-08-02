@extends('plantilla')

@section('titulo', "Nature")

@section('principal')
  <div class="container">
    <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide d-none d-md-block" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/img/calendula1.jpg" class="d-block w-100 banner" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p>Somos una marca joven, enfocados en crear verdadera cosmética natural, cuidando hasta los mas mínimos detalles en cuanto a ingredientes, producción y envasado, utilizando materias primas naturales de la mas alta calidad.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/hojaCinco.jpg" class="d-block w-100 banner" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p>Nuestros productos están certificados por ANMAT, certificados SIN TACC, no testeamos en animales y no utilizamos parabenos.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/hojasBranches.jpg" class="d-block w-100 banner" alt="">
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
      <div class="rostro categoria col-xs-3 pb-5 pb-md-0">
        <img class="item img-fluid"src="/img/categoria-rostro.jpg" alt="">
        <a href="more">Rostro</a>
      </div>
      <div class="cuerpo categoria col-xs-3">
        <img class="item img-fluid"src="/img/categoria-cuerpo.jpg" alt="">
        <a href="more">Cuerpo</a>
      </div>
    </div>
    <div class="separator">
      <hr>
      <h2>Productos Destacados</h2>
    </div>
    <div class="articulosMasVendidos row">
        <div class="articulo col-xs-12 col-md-6 col-lg-4">
          <img class="img-fluid"src="/img/crema-para-pies.jpg" alt="">
          <a href="#">Crema para pies con aceite de coco</a>
        </div>
        <div class="articulo col-xs-12 col-md-6 col-lg-4">
          <img class="img-fluid"src="/img/kit-cremas-cuerpo-y-pelo.jpg" alt="">
          <a href="#">Kit cremas cuerpo y pelo</a>
        </div>
        <div class="articulo col-xs-12 col-md-6 col-lg-4">
          <img class="img-fluid"src="/img/serum-antiarrugas.jpg" alt="">
          <a href="#">Serum antiarrugas con retinol</a>
        </div>
        <div class="articulo  col-xs-12 col-md-6 col-lg-4">
          <img class="img-fluid"src="/img/crema-pelo.jpg" alt="">
          <a href="#">Mascarilla para el pelo con aceite de oliva</a>
        </div>
        <div class="articulo col-xs-12 col-md-6 col-lg-4">
          <img class="img-fluid"src="/img/mascarilla-carbon.jpg" alt="">
          <a href="#">Mascarilla de carbon reductora de poros</a>
        </div>
        <div class="articulo col-xs-12 col-md-6 col-lg-4">
          <img class="img-fluid"src="/img/tonico-facial.jpg" alt="">
          <a href="#">Tónico de caléndula para piel sensible</a>
        </div>
      </div>
    </section>
  </div>
@endsection
