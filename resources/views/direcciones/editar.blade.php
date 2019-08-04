@extends('plantilla')

@section('titulo', 'Editar Dirección')

@section('principal')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="editar_cuenta card">
        <div class="titulo-editar_cuenta card-header">Editar Dirección</div>
        <div class="card-body">

          <form class="direccion" action="/direcciones/editar/{{$address->id}}" method="post">
            @csrf


            <div class="datos">
              <label for="calle" >Calle</label>
              <input type="text" name="calle" value="{{$address->calle}}" class="col-md-4"><br>

              <label for="altura">Altura</label>
              <input type="text" name="altura" value="{{$address->altura}}" class="col-md-4"><br>

              <label for="piso">Piso</label>
              <input type="text" name="piso" value="{{$address->piso}}" class="col-md-4"><br>

              <label for="depto">Departamento</label>
              <input type="text" name="depto" value="{{$address->depto}}" class="col-md-4"><br>

              <label for="codigo_postal">Codigo Postal</label>
              <input type="text" name="codigo_postal" value="{{$address->codigo_postal}}" class="col-md-4"><br>

              <label for="ciudad">Ciudad</label>
              <input type="text" name="ciudad" value="{{$address->ciudad}}" class="col-md-4"><br>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
              <button type="submit" name="submit" value="Editar">Editar Usuario</a></button>
              <!-- <input type="submit" name="submit" value="Editar"> -->
              <a href="/direcciones/eliminar/{{$address->id}}">Eliminar Dirección</a>
              </div>

            </div>
          </form>
        </div>
      </div>

    </div>

  </div>

</div>
@endsection
