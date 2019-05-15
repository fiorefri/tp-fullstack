<?php
require 'funciones.php';

$usuario = traerUsuarioLogueado();
$usuarioLogueado = usuarioLogueado();
$usuarios = listaUsuarios();
var_dump($_SESSION);

?>
