<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin|Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>@yield('titulo')</title>
  </head>

  <body class="@yield('class-body')">
    <header>
      <div class="container-full">
    		<div class="login-container ">
    			{{-- <nav class="inicio-registro d-none d-md-inline-flex">

    	     </nav> --}}
           <ul class="redes d-none d-md-inline-flex">
    	     	<!-- <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
    					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
    					<li><a href="#"><i class="fab fa-twitter-square"></i></a></li> -->
              <li><a href="cuenta"><i class="fas fa-user"></i></a></li>
    					<li><a href="carrito"><i class="fas fa-shopping-cart"></i></a></li>
    	     </ul>
           <div class="logo-marca">
           	<a href="/">
             	<img src="img/nature_logo.png" alt="logotipo" class="logo">
            	</a>
          	</div>
    		</div>
       	<div class="menu">
          <input type="checkbox" id="btn-menu">
          <label for="btn-menu"><i class="fas fa-bars fa-2x"></i></label>
          <nav class="main-navigation">
             <ul class="navigation">
               <!-- <li><a href="index.php">Home</a></li> -->
               <li><a href="quienes_somos">Quienes somos</a></li>
               <li><a href="productos">Productos</a></li>
               <li><a href="faq">Preguntas frecuentes</a></li>
               <li><a href="contacto">Contacto</a></li>
             </ul>
           </nav>
         </div>
      </div>
    </header>

    <main>
      @yield('principal')
    </main>

    <footer>
      <section class="social d-none d-md-block">
        <h3>Menu</h3>
        <ul>
          <!-- <li><a href="index.php">Home</a></li> -->
          <li><a href="quienes_somos">Quienes somos</a></li>
          <li><a href="productos">Productos</a></li>
          <li><a href="faq">Preguntas frecuentes</a></li>
          <li><a href="contacto">Contacto</a></li>
        </ul>
      </section>
      <section class="tarjeta">
        <h3>Formas de Pago</h3>
        <ul>
          <li><a href="#"><i class="far fa-credit-card fa-2x"></i></a></li>
        </ul>
      </section>
      <section class="redes-login">
        <h3>Redes</h3>
        <ul class="redes">
         <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
           <li><a href="#"><i class="fab fa-instagram"></i></a></li>
           <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
        </ul>
        <ul>
          <div class="sesion-registrarse d-none d-md-block">
            <li><a href="login">Iniciar Sesion</a></li>
            <li><a href="register">Registrarse</a></li>
          </div>
        </ul>
      </section>
    </footer>

    <!-- Js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
