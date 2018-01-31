<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Playland-Administrador</title>
    @yield('styles')
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('vendors/dropzone/dropzone.css')}}">
<!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body>

<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ ucfirst(Auth::user()->name) }}</strong>
                             </span> <span class="text-muted text-xs block">Administrador<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-s">
                                <li>  <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </li>
                            </ul>
                    </div>
                    <div class="logo-element">
                       Admin
                    </div>
                </li>
                <li>
                    <a href="{{route('home')}}"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
                </li>

                <li>
                    <a href="{{route('slider.index')}}"><i class="fa fa-cube" aria-hidden="true"></i> <span class="nav-label">Slider</span></a>
                </li>
                <li>
                    <a href="{{route('contacto.edit',1)}}"><i class="fa fa-rss" aria-hidden="true"></i>
 <span class="nav-label">Información</span></a>
                </li>

                <li>
                    <a href="{{route('taller.edit',1)}}"><i class="fa fa-bars" aria-hidden="true"></i> <span class="nav-label">After School</span></a>
                </li>

                <li>
                    <a href="{{route('planes.index')}}"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <span class="nav-label">Cumpleaños</span></a>
                </li>
                <li>
                    <a href="{{route('albums.index')}}"><i class="fa fa-paper-plane" aria-hidden="true"></i><span class="nav-label">Albums</span></a>
                </li>
                <li>
                    <a href="{{route('documentos.index')}}"><i class="fa fa-file-text" aria-hidden="true"></i><span class="nav-label">Documentos Descargables</span></a>
                </li>
                 <li>
                    <a href="{{route('users.index')}}"><i class="fa fa-users" aria-hidden="true"></i><span class="nav-label">Usuarios</span></a>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                   
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Salir
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                            </form>
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        
        <!-- contendido -->
         @yield('content')
        <!-- contendido -->
        <div class="footer">
          
            <div>
                <strong>Copyright</strong>  &copy; 2017
            </div>
        </div>

    </div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
@yield('scripts')

<!-- Custom and plugin javascript -->
<script src="{{asset('assets/js/inspinia.js')}}"></script>
<script src="{{asset('assets/js/plugins/pace/pace.min.js')}}"></script>
<!-- Ckeditor -->
<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="{{asset('vendors/dropzone/dropzone.js')}}"></script>
 <script>

   Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 1024,
            maxFiles: 100,             
            createImageThumbnails:true,
            resizeWidth:1200,
            addRemoveLinks:true,
            init: function() {

                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                   
                });
                
                this.on("complete", function(file) {
                    alert("archivos almacenados correctamente");
                    myDropzone.removeFile(file);
                });
 
                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };

     
</script> 
</body>

</html>
