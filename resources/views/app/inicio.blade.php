<!DOCTYPE html>
<!-- saved from url=(0049)https://getbootstrap.com/docs/4.0/examples/album/ -->
<html lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Galeria de Imagenes</title>

    <!-- Bootstrap core CSS -->
    <link href="components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="components/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/estilos.css" rel="stylesheet">
  </head>

  <body>

    <header>
        <nav class="navbar navbar-custom navbar-expand-lg" role="navigation">
          <div class="container">
            <div class="col-md-4">
              <a href="https://wwww.karateshotokan.cl" class="navbar-brand d-flex align-items-center">
                <img src="/img/logodojo.png" class="logo" alt="">
              </a>
            </div>
            {{-- <div class="col-md-4">
              <p class="titulo text-center"><span><i class="fas fa-images"></i></span> Galeria de Fotos</p>
            </div> --}}
            <div class="col-md-4">
              <p class="text-right" >
                
                <a href="https://wwww.karateshotokan.cl" style="color:white !important" >Pagina principal</a>
              </p>
            </div>
          </div>
        </nav>
    </header>


      <div class="container">
        <div class="container">
          <h1 class="page-header"><span><i class="fas fa-images"></i></span> Galeria de fotos</h1>
          <hr>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
          @yield('content')
      </main>
    <footer class="text-muted">
      <div class="container">
        <p class="text-center">Desarrollado por <a href=""> Diego Wilson</a> </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="components/jquery/dist/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/components/jquery/dist/jquery.slim.min.js"><\/script>')</script>
    <script src="components/popper.js/dist/popper.min.js"></script>
    <script src="components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="components/font-awesome/svg-with-js/js/fontawesome-all.min.js"></script>


<svg xmlns="http://www.w3.org/2000/svg" width="348" height="225" viewBox="0 0 348 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="17" style="font-weight:bold;font-size:17pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg>
</body>
</html>
