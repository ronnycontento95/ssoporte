<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Colorlib">
	<meta name="description" content="#">
	<meta name="keywords" content="#">
	<!-- Page Title -->
	<title>FADAsystems - Soluciones Informáticas</title>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img-web/icon.jpg" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
	<!-- Simple line Icon -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/simple-line-icons.css">
	<!-- Themify Icon -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/themify-icons.css">
	<!-- Hover Effects -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/set1.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/style.css">
</head>

<body>
	<div class="nav-menu">
		<div class="bg transition">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-menu"></span>
						</button>
						<img src="<?php echo base_url(); ?>assets/img-web/icon.jpg" height="50px" align="left" alt="">
						<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
							<ul class="navbar-nav">
								<li class="nav-item ">
									<a class="nav-link" href="./">
										Inicio
									</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Servicios
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown3">
										<a class="dropdown-item" href="#Mantenimiento">Mantenimientos</a>
										<a class="dropdown-item" href="#Instalacion">Instalaciones</a>

									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#Nosotros">
										Quiénes Somos
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#Servicio">
										Consultas
									</a>
								</li>
								<li class="nav-item ">
									<a class="nav-link" href="#contactos">
										Contactos
									</a>
								</li>
								<li><a href="#" id="login_button" class="btn btn-outline-light top-btn"> Ingresar</a></li>
								<div id="login_one" class="ed_login_form">
									<h3>Login</h3>
									<form class="form" method="post" action="<?php echo base_url(); ?>Auth/login">
										<div class="form-group">
											<label class="control-label">Usuario :</label>
											<input type="text" placeholder="Ingrese su Usuario" class="form-control" name="username">
										</div>
										<div class="form-group">
											<label class="control-label">Contraseña :</label>
											<input type="password" placeholder="Ingrese su contraseña" class="form-control" name="password">
										</div>
										<div class="form-group">
											<button type="submit">Ingresar</button>
										</div>
									</form>
								</div>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
	</div>