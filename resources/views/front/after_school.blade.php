 @extends('front.layouts.app')

@section('title', 'After School')

@section('content')
<section class="servicios servicio-fondo3">

<!--
<picture class="foto-ancha-servicios">
	<img src="imagenes/huepil-educativo-ayekantun-la-serena.jpg" class="mostrar-pc animated fadeInUp">
	<img src="imagenes/huepil-movil.jpg" class="ocultar-pc animated fadeInUp">
</picture>
-->

<section class="module parallax parallax-1 animated fadeInUp">
    <div class="container">
      <h1>AFTER SCHOOL <span> PLAYLAND</span></h1>
    </div>
</section>
    
	<div class="contenedor-pagina-servicios animated fadeInUp" style="animation-delay: 0.4s">
		<?=$taller->texto_1;?>
	</div>

<div class="worko-tabs">
	
    <input class="state" type="radio" title="tab-uno" name="tabs-state" id="tab-uno" checked onClick="parent.location='#tab-uno-label'"/>
    <!-- <input class="state" type="radio" title="tab-dos" name="tabs-state" id="tab-dos" onClick="parent.location='#tab-dos-label'"/> -->
    <input class="state" type="radio" title="tab-tres" name="tabs-state" id="tab-tres" onClick="parent.location='#tab-tres-label'"/>
    <input class="state" type="radio" title="tab-cuatro" name="tabs-state" id="tab-cuatro" onClick="parent.location='#tab-cuatro-label'"/>
    <input class="state" type="radio" title="tab-cinco" name="tabs-state" id="tab-cinco" onClick="parent.location='#tab-cinco-label'"/>
    <input class="state" type="radio" title="tab-seis" name="tabs-state" id="tab-seis" onClick="parent.location='#tab-seis-label'"/>
    <input class="state" type="radio" title="tab-siete" name="tabs-state" id="tab-siete" onClick="parent.location='#tab-siete-label'" />


<div class="tabs flex-tabs">
        <label for="tab-uno" id="tab-uno-label" class="tab"><div class="icono"><img src="{{asset('front/imagenes/nino-huepil2.png')}}" class="mostrar-pc"></div>{{$taller->taller1}}</label>
        <!-- <label for="tab-dos" id="tab-dos-label" class="tab"><div class="icono"><img src=imagenes/nino-huepil6.png" class="mostrar-pc"></div>Lógica</label> -->
        <label for="tab-tres" id="tab-tres-label" class="tab"><div class="icono"><img src="{{asset('front/imagenes/nino-huepil1.png')}}" class="mostrar-pc"></div>{{$taller->taller2}}</label>
        <label for="tab-cuatro" id="tab-cuatro-label" class="tab"><div class="icono"><img src="{{asset('front/imagenes/nino-huepil4.png')}}" class="mostrar-pc"></div>{{$taller->taller3}}</label>
        <label for="tab-cinco" id="tab-cinco-label" class="tab"><div class="icono"><img src="{{asset('front/imagenes/nino-huepil5.png')}}" class="mostrar-pc"></div>{{$taller->taller4}}</label>
        <label for="tab-seis" id="tab-seis-label" class="tab"><div class="icono"><img src="{{asset('front/imagenes/nino-huepil7.png')}}" class="mostrar-pc"></div>{{$taller->taller5}}</label>
        <label for="tab-siete" id="tab-siete-label" class="tab"><div class="icono"><img src="{{asset('front/imagenes/nino-huepil3.png')}}" class="mostrar-pc"></div>{{$taller->taller6}}</label>


        <div id="tab-uno-panel" class="panel active textos-huepil">
        <h2>Música</h2>
          	<?=$taller->musica;?> 

        </div>

        <div id="tab-tres-panel" class="panel textos-huepil">
        <h2>Yoga Niños</h2>
           <?=$taller->yoga;?>

        </div>
        <div id="tab-cuatro-panel" class="panel textos-huepil">
        <h2>Art Attack</h2>
            <?=$taller->arte;?>
        </div>
        <div id="tab-cinco-panel" class="panel textos-huepil">
        <h2>Pequeño Chef</h2>
            <?=$taller->chef;?>

        </div>
        <div id="tab-seis-panel" class="panel textos-huepil">
        <h2>Inglés Lúdico</h2>
            <?=$taller->ingles;?>
        </div>
        <div id="tab-siete-panel" class="panel textos-huepil">
        <h2>Teatro y Expresión Corporal</h2>
           <?=$taller->teatro;?>

        </div>
    </div>

</div>
    
<div class="clear"></div>

<div class="huepil animated fadeInUp" style="animation-delay: 1s">
		<h1>HORARIO</h1>
        <?=$taller->horario;?>

		<h1>PROFESIONALES</h1>
		<!-- <div class="huepil-div1 color-caja3"> Valor Mensual: $150.000.-.</div> -->
        <?=$taller->profesional;?>

		<div class="huepil-div2 color-caja2">
            Jeanette Alejandra Acevedo Olguín <br>             
            <div style="font-size:14px;">
            Educadora Diferencial, Psicopedagoga Pontificia Universidad Católica de Valparaíso <br> 
            Diplomado en Trastornos de la Comunicación y el Lenguaje <br> 
            Post Título en Administración Educacional<br> 
            Amplia experiencia como Directivo y docente.
            </div>
        </div>
    
        <h1>REGLAMENTO Y FICHA DE INGRESO</h1>
        <p>Documentos PDF.</p>
       @foreach($documentos as $documento)
            <a href="uploads/documentos/{{$documento->nombre_archivo}}" target="_blank"><img src="{{asset('front/imagenes/documento-pdf.png')}}"> {{$documento->nombre}}</a>
       @endforeach


      <!--  <h1>REGLAMENTO Y FICHA DE INGRESO</h1>
        <p>Documentos PDF.</p>
        <a href="REGLAMENTO-PLAYLAND.pdf" target="_blank"><img src="{{asset('front/imagenes/documento-pdf.png')}}"> Reglamento Playland</a>
        <a href="FICHA-INGRESO-PLAYLAND.pdf" target="_blank"><img src="{{asset('front/imagenes/documento-pdf.png')}}"> Ficha de Ingreso Playland</a>
        -->
	</div>

</section>


@endsection