@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                   <h2>Talleres</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a>Talleres</a>
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
                            Talleres
                           
                        </div>
                        <div class="ibox-content">

                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            <strong>{{ Session::get('message', '') }} </strong>
                        </div>
                        @endif

                            <form method="post" enctype="multipart/form-data" action="{{ route('taller.update',$taller->id) }}" class="form-horizontal">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="PUT">
                                
                                <div class="form-group"><label class="col-sm-2 control-label">Descripción</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="texto_1" name="texto_1">
                                       {{ $taller->texto_1 }}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Nombre Taller 1</label>
                                
                                    <div class="col-sm-10"><input type="text" name="taller1" value="{{ $taller->taller1 }}"  class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group"><label class="col-sm-2 control-label">Música</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="musica" name="musica">
                                       {{ $taller->musica }}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Nombre Taller 2</label>
                                
                                    <div class="col-sm-10"><input type="text" name="taller2" value="{{ $taller->taller2 }}"  class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group"><label class="col-sm-2 control-label">Yoga Infantil</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="yoga" name="yoga">
                                       {{ $taller->yoga }}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Nombre Taller 3</label>
                                
                                    <div class="col-sm-10"><input type="text" name="taller3" value="{{ $taller->taller3 }}"  class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Art atack</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="arte" name="arte">
                                       {{ $taller->arte }}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Nombre Taller 4</label>
                                
                                    <div class="col-sm-10"><input type="text" name="taller4" value="{{ $taller->taller4 }}"  class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Chef</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="chef" name="chef">
                                       {{ $taller->chef }}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Nombre Taller 5</label>
                                
                                    <div class="col-sm-10"><input type="text" name="taller5" value="{{ $taller->taller5 }}"  class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Ingles</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="ingles" name="ingles">
                                       {{ $taller->ingles }}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Nombre Taller 6</label>
                                
                                    <div class="col-sm-10"><input type="text" name="taller6" value="{{ $taller->taller6 }}"  class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Teatro</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="teatro" name="teatro">
                                       {{ $taller->teatro }}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Horario</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="horario" name="horario">
                                       {{ $taller->horario }}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Profesional</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="profesional" name="profesional">
                                       {{ $taller->profesional }}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                         <a class="btn btn-white" href="{{route('home')}}">Volver</a>
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