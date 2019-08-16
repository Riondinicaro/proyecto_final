<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>EL CÓDICE ABIERTO</title>
	<meta name="description" content="Sitio dedicado a los Libros">
	<meta name="author" content="Riondini Carolina">

	<link rel="icon" href="<?= PATH_IMAGENES ?>/icono/icono.ico">

	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Domine|Montserrat+Alternates
		|Roboto|Patrick+Hand|Red+Hat+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= PATH_VENDOR ?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link href="<?= PATH_CSS ?>/estilos.css" rel="stylesheet">
</head>

<body>

	
		<header>
			<div class="container-fluid">
				<!--Barra de navegación, encabezado de la página -->
					<div class="row">
						<div class="col-md-12 mb-2">
							<nav class="navbar navbar-expand-lg navbar-light">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="navbar-toggler-icon"></span>
								</button>
								<a href="index.php" class="navbar-brand"><img src="<?= PATH_IMAGENES ?>/icono/logo.png" id="logo" alt="logo de la página"></a>
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

									<!--Indice de la página -->
									<ul class="nav">
										  <li class="nav-item">
										    <a class="nav-link" href="index.php?m=autores">Autores</a>
										  </li>
										  <li class="nav-item">
										    <a class="nav-link" href="index.php?m=libros">Libros</a>
										  </li>
										  <li class="nav-item">
										  	<a class="nav-link" href="index.php?m=editoriales">Editoriales</a>
										  </li>
										  <li class="nav-item">
										  </li>
									</ul>
								
									<!-- Registro y Sesión -->
										<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
											<ul class="navbar-nav ml-md-auto">
												
												<?php
												if (!isset($_SESSION["usuario"]) ){ ?>

												<div class="btn-group dropright">
													<button type="button" class="btn btn-info active">Logueate</button>
													<button class="btn btn-info active dropdown-toggle dropdown-toggle-split mr-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownMenuButton">
														<span class="sr-only">Toggle Dropright</span>
													</button>
														
														<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
															<form action="index.php?m=login" method="POST">
															<p>Usuario: <br><input type="text" name="usr_user_name" required="required"></p>
															<p>Contraseña:<br><input type="password" name="usr_password" required="required"></p>
															<div class="boton-inicio">
																<input type="submit" class="btn btn-info active btn-sm" value="Iniciá Sesión">
															</div>
															</form>
															<hr>
															<a id="register" data-toggle="modal" href="#" data-target="#exampleModal" onclick="">REGÍSTRATE</a>
														</div>
													</div>
													 <?php	
													 }
													 else{
													 ?>
													<li class="nav-item dropdown">
														<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"><?= $_SESSION["usuario"] ?></a>
													<div class="dropdown-menu dropdown-menu-right" aria-labelledby=      "navbarDropdownMenuLink">
														<a class="dropdown-item" href="#">Cuenta</a>
														<a class="dropdown-item" href="index.php?m=logout">Cerrar sesión</a>
													</div>
												</li>
											 <?php		
											 }
											 ?>
										    </ul>
									    </div>
									</div>
								</nav>
							</div>
						</div>

					</div>
			</header>
						<!--Final Cabecera-->	

					<?php

						if ( isset($contenido_seccion) )
						{
							include ($contenido_seccion);
						}
						
					?>
					

		<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="					exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">REGISTRO</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="index.php" role="form" method="POST">
								<input type="hidden" name="m" value="registrar">
								<div class="form-group row">
									<label for="nombre" class="col-4 col-form-label">Nombre</label>
									<div class="col-8">
									<input type="text" class="form-control" id="nombre" name="nombre" required="required">
									</div>
								</div>
									<div class="form-group row">
										<label for="apellido" class="col-4 col-form-label">Apellido</label>
										<div class="col-8">
											<input type="text" class="form-control" id="apellido" name="apellido" required="required">
										</div>
									</div>
									<div class="form-group row">
										<label for="usuario" class="col-4 col-form-label">Usuario</label>
										<div class="col-8">
											<input type="text" class="form-control" id="nombre_user" name="nombre_user" required="required">
										</div>
									</div>
									<div class="form-group row">
										<label for="password" class="col-4 col-form-label">Contraseña</label>
										<div class="col-8">
											<input type="password" class="form-control" id="contrasena" name="contrasena" required="required">
										</div>
									</div>
									<div class="form-group row">
										<label for="email" class="col-4 col-form-label">Email</label>
										<div class="col-8">
											<input type="email" class="form-control" id="mail" name="mail" required="required">
										</div>
									</div>
									<div class="form-group row">
										<div class="offset-4 col-8">
											<button type="submit" class="btn btn-info active" name="registrate" value="registrate">REGÍSTRATE</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

					<!--Final Modal-->



					<!--Contenido de cada pagina particular -->


					<?php
						if ( isset($contenido_seccion1) )
						{

							include ($contenido_seccion1);
						}
						
					?>



		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="footer-content col-md-6 list-unstyled">
						<h3>COSAS QUE TE PUEDEN INTERESAR</h3>
							<li><a href="#">Contacto</a></li>
							<li><a href="#">Políticas de Privacidad</a></li>
							<li><a href="#">Políticas de Cookies</a></li>	
						<div>
							<li><a href="http://www.comunidadit.org/" target="_blank">COMUNIDAD IT</a></li>
						</div>	

					</div>

						<!-- Redes Sociales -->

					<div class="col-6">
						<ul class="footer-font list-unstyled d-flex">
							<li>
								<span class="fa-stack">
									<a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook fa-stack-1x fa-inverse"></i></a>
								</span>
							</li>
							<li>
								<span class="fa-stack">
									<a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter fa-stack-1x fa-inverse"></i></a>
								</span>
							</li>
							<li>
								<span class="fa-stack">
									<a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram fa-stack-1x fa-inverse"></i></a>
								</span>
							</li>
						</ul>
					</div>
				</div>
						<!-- Final del pie de página -->
				<p class="text-center">COPYRIGHT © 2019 | RIONDINI CAROLINA</p>
			</div>
		</footer>
		


					<?php

						if ( isset($contenido_seccion2) )
						{
							include ($contenido_seccion2);
						}
						
					?>

	
	<script src="<?= PATH_VENDOR ?>/jquery/jquery.min.js"></script>
	<script src="<?= PATH_VENDOR ?>/popper/popper.min.js"></script>
	<script src="<?= PATH_VENDOR ?>/bootstrap/js/bootstrap.min.js"></script>
	
	<?php

		if ( isset($contenido_seccion_js) ) {
			include $contenido_seccion_js;
		}


	?>

</body>
</html>