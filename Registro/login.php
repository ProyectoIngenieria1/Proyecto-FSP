<?php

?>

<!doctype html>

<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>Iniciar sesión</title>

    <!-- inicio de todas las importaciones de la plantilla -->
    <link href="/Proyecto/css/bootstrap.min.css" rel="stylesheet">
  <link href="/Proyecto/css/general.css" rel="stylesheet">
  <link href="/Proyecto/css/custom.css" rel="stylesheet">
  <!-- fin de todas las importaciones de la plantilla -->


</head>


<body id="home">

  <!-- Preloader -->
  <div id="preloader">
    <div id="status"></div>
  </div>
  
  <!-- FullScreen -->
    
  
  <!-- NavBar principio-->
  <nav class="navbar-default" role="navigation">
    <div class="container">
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
        <a class="navbar-brand" href="http://localhost/Proyecto2/login.php" title="Volver a la página principal">Iniciar sesión</a>
      </div>

      <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          
          <li class="menuItem"><a href="/Proyecto2/login.php">Volver a Inicio</a></li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Salir del sistema</a></li>
                    <li><a href="#">Perfíl</a></li>
                    <li><a href="#">Opciones</a></li>
                  </ul>
              </li>
            </ul>

      </div>

       
    </div>
  </nav> 
  <!-- NavBar fin-->

  <!-- inicio div login -->

   <div id="LOGIN" class="content-section-b" style="border-top: 0">
    <div class="container">

      <div class="col-md-6 col-md-offset-3 text-center wrap_title">
        <h2>Iniciar sesión</h2>    
      </div>
      
      <div class="row">

        <div class="col-sm-12 wow fadeInDown text-center">
        <form class="form-horizontal">


        <div class="form-group">
              <label for="email" class="col-lg-5 control-label" >Correo electrónico:</label>
              <div class="col-lg-4">
              <input type="text" class="form-control" id="email" spellcheck="false" placeholder="juanperez12@hotmail.com"/>
            </div>
            </div>


            <div class="form-group">
              <label for="password" class="col-lg-5 control-label" >Contraseña:</label>
              <div class="col-lg-4">
              <input type="password"  class="form-control" id="password" placeholder="*********"/>
            </div>
            </div>

           

          <div>
              <label></label>
              <input type="submit" value="Iniciar sesión" id="Login" class="button"/>
            </div>

            <div class="text-center">
            <span class="txt1">
            ¿No tienes una cuenta?
            </span>

            <a href="#" class="txt2 hov1">
              Regístrate
            </a>
          </div>
  
  <!-- fin div login -->



    <!-- JavaScript -->
    <script src="/Proyecto/js/jquery-1.10.2.js"></script>
    <script src="/Proyecto/js/bootstrap.js"></script>
  <script src="/Proyecto/js/script.js"></script>
 

</body>

</html>