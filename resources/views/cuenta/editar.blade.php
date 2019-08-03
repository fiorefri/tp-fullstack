@extends('plantilla')

@section('titulo', 'Editar Usuario')

@section('principal')
  <form class="cuenta" action="/cuenta/editar/{{$user->id}}" method="post">
    @csrf
    <label for="E-mail">Email</label>
    <p>{{$user->email}}</p>

    <label for="name">Nombre</label>
    <input type="text" name="name" value="{{$user->name}}"><br>

    <label for="password">Contraseña</label>
    <input type="password" name="password" value=""><br>

    <input type="submit" name="submit" value="Editar Usuario">
  </form>
  <a href="/cuenta/eliminar/{{$user->id}}">Eliminar Cuenta</a>
@endsection
