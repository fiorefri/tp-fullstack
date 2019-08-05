@extends('plantilla')

@section('titulo', 'Editar Usuario')

@section('class-body', 'fondo-cuenta')

@section('principal')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="editar_cuenta card">
        <div class="titulo-editar_cuenta card-header">Editar Cuenta</div>
        <div class="card-body">
          <form class="cuenta" action="/cuenta/editar/{{$user->id}}" method="post">
            @csrf
          <div class="datos">
            <p>Email:   {{$user->email}}</p>
            <p>Nombre:  <input type="text" name="name" value="{{$user->name}}"><br></p>
            <p for="password">Contraseña: <input type="password" name="password" value=""><br></p>



          </div>
          <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
              <button type="submit" name="submit" value="Editar Usuario">Editar Usuario</a></button>
              <a href="/cuenta/eliminar/{{$user->id}}">Eliminar Cuenta</a>
            </div>
          </form>
          </div>
          <a href="/cuenta">Ir Atrás</a>

        </div>
      </div>

    </div>

  </div>

</div>
@endsection
