<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin|Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('titulo')</title>
  </head>

  <body class="@yield('class-body')">
    <header>
      <div class="container-full">
    		<div class="login-container ">
           <ul class="redes d-none d-md-inline-flex">
             {{-- <div class="btn-group">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
              </button>
              <div class="dropdown-menu">
                @if (Auth::guest())
                  <a class="dropdown-item" href="/login">Iniciar Sesión</a>
                  <a class="dropdown-item" href="/register">Registrarme</a>
                @else
                  <a class="dropdown-item" href="#">Hola {{Auth::user()->name}}!</a>
                  <a class="dropdown-item" href="/cuenta">Cuenta</a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                      {{ __('Cerrar Sesión') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                @endif
              </div> --}}
            {{-- </div>
             <div class="tutorial">
               <li><i class="fas fa-user"></i> <i class="fa fa-angle-down"></i></a>
                  <ul>
                    @if (Auth::guest())
                      <li><a href="/login">Iniciar Sesión</a></li>
                      <li><a href="/register">Registrarme</a></li>
                    @else
                      <li>Hola {{Auth::user()->name}}!</li>
                      <li><a href="/cuenta">Cuenta</li>
                      <li><a href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                          {{ __('Cerrar Sesión') }}
                      </a></li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    @endif
                  </ul>
                </li>
             </div> --}}
    					<li><a href="/carrito"><i class="fas fa-shopping-cart"></i></a></li>
    	     </ul>
           @if (Auth::user())
             <a href="/cuenta">Hola {{Auth::user()->name}}!</a>
           @endif
           <div class="logo-marca">
           	<a href="/">
             	<img src="/img/nature_logo.png" alt="logotipo" class="logo">
            	</a>
          	</div>
    		</div>
       	<div class="menu">
          <input type="checkbox" id="btn-menu">
          <label for="btn-menu"><i class="fas fa-bars fa-2x"></i></label>
          <nav class="main-navigation">
             <ul class="navigation">
               <!-- <li><a href="index.php">Home</a></li> -->
               <li><a href="/productos">Productos</a></li>
               <li><a href="/faq">Preguntas frecuentes</a></li>
               <li><a href="/quienes_somos">Quienes somos</a></li>
               <li><a href="/contacto">Contacto</a></li>
               @if (Auth::guest())
                 <li><a href="/login">Iniciar Sesión</a></li>
                 <li><a href="/register">Registrarme</a></li>
               @else
                 <li><a href="/cuenta">Cuenta</li>
                 <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                     {{ ('Cerrar Sesión') }}
                 </a></li>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
               @endif
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
          <li><a href="/productos">Productos</a></li>
          <li><a href="/faq">Preguntas frecuentes</a></li>
          <li><a href="/quienes_somos">Quienes somos</a></li>
          <li><a href="/contacto">Contacto</a></li>
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
            <li><a href="/login">Iniciar Sesion</a></li>
            <li><a href="/register">Registrarse</a></li>
          </div>
        </ul>
      </section>
    </footer>


    <!-- Js -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
