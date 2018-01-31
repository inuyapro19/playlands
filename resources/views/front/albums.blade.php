@extends('front.layouts.app')
 @section('title', 'After School y Cumpleaños | ALBUM FOTOGRÁFICO')
@section('content')


  <section class="galeria">
   <h1>GALERÍA FOTOGRÁFICA PLAYLAND</h1>  
    <div class="contenedor-galeria">
     @foreach($gal as $gal)
        <div class="caja-album">
            <a href="{{route('gallary.index',$gal->id)}}"><img src="{{asset('uploads/albums/'.$gal->imagen)}}" alt=""></a>
            <a href="{{route('gallary.index',$gal->id)}}">{{ucwords($gal->nombre)}}</a>
        </div>
        @endforeach
        
    </div>
</section>
   



@endsection