@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                   <h2>Usuario</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a href="{{route('users.index')}}">Usuario</a>
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
                            Usuario
                           
                        </div>
                        <div class="ibox-content">
                            <form method="post" enctype="multipart/form-data" action="{{ route('users.store') }}" class="form-horizontal">
                                {{ csrf_field() }}
                                
                                
                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}"><label class="col-sm-2 control-label">Nombre</label>
                                
                                    <div class="col-sm-10"><input type="text" name="name"  class="form-control"></div>
                                     @if ($errors->has('name'))
                                     <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        </div>                                         
                                     </div>
                                    
                                @endif
                                </div>
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}"><label class="col-sm-2 control-label">Email</label>
                                
                                    <div class="col-sm-10"><input type="text" name="email"  class="form-control"></div>
                                     @if ($errors->has('email'))
                                     <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        </div>                                         
                                     </div>
                                    
                                @endif
                                </div>
                                <div class="hr-line-dashed"></div>

                                 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"><label class="col-sm-2 control-label">Contraseña</label>
                                
                                    <div class="col-sm-10"><input type="password" name="password"  class="form-control"></div>

                                     @if ($errors->has('password'))
                                     <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        </div>                                         
                                     </div>
                                    
                                @endif
                                </div>
                                <div class="hr-line-dashed"></div>

                                 
                                 <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a class="btn btn-white" href="{{route('users.index')}}">Cancelar</a>
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