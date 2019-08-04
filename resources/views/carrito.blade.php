@extends('plantilla')

@section('titulo', 'Mi Carrito')

@section('principal')
  {{-- @dd($cart) --}}
  <h1>Carrito</h1>
    <section>
      <article>
        <ul>
          @forelse ($cart as $item)
              <li>Nombre: {{$item->nombre}} |
              Cantidad: {{$item->cantidad_total}} |
              Precio: {{$item->precio}} |
              sub-total: {{$item->precio * $item->cantidad_total}}
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
      {{-- <p>Total: {{$total}}</p> --}}
      {{-- <p>Total2: {{$total2}}</p> --}}
    </section>
@endsection
