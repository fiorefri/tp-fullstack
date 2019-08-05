@extends('plantilla')

@section('titulo', 'Historial de compras')

@section('principal')
  <div class="">
    <p>Datos de compra:</p>
    @forelse ($carts as $key => $cart)
      @foreach ($cart as $item)
        <img src="/storage/productos/{{$item->imagen}}" alt="">
        <p>Nombre:{{$item->nombre}}</p>
        <p>Cantidad: {{$item->cantidad}}</p>
        <p>Precio total: {{$item->total}}</p>
      @endforeach
    @empty
      <p>No hay productos para mostrar.</p>
    @endforelse
    <a href="/direcciones">Ir a Mis Direcciones</a>
    <a href="/cuenta">Ir a Mi Cuenta</a>
  </div>
@endsection
