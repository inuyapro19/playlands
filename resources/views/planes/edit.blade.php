@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                   <h2>Plan</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a href="{{route('planes.index')}}">Plan</a>
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
                            Plan
                           
                        </div>
                        <div class="ibox-content">
                            <form method="post" enctype="multipart/form-data" action="{{ route('planes.update',$plan->id) }}" class="form-horizontal">
                                {{ csrf_field() }}
                              
                                <input type="hidden" name="_method" value="PUT">
                                
                                <div class="form-group"><label class="col-sm-2 control-label">Nombre Plan</label>

                                    <div class="col-sm-10"><input type="text" name="nombre_plan" value="{{$plan->nombre_plan}}" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Imagen</label>
                                    <div class="col-sm-2">
                                       <img src="{{asset('uploads/plan/'.$plan->imagen)}}" class="thumbnail" width="150" style="margin:10px" alt=""> 
                                    </div>                                    
                                    <div class="col-sm-8"><input type="file" name="imagen" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Descripción</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="descripcion" name="descripcion">
                                    {{$plan->descripcion}}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group"><label class="col-sm-2 control-label">Precio Plan</label>

                                    <div class="col-sm-10"><input type="text" name="precio_plan" value="{{$plan->precio_plan}}" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group"><label class="col-sm-2 control-label">Cantidad Niños</label>

                                    <div class="col-sm-10"><input type="text" name="cantidad_per" value="{{$plan->cantidad_per}}" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white" href="{{route('planes.index')}}">Volver</a>
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