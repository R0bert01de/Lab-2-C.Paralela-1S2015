<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<!--<![endif]-->
<?php require_once("head.php"); ?>
<body class="activateAppearAnimation">
	<!-- Primary Page Layout 
	================================================== -->
	<!-- globalWrapper -->
	<div id="globalWrapper">
		<!-- header -->
		<header class="navbar-fixed-top">
			<div id="mainHeader" role="banner">
				<div class="container">
					<nav class="navbar navbar-default scrollMenu" role="navigation">
						<div class="navbar-header">
							<!-- responsive navigation -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- Logo -->
							<a class="navbar-brand" href="index.php"><img src="images/main-logo.png" alt="SEATTLE website template"/></a>
						</div>
						<div class="collapse navbar-collapse" id="mainMenu">
							<!-- Main navigation -->
							<ul class="nav navbar-nav pull-right">
								<li class="primary">
									<a href="index.php" class="firstLevel active hasSubMenu" >Home</a>
								</li>
								<li class="sep"></li>
								<li class="primary"> 
									<a href="codigos.php" class="firstLevel hasSubMenu" >Servicios</a>
									<ul class="subMenu">
										<li><a href="enfermedades.php">Enfermedades</a></li>
										<li><a href="incendios.php">Incendios</a></li>
										<li><a href="explicito.php">Busqueda Explicita</a></li>
										<li><a href="implicito.php">Busqueda Implicita</a></li>
										<li><a href="adn.php">ADN</a></li>
										<li><a href="proteinas.php">Proteinas</a></li>
									</ul>
								</li>
								<li class="sep"></li>
								<li id="lastMenu" class="last"><a href="resultados.php" class="firstLevel last">Resultados</a></li>
								<li id="lastMenu" class="last"><a href="contacto.php" class="firstLevel last">Contacto</a></li>
							</ul>
							<!-- End main navigation -->
						</div>
					</nav>
				</div>
			</div>
		</header>
		<!-- header -->
		<!-- ======================================= content ======================================= -->
		<section id="page">
			<header class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Contáctenos</h1>
						</div>
					</div>
				</div>
			</header>
			<section id="content" class="mt30">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<h4>Dirección:</h4>
							<address>
								José Pedro Alessandri 1242, Ñuñoa, <br/>
								Santiago,Chile<br/>
							</address>
							<h4>Teléfono:</h4>
							<address>
								(56-2) 787 7211<br/>
							</address>
						</div>
						<form method="post" action="sendmail.php" id="contactfrm" role="form">
							<div class="col-sm-4"> 
								<div class="form-group">
									<label for="name">Nombre</label>
									<input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Ingrese su nombre"  title="Ingrese su nombre (con al menos 2 letras)"/>
								</div>
								<div class="form-group">
									<label for="email">Correo electrónico</label>
									<input type="email" class="form-control" name="Email" id="Email" placeholder="ingrese su correo" title="Por favor ingresar una dirrección de correo válida"/>
								</div>
								<div class="form-group">
									<label for="Telefono">Teléfono</label>
									<input name="Telefono" class="form-control required digits" type="tel" id="Telefono" size="30" value="" placeholder="Ingrese su número telefónico" title="Por favor ingrese un número de teléfono válido (al menos 10 caracteres)">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="comments">Comentarios</label>
									<textarea name="Mensaje" class="form-control" id="Mensaje" cols="3" rows="5" placeholder="Ingrese su mensaje…" title="Por favor ingrese su mensaje (at least 10 characters)"></textarea>
								</div>
							</div>                        
							<div class="col-md-8 col-md-offset-4">
								<div class="result"></div>
								<button name="submit" type="submit" class="btn btn-lg" id="submit"> Enviar</button>
							</div>
						</form>
					</div>
				</div>
				<div class="mt30"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.34637601678!2d-70.5981719!3d-33.4663317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cfe9d9e8687d%3A0x9127c7d08cecba60!2sJos%C3%A9+Pedro+Alessandri+1242%2C+%C3%91u%C3%B1oa%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1434301754129" width="100%" height="100%" frameborder="0" style="border:0"></iframe></div>
			</section>
		</section>
		<!-- content -->
		<!-- footer -->
		<?php require_once("footer.php"); ?>
		<!-- End footer -->
		</div>
		<!-- global wrapper -->
	<!-- End Document 
	================================================== -->
	<?php require_once("js.php"); ?>
</body>
</html>
