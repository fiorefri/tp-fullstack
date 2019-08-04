@extends('plantilla')

@section('titulo', 'Descripción Producto')

@section('principal')
  <img src="/storage/productos/{{$product->imagen}}" alt="">
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
  <a href="/productos/editar/{{$product->id}}">Editar Producto</a>
@endsection
