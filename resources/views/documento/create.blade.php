@extends('layouts.app')

@section('styles')

@endsection

@section('content')
 <div class="wrapper wrapper-content animated fadeInRight">

           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                   <h2>Documentos</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Inicio</a>
                        </li>
                        <li>
                            <a href="#">Documentos Descargables</a>
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
                            Documento                           
                        </div>
                        <div class="ibox-content">
                            <form method="post" enctype="multipart/form-data" action="{{ route('documentos.store') }}" class="form-horizontal">
                                {{ csrf_field() }}
                              
                                
                                
                                <div class="form-group"><label class="col-sm-2 control-label">Nombre Documento</label>

                                    <div class="col-sm-10"><input type="text" name="nombre_documento" class="form-control"></div>
                                </div>
                                {!! $errors->first('nombre_documento', '<p style="color:red; "class="help-block">:message</p>') !!}
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group"><label class="col-sm-2 control-label">Documento</label>

                                    <div class="col-sm-10"><input type="file" name="archivo" accept="application/pdf,application/vnd.ms-excel" class="form-control" style="size: 20px;"></div>
                                </div>
                                {!! $errors->first('nombre_documento', '<p style="color:red; "class="help-block">:message</p>')  !!} 


                                <div class="hr-line-dashed"></div>
                                
                                 <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white" href="{{route('documentos.index')}}">Volver</a>
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
