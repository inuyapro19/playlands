<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <img src="{{asset('img/logo-header.png')}}" width="200">

            </div>           
          
           
            <form class="m-t" role="form" method="post" action="{{ route('login') }}">
                 {{ csrf_field() }}
                 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         

                            
                                <input id="email" placeholder="Email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </div>
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                          
                                <input id="password" placeholder="Contraseña" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                   

                        <div class="form-group">
                           
                                <button type="submit" class="btn btn-primary">
                                    Entrar
                                </button>

                               
                            
                        </div>

              
            </form>
           
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

</body>

</html>
