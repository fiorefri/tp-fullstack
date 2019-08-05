@extends('plantilla')

@section('titulo', 'Productos')

@section('class-body', 'container')

@section('principal')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="formulario_agregar_productos card">
        <div class="titulo-formulario card-header">Agregar Producto</div>
        <div class="card-body">
          <form class="" action="/productos/agregar" method="post" enctype="multipart/form-data">
            @csrf
            <div class="datos">
              <p><input type="text" name="nombre" value="" placeholder="nombre producto"></p>

              <p><input type="text" name="descripcion" value="" placeholder="descripción producto"></p>

              <p>
                <input type="number_format" name="precio" value="" placeholder="precio producto">
              </p>

              <p>
                <input type="number" name="stock" value="" placeholder="stock">
              </p>

              <p>
                <select class="" name="category_id">
                  @foreach($categorias as $categoria)
                  <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                  @endforeach

                </select>
              </p>

              <p>
                <input type="text" name="offer_id" value="" placeholder="productos en oferta">
              </p>

              <p>
                <input type="file" name="imagen" value="">
              </p>

            </div>
            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit">Enviar</button>
                {{-- <button type="reset">Limpiar</button> --}}

              </div>

            </div>
          </form>
        </div>
        <a href="/productos">Ver más productos</a>
      </div>

    </div>

  </div>

</div>
@endsection
