@extends('plantilla')

@section('titulo', "Login")

@section('principal')
  <h1>Iniciar Sesión</h1>
  <form class="" action="login.php" method="post">

    <label for="email">E-mail</label>
    <?php if(isset($errores["email"])): ?>
      <input type="text" name="email" id="email" value="" placeholder="E-mail">
    <?php else: ?>
      <input type="text" name="email" id="nombre" value="<?= $emailOk ?>" placeholder="">
    <?php endif; ?>

    <label for="pass">Contraseña</label>
    <input type="password" name="pass" id="pass" value="" placeholder="Contraseña">

    <section class="recordar-login">
      <input type="checkbox" name="recordarme" value="ok" id="recordarme">
      <label for="recordarme">Recordarme</label>
    </section>

    <?php if ($errores == ["nombre" => "", "email" => ""]): ?>
      <ul class="errores alert alert-danger d-none">
      </ul>
    <?php else: ?>
      <ul class="errores alert alert-danger">
        <?php foreach ($errores as $error): ?>
          <li><?= $error ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

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
@endsection
