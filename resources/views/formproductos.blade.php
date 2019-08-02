@extends('plantilla')

@section('titulo', 'Productos')

@section('class-body', 'container')

@section('principal')
@csrf
<form class="" action="/productosAgregar" method="post" enctype="multipart/form-data">

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
  </p>
  <p>
    <input type="text" name="id_offer" value="" placeholder="productos en oferta">
  </p>
  <p>
    <input type="file" name="imagen" value="">
  </p>
  <p>
    <input type="text" name="remember_token" value="" placeholder="">
  </p>  <p>
      <input type="text" name="created_at" value="" placeholder="agregar producto">
    </p>
    <p>
      <input type="text" name="updated_at" value="" placeholder="modificar producto">
    </p>
    <p>
      <input type="text" name="deleted_at" value="" placeholder="eliminar producto">
    </p>
  <button type="submit">Enviar</button>
  {{-- <button type="reset">Limpiar</button> --}}
</form>



</form>
@endsection
