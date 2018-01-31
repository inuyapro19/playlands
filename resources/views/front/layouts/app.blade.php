<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  
  <title>Playland -  @yield('title')</title>
  <!-- Meta -->
  @include('front.layouts.include.meta')
  <link rel="stylesheet" href="{{asset('front/css/estilos-base.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/formulario.css')}}">
  <link rel="stylesheet" href="{{asset('front/css/formulario.css')}}">
  <link href="{{asset('front/css/blueimp/css/blueimp-gallery.min.css')}}" rel="stylesheet">
</head>

<body><!-- BODY -->

    <header>
      <div id="contenedor-header">
        <a href="{{route('inicio')}}"><img id="foto-logo" src="{{asset('front/imagenes/logo-header.png')}}"></a>
        <img id="foto-redcompra" src="{{asset('front/imagenes/redcompra2.png')}}" class="mostrar-pc">
      </div>
      <div id="contenedor-menu">
        <input type="checkbox" id="btn-menu"><div class="ocultar-pc texto-menu">PLAYLAND MENU</div></input>
        <label for="btn-menu" class="fa fa-bars fa-2x"></label>
            <nav class="menu">
                <ul>
                    <li><a href="{{route('inicio')}}">Inicio</a></li>
                    <li><a href="{{route('nosotros')}}">Quiénes Somos</a></li>
                    <!-- <li class="submenu"><a href="#">Servicios<i class="fa fa-arrow-down"></i></a>
                        <ul>
                            <li><a href="playland-after-school.php"><span class="fa fa-caret-right ocultar-pc"></span> After School</a></li>
                            <li><a href="casa-juegos-ayekantun-la-serena.php"><span class="fa fa-caret-right ocultar-pc"></span> Casa de Juegos</a></li>
                            <li><a href="cumpleanos-ayekantun-la-serena.php"><span class="fa fa-caret-right ocultar-pc"></span> Cumpleaños</a></li>
                            
                        </ul>
                    </li> -->
                    <li><a href="{{route('school')}}">After School</a></li>
                   <!-- <li><a href="{{route('plan')}}">Cumpleaños</a></li>-->
                    <li><a href="{{route('images.albums')}}">Galería</a></li>
                    <li><a href="{{route('formulario_contacto')}}">Contacto</a></li>
                </ul>
            </nav>
      </div>
    </header>

<div class="logo-responsive ocultar-pc">
  <img src="{{asset('front/imagenes/logo-header.png')}}">
</div>

 @yield('content')

<footer class="footer">
  <div class="contenedor-footer">
    <div class="footer-logo">
      <img src="{{asset('front/imagenes/logo-footer.png')}}">
    </div>

    <div class="footer-contacto">
      <h3>{{$contacto->nombre}}</h3>
      <p>{{$contacto->direccion}}, {{$contacto->ciudad}}</p>
      <p>Fono: +56 9 {{$contacto->telefono}}</p>
      <p>E-mail: {{$contacto->email}}</p>
    </div>

    <div class="footer-redes">
      <h3>SÍGUENOS EN:</h3>
      <div class="footer-redes-icons">
        <a href="{{$contacto->facebook1}}" target="_blank"><i class="fa fa-facebook-square fa-2x"></i>  Playland After School</a>
        <!-- <a href="https://www.instagram.com/juegos_y_cumples_ayekantun/" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>  -->
      </div>
       
        
    </div>

    <div><img id="foto-redcompra" class="ocultar-pc" src="{{asset('front/imagenes/redcompra2.png')}}"></div>

    <div class="footer-firma">
      <div class="wifi">
      <p><i class="fa fa-wifi fa-3x"></i></p>
      <p>ZONA WIFI</p>
      </div>
      <p>DISEÑADO POR <a href="http://www.fizz.cl/" target="_blank">FIZZ</a></p>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="{{asset('front/js/menu.js')}}"></script>

<!-- <script src="js/scroll.js"></script> -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script src="{{asset('front/js/parallax.js')}}"></script>

<script src="{{asset('front/motor-slider/amazingslider.js')}}"></script>
<script src="{{asset('front/motor-slider/initslider-1.js')}}"></script>

<script src="{{asset('front/js/blueimp/jquery.blueimp-gallery.min.js')}}"></script>

</body><!-- END BODY -->
</html>