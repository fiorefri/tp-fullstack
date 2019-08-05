@extends('plantilla')

@section('titulo', 'Descripción Producto')

@section('principal')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="detalle_producto card">
        <div class="titulo-detalle-producto card-header">Detalle Producto</div>
        <div class="card-body">
          <div class="detalle">
            <p class="row justify-content-center"><img style="width:220px; heigh:280px;"src="/storage/productos/{{$product->imagen}}" alt=""></p>

            <p>Nombre:      {{$product->nombre}}</p>
            <p>Descripción: {{$product->descripcion}}</p>
            <p>Precio:      {{$product->precio}}</p>
            <p>Stock:       {{$product->stock}}</p>
            @foreach ($category as $categoria)
              <p>Categoria: {{$categoria->nombre}}</p>
            @endforeach
            @forelse ($offer as $oferta)
              <p>Oferta:    {{$oferta->nombre}}</p>
            @empty
              <p>Oferta:    No hay ofertas para mostrar</p>
            @endforelse

          </div>
          <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">

              <button type="submit">Enviar</button>

              <button type="submit" name="submit" value="Editar producto" >
              <a href="/productos/editar/{{$product->id}}">Editar Producto</a></button>


            </div>

          </div>
          <a href="/productos">Ver más productos</a>

        </div>

      </div>

    </div>

  </div>

</div>

@endsection
