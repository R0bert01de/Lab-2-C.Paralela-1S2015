<?php
	error_reporting(E_ALL);
	ini_set('display_errors','on');	
	include("simpleql/class.simpleql.php");
	session_start();
	//require_once("function.php");
	//EsUsuario();

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<?php require_once("head.php"); ?>
<body class="activateAppearAnimation">
	<!-- Primary Page Layout 
	================================================== -->
	<!-- globalWrapper -->
	<div id="globalWrapper">
		<header class="navbar-fixed-top">
			<!-- header -->
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
								<?php
								if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
									echo '<li id="lastMenu" class="last"><a href="logout.php" class="firstLevel last">LogOut</a></li>';
								}
								?>
							</ul>
							<!-- End main navigation -->
						</div>
					</nav>
				</div>
			</div>
		</header>
		<!-- header -->
		<!-- ======================================= content ======================================= -->
		<section id="noSlider">
			<section id="noSliderWrapper" class="iosBg pt40">
				<div class="container">
					<div class="row">
						<div class="col-md-4" data-nekoanim="fadeInLeftBig" data-nekodelay="100">
							<h1>Plataforma de Servicios</h1>
							<p>Favor de iniciar sesión para utilizar nuestros servicios</p>
								<a href="registrar.php" target="_blank" class="btn btn-lg">Registrarse</a>
								<a href="login.php" target="_blank" class="btn btn-lg">Login</a>
							</div>
							<div class="col-md-8" data-nekoanim="fadeInRight" data-nekodelay="50">
								<img src="images/theme-pics/devices.png" alt="SEATTLE premium website template" class="img-responsive" />
							</div>							
						</div>						
					</div>
				</section>
				<section id="content">
					
					<!-- section 1 -->
					<section class="color1">
						<div class="container">
							<div class="row">
								<div class="col-md-6 pt40" data-nekoanim="fadeInLeftBig" data-nekodelay="100">
									<img src="/webParalela/images/portfolio/forestalin.jpg" alt="paralela 2015" class="img-responsive" />
								</div>
								<div class="col-md-5 col-md-offset-1 pt40 mt40" data-nekoanim="fadeInRightBig" data-nekodelay="100">
									<h1>Incendios Forestales</h1>
									<p>
										Por medio de este servicio, simularemos un incendio forestal. Es necesario que se ingrese el tipo de árbol y de suelo, el tamaño de la región y la distribución de los arboles. Ademas se realizan repeticiones que aseguran un error máximo de 5% de respuesta. Los resultados serán enviados a su correo electrónico por medio de un documento formato PDF.
									</p>
								</div>
							</div>
						</div>
					</section>
					<!-- section 1 -->
					<!-- section 2 -->
					<section>
						<div class="container">
							<div class="row">
								<div class="col-md-5 pt40 mt40" data-nekoanim="fadeInLeftBig" data-nekodelay="100">
									<h1>Propagación Enfermedades</h1>
									<p>
										A través de modelo simple de propagación de enfermedades basado en el concepto de umbral de percolación, se realizara una simulacion de las probabilidad de contagio que tendrian algunas enfermedades, como por ejemplo: gripe, AH1N1, sarampion, etc. Los resultados serán enviados a su correo electrónico por medio de un documento formato PDF.
									</p>
								</div>
								<div class="col-md-6 col-md-offset-1 pt40 pb40" data-nekoanim="fadeInRightBig" data-nekodelay="100">
									<img src="images/portfolio/enfermedadesin.jpg" alt="flat mobile devices" class="img-responsive"/>
								</div>
							</div>
						</div>
					</section>
					<!-- section 2 -->
					<!-- section 3 -->
					<section class="color1">
						<div class="container">
							<div class="row">
								<div class="col-md-6 pt40" data-nekoanim="fadeInLeftBig" data-nekodelay="100">
									<img src="images/portfolio/explicitain.jpg" alt="paralela 2015" class="img-responsive" />
								</div>
								<div class="col-md-5 col-md-offset-1 pt40 mt40" data-nekoanim="fadeInRightBig" data-nekodelay="100">
									<h1>Busqueda Explicita Patrones</h1>
									<p>
										Por medio de esta plataforma, usted podrá realizar búsquedas de palabras en los libros de nuestra biblioteca, cabe mencionar que esta búsqueda tiene la particularidad de buscar a través de saltos, es decir, en letras que no estén contiguas, sino que estén separadas. Los resultados serán enviados a su correo electrónico por medio de un documento formato PDF.
									</p>
								</div>
							</div>
						</div>
					</section>
					<!-- section 3 -->
					<!-- section 4 -->
					<section>
						<div class="container">
							<div class="row">
								<div class="col-md-5 pt40 mt40" data-nekoanim="fadeInLeftBig" data-nekodelay="100">
									<h1>Busqueda Implicita de Patrones</h1>
									<p>
										Este algoritmo no tiene ingreso de palabras, ya que su búsqueda se sustenta en una base de conocimiento; sin embargo, el único dato de entrada de éste algoritmo es el archivo pdf. Los resultados serán enviados a su correo electrónico por medio de un documento formato PDF.
									</p>
								</div>
								<div class="col-md-6 col-md-offset-1 pt40 pb40" data-nekoanim="fadeInRightBig" data-nekodelay="100">
									<img src="images/portfolio/implicitain.jpg" alt="flat mobile devices" class="img-responsive"/>
								</div>
							</div>
						</div>
					</section>
					<!-- section 4 -->
					<!-- section 5 -->
					<section class="color1">
						<div class="container">
							<div class="row">
								<div class="col-md-6 pt40" data-nekoanim="fadeInLeftBig" data-nekodelay="100">
									<img src="images/portfolio/adnin.jpg" alt="paralela 2015" class="img-responsive" />
								</div>
								<div class="col-md-5 col-md-offset-1 pt40 mt40" data-nekoanim="fadeInRightBig" data-nekodelay="100">
									<h1>Comparacion Cadena de ADN</h1>
									<p>
										El algoritmo FASTA es un método heurístico para comparación de cadenas donde compara una cadena de consulta con una cadena de un solo texto. Cuando buscamos en una base de datos entera coincidencias para una consulta dada, comparamos la consulta usando el algoritmo FASTA para cada cadena en la base de datos. Los resultados serán enviados a su correo electrónico por medio de un documento formato PDF.
									</p>
								</div>
							</div>
						</div>
					</section>
					<!-- section 5 -->
					<!-- section 6 -->
					<section>
						<div class="container">
							<div class="row">
								<div class="col-md-5 pt40 mt40" data-nekoanim="fadeInLeftBig" data-nekodelay="100">
									<h1>Comparacion Cadenas de Proteinas</h1>
									<p>
										Un alineamiento de secuencias en bioinformática es una forma de representar y comparar dos o más secuencias o cadenas de estructuras primarias proteicas para resaltar sus zonas de similitud, que podrían indicar relaciones funcionales o evolutivas entre los genes o proteínas consultados. Los resultados serán enviados a su correo electrónico por medio de un documento formato PDF.
									</p>
								</div>
								<div class="col-md-6 col-md-offset-1 pt40 pb40" data-nekoanim="fadeInRightBig" data-nekodelay="100">
									<img src="images/portfolio/proteinasin.jpg" alt="flat mobile devices" class="img-responsive"/>
								</div>
							</div>
						</div>
					</section>
					<!-- section 6 -->
					<!-- parallax testimonial --> 
					<section id="paralaxSlice3" data-stellar-background-ratio="0.5">
						<div class="maskParent">
							<div class="paralaxMask"></div>
							<div class="paralaxText container" data-nekoanim="fadeInUp" data-nekodelay="100">
								<div class="row">
									<div class="col-md-12">
										<div class="owl-carousel nekoDataOwl" data-neko_items="1" data-neko_singleitem="true" data-neko_paginationnumbers="true">

											<div class="item">
												<img src="images/clients/einstein.jpg" class="img-circle mb15" alt="client">
												<blockquote>Locura es hacer la misma cosa una y otra vez esperando obtener diferentes resultados.<br/><small>Albert Einstein </small></blockquote>
											</div>
											<div class="item">
												<img src="images/clients/zuckerberg.jpg" class="img-circle mb15" alt="client">
												<blockquote>El mayor riesgo es no correr ningún riesgo. En un mundo que cambia muy rápidamente, la única estrategia que garantiza fallar es no correr riesgos.<br/><small>Marck Zuckerber</small></blockquote>
											</div>
											<div class="item">
												<img src="images/clients/howking.jpg" class="img-circle mb15" alt="client">
												<blockquote>El mayor enemigo del conocimiento no es la ignorancia, sino la ilusión del conocimiento.<br/><small>Stephen Hawking</small></blockquote>
											</div>
											<div class="item">
												<img src="images/clients/jobs.jpg" class="img-circle mb15" alt="client">
												<blockquote>Pienso que si haces algo y resulta ser una buena idea, entonces debes hacer otras cosas increíbles, no lo pienses mucho tiempo. Sólo descubre qué es lo que sigue.<br/><small>Steve Jobs</small></blockquote>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>

					<!-- parallax testimonial --> 
					<!-- icon boxes -->
					<section class="pt40 pb40" id="services" data-nekoanim="bounceInUp" data-nekodelay="100">
						<div class="container">
							<div class="row">
								<div class="col-md-12 text-center mb30">
									<h1>Herramientas utilizadas</h1>
									<h2 class="subTitle">Ejecutamos códigos en pyhton de panera paralela para ejecutar mas rápido sus requerimientos</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="featureBox posLeft">
										<i class="icon-cog-alt iconBig iconRounded"></i>
										<div class="boxContent">
											<h2>Escalabilidad</h2>
											<p>Trabajamos con amplia cantidad de procesadores</p>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="featureBox">
										<i class=" icon-html5 iconBig iconRounded"></i>
										<div class="boxContent">
											<h2>HTML5 &amp; CSS3</h2>
											<p>Diseño basado en el framework Bootstrap</p>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="featureBox posLeft">
										<i class="icon-mail iconBig iconRounded"></i>
										<div class="boxContent">
											<h2>Respuestas Por Correo</h2>
											<p>Procesamos tus requerimientos y cuando este listo te lo enviamos por correo</p>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="featureBox">
										<i class="icon-linux iconBig iconRounded"></i>
										<div class="boxContent">
											<h2>Montado en Linux</h2>
											<p>Plantaforma montada en la distriución de Linux Ubuntu 14.04</p>
										</div>
									</div>
								</div>							
							</div>
							
						</div>
					</section>
					<!-- icon boxes -->
					<!-- services and skills -->
					<section class="mt30 mb30">
						<div class="container">
							<!-- team -->
							<div class="row team mt30 mb30">
								<div class="col-sm-12">
									<h2>Nuestro Equipo </h2>
								</div>
								<div class="col-sm-3">
									<article>
										<div><img src="images/team/diego.png" alt="" class="img-responsive"></div>
										<div class="boxContent text-center">
											<h3>Diego Hernández García</h3>
											<p>Gerente General</p>
										</div>
									</article>
								</div>
								<div class="col-sm-3">
									<article>
										<div><img src="images/team/roberto.png" alt="" class="img-responsive"></div>
										<div class="boxContent text-center">
											<h3>Roberto Oñate Piedras</h3>
											<p>SubGerente General</p>
										</div>
									</article>
								</div>
								<div class="col-sm-3">
									<article>
										<div><img src="images/team/sergio.png" alt="" class="img-responsive"></div>
										<div class="boxContent  text-center">
											<h3>Sergio Abarca Flores</h3>
											<p>Jefe Área Percolación</p>
										</div>
									</article>
								</div>
								
								<div class="col-sm-3">
									<article>
										<div><img src="images/team/rosa.png" alt="" class="img-responsive"></div>
										<div class="boxContent">
											<h3>Rosa González Soto</h3>
											<p>Documentador Área Percolación</p>
										</div>
									</article>
								</div>
								<div class="col-sm-3">
									<article>
										<div><img src="images/team/carlos.png" alt="" class="img-responsive"></div>
										<div class="boxContent">
											<h3>Carlos Guerrero Urbina</h3>
											<p>Jefe Área Fasta</p>
										</div>
									</article>
								</div>
								<div class="col-sm-3">
									<article>
										<div><img src="images/team/daniel.png" alt="" class="img-responsive"></div>
										<div class="boxContent">
											<h3>Daniel Gutierrez Pizarro</h3>
											<p>Documentador Área Fasta</p>
										</div>
									</article>
								</div>
								<div class="col-sm-3">
									<article>
										<div><img src="images/team/rodrigo_a.png" alt="" class="img-responsive"></div>
										<div class="boxContent text-center">
											<h3>Rodrigo Arratia Allende</h3>
											<p>Desarrollador Área Fasta</p>
										</div>
									</article>
								</div>
								<div class="col-sm-3">
									<article>
										<div><img src="images/team/manolo.png" alt="" class="img-responsive"></div>
										<div class="boxContent text-center">
											<h3>Manuel Venegas Solis</h3>
											<p>Jefe Área Torah</p>
										</div>
									</article>
								</div>
								<div class="col-sm-3">
									<article>
										<div><img src="images/team/miguel.png" alt="" class="img-responsive"></div>
										<div class="boxContent  text-center">
											<h3>Miguel Nuñez Gajardo</h3>
											<p>Desarrollador Área Torah</p>
										</div>
									</article>
								</div>
								<div class="col-sm-3">
									<article>
										<div><img src="images/team/rodrigoR.png" alt="" class="img-responsive"></div>
										<div class="boxContent">
											<h3>Rodrigo Reyes Silva</h3>
											<p>Documentador Área Torah</p>
										</div>
									</article>
								</div>
								<div class="col-sm-3">
									<article>
										<div><img src="images/team/Piña.jpg" alt="" class="img-responsive"></div>
										<div class="boxContent">
											<h3>Claudio Piña Novoa</h3>
											<p>Desarrollador Área Percolación</p>
										</div>
									</article>
								</div>
							</div>

							<!-- team -->

						</div>
					</section>

					<!-- services and skills -->
					<!-- call to action -->
					<!--
					<section class="pt40 pb40">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="ctaBox color2" data-nekoanim="bounceIn" data-nekodelay="100">
										<div class="ctaBoxText">
											<h1>
												SEATTLE Bootstrap Website Template
											</h1>
											<h2>is perfect for clean presentation of your business.
											</h2>
										</div>
										<div class="ctaBoxBtn">
											<a class="btn btn-lg" title="" href="#" target="blank">
												<i class="icon-flash"></i> purchase now
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>-->
					<!-- call to action -->
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
