@extends('plantilla')

@section('titulo', 'Mi Carrito')

@section('principal')
  {{-- @dd($product) --}}
  <h1>Carrito</h1>
    <section>
      <article>
        <ul>
          @forelse ($cart as $item)
            <img style="width:170px; heigh:230px;" src="/storage/productos/{{$item->imagen}}" alt="">
              <li>Nombre: {{$item->nombre}} |
              Cantidad: {{$item->cantidad}} |
              Precio: {{$item->precio}} |
              sub-total: {{$item->precio * $item->cantidad}}
              <a href="/delete/{{$item->id}}">Eliminar</a></li>
          @empty
            <p>Su carrito está vacío.</p>
          @endforelse
        </ul>
      </article>
      <p>Total: {{$total}}</p>
      @if (isset($cart))
        <form class="" action="/cartclose" method="post">
          @csrf
          <button type="submit"> Comprar </button>
        </form>
      @endif
    </section>
@endsection
