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
                            <a>Usuario</a>
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
                            <form method="post" enctype="multipart/form-data" action="{{ route('users.update',$user->id) }}" class="form-horizontal">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group"><label class="col-sm-2 control-label">Rut</label>
                                
                                    <div class="col-sm-10"><input type="type" value="{{$user->rut_al}}" name="rut_al"  class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Nombre</label>
                                
                                    <div class="col-sm-10"><input type="text" name="name" value="{{$user->name}}"  class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                 <div class="form-group"><label class="col-sm-2 control-label">Email</label>
                                
                                    <div class="col-sm-10"><input type="text" name="email" value="{{$user->email}}"  class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                 <div class="form-group"><label class="col-sm-2 control-label">Contraseña</label>
                                
                                    <div class="col-sm-10"><input type="password" name="password"  class="form-control"></div>
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