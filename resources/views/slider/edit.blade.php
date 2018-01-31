@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                   <h2>Slider</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('home')}}">Inicio</a>
                        </li>
                        <li>
                            <a href="{{route('slider.index')}}">Slider</a>
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
                            Slider
                           
                        </div>
                        <div class="ibox-content">
                            <form method="post" enctype="multipart/form-data" action="{{ route('slider.update',$slider->id) }}" class="form-horizontal">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group"><label class="col-sm-2 control-label">Imagen</label>
                                
                                    <div class="col-sm-10"><input type="file" name="imagen"  class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">*Utilice imagenes de resolución 1920x780</div>
                                    </div>
                                </div>
                                 
                                 <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white" href="{{route('slider.index')}}">Cancelar</a>
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
</div>
</div>
      
 </div>
 </div>
 @endsection