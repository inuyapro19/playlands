@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                   <h2>Galeria</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('home')}}">Inicio</a>
                        </li>
                        <li>
                            <a href="{{route('galeria.index')}}">Galeria</a>
                        </li>
                        <li class="active">
                            <strong>Agregar</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

             <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            Galeria
                           
                        </div>
                        <div class="ibox-content">
                           
                             {!! Form::open(['route'=> 'galeria.store', 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}
                            {{ csrf_field() }}
                             <div class="dz-message" style="height:200px;">
                                Cargar de Imagenes
                            </div>
                            <div class="dropzone-previews"></div>
                             
                            <button type="submit" class="btn btn-success" id="submit">Guardar</button>
                            {!! Form::close() !!}
                        </div>
</div>
</div>
      
 </div>
 </div>
 @endsection