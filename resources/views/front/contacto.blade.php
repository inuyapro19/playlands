 @extends('front.layouts.app')
 @section('title', 'After School y Cumpleaños | Contacto')
@section('content')
<div id="contenedor-formulario">
    <section class="titulo-formulario">
        <h2>FORMULARIO DE CONTACTO</h2>
        <p>¿Tienes una consulta o requieres más información? No dudes en escribirnos, nos pondremos en contacto contigo a la brevedad.</p>
    </section>
    
    @if(Session::has('success'))
   <div style="color:green; font-size: 20px;" class="alert alert-success">
     {{ Session::get('success') }}
   </div>
    @endif


    <section class="formulario">
    <form action="{{route('enviar')}}" method="post">
    {{ csrf_field() }}
        <label for="nombre">Nombre:</label>
        <input id="nombre" type="text" name="nombre" placeholder="Nombre y Apellido" required />
        <label for="telefono">Teléfono:</label>
        <input id="telefono" type="telefono" name="telefono" placeholder="Codigo + Número" required />
        <label for="email">Email:</label>
        <input id="email" type="email" name="email" placeholder="ejemplo@correo.cl" required />
        <label for="ciudad">Ciudad:</label>
        <input id="ciudad" type="ciudad" name="ciudad" placeholder="Ciudad / Comuna" required />
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" placeholder="Mensaje" required></textarea>
        <input id="submit" type="submit" name="submit" value="Enviar" style="color:#FFF; font-weight:bold;" />
    </form>

<aside class="titulo-info">
    <p>&nbsp;</p>
    <h2>INFORMACIÓN DE CONTACTO</h2>
    <p><strong>PLAYLAND - AFTER SCHOOL - CUMPLEAÑOS</strong></p>
    <p><i class="fa fa-map-marker"></i> {{$contacto->direccion}}, {{$contacto->ciudad}}</p>
    <p><i class="fa fa-mobile"></i> +56 9 {{$contacto->movil}}</p>
    <p><i class="fa fa-envelope"></i> {{$contacto->email}}</p>

    <h2> REDES SOCIALES</h2>
    <p><strong>FACEBOOK</strong></p>
    <p><i class="fa fa-facebook"></i> <a href="{{$contacto->facebook1}}" target="_blank" style="color:#666">Playland After School</a></p>
    <!--<p><strong>INSTAGRAM</strong></p>
    <p><i class="fa fa-instagram"></i> Juegos y Cumples Ayekantun</p>-->
</aside>

    </section>
    
    <section class="titulo-formulario">
        <h2>MAPA DE UBICACIÓN</h2>
        <p>Playland esta ubicada en la Calle Fernando Moraga Acevedo 1714, La Serena. Para guiar tu camino puedes tomar como referencia Av. Guillermo Ulriksen, esquina Calle Del Solar (A metros de Av. Cuatro Esquinas) Ver Mapa <a href="https://goo.gl/maps/1q33fhaCwus" target="_blank">AQUÍ.</a></p>
    </section>
    
<iframe src="{{$contacto->url_mapa}}" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    
    </div>

@endsection