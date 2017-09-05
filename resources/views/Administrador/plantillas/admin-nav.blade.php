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
        <link rel="stylesheet" type="text/css" href="">
        <!-- Main Stylesheet File -->
        <link href="{{ asset('css/Admin/styles.css') }}" rel="stylesheet">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Bootstrap Core CSS -->
        <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">

        <!-- Bootstrap CSS File -->
        <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/animate-css/animate.min.css') }}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

         <!-- Bootstrap Core CSS -->
        <link href="{{ asset('complementos/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('complementos/css/sb-admin.css') }}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{ asset('complementos/css/plugins/morris.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('complementos/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    </head>

    <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="/home">
                        <img src="{{ asset('img/logoo.png')}}" width="50px" height="50px" alt="" title="" />
                        <img src="{{ asset('img/logo.png')}}" width="150px" height="50px" alt="" title="" />
                    </a>
            </div>

            <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-group"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu message-dropdown">
                            <li>
                                <a href="{{ url('/users')}}"><i class="fa fa-user"></i> Gestionar usuarios</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-server"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu message-dropdown">
                            <li>
                                <a href="{{ url('Administrador/projects')}}"><i class="fa fa-laptop"></i> Proyectos</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                
                    
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
                        {{ Auth::user()->name }} {{ Auth::user()->last_name }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Ajustes</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                               <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <i class="fa fa-fw fa-power-off"></i>Cerrar sesion
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>

                    </li>
                </ul>
                @endif
        </nav>
        @yield('content')
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


