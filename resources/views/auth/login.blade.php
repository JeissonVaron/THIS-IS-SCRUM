
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>LOGIN</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
        <meta property="og:title" content="">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="">
        <meta property="og:description" content="">

        <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="">

        <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
        <link href="favicon.ico" rel="shortcut icon">

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/animate-css/animate.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    </head>

     <body>
        <div id="preloader"></div>
        <header id="header">
            <div class="container">

                <div id="logo" class="pull-left">
                    <img src="{{ asset('img/Logoo.png')}}">
                    <img src="{{ asset('img/logo.png')}}" alt="" title="" /><a href="#hero"></a>
                    <!-- Uncomment below if you prefer to use a text image -->
                    <!--<h1><a href="#hero">Header 1</a></h1>-->
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">

                        <li><a href="{{ url('/register') }}">REGISTRATE</a></li>
                        <li><a href="{{ url('/login') }}">INICIAR SESION</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </header> 
        <!--==========================
          Hero Section
        ============================-->
        <section id="hero">
            <div class="hero-container">
                <div class="wow fadeIn">
                    <div class="hero-logo">
                        <img src="{{ asset('img/Logoo.png')}}" width="75"><BR>
                        
                    </div>
                    <h2> <span class="rotating">Gestiona criterios,Gestiona proyectos,Gestiona historias,Gestiona Sprints,Gestiona tareas,Gestiona todo tu proyecto!</span></h2>
                    <div class="actions">
                    <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">INICIA SESION</div>
                                            <div class="panel-body">
                                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                                    {{ csrf_field() }}

                                                    <div class="form-group{{ $errors->has('name_user') ? ' has-error' : '' }}">
                                                        <label for="name_user" class="col-md-4 control-label">Usuario</label>

                                                        <div class="col-md-6">
                                                            <input id="name_user" type="text" class="form-control" name="name_user" value="{{ old('name_user') }}" required autofocus>

                                                            @if ($errors->has('name_user'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('name_user') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                        <label for="password" class="col-md-4 control-label">Contraseña</label>

                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control" name="password" required>

                                                            @if ($errors->has('password'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-4">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Recordarme
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-8 col-md-offset-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                ENTRAR
                                                            </button>

                                                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                                                ¿Olvidaste tu contraseña?
                                                            </a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </section>

        
      

        <!--==========================
          Services Section
        ============================-->
        <section id="services">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Servicios</h3>
                        
                        <p class="section-description">A continuación, un breve listado de lo que puedes realizar en nuestra página web.</p>
                        <div class="section-title-divider"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 service-item">
                        <div class="service-icon"><i class="fa fa-desktop"></i></div>
                        <h4 class="service-title"><a href="">Gestionar proyectos</a></h4>
                        <p class="service-description">Crea tus propios proyectos y sé el dueño.</p>
                    </div>
                    <div class="col-md-4 service-item">
                        <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
                        <h4 class="service-title"><a href="">Gestionar historias</a></h4>
                        <p class="service-description">Crea historias con descripciones y determinar evaluaciones para las mismas.</p>
                    </div>
                    <div class="col-md-4 service-item">
                        <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
                        <h4 class="service-title"><a href="">Gestionar criterios</a></h4>
                        <p class="service-description">Crea tus criterios a tus historias y evalúalas tú mismo para seguir el progreso de tu equipo.p>
                    </div>
                    <div class="col-md-4 service-item">
                        <div class="service-icon"><i class="fa fa-photo"></i></div>
                        <h4 class="service-title"><a href="">Gestionar tareas</a></h4>
                        <p class="service-description">Crea tareas y asígnalas para que tu equipo de trabajo las pueda realizar y testear.</p>
                    </div>
                    <div class="col-md-4 service-item">
                        <div class="service-icon"><i class="fa fa-road"></i></div>
                        <h4 class="service-title"><a href="">Gestionar equipo de desarrollo</a></h4>
                        <p class="service-description">Gestiona a tu gusto tu equipo de trabajo para determinar que personas harán determinadas tareas en tu proyecto.</p>
                    </div>
                    <div class="col-md-4 service-item">
                        <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
                        <h4 class="service-title"><a href="">Video conferencias</a></h4>
                        <p class="service-description">Realiza video conferencias con tu equipo de proyecto para mantenerte al tanto de cómo va el progreso de tu proyecto, Daily Scrum.</p>
                    </div>
                </div>
            </div>  
        </section>

        
        <!--==========================
          Footer
        ============================--> 
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            &copy; Copyright © Scrum 2017 <strong>All Rights Reserved</strong>. 
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Required JavaScript Libraries -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="lib/superfish/hoverIntent.js"></script>
        <script src="lib/superfish/superfish.min.js"></script>
        <script src="lib/morphext/morphext.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/stickyjs/sticky.js"></script>
        <script src="lib/easing/easing.js"></script>

        <!-- Template Specisifc Custom Javascript File -->
        <script src="js/custom.js"></script>

        <script src="contactform/contactform.js"></script>

        
    </body>
</html>

@section('content')

@endsection
