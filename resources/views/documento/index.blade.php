@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                  <h1>Documentos</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Inicio</a>
                        </li>
                        <li>
                            <a href="#">Documentos</a>
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
                           <a href="{{route('documentos.create')}}" class="btn btn-success btn-sm">Agregar</a>
                           
                        </div>
                        <div class="ibox-content">
                           
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            <strong>{{ Session::get('message', '') }} </strong>
                        </div>
                        @endif

                            <div class="table-responsive">
                                <table  class="table table-hover table-bordered">
                                    <thead>
                                        
                                            <th>#</th>
                                            <th>Nombre Documento</th>
                                            <th>Documento</th> 
                                            <th>Acciones</th>                                      
                                    </thead>
                                    <tbody>
                                        @foreach($documentos as $documento)
                                            <tr>
                                                <td>{{$documento->id}}</td>
                                                <td>{{$documento->nombre}}</td>
                                                <td> {{$documento->nombre_archivo}} </td>
                                                <td>
                                                    <form action="{{route('documentos.destroy',$documento->id)}}" method="post">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">

                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form>
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