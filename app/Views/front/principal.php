
  <div class="container p-1">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner"><!-- elementos del carousel -->
              <div class="carousel-item active">
                <img src="assets/img/carrusel1.jpg" class="d-block w-100" alt="..." style="height: 75vh;">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            <div class="carousel-item">
                <img src="assets/img/carrusel2.jpg" class="d-block w-100" alt="..."style= "height: 75vh;">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/img/carrusel3.jpg" class="d-block w-100" alt="..."style= "height: 75vh;">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
          
            <!-- Otros elementos del carousel -->
        </div>
        <!-- Controles del carousel -->
        <button class="carousel-control-prev" type="button" data-bs-target="          #carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        
    </div>
</div>

<br>

<!-- Sección Local -->
<div class="container-fluid fondo2 py-4">
    <div class="row text-center align-items-center">
        <div class="col-sm-6">
            <img src="assets/img/local3.jpg" class="img-fluid Local animate-img" style="max-height: 350px; object-fit: cover; border-radius: 15px;">
        </div>
        <div class="col-sm-6">
            <img src="assets/img/img5.jpg" class="img-fluid Local animate-img" style="max-height: 350px; object-fit: cover; border-radius: 15px;">
        </div>
    </div>

    <h4 class="text-white text-center mt-5">Nuestras Marcas Oficiales</h4>

    <!-- Slider de Marcas -->
    <div class="brand-slider mt-4">
        <div class="brand-track">
            <img src="assets/img/motorola.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/nokia.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/samsung.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/alcatel.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/lg1.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/iphone.jpg" class="img-fluid p-2 rounded">
            <!-- duplico para efecto infinito -->
            <img src="assets/img/motorola.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/nokia.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/samsung.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/alcatel.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/lg1.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/iphone.jpg" class="img-fluid p-2 rounded">
        </div>
    </div>

</div>

<!-- Estilos adicionales -->
<style>
    /* Animación al pasar el mouse */
    .animate-img {
        transition: transform 0.5s ease;
    }
    .animate-img:hover {
        transform: scale(1.05);
    }

    /* Slider marcas */
    .brand-slider {
        overflow: hidden;
        position: relative;
        background: #000; /* Fondo negro */
    }

    .brand-track {
        display: flex;
        width: calc(250px * 12); /* 12 imágenes aprox. */
        animation: scroll 40s linear infinite;
    }

    .brand-track img {
        width: 250px;
        padding: 10px;
    }

    @keyframes scroll {
        0% {transform: translateX(0);}
        100% {transform: translateX(-50%);}
    }

</style>




<!-- Carrusel Principal --
<div class="container p-1">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/cel2.jpg" class="d-block w-100" alt="..." style="height: 75vh; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="assets/img/IMGCARRU.jpg" class="d-block w-100" alt="..." style="height: 75vh; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="assets/img/img1.jpg" class="d-block w-100" alt="..." style="height: 75vh; object-fit: cover;">
            </div>
        </div>
        <!-- Controles --
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<br>

<!-- Sección Local --
<div class="container-fluid fondo2 py-4">
    <div class="row text-center align-items-center">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <img src="assets/img/local3.jpg" class="img-fluid Local animate-img" style="max-height: 300px; object-fit: cover; border-radius: 15px;">
        </div>
        <div class="col-sm-6">
            <img src="assets/img/img5.jpg" class="img-fluid Local animate-img" style="max-height: 300px; object-fit: cover; border-radius: 15px;">
            <p class="text-white mt-2">Servicio Técnico en todos los modelos.</p>
        </div>
    </div>

    <h4 class="text-white text-center mt-5">Nuestras Marcas Oficiales</h4>

    <!-- Slider de Marcas --
    <div class="brand-slider mt-4">
        <div class="brand-track">
            <img src="assets/img/motorola.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/nokia.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/samsung.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/alcatel.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/lg1.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/iphone.jpg" class="img-fluid p-2 rounded">
            <!-- duplico para efecto infinito --
            <img src="assets/img/motorola.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/nokia.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/samsung.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/alcatel.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/lg1.jpg" class="img-fluid p-2 rounded">
            <img src="assets/img/iphone.jpg" class="img-fluid p-2 rounded">
        </div>
    </div>

</div>

<!-- Estilos adicionales --
<style>
    /* Animación al pasar el mouse */
    .animate-img {
        transition: transform 0.5s ease;
    }
    .animate-img:hover {
        transform: scale(1.05);
    }

    /* Slider marcas */
    .brand-slider {
        overflow: hidden;
        position: relative;
        background: #000; /* Fondo negro */
    }

    .brand-track {
        display: flex;
        width: calc(250px * 12); /* 12 imágenes aprox. */
        animation: scroll 40s linear infinite;
    }

    .brand-track img {
        width: 250px;
        padding: 10px;
    }

    @keyframes scroll {
        0% {transform: translateX(0);}
        100% {transform: translateX(-50%);}
    }

    .fondo2 {
        background-color: #212529; /* Color de fondo oscuro para la sección */
    }
</style>

  

     