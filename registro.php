<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin|Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>REGISTRO</title>
  </head>
  <body>
    <div class="header-login-registro">
      <?php include_once "header.php" ?>
    </div>
    <div class="formulario">
      <h1>Crear una cuenta</h1>
      <form class="" action="index.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="" placeholder="Nombre">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" value="" placeholder="Apellido">
        <label for="email">E-mail</label>
        <input type="text" name="email" value="" placeholder="E-mail">
        <label for="contraseña">Contraseña</label>
        <input type="pass" name="contraseña" value="" placeholder="Contraseña">
        <section class="ingreso-tyc">
          <input type="checkbox" name="tyc" value="" required>
          <label for="tyc">Acepto los terminos y condiciones</label><br>
          <button type="submit">Crear cuenta</button>
        </section>
      </form>
      <hr class="divisor">
      <section class="iniciar-sesion">
        <h2>¿Ya tenes cuenta?</h2>
        <a href="login.php" class="ingresa">Ingresa</a>
      </section>
    </div>
  </body>
</html>
