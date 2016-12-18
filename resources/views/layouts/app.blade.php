<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scrum</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/stylemenu.css"> <!-- Resource style --> 	
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/IconoScrum.png" />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="css/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.css">
    <link rel="stylesheet" href="css/Home.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="css/_all-skins.min.css">
    
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <!-- Styles -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    
</head>
<body id="app-layout container">
 <!--Navbar-->
    <nav class="navbar navbar-dark bg-primary navbar-fixed-top">
        <!-- Collapse button-->
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
            <i class="fa fa-bars"></i>
        </button>
        <div id="navpadding">
            <!--Collapse content-->
            <div class="collapse navbar-toggleable-xs" id="collapseEx2">
                <!--Navbar Brand-->
                <img class="navbar-brand ico" src="images/IconoScrum.png" >    
                <a id="brand" class="navbar-brand">Scrum</a>
                <ul id="options">
                   <li id="li-mar" class="dropdown">
                            <span  class="fa fa-folder-open-o dropbtn"></span>
                            <div id="li-project" class="dropdown-content" >
                                <a href=""><h3 class="span1">Proyecto1</h3></a>
                                <button type="" class="btn btn-block btn-darkness">Gestionar proyectos</button>
                                <button type="" class="btn btn-block btn-success">Nuevo Proyecto</button>
                            </div> 
                    </li>
                      <li id="li1" class="dropdown perfil user user-menu">
                        <a href="#" >
                        <img src="images/Home.jpg" class="user-image img" alt="User Image">
                        <span id="user" class="hidden-xs dropbtn">Alexander Pierce</span>
                        </a>
                         <div id="dlg_perfil" class="dropdown-content">
                                <a href="#">Ver perfil</a>
                                <a href="#">Editar perfil</a>
                                <a href="#">Cambiar contraseña</a>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
                   
                    
                <!--Links-->
                 
                </div>

        
            <!--/.Collapse content-->
        </div>
    </nav>
    <header>

    </header>
    <main>
        @yield('content')
    </main>
    <!--Footer-->
    <footer class="page-footer center-on-small-only navbar-fixed-bottom">
        <!--Social buttons-->
        <div class="social-section">
            <ul>
                <li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
                <li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
                <li><a class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
                <li><a class="btn-floating btn-small btn-li"><i class="fa fa-linkedin"> </i></a></li>
                <li><a class="btn-floating btn-small btn-git"><i class="fa fa-github"> </i></a></li>
                <li><a class="btn-floating btn-small btn-pin"><i class="fa fa-pinterest"> </i></a></li>
                <li><a class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
            </ul>
        </div>
        <!--/.Social buttons-->
        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright: <a href="http://www.MDBootstrap.com"> ScrumProject.com </a>
            </div>
        </div>
        <!--/.Copyright-->
    </footer>
    <!--/.Footer-->
   <!-- SCRIPTS -->
   <!-- JQuery -->
   <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
   <!-- Bootstrap tooltips -->
   <script type="text/javascript" src="js/tether.min.js"></script>
   <!-- Bootstrap core JavaScript -->
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <!-- MDB core JavaScript -->
   <script type="text/javascript" src="js/mdb.min.js"></script>
   <script src="js/jquery-2.1.4.js"></script>
   <script src="js/main.js"></script>	
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <!-- FastClick -->
    <script src="js/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="js/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="js/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="js/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="js/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="js/demo.js"></script>
      <!-- Angular Material requires Angular.js Libraries -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
    <!-- Angular Material Library -->
    <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>
    <!-- page script -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="/js/app.js"/>
    <!-- JavaScripts -->
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    
</body>
</html>