<?php

    $nombre = @trim(stripslashes($_POST['Nombre'])); 
    $telefono = @trim(stripslashes($_POST['Telefono'])); 
    $email = @trim(stripslashes($_POST['Email'])); 
    $mensaje = @trim(stripslashes($_POST['Mensaje'])); 

    $email_from = "clustermarvel.utem@gmail.com ";
    $email_to = $email;
    $subject = 'Contacto';
    
   // $body = 'Nombre: ' . $nombre . "\n\n" . 'Telefono: ' . $telefono . "\n\n" . 'Email: ' . $email . "\n\n" .  'Mensaje: ' . $mensaje;
    $comando = "python /var/www/html/webParalela/mail.py ".$email_from." '".$nombre."' '".$telefono ."' '".$mensaje."' ".$email;
   // echo $comando;
    exec($comando,$result);
    //var_dump($result);

    //$success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
    //var_dump( $success );
    ?>
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
<!-- works -->
	<section class="pt30 pb30 mb15">
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-12"> <!-- Queda hasta acá-->
					<section class="pt40 pb40">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="ctaBox color2" data-nekoanim="bounceIn" data-nekodelay="100">
										<div class="ctaBoxText">
											<h1>
												Su mensaje a sido enviado con exito 
											</h1>
										</div>
										<div class="ctaBoxBtn">
											<div class="row">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div> <!-- Queda hasta acá-->
			</div>
		</div> 
	</section>
	<!-- call to action -->
</section>
	    <div style="height:20px; width: 1024px"></div>
	    <section id="contact-page" class="container">
            <button type="submit" onclick=" location.href='index.php' " class="btn btn-primary btn-lg">Volver</button>
	    </section> 
	    <div style="height:220px; width: 1024px"></div>
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
