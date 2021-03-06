@extends('plantilla')

@section('titulo', 'Historial de compras')

@section('class-body', 'fondo-cuenta')

@section('principal')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="historial card">
        <div class="titulo-historial card-header"><b>Datos de compras</b></div>
        <div class="">

          @forelse ($carts as $key => $cart)
            @foreach ($cart as $item)
              <img src="/storage/productos/{{$item->imagen}}" alt="">
              <p>Nombre:{{$item->nombre}}</p>
              <p>Cantidad: {{$item->cantidad}}</p>
              @php
              $total = 0;
              $total = $total + ($item->cantidad * $item->precio);
              @endphp
              <p>Precio total: {{$total}}</p>
              <p>Nº de compra: {{$item->num_carrito}}</p>
            @endforeach
          @empty
            <p>No hay productos para mostrar.</p>
          @endforelse
          <a href="/direcciones">Ir a Mis Direcciones</a>
          <a href="/cuenta">Ir a Mi Cuenta</a>
        </div>

      </div>

    </div>

  </div>

</div>




@endsection
