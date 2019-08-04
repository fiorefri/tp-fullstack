@extends('plantilla')

@section('titulo', '{{$product->nombre}}')

@section('principal')
  <img src="/storage/productos/{{$product->imagen}}" alt="">
  <p>Nombre:      {{$product->nombre}}</p>
  <p>Descripción: {{$product->descripcion}}</p>
  <p>Precio:      {{$product->precio}}</p>
  <p>Stock:       {{$product->stock}}</p>
  <p>Categoria:   {{$category->nombre}}</p>
  <p>Oferta:      {{$offer->nombre}}</p>
  <a href="productos/{{$product->id}}/editar"></a>
@endsection
