<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
	<div class="menu_section">
		<h3><?php echo $this->session->userdata("tipo_rol");?></h3>
		<ul class="nav side-menu">
			<li><a href="<?php echo base_url(); ?>Manteiner/Cadmin/inicio"><i class="fa fa-home"></i> INICIO </a>
			</li>
			<li><a><i class="fa fa-slideshare"></i> RUTAS <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="<?php echo base_url(); ?>Menu/Cmenu/add">Nuevo rutas</a></li>
					<li><a href="<?php echo base_url(); ?>Menu/Cmenu">Todos los rutas</a></li>
				</ul>
			</li>
			<li><a><i class="fa fa-male"></i> PERMISO <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="<?php echo base_url(); ?>Permisos/Cpermisos/add">Nuevo Permiso</a></li>
					<li><a href="<?php echo base_url(); ?>Permisos/Cpermisos">Todos los Permisos</a></li>
				</ul>
			</li>
			<li><a><i class="fa fa-group"></i> USUARIOS <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="<?php echo base_url(); ?>Manteiner/Cadmin/add">Nuevo Usuario</a></li>
					<li><a href="<?php echo base_url(); ?>Manteiner/Cadmin">Todos los Usuarios</a></li>

				</ul>
			</li>
			<li><a><i class="fa fa-male"></i> CLIENTES <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="<?php echo base_url(); ?>Cliente/Ccliente/add">Nuevo Cliente</a></li>
					<li><a href="<?php echo base_url(); ?>Cliente/Ccliente">Todos los Clientes</a></li>
				</ul>
			</li>

			<li><a><i class="fa fa-male"></i> MARCAS <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="<?php echo base_url(); ?>Marcas/Mmarca/add">Nuevo Marcas</a></li>
					<li><a href="<?php echo base_url(); ?>Marcas/Mmarca">Todos los Marcas</a></li>
				</ul>
			</li>
			<li><a><i class="fa fa-slideshare"></i> SERVICIOS <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="<?php echo base_url(); ?>Servicio/Cservicio/add">Nuevo Servicio</a></li>
					<li><a href="<?php echo base_url(); ?>Servicio/Cservicio">Todos los Servicios</a></li>
				</ul>
			</li>
			<li><a><i class="fa fa-file-text-o"></i>ORDEN REPARACIÓN <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="<?php echo base_url(); ?>orden_reparacion/Corden/add">Nueva Orden De Reparación</a></li>
				</ul>
			</li>
			<li><a><i class="fa fa-file-text-o"></i>REPORTES <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="<?php echo base_url(); ?>Reportes/Rordenes/Inicio">Ordenes de Reparacion</a></li>
				</ul>
			</li>

		</ul>
	</div>
	<div class="menu_section">
		</ul>
	</div>
</div>
</div>
</div>

<div class="top_nav">
	<div class="nav_menu">
		<div class="nav toggle">
			<a id="menu_toggle"><i class="fa fa-bars"></i></a>
		</div>
		<nav class="nav navbar-nav">
			<ul class=" navbar-right">
				<li class="nav-item dropdown open" style="padding-left: 15px;">
					<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
						<label alt=""><?php echo $this->session->userdata("apellidos") . " " . $this->session->userdata("nombres"); ?></label>
					</a>
					<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">

						<a class="dropdown-item" href="<?php echo base_url(); ?>Auth/logout"><i class=" fa fa-sign-out pull-right"></i> Salir </a>
					</div>
				</li>

			</ul>
		</nav>
	</div>
</div>