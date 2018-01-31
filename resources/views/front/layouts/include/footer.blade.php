
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
        <div class="footer-redes-icons">
        <a href="{{$contacto->facebook2}}" target="_blank"><i class="fa fa-facebook-square fa-2x"></i>  Playland Cumpleaños</a>
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