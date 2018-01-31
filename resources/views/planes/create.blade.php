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
                            <form method="post" enctype="multipart/form-data" action="{{ route('planes.store') }}" class="form-horizontal">
                                {{ csrf_field() }}
                              
                                
                                
                                <div class="form-group {{ $errors->has('nombre_plan') ? ' has-error' : '' }}"><label class="col-sm-2 control-label">Nombre Plan</label>

                                    <div class="col-sm-10"><input type="text" name="nombre_plan" class="form-control"></div>

                                    @if ($errors->has('nombre_plan'))
                                     <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nombre_plan') }}</strong>
                                            </span>
                                        </div>                                       </div>
                                    @endif
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group {{ $errors->has('imagen') ? ' has-error' : '' }}"><label class="col-sm-2 control-label">Imagen</label>

                                    <div class="col-sm-10"><input type="file" name="imagen" class="form-control"></div>

                                    @if ($errors->has('imagen'))
                                     <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <span class="help-block">
                                                <strong>{{ $errors->first('imagen') }}</strong>
                                            </span>
                                        </div>                                       </div>
                                    @endif
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group {{ $errors->has('descripcion') ? ' has-error' : '' }}"><label class="col-sm-2 control-label">Descripción</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="descripcion" name="descripcion"> </textarea>
                                    </div>

                                    @if ($errors->has('descripcion'))
                                     <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <span class="help-block">
                                                <strong>{{ $errors->first('descripcion') }}</strong>
                                            </span>
                                        </div>                                       </div>
                                    @endif
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group {{ $errors->has('precio_plan') ? ' has-error' : '' }}"><label class="col-sm-2 control-label">Precio Plan</label>

                                    <div class="col-sm-10"><input type="text" name="precio_plan" class="form-control"></div>

                                    @if ($errors->has('precio_plan'))
                                     <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <span class="help-block">
                                                <strong>{{ $errors->first('precio_plan') }}</strong>
                                            </span>
                                        </div>                                       </div>
                                    @endif
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group {{ $errors->has('cantidad_per') ? ' has-error' : '' }}"><label class="col-sm-2 control-label">Cantidad niños</label>

                                    <div class="col-sm-10"><input type="text" name="cantidad_per" class="form-control"></div>

                                    @if ($errors->has('cantidad_per'))
                                     <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cantidad_per') }}</strong>
                                            </span>
                                        </div>                                       </div>
                                    @endif
                                </div>

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