@extends('plantilla')

@section('class-body', 'fondo-cuenta')

@section('titulo', 'Mis Direcciones')

@section('principal')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="direcciones card">
        <div class="titulo-direcciones card-header">Mis direcciones</div>
        <div class="card-body">
          <div class="datos">
            @forelse ($address as $direccion)
            <p>Calle:   {{$direccion->calle}}</p>
            <p>Altura:  {{$direccion->altura}}</p>
            <p>Piso:   {{$direccion->piso}}</p>
            <p>Departamento:  {{$direccion->depto}}</p>
            <p>Código Postal:  {{$direccion->codigo_postal}}</p>
            <p>Ciudad: {{$direccion->ciudad}}</p>
            <div class="col-md-8 offset-md-4">
              <button type="button" name="button" ><a href="/direcciones/editar/{{$direccion->id}}">
                Editar Dirección</a></button>
            </div>
            <div class="col-md-8 offset-md-3">

            @empty
              <p>No hay direcciones para mostrar.</p>
            @endforelse
              <br>
              <a href="/direcciones/agregar">Agregar dirección</a><a href=""> /</a>
              <a href="/cuenta">Ir a Mi Cuenta</a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>

@endsection
