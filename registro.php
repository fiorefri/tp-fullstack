<?php
 // include "funciones.php";
 include "init.php";//Creamos el archivo init.php para evitar conflictos en el llamado de las clases e instancias que necesitamos llamar en cada página.

 if (isset($_COOKIE["email"])){
   $auth->loguearUsuario($_COOKIE["email"]);
 }

 if($auth->usuarioLogueado()){
   header("Location:index.php");
   exit;
 }
$errores=[
  "nombre" => "",
  "email" => "",
  "pass" => "",
  "imagen" => ""
];

if($_POST){
  $errores = Validador::validarRegistro($_POST);
  $nombreOk = trim($_POST["nombre"]);
  $emailOk = trim ($_POST["email"]);

  if(empty($errores)){
    $usuario = new Usuario($_POST);

    if(!$dbAll->existeUsuario($_POST["email"])){
      $dbAll->guardarUsuario($usuario);

      $ext = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
      $imagenUsuario = dirname(__FILE__) . "/imagen-usuario/". $_POST["email"] . "." . $ext;
      move_uploaded_file($_FILES["imagen"]["tmp_name"], $imagenUsuario);

      //loguea al usuario cuando se regisgtra
      if(empty($errores)){
       //logueamos al user => necesitamos session_start al incio de todos nuestros archivos. Ojo con los include/ require.
        $auth->loguearUsuario($_POST["email"]);

       //redirigimos a home
        header("Location:index.php");
        exit;
      }

    }
   }
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
    <title>REGISTRO</title>
  </head>
  <body>
    <?php include_once "header.php" ?>
    <div class="formulario">
      <h1>Crear una cuenta</h1>
      <form class="" action="" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre y Apellido</label>
        <?php if(isset($errores["nombre"])): ?>
          <input type="text" name="nombre" id="nombre" value="" placeholder="Nombre">
        <?php else: ?>
            <input type="text" name="nombre" id="nombre" value="<?= $nombreOk ?>" placeholder="">
        <?php endif; ?>

        <label for="email">E-mail</label>
        <?php if(isset($errores["email"])): ?>
          <input type="text" name="email" id="email" value="" placeholder="E-mail">
        <?php else: ?>
            <input type="text" name="email" id="nombre" value="<?= $emailOk ?>" placeholder="">
        <?php endif; ?>

        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass" value="" placeholder="Contraseña">

        <label for="pass2">Confirmar contraseña</label>
        <input type="password" name="pass2" id="pass2" value="" placeholder="Confirmar contraseña">

        <label for="imagen">Imagen de perfil</label>
        <input type="file" id="imagen" class="form-control" name="imagen">

        <section class="ingreso-tyc">
          <input type="checkbox" name="tyc" value="" id="tyc">
          <label for="tyc">Acepto los terminos y condiciones</label><br>
        </section>

        <?php if ($errores == ["nombre" => "", "email" => "", "pass" => "", "imagen" => ""]): ?>
          <ul class="errores alert alert-danger d-none">
          </ul>
        <?php else: ?>
          <ul class="errores alert alert-danger">
            <?php foreach ($errores as $error): ?>
              <li><?= $error ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>

        <section class="ingreso-registro">
          <button type="submit">Crear cuenta</button>
        </section>
      </form>

      <hr class="divisor">
      <section class="iniciar-sesion">
        <h2>¿Ya tenes cuenta?</h2>
        <a href="login.php" class="ingresa">Ingresa</a>
      </section>
    </div>
    <?php include_once "footer.php" ?>

    <!-- Js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
