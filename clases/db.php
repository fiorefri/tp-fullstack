<?php

/**
 * Maneja las conexiones a la base de datos
 */
abstract class Db
{
  public abstract function guardarUsuario(Usuario $usuario); //No ovlidar parámetros. También se heredan
  public abstract function buscarUsuarioPorMail($email);
  public abstract function existeUsuario($email);
  public abstract function traerUsuarioLogueado();

}
