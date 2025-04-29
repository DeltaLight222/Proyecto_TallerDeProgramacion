<!--cabecera titulo
<header class="container_full cabecera" >
	<img src="<?php echo base_url("assets/img/fondo.jpg"); ?>" class="logo"  alt="no-disponoble" > 
</header>-->
<!--barra de navegacion--><!-- colores-->
<nav id="custom-bootstrap-menu" class="navbar navbar-default " >
	<!--amplia de pantalla-->
	<div class="container-fluid bg-success">
		<!--despliegue de menu chico-->
		<div class="navbar-header">
			<a class="navbar-brand text-bold active" href="<?php echo base_url("inicio"); ?>">Inicio</a>
			<!--barras del menu chico-->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
				<span class="sr-only">Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<!--contenedor de la barra de menu -->
		<div class="collapse navbar-collapse navbar-menubuilder">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="<?php echo base_url("quienessomos"); ?>">¿Quiénes somos?</a>
				</li>
				<li><a href="<?php echo base_url("comercializacion"); ?>">Comercializacion</a>
				</li>
				<li><a href="<?php echo base_url("contacto"); ?>">Informacion de Contacto</a>
				</li>
				<li><a href="<?php echo base_url("terminosyusos"); ?>">Términos y usos</a>
				</li>
				<li><a href="<?php echo base_url("productos"); ?>">Productos</a>
				</li>
				<li><a href="<?php echo base_url("consulta"); ?>">Consultas</a>
				</li>
				<!--
				<li><a href="<?php echo base_url("Buscar"); ?>">Buscar</a>
				</li>-->
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
			<?php if($this->session->userdata('username')): ?>
				<?php if($this->session->userdata('tipo') == 'administrador' ): ?>
						<li class="dropdown" id="sesion">
		                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenido 
		                        <?= $this->session->userdata('username')?><b class="caret"></b>
		                        </a>
		                        <ul class="dropdown-menu">
		                        <li class="#"><a href="<?= site_url('ventas') ?>" role="button">ventas</a>
		                            </li>
		                            <li class="#"><a href="<?= site_url('listar_producto') ?>" role="button">productos</a>
		                            </li>
		                            <li class="#"><a href="<?= site_url('listar_usuario') ?>" role="button">usuarios</a>
		                            </li>
		                            <li class="#"><a href="<?= site_url('n/vistas/logout') ?>" role="button">Cerrar Sesión</a>
		                            </li>
		                        </ul>
		                </li>
		            <?php else: ?>
		         	<li class="dropdown" id="sesion">
		                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenido 
		                        <?= $this->session->userdata('username')?><b class="caret"></b>
		                        </a>
		                        <ul class="dropdown-menu">
		                            <li class="#"><a href="<?= site_url('ventas') ?>" role="button">registro de compras</a>
		                            </li>
		                            <li class="#"><a href="<?= site_url('n/vistas/logout') ?>" role="button">Cerrar Sesión</a>
		                            </li>
		                        </ul>
		                </li>

					<?php endif;?>
			<?php else: ?>
				<li>
					<a href="<?= site_url('usuario')?>" title="iniciar sesión" >Iniciar sesiòn</a>
				</li>
			<?php endif;?>
			</ul>
			
		</div>
	</div>
</nav>
