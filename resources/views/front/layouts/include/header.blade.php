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
                    <!--<li><a href="{{route('plan')}}">Cumpleaños</a></li> -->
                    <li><a href="{{route('images.albums')}}">Galería</a></li>
                    <li><a href="{{route('formulario_contacto')}}">Contacto</a></li>
                </ul>
            </nav>
      </div>
    </header>

<div class="logo-responsive ocultar-pc">
  <img src="{{asset('front/imagenes/logo-header.png')}}">
</div>