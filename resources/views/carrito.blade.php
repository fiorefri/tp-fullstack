@extends('plantilla')

@section('titulo', 'Mi Carrito')

@section('principal')
<div class="card">
  <div class="card-header" aling="center"><h1><b>Carrito de compras</b></h1></div>
    <div class="card-body">
      @if(count($cart))
      <div class=""table-responsive"">
        <table class="table table-stripped table-hover table-boardered">
          <thead>
            <tr>
              <th>Imagen</th>
              <th>Producto</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>subtotal</th>
              <th>Quitar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($cart as $item)
            <tr>
              <td>img style="width:50px; height:50px;" src="{{asset($item->img)}}"</td>
              <td>{{$item->nombre}}</td>
              <td>{{number_format($item->precio,2)}}</td>
              <td>
                <input type="number" min="1" max="100" value="{{$item->quantity}}">
                <a href="#" class="btn btn-warning btn-update-item"
                data-href="{{route('cart-update', $item->categoria)}}
                data-id="{{$item->id}}><i class="fa fa-refresh"></i></a>
              </td>
              <td>{{number_format($item->precio*$item->quantity,2)}}</td>
              <td><a href="{{route('cart-delete',$item->categorias)}}" class="btn btn-danger"><i class="fa fa-remove">x
              </i></a>
              </td>
            </tr>
            @endforeach
          </tbody>

        </table>
        <div class="card-footer"><h3>Total a pagar{{number_format($total,2)}}</h3></div>
      @else
      <h4 style="text-align:center; color:green; font-size:20px;">No hay productos en el carrito</h4>
      @endif
      </div>
      <div class="card-footer">
        <a class="btn btn-primary" href="{{url('/productos')}}">{{__('Regresar')}}</a>
        <a class="btn btn-primary" href="{{route('order-detail')}}">{{__('comprar')}}</a>

      </div>

    </div>

</div>
@endsection
