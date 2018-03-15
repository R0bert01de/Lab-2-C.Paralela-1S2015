<?php
	error_reporting(E_ALL);
	ini_set('display_errors','on');	
	include("simpleql/class.simpleql.php");
	session_start();
	require_once("function.php");
	EsUsuario();

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
									<a href="index.php" class="firstLevel  hasSubMenu" >Home</a>
								</li>
								<li class="sep"></li>
								<li class="primary"> 
									<a href="codigos.php" class="firstLevel active hasSubMenu" >Servicios</a>
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
		<section id="page">
			<header class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1><?= $_SESSION["nombre"]." ".$_SESSION["apellidos"]?></h1>
							<p>Computación Paralela Primer Semestre 2015</p>
							
							<ul class="breadcrumb visible-md visible-lg">
								<li><a href="index.php">Home</a></li>
								<li><a href="codigos.php">Codigos</a></li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<section id="content">
				<section class="pt30 pb30">
					<div class="container clearfix">
						<div class="row">
							<div class="portfolio-items  isotopeWrapper clearfix imgHover" id="3">
								<!-- portfolio item -->
								<article class="col-sm-4 isotopeItem women">
									<div class="pinBox">
										<img alt="" src="images/portfolio/forestal.jpg" class="img-responsive">
										<div class="mediaHover">
											<div class="mask"></div>
											<div class="iconLinks">
												<a href="incendios.php" title="link">
													<i class="icon-link iconRounded iconMedium"></i>
													<span>link</span>
												</a>
											</div>
										</div>
										<section class="boxContent">
											<h3>Incendios Forestales</h3>
											<p> Por medio de este servicio, simularemos un incendio forestal. Es necesario que se ingrese el tipo de árbol y de suelo, el tamaño de la región y la distribución de los arboles.  <br>Ademas se realizan repeticiones que aseguran un error máximo de 5% de respuesta. Los resultados serán enviados a su correo electrónico por medio de un documento formato PDF.<br />
												<!--<a href="percolacion.php" class="moreLink">&rarr; read more</a>-->
											</p>
										</section>
									</div>
								</article>
								<!-- portfolio item -->
								<!-- portfolio item -->
								<article class="col-sm-4 isotopeItem cats">
									<div class="pinBox">
										<img alt="" src="images/portfolio/enfermedades.jpg" class="img-responsive">
										<div class="mediaHover">
											<div class="mask"></div>
											<div class="iconLinks">
												<a href="enfermedades.php" title="link" class="portfolioSheet sizer">
													<i class="icon-link iconRounded iconMedium"></i>
													<span>link</span>
												</a>
											</div>
										</div>
										<section class="boxContent">
											<h3> Propagación de Enfermedades</h3>
											<p> A través de modelo simple de propagación de enfermedades basado en el concepto de umbral de percolación, se realizara una simulacion de las probabilidad de contagio que tendrian algunas enfermedades, como por ejemplo: gripe, AH1N1, sarampion, etc. Los resultados serán enviados a su correo electrónico por medio de un documento formato  PDF.<br>
												<!--<a href="portfolio-project-fullwidth-video.html" class="moreLink">&rarr; read more</a> </p>-->
											</section>
										</div>
									</article>
									<!-- portfolio item -->
									<!-- portfolio item -->
									<article class="col-sm-4 isotopeItem graphics">
										<div class="pinBox">
											<img alt="" src="images/portfolio/explicita.jpg" class="img-responsive">
											<div class="mediaHover">
												<div class="mask"></div>
												<div class="iconLinks">
													<a href="explicito.php" title="link">
														<i class="icon-link iconRounded iconMedium"></i>
														<span>link</span>
													</a>
												</div>
											</div>
											<section class="boxContent">
												<h3> Búsqueda Explicita de Patrones</h3>
												<p> Por medio de esta plataforma, usted podrá realizar búsquedas de palabras en los libros de nuestra biblioteca, cabe mencionar que esta búsqueda tiene la particularidad de buscar a través de saltos, es decir, en letras que no estén contiguas, sino que estén separadas.  Los resultados serán enviados a su correo electrónico por medio de un documento formato  PDF.<br>
													<!--<a href="portfolio-project-fullwidth-video.html" class="moreLink">&rarr; read more</a>-->
												</p>
											</section>
										</div>
									</article>
									<!-- portfolio item -->
									<!-- portfolio item -->
									<article class="col-sm-4 isotopeItem graphics">
										<div class="pinBox">
											<img alt="" src="images/portfolio/implicita.jpg" class="img-responsive">
											<div class="mediaHover">
												<div class="mask"></div>
												<div class="iconLinks">
													<a href="implicito.php" title="link">
														<i class="icon-link iconRounded iconMedium"></i>
														<span>link</span>
													</a>
												</div>
											</div>
											<section class="boxContent">
												<h3> Búsqueda Implícita de Patrones</h3>
												<p> Este algoritmo no tiene ingreso de palabras, ya que su búsqueda se sustenta en una base de conocimiento; sin embargo, el único dato de entrada de éste algoritmo es el archivo pdf.  Los resultados serán enviados a su correo electrónico por medio de un documento formato  PDF.<br>
													<!--<a href="portfolio-project-fullwidth-video.html" class="moreLink">&rarr; read more</a>-->
												</p>
											</section>
										</div>
									</article>
									<!-- portfolio item -->
									<!-- portfolio item -->
									<article class="col-sm-4 isotopeItem graphics">
										<div class="pinBox">
											<img alt="" src="images/portfolio/adn.jpg" class="img-responsive">
											<div class="mediaHover">
												<div class="mask"></div>
												<div class="iconLinks">
													<a href="adn.php" title="link">
														<i class="icon-link iconRounded iconMedium"></i>
														<span>link</span>
													</a>
												</div>
											</div>
											<section class="boxContent">
												<h3> Comparacion de Cadenas de ADN</h3>
												<p> El algoritmo FASTA es un método heurístico para comparación de cadenas donde compara una cadena de consulta con una cadena de un solo texto. Cuando buscamos en una base de datos entera coincidencias para una consulta dada, comparamos la consulta usando el algoritmo FASTA para cada cadena en la base de datos. Los resultados serán enviados a su correo electrónico por medio de un documento formato  PDF.<br>
													<!--<a href="portfolio-project-fullwidth-video.html" class="moreLink">&rarr; read more</a>-->
												</p>
											</section>
										</div>
									</article>
									<!-- portfolio item -->
									<!-- portfolio item -->
									<article class="col-sm-4 isotopeItem graphics">
										<div class="pinBox">
											<img alt="" src="images/portfolio/proteinas.jpg" class="img-responsive">
											<div class="mediaHover">
												<div class="mask"></div>
												<div class="iconLinks">
													<a href="proteinas.php" title="link">
														<i class="icon-link iconRounded iconMedium"></i>
														<span>link</span>
													</a>
												</div>
											</div>
											<section class="boxContent">
												<h3> Comparacion de Cadenas de Proteinas</h3>
												<p> Un alineamiento de secuencias en bioinformática es una forma de representar y comparar dos o más secuencias o cadenas de estructuras primarias proteicas para resaltar sus zonas de similitud, que podrían indicar relaciones funcionales o evolutivas entre los genes o proteínas consultados. Los resultados serán enviados a su correo electrónico por medio de un documento formato  PDF.<br>
													<!--<a href="portfolio-project-fullwidth-video.html" class="moreLink">&rarr; read more</a>-->
												</p>
											</section>
										</div>
									</article>
									<!-- portfolio item -->
									</div>
								</div>
							</div>
						</section>
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
