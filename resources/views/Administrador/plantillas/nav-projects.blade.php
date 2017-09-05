<!DOCTYPE html>
<html lang="en">

<head>
                <!-- TRUMBOWYG -->
        <link rel="stylesheet" href="{{asset('plugins/Trumbowyg/ui/trumbowyg.css')}}">
        
        <!--Chosen -->
        <link rel="stylesheet" href="{{asset('plugins/Chosen-1.8.0/chosen.css')}}">
        
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">

        <!-- Bootstrap CSS File -->
        <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/animate-css/animate.min.css') }}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="{{ asset('css/Admin/styles.css') }}" rel="stylesheet">


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <header id="header">
                <div id="logo" class="pull-left">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/Logoo.png')}}"></a>
                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png')}}"/></a>
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav navbar-right top-nav">

                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                        <li class="dropdown form-group">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
                                {{ Auth::user()->name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                                </li>

                                <li>
                                    <a href="{{ url('/users')}}"><i class="fa fa-fw fa-gear"></i>Usuarios</a>

                                </li>
                                <li>
                                    <a href="{{ url('projects')}}"><i class="fa fa-fw fa-envelope"></i>Proyectos</a>                            
                                </li>
                                <li class="divider"></li>

                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-power-off"></i>
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li> 
                            </ul></li>
                        @endif
                    </ul>

                    

                </nav>
            
        </header>
        @yield('content')

        <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="{{ url('/home')}}"><i class="fa fa-fw fa-dashboard"></i>Inicio</a>
                    </li>
                    
                    <li>
                        <a href="{{ url('Historys')}}"><i class="fa fa-fw fa-desktop"></i>Historias</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-gear"></i>Ajustes<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Equipo de trabajo</a>
                            </li>
                            <li>
                                <a href="#">@yield('proyecto','default')</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="Ventana/index.html"><i class="fa fa-fw fa-power-off"></i> Cerrar sesion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>         
   
        <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
        <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
        <script src="{{asset('lib/morphext/morphext.min.js')}}"></script>
        <script src="{{asset('lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('lib/stickyjs/sticky.js')}}"></script>
        <script src="{{asset('lib/easing/easing.js')}}"></script>
        <script src="{{asset('plugins/Trumbowyg/trumbowyg.js')}}"></script>
        <script src="{{asset('plugins/Chosen-1.8.0/chosen.jquery.js')}}"></script>

        <!-- Template Specisifc Custom Javascript File -->
        <script src="{{asset('js/custom.js')}}"></script>
        @yield('js')
</body>

</html>
