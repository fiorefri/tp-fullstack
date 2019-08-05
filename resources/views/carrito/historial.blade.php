@extends('plantilla')

@section('titulo', 'Historial de compras')

@section('principal')
  <div class="">
    <p>Datos de compra:</p>
    @forelse ($carts as $cart)
      <img src="/storage/productos/{{$cart->imagen}}" alt="">
      <p>Nombre:{{$cart->nombre}}</p>
      <p>Cantidad: {{$cart->cantidad}}</p>
      <p>Precio total: {{$cart->total}}</p>
    @empty
      <p>No hay productos para mostrar.</p>
    @endforelse
  </div>
@endsection
