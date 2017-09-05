
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Scrum SENA</title>
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
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">

        <!-- Bootstrap CSS File -->
        <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/animate-css/animate.min.css') }}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
                    <li class="menu-active"><a href="#hero">INICIO</a></li>
                        <li><a href="#about">¿QUE ES SCRUM?</a></li>
                        <li><a href="#services">SERVICIOS  </a></li>
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
                        <img class="" src="{{ asset('img/logo.png')}}" alt="Imperial">
                    </div>
                    <h2> <span class="rotating">Gestiona criterios,Gestiona proyectos,Gestiona historias,Gestiona Sprints,Gestiona tareas,Gestiona todo tu proyecto!</span></h2>
                    <h2>Mediante la metodología Scrum</h2>
                    <div class="actions">
                        <a href="#about" class="btn-get-started">Mas información</a>
                        <a href="#services" class="btn-services">Servicios</a>
                    </div>
                </div>
            </div>
        </section>

        <!--==========================
          Header Section
        ============================-->
        <!-- #header -->

        <!--==========================
          About Section
        ============================-->
        <section id="about">
            <div class="container wow fadeInUp">
                <div class="row">

                    <div class="col-md-12">
                        <h3 class="section-title">¿QUE ES SCRUM?</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">Scrum es una metodología de trabajo que facilita el desarrollo de cualquier proyecto, mediante la división de tareas simples y realizables por un determinado equipo de trabajo.</p>
                    </div>
                </div>
            </div>
            <div class="container about-container wow fadeInUp">
                <div class="row">
                <img src="{{ asset('img/about-img.jpg')}}" class="col-md-6 img-responsive">
                    <div class="col-md-6  about-content">
                        <h2 class="about-title">¿COMO FUNCIONA?</h2>
                        <p class="about-text">
                            Debe haber una persona que crea el proyecto llamado Product Owner, esta persona solo recibirá este título si es el creador de un proyecto, esta persona es la encargada de expresar los requerimientos que debe tener el proyecto, también es la encargada gestionar el equipo con el que se trabajara, este equipo se divide en dos, el Master Scrum y el Team Scrum, otras de las funciones del Product Owner es la creación de historias, gestión de Sprint, evaluar determinadas historias y comunicarse con su equipo de proyecto. 
                        </p>
                        <p class="about-text">
                            Las funciones del Master Scrum son revisar y vigilar que todo lo que se haga en el proyecto, para dar informes al Product Owner
                        </p>
                        <p class="about-text">
                            El Team Scrum es el encargado de crear las tareas y realizarlas según parámetros dados por el Product Owner, estas tareas lo aconsejable es que sean simples y realizables en el transcurso de 24 horas, el Team Scrum se divide en otros roles, pero básicamente estos roles son de gestionar las tareas y testear las tereas previamente realizadas, los roles del Team Scrum son gestionables, en pocas palabras tu puedes crear tantos roles como quieras mientras se dividan en hacer tareas y testear tareas
                        </p>
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
          Subscrbe Section
        ============================-->  
        <section id="subscribe">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="subscribe-title">Inicia sesión o regístrate</h3>
                        <p class="subscribe-text">Si eres nuevo envía tu formulario de registro y te confirmaremos posteriormente si tu registro fue exitoso</p>
                    </div>
                    <div class="form-group">
                        <div class="form-group col-md-3 subscribe-btn-container">
                        <a class="subscribe-btn"  href="{{ url('/register') }}">REGISTRATE</a></li>
                        
                        </div>
                        <div class="form-group col-md-3 subscribe-btn-container">
                            <a class="subscribe-btn" href="{{ url('/login') }}">INICIAR SESION</a>
                        </div>
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
        <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
        <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
        <script src="{{asset('lib/morphext/morphext.min.js')}}"></script>
        <script src="{{asset('lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('lib/stickyjs/sticky.js')}}"></script>
        <script src="{{asset('lib/easing/easing.js')}}"></script>

        <!-- Template Specisifc Custom Javascript File -->
        <script src="{{asset('js/custom.js')}}"></script>

        <script src="{{asset('contactform/contactform.js')}}"></script>

        
    </body>
</html>