@extends('plantilla')

@section('titulo', 'Agregar dirección')

@section('principal')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="Agregar_direccion card">
        <div class="titulo-cuenta card-header">Agregar Dirección</div>
        <div class="card-body">
          <form class="direccion" action="/direcciones/agregar" method="post">
            @csrf
            <div class="datos">
              <label for="calle" >Calle</label>
              <input type="text" name="calle" value="" class="col-md-4"><br>

              <label for="altura">Altura</label>
              <input type="text" name="altura" value="" class="col-md-4"><br>

              <label for="piso">Piso</label>
              <input type="text" name="piso" value="" class="col-md-4"><br>

              <label for="depto">Departamento</label>
              <input type="text" name="depto" value="" class="col-md-4"><br>

              <label for="codigo_postal">Codigo Postal</label>
              <input type="text" name="codigo_postal" value="" class="col-md-4"><br>

              <label for="ciudad">Ciudad</label>
              <input type="text" name="ciudad" value="" class="col-md-4"><br>
            
            </div>

          </form>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="button" name="button" ><a href="/direcciones/agregar">Agregar dirección</a></button>

                <a href="/cuenta">Ir a Mi Cuenta</a>
              </div>

            </div>





          </div>
        </div>
      </div>

    </div>

  </div>

</div>
@endsection
