@extends('plantilla')

@section('titulo', 'Mis Direcciones')

@section('principal')
  @forelse ($address as $direccion)
    <p>Calle:         {{$direccion->calle}}</p>
    <p>Altura:        {{$direccion->altura}}</p>
    <p>Piso:          {{$direccion->piso}}</p>
    <p>Departamento:  {{$direccion->depto}}</p>
    <p>Codigo Postal: {{$direccion->codigo_postal}}</p>
    <p>Ciudad:        {{$direccion->ciudad}}</p>
    <a href="/direcciones/editar/{{$direccion->id}}">Editar Dirección</a>
  @empty
    <p>No hay direcciones para mostrar.</p>
  @endforelse
  <a href="/direcciones/agregar">Agregar direcciones</a>
  <a href="/cuenta">Ir a Mi Cuenta</a>
@endsection
