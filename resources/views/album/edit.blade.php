@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                   <h2>Album</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a href="{{route('albums.index')}}">Album</a>
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
                            Album
                           
                        </div>
                        <div class="ibox-content">
                            <form method="post" enctype="multipart/form-data" action="{{ route('albums.update',$album->id) }}" class="form-horizontal">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <div class="form-group {{ $errors->has('nombre') ? ' has-error' : '' }}"><label class="col-sm-2 control-label">Nombre Album:</label>
                                
                                    <div class="col-sm-10"><input type="text" name="nombre" value="{{$album->nombre}}"  class="form-control"></div>
                                        @if ($errors->has('nombre'))
                                     <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nombre') }}</strong>
                                            </span>
                                        </div>                                         
                                     </div>
                                    
                                @endif
                                </div>
                                  <div class="hr-line-dashed"></div> 
                                <div class="form-group {{ $errors->has('imagen') ? ' has-error' : '' }}"><label class="col-sm-2 control-label">Imagen:</label>
                                <div class="col-sm-2">
                                   <img src="{{asset('uploads/albums/'.$album->imagen)}}" class="thumbnail" width="150" style="margin:10px" alt=""> 
                                </div>
                                
                                    <div class="col-sm-8"><input type="file" name="imagen"  class="form-control"></div>
                                           @if ($errors->has('imagen'))
                                     <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <span class="help-block">
                                                <strong>{{ $errors->first('imagen') }}</strong>
                                            </span>
                                        </div>                                         
                                     </div>
                                    
                                @endif
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">*Utilice siempre fotos de orientación horizontal para un correcta visualización en el sitio web</div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>                                
                                 
                                 <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="reset">Cancelar</button>
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