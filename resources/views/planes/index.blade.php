@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                  <h1>Planes</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('home')}}">Inicio</a>
                        </li>
                        <li>
                            <a href="{{route('planes.index')}}">Planes</a>
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
                           <a href="{{route('planes.create')}}" class="btn btn-success btn-sm">Agregar</a>
                           
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
                                            <th>Nombre Plan</th>
                                            <th>Imagen</th>
                                            <th>Descripción</th>
                                            <th style="width: 80px">Precio</th>
                                            <th>cantida Niños</th>                    
                                            <th>Acciones</th>
                                        
                                    </thead>
                                    <tbody>
                                        @foreach($plan as $plan)
                                            <tr>
                                                <td>{{$plan->id}}</td>
                                                <td>{{$plan->nombre_plan}}</td>
                                                <td> <img src="{{asset('uploads/plan/'.$plan->imagen)}}" width="100"> </td>
                                                <td>{{strip_tags(substr($plan->descripcion,0,100))}}</td>
                                                <td style="color:green">$ {{ number_format($plan->precio_plan,0,',','.')}}</td>
                                                <td style="color:blue">{{$plan->cantidad_per}}</td>
                                                <td>
                                                    <form action="{{route('planes.destroy',$plan->id)}}" method="post">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                        <a href="{{route('planes.edit',$plan->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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