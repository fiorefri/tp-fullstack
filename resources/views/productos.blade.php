@extends('plantilla')

@section('titulo', 'Productos')

@section('class-body', 'container')

@section('principal')
<div class="card">
  <div class= "card-header" align="center"><h1><b>Nuestros Productos<b></h1></div>
    <div class="card-body justify-content-center">
      <div class="row">
        @forelse($products as $product)
        <div class="col-md-4 text-md-center">
          <br><img style="width:170px; heigh:230px;"src="/storage/productos/{{$product->imagen}}" alt="">
          <br><h4>{{$product->nombre}}</h4>
          <h4>Precio:{{number_format($product->precio,2)}}</h4>
          <a type="button" class="btn_detalle" href="{{route('product-detail', $product->id)}}">{{__('detalle')}}</a>
          <form class="" action="{{route('cart-add')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">
            <input type="hidden" name="quantity" value="1">
            <button type="submit">Agregar al Carrito</button>
          </form>

        </div>
        @empty
         <p>No hay productos disponibles.</p>
        @endforelse
      </div>
    </div>
  </div>
  @endsection
