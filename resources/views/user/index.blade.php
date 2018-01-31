@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                  <h1>Usuarios</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a href="{{route('users.index')}}">Usuarios</a>
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
                           <a href="{{route('users.create')}}" class="btn btn-success btn-sm">Agregar</a>
                           
                        </div>
                        <div class="ibox-content">

                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            <strong>{{ Session::get('message', '') }} </strong>
                        </div>
                        @endif

                           
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Email</th>                                
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                     @foreach($user as $user)
                                        <tr>
                                            @if(!Auth::guest())
                                                @if(Auth::user()->id == $user->id)
                                                <td>{{$user->id}}</td>
                                          
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td> </td>
                                            @else
                                            <td>{{$user->id}}</td>
                                          
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                {{ Form::open(array('url' => 'users/'.$user->id)) }}
                                                 {{ Form::hidden('_method', 'DELETE') }}
    
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                {{ Form::close() }}
                                            </td>
                                                @endif
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
</div>
</div>
      
 </div>
 </div>
 @endsection