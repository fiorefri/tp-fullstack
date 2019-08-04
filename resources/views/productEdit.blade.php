@extends('plantilla')

@section('titulo', 'Productos')

@section('class-body', 'container')

@section('principal')
<h2>Editar producto</h2>
<form class="" action="/product/edit/{{$product->id}}" method="post" enctype="multipart/form-data">
  @csrf
  <p>
    <input type="text" name="nombre" value="{{$product->name}}" placeholder="nombre producto">
  </p>
  <p>
    <input type="text" name="descripcion" value="{{$product->description}}" placeholder="descripción producto">
  </p>
  <p>
    <input type="number_format" name="precio" value="{{$product->price}}" placeholder="precio producto">
  </p>
  <p>
    <input type="number" name="stock" value="" placeholder="stock">
  </p>
  <p>
    <select class="" name="category_id">
      @foreach($categorias as $categoria)
      <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
      @endforeach

    </select>
  </p>
  <p>
    <input type="text" name="offer_id" value="" placeholder="productos en oferta">
  </p>
  <p>
    <input type="file" name="imagen" value="">
  </p>
  <p>Imagen actual</p>
  <img src="/storage/products/{{$product->featured_img}}" alt="">
  <button type="submit">Enviar</button>
  {{-- <button type="reset">Limpiar</button> --}}
</form>

@endsection
