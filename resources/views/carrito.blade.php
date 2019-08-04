@extends('plantilla')

@section('titulo', 'Mi Carrito')

@section('principal')
  {{-- @dd($product) --}}
  <h1>Carrito</h1>
    <section>
      <article>
        <ul>
          @forelse ($cart as $item)
            @foreach ($product as $producto)
              <img style="width:170px; heigh:230px;" src="/storage/productos/{{$producto->imagen}}" alt="">
            @endforeach
              <li>Nombre: {{$item->nombre}} |
              Cantidad: {{$item->cantidad}} |
              Precio: {{$item->precio}} |
              sub-total: {{$item->precio * $item->cantidad}}
              <a href="/delete/{{$item->id}}">Eliminar</a></li>
              <form class="" action="/cartclose" method="post">
                @csrf
                <button type="submit"> Comprar </button>
              </form>
          @empty
            <p>Su carrito está vacío.</p>
          @endforelse
        </ul>
      </article>
      <p>Total: {{$total}}</p>
      {{-- <p>Total2: {{$total2}}</p> --}}
    </section>
@endsection
