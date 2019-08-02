@extends('plantilla')

@section('titulo', 'Agregar dirección')

@section('principal')
  <form class="direccion" action="/direcciones/agregar" method="post">
    @csrf
    <label for="calle">Calle</label>
    <input type="text" name="calle" value=""><br>

    <label for="altura">Altura</label>
    <input type="text" name="altura" value=""><br>

    <label for="piso">Piso</label>
    <input type="text" name="piso" value=""><br>

    <label for="depto">Departamento</label>
    <input type="text" name="depto" value=""><br>

    <label for="codigo_postal">Codigo Postal</label>
    <input type="text" name="codigo_postal" value=""><br>

    <label for="ciudad">Ciudad</label>
    <input type="text" name="ciudad" value=""><br>

    <input type="submit" name="submit" value="Agregar Dirección">
  </form>
@endsection
