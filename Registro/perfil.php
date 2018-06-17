<?php

?>

<!doctype html>

<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>Configuración de cuenta</title>

    <!-- inicio de todas las importaciones de la plantilla -->
    <link href="/Proyecto-FSP/registro/css/bootstrap.min.css" rel="stylesheet">
  <link href="/Proyecto-FSP/registro/css/general.css" rel="stylesheet">
  <link href="/Proyecto-FSP/registro/css/custom.css" rel="stylesheet">
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
        
        <a class="navbar-brand" href="" title="Volver a la página principal">FAST SALES PLATFORM</a>
      </div>

      <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          
          <li class="menuItem"><a href="http://localhost/Proyecto-FSP/registro/login.php">Volver a Inicio</a></li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Salir del sistema</a></li>
                    <li><a href="#">Opciones</a></li>
                  </ul>
              </li>
            </ul>

      </div>

       
    </div>
  </nav> 
  <!-- NavBar fin-->

  <!-- inicio div Configuracion de Perfil -->

   <div id="configuracion de perfil" class="content-section-b" style="border-top: 0">
    <div class="container">

      <div class="col-md-6 col-md-offset-3 text-center wrap_title">
        <h2>Configuración de cuenta</h2>    
      </div>
      
      <div class="row">

        <div class="col-sm-12 wow fadeInDown text-center">
        <form class="form-horizontal">

            <div class="form-group">
              <label for="name" class="col-lg-5 control-label">Nombre Completo:</label>
              <div class="col-lg-4">
              <input type="text" class="form-control"  id="name" spellcheck="false" placeholder="Juan Perez Mendoza"/>
            </div>
            </div>

         
            <div class="form-group">
              <label for="email" class="col-lg-5 control-label" >Correo electrónico:</label>
              <div class="col-lg-4">
              <input type="text" class="form-control" id="email" spellcheck="false" placeholder="juanperez12@hotmail.com"/>
            </div>
            </div>


            <div class="form-group">
              <label for="telefono" class="col-lg-5 control-label" >Teléfono:</label>
              <div class="col-lg-4">
              <input type="telefono"  class="form-control" id="telefono" placeholder="22345678"/>
            </div>
            </div>

              <div class="form-group">
              <label for="password-again" class="col-lg-5 control-label" >Contraseña:</label>
              <div class="col-lg-4">
              <input type="password"  class="form-control" id="password-again" placeholder="*********"/>
            </div>
            </div>

            <div class="form-group">
              <label for="name" class="col-lg-5 control-label">Dirección:</label>
              <div class="col-lg-4">
              <input type="text" class="form-control"  id="address" spellcheck="false" placeholder="colonia la vega"/>
            </div>
            </div>

            <div class="form-group">
              <label></label>
              <input type="submit" value="Editar" id="Editar" class="button"/>
              <input type="submit" value="Actualizar cambios" id="Actualizar cambios" class="button"/>
            </div>      

  <!-- fin div configuracion PERFIL -->


  

     <!-- JavaScript -->
    <script src="/Proyecto-FSP/registro/js/jquery-1.10.2.js"></script>
    <script src="/Proyecto-FSP/registro/js/bootstrap.js"></script>
  <script src="/Proyecto-FSP/registro/js/script.js"></script>
</body>

</html>