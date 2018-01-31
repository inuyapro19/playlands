 @extends('front.layouts.app')
 
 @section('title', 'After School y Cumpleaños - La Serena y Coquimbo')
@section('content')
 <section class="slider">
      <!-- Insert to your webpage where you want to display the slider -->
     <div id="amazingslider-1" style="display:block;position:relative;margin:0px auto 0px;">
          <ul class="amazingslider-slides" style="display:none;">
           @foreach($slider as $slider)
              <li><img src="{{asset('uploads/slider/'.$slider->imagen)}}" alt=""></li>             
           @endforeach
          </ul>
      </div>
      <!-- End of body section HTML codes -->
    </section>

<div class="barra-bienvenidos"><h2>BIENVENIDOS A PLAYLAND</h2></div>

<section class="contenedor-bienvenidos">
  <div class="contenedor-texto-bienvenidos">
    <h1>Playland</h1>
    <?=$contacto->texto_bien;?>

  </div>
</section>
<!--
<section class="contenedor-servicios">
  <div class="contenedor-cajas">
       <img src="{{asset('front/imagenes/after-school.jpg')}}">
      <h1>After School</h1>
  
      <a href="{{route('school')}}">Ver Más</a>
  </div>
</section>
-->

<section class="contenedor-servicios">
  <div class="contenedor-cajas">
    <img style="width: 57%;" src="{{asset('front/imagenes/after-school.jpg')}}" class="mostrar-imagen">
    <div class="contenedor-cajas-texto">
      <h1>After School</h1>
      <?=$contacto->texto_ser1;?>
      <a href="{{route('school')}}">Ver Más</a>
    </div>
  </div>
</section>


<section class="padres">
  <div class="contenedor-padres">
    <div class="caja-padres-texto">
      <?=$contacto->texto_cafeteria;?>
    </div>
    <img src="{{asset('front/imagenes/padres.jpg')}}" class="mostrar-pc">
    <img src="{{asset('front/imagenes/padres-responsive.jpg')}}" class="ocultar-pc img-responsive borde-redondeado">
  </div>
</section>
<!--
<section class="seccion-facebook">

    <div class="texto-facebook">
      <h1>Síguenos en Facebook</h1>
      <h2>y ¡se parte de la diversión!</h2>
      <div class="texto-facebook-dedo">
        <img src="img/dedo-facebook.png">
      </div>
    </div>

  <div class="contenedor-facebook">
    <div class="fanpage">
      <div class="fb-page" data-href="https://www.facebook.com/playlandafterschool" data-tabs="timeline" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/playlandafterschool" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/playlandafterschool">Playland After School</a></blockquote></div>
    </div>
  </div>

</section> -->

<section class="seccion-facebook">
  <div class="contenedor-facebook">
    <div class="texto-facebook">
      <h1>Síguenos en Facebook</h1>
      <h2>y ¡se parte de Playland!</h2>
      <div class="texto-facebook-dedo">
        <img src="img/dedo-facebook.png">
      </div>
    </div>

    <div class="fanpage">
      <div class="fb-page" data-href="https://www.facebook.com/playlandafterschool" data-tabs="timeline" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/playlandafterschool" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/playlandafterschool">Playland After School</a></blockquote></div>
    </div>
  </div>
</section>


@endsection