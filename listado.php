<?php
require 'funciones.php';

$usuario = traerUsuarioLogueado();
$usuarioLogueado = usuarioLogueado();
$usuarios = listaUsuarios();
if (null !== $usuario["email"]) {
  $img = glob("avatar-usuarios/" . $usuario['email'] . '*')[0]; // busca un patron dentro de carpetas o directorios
  //var_dump($img);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin|Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Ver/ Editar usuario</title>
  </head>
  <body>
    <?php include_once "header.php" ?>
    <div class="lista_De_Usuarios">
      <h3>Ver/Editar Usuario</h3>
      <ul>
        <li><?= $usuario["nombre"];?></li>
        <li><?= $usuario["email"];?></li>
      </ul>
    </div>

  </body>
</html>
