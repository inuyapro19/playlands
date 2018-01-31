@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                   <h2>Contacto</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('home')}}">Inicio</a>
                        </li>
                        <li>
                            <a>Contacto</a>
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
                            Contacto
                           
                        </div>
                        <div class="ibox-content">
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            <strong>{{ Session::get('message', '') }} </strong>
                        </div>
                        @endif
                            <form method="post" enctype="multipart/form-data" action="{{ route('contacto.update',$id) }}" class="form-horizontal">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group"><label class="col-sm-2 control-label">Nombre</label>
                                
                                    <div class="col-sm-10"><input type="text" name="nombre" value="{{ $contacto->nombre }}"  class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Dirección</label>
                                
                                    <div class="col-sm-10"><input type="text" name="direccion"  value="{{$contacto->direccion}}" class="form-control"></div>
                                </div>
                                
                                <div class="hr-line-dashed"></div>
                                    <div class="form-group"><label class="col-sm-2 control-label">Ciudad</label>
                                
                                    <div class="col-sm-10"><input type="text" name="ciudad"  value="{{$contacto->ciudad}}" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>   

                                 <div class="form-group"><label class="col-sm-2 control-label">Email</label>
                                
                                    <div class="col-sm-10"><input type="text" name="email"  value="{{$contacto->email}}" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Teléfono</label>
                                
                                    <div class="col-sm-10"><input type="text" name="telefono"  value="{{$contacto->telefono}}" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group"><label class="col-sm-2 control-label">Teléfono Movil</label>
                                
                                    <div class="col-sm-10"><input type="text" name="movil"  value="{{$contacto->movil}}" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group"><label class="col-sm-2 control-label">Facebook After School</label>
                                
                                    <div class="col-sm-10"><input type="text" name="facebook1"  value="{{$contacto->facebook1}}" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group"><label class="col-sm-2 control-label">Bienvenidos</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="texto_bien" name="texto_bien">
                                       {{ $contacto->texto_bien }}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group"><label class="col-sm-2 control-label">Cafeteria</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="texto_cafeteria" name="texto_cafeteria">
                                       {{ $contacto->texto_cafeteria }}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Texto After School</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="texto_ser1" name="texto_ser1">
                                       {{ $contacto->texto_ser1 }}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Texto Cumpleaños</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="texto_ser2" name="texto_ser2">
                                       {{ $contacto->texto_ser2 }}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Quienes Somos</label>

                                    <div class="col-sm-10"><textarea class="form-control ckeditor" col="10" row="10" id="quienes_somos" name="quienes_somos">
                                       {{ $contacto->quienes_somos }}
                                    </textarea></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Link Google Maps </label>
                                
                                    <div class="col-sm-10"><input type="text" name="url_mapa"  value="{{$contacto->url_mapa}}" class="form-control"></div>
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