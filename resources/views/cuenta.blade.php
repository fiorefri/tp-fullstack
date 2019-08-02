@extends('plantilla')

@section('titulo', 'Mi cuenta')

{{-- @section('class-body') --}}

@section('principal')
  <h3>Mi cuenta</h3>
  <div class="datos">
    <p>Email: {{$user->email}}</p>
    <p>Nombre: {{$user->name}}</p>
  </div>
  <a href="/direcciones">Ir a Mis Direcciones</a>
@endsection
