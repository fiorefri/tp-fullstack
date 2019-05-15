<?php
 require_once "funciones.php";

 if(usuarioLogueado()){
   header("Location:index.php");
   exit;
 }
   $errores = [];


 //Si viene por POST
 if($_POST){
   //Validar Login
   $errores = validarLogin($_POST);
//    var_dump($errores);
//    exit;

   //Si no hay errores
    if(empty($errores)){
     //logueamos al user => necesitamos session_start al incio de todos nuestros archivos. Ojo con los include/ require.
      loguearUsuario($_POST["email"]);
  
     //redirigimos a home
      header("Location:index.php");
      exit;
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
    <title>LOGIN</title>
  </head>
  <body>
    <?php include_once "header.php" ?>
    <div class="formulario">
      <h1>Iniciar Sesión</h1>
      <form class="" action="login.php" method="post">
        <label for="email">E-mail</label>
        <input type="pass" name="email" value="" placeholder="E-mail">
        <label for="contraseña">Contraseña</label>
        <input type="password" name="pass" value="" placeholder="Contraseña">
        <section class="ingreso-forgot">
          <button type="submit">Ingresar</button>
          <a href="#" class="forgot">¿Olvidaste tu contraseña?</a>
        </section>
      </form>
      <hr class="divisor">
      <section class="registro">
        <h2>¿No tenes cuenta?</h2>
        <a href="registro.php" class="registrate">Registrate</a>
      </section>
    </div>
    <?php include_once "footer.php" ?>

    <!-- Js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
