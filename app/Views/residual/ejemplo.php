<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="<?php echo base_url('public/assets/css/bootstrap.css'); ?>" rel="stylesheet">

    <title>Hello, world!</title>

  </head>

  <body>

<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container"> <?php echo base_url();?>Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url();?">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=<?php echo base_url('comercial')>COMERCIAL</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            DESPLEGABLE
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href=<?php echo base_url()>TERMINOS</a></li>
            <li><a class="dropdown-item" href=<?php echo base_url()>QUIENES SOMOS</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href=<?php echo base_url()>FORMULARIOS</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href=<?php echo base_url()>Disabled</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>

  
</header><!-- /header -->


<section>


<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" > 
      <img src="<?php echo base_url('public/assets/img/imagen1.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('public/assets/img/imagen2.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('public/assets/img/imagen3.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  
</section>



   
    <script src="<?php echo base_url('public/assets/js/bootstrap.bundle.js'); ?>"></script>

  </body>
</html>