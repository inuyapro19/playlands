@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                  <h2>Galeria</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a href="{{route('albums.index')}}">Album</a>
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
                           <a href="{{route('galerias.create',$id)}}" class="btn btn-success btn-sm">Agregar</a>
                           
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
                                            
                                            <th>Imagen</th>                                                                                  
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($gal as $gal)
                                        <tr>
                                            <td>{{$gal->id}}</td>
                                           
                                            <td><img src="{{asset('uploads/galeria/'.$gal->imagen)}}" width="100" alt=""></td>
                                            <td>
                                                {{ Form::open(array('url' => 'galerias/'.$gal->id)) }}
                                                 {{ Form::hidden('_method', 'DELETE') }}
                                                    {{ Form::hidden('id',$id) }}
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                {{ Form::close() }}
                                            </td>
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