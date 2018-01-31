 @extends('front.layouts.app')
 @section('title', 'Cumpleaños')
@section('content')
<section class="servicios servicio-fondo2">

<!-- <picture class="foto-ancha-servicios">
	<img src="imagenes/cumpleanos-ayekantun-la-serena.jpg" class="mostrar-pc animated fadeInUp">
	<img src="imagenes/cumpleanos-movil.jpg" class="ocultar-pc animated fadeInUp">
</picture>
-->
    
<section class="module parallax parallax-2 animated fadeInUp">
    <div class="container">
      <h1>CUMPLEAÑOS <span> PLAYLAND</span></h1>
    </div>
</section>

	<div class="contenedor-pagina-servicios animated fadeInUp" style="animation-delay: 0.4s">
		<!-- <h1>FIESTAS DE CUMPLEAÑOS <span>PLAYLAND</span></h1>
		<h2>Plan Aldea Feliz</h2> -->
		@foreach($planes as $plan)
        <img src="{{asset('uploads/plan/'.$plan->imagen)}}">

		<?=$plan->descripcion;?>
		<div class="color-caja2"> Valor Plan Aldea Feliz: ${{number_format($plan->precio_plan,0,'.',',')}}.- por niño (Mínimo {{$plan->cantidad_per}} niños).</div>
		@endforeach

		

		<div class="color-caja5" style="margin-left: auto; margin-right: auto;">¿Tienes una petición especial? Contáctanos y te ayudamos.</div>
	</div>
</section>

@endsection