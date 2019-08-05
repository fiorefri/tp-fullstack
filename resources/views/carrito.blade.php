@extends('plantilla')

@section('titulo', 'Mi Carrito')

@section('principal')
  {{-- @dd($product) --}}
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="carrito card">
        <div class="titulo-carrito card-header">Carrito</div>
        <section>
          <article>
            <ul>
              @forelse ($cart as $item)
                <img style="width:170px; heigh:230px;" src="/storage/productos/{{$item->imagen}}" alt="">
                  <li>Nombre: {{$item->nombre}} |
                  Cantidad: {{$item->cantidad}} |
                  Precio: {{$item->precio}} |
                  Sub-total: {{$item->precio * $item->cantidad}}
                  <form class="" action="/carrito/eliminar/{{$item->id}}" method="post">
                    @csrf
                    <div class="row justify-content-center">
                      <div class="div class="col-md-8 offset-md-4"">
                        <button type="submit" name="submit"> Eliminar </button>
                      </div>
                    </div>
                  </form>
              @empty
                <p>Su carrito está vacío.</p>
              @endforelse
            </ul>
          </article>
          <p>Total: {{$total}}</p>
          @if (isset($cart))
            <form class="" action="/carrito/cerrado" method="post">
              @csrf
              <div class="row justify-content-center">
                <div class="div class="col-md-8 offset-md-4"">
                  <button type="submit" name="submit"> Comprar </button>
                </div>
              </div>
            </form>
          @endif
        </section>


      </div>

    </div>

  </div>

</div>


@endsection
