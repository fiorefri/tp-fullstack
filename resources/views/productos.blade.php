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
          <br><img style="width:170px; heigh:230px;"src="{{$product->img}}" alt="">
          <br><h4>{{$product->nombre}}</h4>
          <h4>Precio:{{number_format($product->precio,2)}}</h4>
          <a type="button" class="btn_detalle" href="{{route('product-detail', $product->categoria)}}">{{__('detalle')}}</a>
          <a class="btn_agregar" href="{{route('cart-add',$product-categoria)}}">{{__('agregar')}}</a>

        </div>
        @empty
         <p>No hay productos disponibles.</p>
        @endforelse
      </div>
    </div>
  </div>
  @endsection
