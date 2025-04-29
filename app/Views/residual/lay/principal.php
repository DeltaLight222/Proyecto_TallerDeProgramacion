<!DOCTYPE html>
<html>

	
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Primera Parte</title>
<style>
      p {color: palevioletred;}
    </style>
    </head>
<body>
      <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">COMPUNEA -Tienda de Informatica</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(route_to('quienessomos'));?>">QUIENES SOMOS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Productos 1</a></li>
            <li><a class="dropdown-item" href="#">Productos 2</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Producto 3</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="#">Contacto</a>
        </li>
        </li>
        <li class="nav-item">
          <ae class="nav-link"  href="#">Terminos y usos</a>
        </li>
        </li class="nav-item">
          <a class="nav-link"  href="#">Registrarse</a>
        </li>
        </li class="nav-item">
          <a class="nav-link"  href="#">INICIAR SESION</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
      </header>


 <section>


<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" > 
      <img src="<?php echo base_url('public/assets/img/img1.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('public/assets/img/img2.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('public/assets/img/img3.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('public/assets/img/img4.jpg'); ?>" class="d-block w-100" alt="...">
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
<footer>
      <div class="row">
            <div class="col">INFORMACION</div>
            <div class="col">Column</div>
            <div class="col">Column</div>
      </div>
      <br>
      <a href="https://www.facebook.com/"><img alt="siguenos en facebook" height="32" src="<?php echo base_url("public/assets/img/face.png"); ?>" title="siguenos en facebook" width="32" /></a>

               <a href="https://twitter.com/"><img alt="siguenos en Twitter" height="32" src="<?php echo base_url("assets/img/twitter.png"); ?>" title="siguenos en Twitter" width="32" /></a>
              <a href="https://www.instagram.com/"<><img alt="siguenos en Instagram" height="32" src="<?php echo base_url("assets/img/instagram.png"); ?>" title="siguenos en Instagram" width="32" /></a>
      </div>
               
</footer>
               
<script src="<?php echo base_url('public/assets/js/bootstrap.bundle.js'); ?>"></script>
</body>
</html>