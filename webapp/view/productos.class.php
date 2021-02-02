<?php require "../controller/seguridad.class.php";?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Webapp | Aplicación para autentificarse.</title>
    <!-- Bootstrap core CSS -->
    <link href="../resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../resources/bootstrap/css/jumbotron.css" rel="stylesheet">
    <link href="../resources/bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Webapp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Acerca</a>
            </li>          
          </ul>  
          <span class="text-while">
          Bienvenido: <?php echo $_SESSION['miSesion']['nombre']?>
          <span> &nbsp;
          <a class="btn btn-secondary" href="../controller/salir.class.php">Cerrar Sesión</a>
        </div>
      </nav>
    </header>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          
        </div>
      </div>
      <br>
      <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
          <img src="../resources/producto4.jpg" height="500" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mochila Negra para Computadora</h5>  <p class="card-text">Mochila color negra para computadora, entrada para audifonos, con soporte.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">$800</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../resources/producto2.jpg" height="500" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mochila Galaxy</h5>
        <p class="card-text">Mochila escolar de Galaxia, entrada de audifono, 2 bolsas, con doble soporte.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">$650</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../resources/producto6.jpg" height="500" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mochila Michis</h5>
        <p class="card-text">Mochila con estampado de gatitos enamorados, 2 bolsas, entrada para audifonos, reforzada.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">$450</small>
      </div>
    </div>
  </div>
</div>
<br>
<hr>
      <form method="post" action="pedido.class.php">
      <button class="btn btn-lg btn-primary" type="submit" name="pedido" value="login">Entrar</button>
      </form>
      <hr>

      <div class="container"> 
        
                  
		  <hr>	
      </div> <!-- /container -->

    </main>

    <footer class="footer">
      <div class="container">
        <p>
          &copy; 2021 Webapp M.Andrade.PamelaMichell
        </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="resources/bootstrap/js/jquery-3.5.1.js"></script> 
    <script src="resources/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
