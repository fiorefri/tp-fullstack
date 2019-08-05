@extends('plantilla')

@section('class-body', 'fondo-cuenta')

@section('titulo', 'Mi cuenta')

@section('principal')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="cuenta card">
        <div class="titulo-cuenta card-header">Mi cuenta</div>
        <div class="card-body">
          <div class="datos">
            <p>Email:   {{$user->email}}</p>
            <p>Nombre:  {{$user->name}}</p>
          </div>
          <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
              <button type="button" name="button" ><a href="/cuenta/editar/{{$user->id}}">Editar Cuenta</a></button>
              <a href="/direcciones">Ir a Mis Direcciones</a>
              <a href="/historial">Ir a Mi Historial</a>
            </div>

          </div>

        </div>
      </div>

    </div>

  </div>

</div>





@endsection
