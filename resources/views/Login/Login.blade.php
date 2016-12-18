<!--Start html code-->
</<!DOCTYPE html>
<html lang="en">
    <!--Start head-->
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <link href="css/Login.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="/images/IconoScrum.png" />
         <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    </head>
    <!--end head-->
    <!--Start body-->
    <body class="wrapper">
     <header> 
          <!--Navbar-->
          <nav class="navbar navbar-dark bg-primary">

              <!-- Collapse button-->
              <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
                  <i class="fa fa-bars"></i>
              </button>

              <div id="Scrumico">

                  <!--Collapse content-->
                  <div class="collapse navbar-toggleable-xs" id="collapseEx2">
                      <!--Navbar Brand-->
                      <img class="navbar-brand ico" src="images/IconoScrum.png" >  
                      <a class="navbar-brand">Scrum</a>
                  </div>
                  <!--/.Collapse content-->

              </div>

          </nav>
      </header>

       <video src="video/scrum.mp4" autoplay="true" loop="true">
                        
       </video>
        <div class="container">

       <!--edn header-->
       <video src="video/scrum.mp4" autoplay="true" loop="true">
                        
       </video>
        <div class="container">
        <!--Start header-->
       <header>
       
       </header>
       <!--edn header-->
       <!--Start main-->
       <main class="main">   
             <!--Start form-->
            <form class="FormInfo"  method="POST" action="{{ url('/login') }}">
              {{ csrf_field() }}
                <div class="col-md-6">
                <!--Form with header-->
                <div class="card ">
                    <div class="card-block">
                        <!--Header-->
                        <div class="form-header blue-gradient " >
                            <h3><i class="fa fa-user"></i> Inicio de sesion:</h3>
                        </div>

                        <!--Body-->
                        <div class="md-form form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="email" id="email" name="email" class="form-control validate"  value="{{ old('email') }}" required autofocus>
                            <label data-error="Error"  data-success="Correcto" for="email">Digita tu correo</label>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="md-form form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <i class="fa fa-lock prefix"></i>
                            <input id="password" name="password" type="password"  class="form-control validate ">
                            <label data-error="Wrong "  data-success="Right" for="password">Digita tu contraseña</label>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="modal-footer" class="col-md-12">
                            <div class="options col-md-12" >
                                <div class="col-md-4">
                                    <button id="Button"  type="submit" class="btn btn-indigo btn-block ">Ingresar.</button>
                                </div>
                                <div  class="col-md-8">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                        <p>No se encuentra <a href="{{ url('/register') }}">registrado?  </a></p>
                                        <p>Olvido <a href="{{ url('/RecordarContrasena') }}"> su contraseña?</a></p> 
                                </div> 
                            </div>
                        </div>

                    </div>
                <!--/Form with header-->
                </div>
              </div>
            </form>
            <!--End form--> 
       </main>
       <!--end form-->

       <!-- SCRIPTS -->

       <!-- JQuery -->
       <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
       <!-- Bootstrap tooltips -->
       <script type="text/javascript" src="js/tether.min.js"></script>
       <!-- Bootstrap core JavaScript -->
       <script type="text/javascript" src="js/bootstrap.min.js"></script>
       <!-- MDB core JavaScript -->
       <script type="text/javascript" src="js/mdb.min.js"></script>
     
       <!--Start footer-->
       <footer> 
            
       </footer>
       <!--End form-->
    </body>
    <!--End body-->
</html>
<!--End html code-->