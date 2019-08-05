@extends('plantilla')

@section('titulo', 'Editar Producto')

@section('class-body', 'container')

@section('principal')
<h2>Editar producto</h2>
<form class="" action="/productos/editar/{{$product->id}}" method="post" enctype="multipart/form-data">
  @csrf
  <p>
    <input type="text" name="nombre" value="{{$product->nombre}}" placeholder="nombre producto">
  </p>
  <p>
    <input type="text" name="descripcion" value="{{$product->descripcion}}" placeholder="descripción producto">
  </p>
  <p>
    <input type="number_format" name="precio" value="{{$product->precio}}" placeholder="precio producto">
  </p>
  <p>
    <input type="number" name="stock" value="{{$product->stock}}" placeholder="stock">
  </p
  <p>
    <select class="" name="category_id">
      @foreach($category as $categoria)
      <option value="{{$categoria->id}}" selected="{{$product->category_id}}">{{$categoria->nombre}}</option>
      @endforeach

    </select>
  </p>
  <p>
    @foreach ($offer as $oferta)
      <input type="text" name="offer_id" value="{{$oferta->nombre}}" placeholder="productos en oferta">
    @endforeach
  </p>
  <p>Imagen actual</p>
  <img style="width:220px; heigh:280px;"
  src="/storage/productos/{{$product->imagen}}" alt="">
  <p>Cambiar Imagen:
    <input type="file" name="imagen" value="">
  </p>

  <button type="submit">Enviar</button>
  {{-- <button type="reset">Limpiar</button> --}}
</form>
<a href="/productos/eliminar/{{$product->id}}">Eliminar Producto</a>
<a href="/productos/{{$product->id}}">Ir atrás</a>

@endsection
