@extends('plantilla')

@section('titulo', "Register")

@section('principal')
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
@endsection
