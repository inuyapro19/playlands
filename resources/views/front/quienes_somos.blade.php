 @extends('front.layouts.app')
 @section('title', 'QUIENES SOMOS')
@section('content')

<section class="quienes-somos">
    <div class="contenedor-quienes-somos">
        <img src="{{asset('front/imagenes/foto-quienes-somos.jpg')}}" class="animated fadeInUp">
        <div class="texto-quienes-somos animated fadeInUp">
            <h1>¿Quiénes Somos?</h1>
           <?=$contacto->quienes_somos;?>
            <br>
            <br>
            <br>

        </div>
    </div>
</section>

@endsection