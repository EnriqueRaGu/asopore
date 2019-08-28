<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Asopore-Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?=base_url()?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="<?=base_url()?>vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="<?=base_url()?>css/estilo2.css">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">ASOPORE</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="nav">
          <li ><a href="">Gestion</a>
            <ul>
              <li><a href="<?=base_url()?>index.php/crear">Afiliar</a></li>
              <li><a href="<?=base_url()?>index.php/consultar">Asociados</a></li>
              <li><a href="<?=base_url()?>index.php/buscarusuario">Buscar</a></li>
            </ul>
          </li>

          <li><a href="">Cartera</a>
            <ul>
              <li><a href="<?=base_url()?>index.php/cartera/ir_beneficios">Beneficios</a></li>
              <li><a href="<?=base_url()?>index.php/cartera">Aportes</a></li>
              <li><a href="">Egresos</a></li>
              <li><a href="">Creditos</a></li>
            </ul>
          </li>
        </ul>

        <a class="nav-link irlogin" href="<?=site_url()?>/login/cerrarsesion">Cerrar sesion</a>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead bg-primary text-white text-center">
  <img class="img-fluid mb-5 d-block mx-auto" src="<?=base_url()?>img/asopore1.png" alt="">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto" src="img/asopore.png" alt="">
      <h1 class="text-uppercase mb-0">Asociación de Policias Retirados</h1>
    </div>
  </header>

 

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Ubicación</h4>
          <p class="lead mb-0"> Edif Centro Comercial Internacional Ofic. 315 Cúcuta Colombia<br>Calle 12 # 4-47 La Playa
          </p>
        </div>
        <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Redes Sociales</h4>
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                <i class="fab fa-fw fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                <i class="fab fa-fw fa-google-plus-g"></i>
              </a>
            </li>
            
          </ul>
        </div>
        <div class="col-md-4">
          <h4 class="text-uppercase mb-4"> Contacto </h4>
          <p class="lead mb-0">Tel. 5725632 Fax 5831994<br> Email asopore_1@hotmail.com</p>
            
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

 
  <script src="js/freelancer.min.js"></script>

</body>

</html>
