@extends('plantilla')

@section('titulo', 'Productos')

@section('class-body', 'container')

@section('principal')
<div class="card">
  <div class= "card-header" align="center"><h4><b>Nuestros Productos<b></h4></div>
    <div class="card-body justify-content-center">
      <div class="row">
        @forelse($products as $product)
        <div class="col-md-4 text-md-center">
          <br><img style="width:170px; heigh:230px;"src="/storage/productos/{{$product->imagen}}" alt="">
          <br><h5>{{$product->nombre}}</h5>
          <h6>Precio:{{number_format($product->precio,2)}}</h6>
          <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-2">
              <a type="button" class="btn_detalle" href="/productos/{{$product->id}}">{{__('detalle')}}</a>
              
              <form class="" action="/carrito/agregar" method="post">
                @csrf
                <br>
                <input type="number" name="cantidad" value="" placeholder="Cantidad">
                {{$errors->first('cantidad')}}
                <input type="hidden" name="id" value="{{$product->id}}">
                <p></p>
                <button type="submit">Agregar al carrito</button>
              </form>

            </div>

          </div>


        </div>
        @empty
         <p>No hay productos disponibles.</p>
        @endforelse
      </div>
    </div>
  </div>
  @endsection
