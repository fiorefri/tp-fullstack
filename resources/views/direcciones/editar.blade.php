@extends('plantilla')

@section('titulo', 'Editar Dirección')

@section('principal')
  <form class="direccion" action="/direcciones/editar/{{$address->id}}" method="post">
    @csrf
    <label for="calle">Calle</label>
    <input type="text" name="calle" value="{{$address->calle}}"><br>

    <label for="altura">Altura</label>
    <input type="text" name="altura" value="{{$address->altura}}"><br>

    <label for="piso">Piso</label>
    <input type="text" name="piso" value="{{$address->piso}}"><br>

    <label for="depto">Departamento</label>
    <input type="text" name="depto" value="{{$address->depto}}"><br>

    <label for="codigo_postal">Codigo Postal</label>
    <input type="text" name="codigo_postal" value="{{$address->codigo_postal}}"><br>

    <label for="ciudad">Ciudad</label>
    <input type="text" name="ciudad" value="{{$address->ciudad}}"><br>

    <input type="submit" name="submit" value="Editar">
  </form>
  <a href="/direcciones/eliminar/{{$address->id}}">Eliminar Dirección</a>
@endsection
