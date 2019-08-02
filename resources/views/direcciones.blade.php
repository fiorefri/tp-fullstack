@extends('plantilla')

@section('titulo', 'Mis Direcciones')

@section('principal')
  @dd($address)
  @if ($address == null)
    <p>No hay direcciones para mostrar</p>
  @else
    {{-- @dd($address) --}}
    @foreach ($address as $direccion)
      <p>Calle: {{$direccion->calle}}</p>
      <p>Altura: {{$direccion->altura}}</p>
      <p>Piso: {{$direccion->piso}}</p>
      <p>Departamento: {{$direccion->depto}}</p>
      <p>Codigo Postal: {{$direccion->codigo_postal}}</p>
      <p>Ciudad: {{$direccion->ciudad}}</p>
    @endforeach
  @endif
  <a href="/direcciones/agregar">Agregar direcciones</a>
  <a href="/cuenta">Ir a Mi Cuenta</a>
@endsection
