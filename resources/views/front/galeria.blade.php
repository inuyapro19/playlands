<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  
  <title>Playland - After School y Cumpleaños | GALERÍA FOTOGRÁFICA </title>
 
   <!-- Meta -->
  @include('front.layouts.include.meta')
  <link rel="stylesheet" href="{{asset('front/css/estilos-base.css')}}">
  
  <link href="{{asset('front/least/least.min.css')}}" rel="stylesheet" />
  
</head>

<body><!-- BODY -->

@include('front.layouts.include.header') 

<section class="galeria">
   <h1 style="margin-bottom:20px;">{{ucwords($albums->nombre)}} <br> <a href="{{route('images.albums')}}">Volver a Albums</a> </h1> 

    <div class="contenedor-galeria">
<!-- Least Gallery -->
        <section id="least">
            
            <!-- Least Gallery: Fullscreen Preview -->
            <div class="least-preview"></div>
            
            <!-- Least Gallery: Thumbnails -->
            <ul class="least-gallery">
                <!-- 1 || Element with data-caption ||-->
                @foreach($gal as $galeria)
                <li>
                    <a href="{{asset('uploads/galeria/'.$galeria->imagen)}}" title="Ver Foto" data-subtitle="Playland">
                        <img src="{{asset('uploads/galeria/'.$galeria->imagen)}}" alt="Alt Image Text" />
                    </a>
                </li>
                @endforeach
           
            </ul>

        </section>
        <!-- Least Gallery end -->
   
    </div>
</section>

@include('front.layouts.include.footer') 
<script src="{{asset('front/least/jquery.min.js')}}"></script>

<script src="{{asset('front/least/least.min.js')}}"></script>

        <script>
            $(document).ready(function(){
                $('.least-gallery').least();
            });
        </script>

<script src="{{asset('front/js/menu.js')}}"></script>

</body><!-- END BODY -->
</html>
