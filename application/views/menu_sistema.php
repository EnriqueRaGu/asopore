<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Consultar usuario</title>
    
      <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    
   <!-- Plugin CSS -->
   <link href="<?=base_url()?>vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
  
  <!-- Custom styles for this template -->
	 <link rel="stylesheet" href="<?=base_url()?>css/menusistema1.css">
   <link rel="stylesheet" href="<?=base_url()?>css/afiliarasociado.css">
   <link rel="stylesheet" href="<?=base_url()?>css/afiliados2.css">
   <link rel="stylesheet" href="<?=base_url()?>css/beneficioformulario1.css">
   <link rel="stylesheet" href="<?=base_url()?>css/crearreporte.css">
   <link rel="stylesheet" href="<?=base_url()?>css/aportes.css">
   <link rel="stylesheet" href="<?=base_url()?>css/creditos.css">
</head>

  <script type="text/javascript">
    function confirmar()
    {
      var res = confirm("¿Esta seguro que quiere Eliminar?");
      if (res == true) {
        return true;
      }else {
        return false;
      }
    }
  </script>

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
<img class="img-fluid mb-5 d-block mx-auto imgasopore" src="<?=base_url()?>img/asopore1.png" alt=""> 
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
              <li><a href="<?=base_url()?>index.php/cartera/ir_reporte">Aportes</a></li>
              <li><a href="<?=base_url()?>index.php/cartera">Egresos</a></li>
              <li><a href="<?=base_url()?>index.php/cartera/ir_creditos">Creditos</a></li>
            </ul>
          </li>
        </ul>
        <a class="nav-link irlogin" href="<?=base_url()?>index.php/login">Cerrar sesion</a>
      </div>
    </div>
  </nav>