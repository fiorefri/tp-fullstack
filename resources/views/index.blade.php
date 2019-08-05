@extends('plantilla')

@section('titulo', "Nature")

@section('principal')
  <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide d-none d-md-block" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/sun.jpeg" class="d-block w-100 banner" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p>Somos una marca joven, enfocados en crear verdadera cosmética natural, cuidando hasta los mas mínimos detalles en cuanto a ingredientes, producción y envasado, utilizando materias primas naturales de la mas alta calidad.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/growingPlant.jpeg" class="d-block w-100 banner" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p>Nuestros productos están certificados por ANMAT, certificados SIN TACC, no testeamos en animales y no utilizamos parabenos.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/fall1.jpg" class="d-block w-100 banner" alt="">
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
  <div class="container">
    <section class="pagina-principal">
      <div class="producto row d-flex justify-content-around">
        <div class="rostro categoria col-xs-3 col-md-6">
          <img class="item img-fluid"src="/img/categoria-rostro1.jpg" alt="">
          <a href="more">Rostro</a>
        </div>
        <div class="cuerpo categoria col-xs-3 col-md-6">
          <img class="item img-fluid"src="/img/categoria-cuerpo1.jpg" alt="">
          <a href="more">Cuerpo</a>
        </div>
      </div>
      <div class="separator">
        <hr>
        <h2>Alguno de nuestros productos</h2>
      </div>
      <div class="container">
        @foreach ($products as $product)
          <div class="articulosMasVendidos row d-flex justify-content-around">
            <div class="articulo col-xs-12 col-md-6 col-lg-4">
              <img class="img-fluid"src="/storage/productos/{{$product->imagen}}" alt="">
              <a href="/productos/{{$product->id}}">{{$product->nombre}}</a>
            </div>
          </div>
        @endforeach
      </div>
    </section>
  </div>
@endsection
