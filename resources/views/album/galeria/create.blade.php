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
                            <a href="{{route('galerias.index',$id)}}">Album</a>
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
                           <!--- <form method="post" enctype="multipart/form-data" action="" class="form-horizontal">
                                
                                <div class="form-group"><label class="col-sm-2 control-label">Imagen</label>
                                
                                    <div class="col-sm-10"><input type="file" name="imagen[]" multiple  class="form-control"></div>
                                </div>
                              <input type="hidden" name="albums_id" value="">
                                <div class="hr-line-dashed"></div>                                
                                 
                                 <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="reset">Cancelar</button>
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                    </div>
                                </div>
                            </form>-->
                            {!! Form::open(['route'=> 'galerias.store', 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}
                            {{ csrf_field() }}
                             <div class="dz-message" style="height:200px;">
                                Haga clic aqui para elegir fotos, o arrastrelas dentro de este recuadro
                            </div>
                            <div class="dropzone-previews"></div>
                             <input type="hidden" name="albums_id" value="{{$id}}">
                             <div style="clear:both"></div>
                             <div class="form-group">
                                 <button type="submit" class="btn btn-success" id="submit">Subir Fotos</button>
                             </div>
                            
                            {!! Form::close() !!}
                    <span>*Para mejor visualización , se recomienda utilizar imagen horizontales</span>
                        </div>

</div>
</div>
      
 </div>
 </div>
 @endsection