<header>
  <div class="container-full">
		<div class="login-container ">
			<nav class="inicio-registro d-none d-md-inline-flex">
	      <ul>
          <?php if ($auth->usuarioLogueado()): ?>
            <!-- <img class="foto" src= "<?= $img ?>"  alt=""> -->
            <span><?= "Hola, " . $usuario->getNombre() ?></span>
            <li><a href="listado.php">Mi Cuenta</a></li>
          <?php else: ?>
            <ul>
              <li><a href="#"><i class="fas fa-user"></i></a></li>

            <!-- <li><a  class="btn" href="registro.php">Registrarse</a></li> -->
        <?php endif; ?>

          <?php if ($auth->usuarioLogueado()): ?>
            <li><a class="btn" href="logout.php">Cerrar Sesión</a></li>
          <?php else: ?>
    	       <li><a class="btn" href="login.php">Iniciar Sesión</a></li>
          <?php endif; ?>
            </ul>

	      </ul>
	     </nav>
	     <ul class="redes d-none d-md-inline-flex">
	     	<!-- <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter-square"></i></a></li> -->
					<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
	     </ul>
		</div>
  	<div class="logo-marca">
    	<a href="index.php">
      	<img src="img/nature_logo.png" alt="logotipo" class="logo">
     	</a>
   	</div>
   	<div class="menu">
      <input type="checkbox" id="btn-menu">
      <label for="btn-menu"><i class="fas fa-bars fa-2x"></i></label>
      <nav class="main-navigation">
         <ul class="navigation">
           <!-- <li><a href="index.php">Home</a></li> -->
           <li><a href="quienesSomos.php">Quienes somos</a></li>
           <li class="parent"> <a href="#">Productos</a>
            <ul>
              <li><a href="crema_rostro.php">Cremas Rostro</a></li>
              <li><a href="crema_cuerpo.php">Cremas Cuerpo</a></li>
            </ul>
           </li>
           <li><a href="preg_frecuentes.php">Preguntas frecuentes</a></li>
           <li><a href="#">Contacto</a></li>
           <?php if ($auth->usuarioLogueado()): ?>
             <div class="botones-inicio-registro-registrado d-block d-md-none">
               <li><img class="foto" src= "<?= $img ?>"  alt="">
               <span><?= "Hola, " . $usuario->getNombre() ?></span>
               <a href="listado.php">Ver/ editar usuario</a></li>
             </div>
           <?php else: ?>
             <div class="botones-inicio-registro d-block d-md-none">
               <li><a  class="btn" href="registro.php">Registrarse</a></li>
             </div>
           <?php endif; ?>

           <?php if ($auth->usuarioLogueado()): ?>
             <div class="botones-inicio-registro d-block d-md-none">
               <li><a class="btn" href="logout.php">Cerrar Sesión</a></li>
             </div>
           <?php else: ?>
             <div class="botones-inicio-registro d-block d-md-none">
               <li><a class="btn" href="login.php">Iniciar Sesión</a></li>
             </div>
           <?php endif; ?>
         </ul>
       </nav>
     </div>
  </div>
</header>
