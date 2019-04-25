<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin|Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>LOGIN</title>
  </head>
  <body>
    <?php include_once "header.php" ?>
    <div class="formulario">
      <h1>Iniciar Sesión</h1>
      <form class="" action="index.php" method="post">
        <label for="email">E-mail</label>
        <input type="text" name="email" value="" placeholder="E-mail">
        <label for="contraseña">Contraseña</label>
        <input type="pass" name="contraseña" value="" placeholder="Contraseña">
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
  </body>
</html>
