@extends('layouts.app')
@section('styles')

 <!-- Loading Bootstrap -->
    <link href="{{asset('vendor/flat-ui/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="{{asset('vendor/flat-ui/css/flat-ui.css')}}" rel="stylesheet">

@endsection
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                  <h1>Slider</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('home')}}">Inicio</a>
                        </li>
                        <li>
                            <a href="{{route('slider.index')}}">Slider</a>
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
                           <a href="{{route('slider.create')}}" class="btn btn-success btn-sm">Agregar</a>
                           
                        </div>
                        <div class="ibox-content">

                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            <strong>{{ Session::get('message', '') }} </strong>
                        </div>
                        @endif

                        <!--Tabla de slider-->   
                        @include('slider.table')
                        <!--Fin tabla Slider-->
                        </div>
</div>
</div>
      
 </div>
 </div>
 @endsection

 @section('scripts')
    <!-- Load JS here for greater good =============================-->


<script src="{{asset('vendor/jquery-ui-1.10.4/js/jquery-ui-1.10.4.custom.min.js') }}"></script>
<script src="{{asset('vendor/flat-ui/js/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset('vendor/flat-ui/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/flat-ui/js/bootstrap-select.js')}}"></script>
<script src="{{asset('vendor/flat-ui/js/bootstrap-switch.js')}}"></script>
<script src="{{asset('vendor/flat-ui/js/flatui-checkbox.js')}}"></script>
<script src="{{asset('vendor/flat-ui/js/flatui-radio.js')}}"></script>
<script src="{{asset('vendor/flat-ui/js/jquery.tagsinput.js') }}"></script>
<script src="{{asset('vendor/flat-ui/js/jquery.placeholder.js')}}"></script>
<script src="{{asset('vendor/bootstrap-growl/jquery.bootstrap-growl.min.js')}}"></script>  
   

    <script>



    var App = {};
App.notify = {
        message: function(message, type){
            if ($.isArray(message)) {
                $.each(message, function(i, item){
                    App.notify.message(item, type);
                });
            } else {
                $.bootstrapGrowl(message, {
                    type: type,
                    delay: 4000,
                    width: 'auto'
                });
            }
        },

        danger: function(message){
            App.notify.message(message, 'danger');
        },
        success: function(message){
            App.notify.message(message, 'success');
        },
        info: function(message){
            App.notify.message(message, 'info');
        },
        warning: function(message){
            App.notify.message(message, 'warning');
        },
        validationError: function(errors){
            $.each(errors, function(i, fieldErrors){
                App.notify.danger(fieldErrors);
            });
        }
    };

  
    // CSRF protection
$.ajaxSetup(
{
    headers:
    {
        'X-CSRF-Token': $('input[name="_token"]').val()
    }
});
     var changePosition = function(requestData){
        $.ajax({
            'url': '../public/sort',
            'type': 'POST',
            'data': requestData,
            'success': function(data) {
                if (data.success) {
                    console.log('Saved!');
                } else {
                    console.error(data.errors);
                }
            },
            'error': function(){
                console.error('Something wrong!');
            }
        });
    };

    $(document).ready(function(){
        var $sortableTable = $('.sortable');
        if ($sortableTable.length > 0) {
            $sortableTable.sortable({
                handle: '.sortable-handle',
                axis: 'y',
                update: function(a, b){

                    var entityName = $(this).data('entityname');
                    var $sorted = b.item;

                    var $previous = $sorted.prev();
                    var $next = $sorted.next();

                    if ($previous.length > 0) {
                        changePosition({
                            parentId: $sorted.data('parentid'),
                            type: 'moveAfter',
                            entityName: entityName,
                            id: $sorted.data('itemid'),
                            positionEntityId: $previous.data('itemid')
                        });
                    } else if ($next.length > 0) {
                        changePosition({
                            parentId: $sorted.data('parentid'),
                            type: 'moveBefore',
                            entityName: entityName,
                            id: $sorted.data('itemid'),
                            positionEntityId: $next.data('itemid')
                        });
                    } else {
                        console.error('Something wrong!');
                    }
                },
                cursor: "move"
            });
        }
    });

</script>
 @endsection