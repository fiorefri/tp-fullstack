@extends('plantilla')

@section('titulo', 'Productos')

@section('class-body', 'container')

@section('principal')

<form class="" action="/productosAgregar" method="post" enctype="multipart/form-data">
  @csrf
  <p>
    <input type="text" name="nombre" value="" placeholder="nombre producto">
  </p>
  <p>
    <input type="text" name="descripcion" value="" placeholder="descripción producto">
  </p>
  <p>
    <input type="number_format" name="precio" value="" placeholder="precio producto">
  </p>
  <p>
    <input type="number" name="stock" value="" placeholder="stock">
  </p>
  <p>
    <input type="text" name="id_category" value="" placeholder="categoria">
    select
    foreach que recorra categories y por cada vuelta un option con los datos de cada categoria.
  </p>
  <p>
    <input type="text" name="id_offer" value="" placeholder="productos en oferta">
  </p>
  <p>
    <input type="file" name="imagen" value="">
  </p>

  <button type="submit">Enviar</button>
  {{-- <button type="reset">Limpiar</button> --}}
</form>



</form>
@endsection
