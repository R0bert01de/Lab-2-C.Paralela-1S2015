<?php
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
									<a href="index.php" class="firstLevel hasSubMenu" >Home</a>
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
		<section id="portfolio">
			<header class="page-header">
				<div class="container">
					<div class="row"> 
						<div class="col-xs-10 col-sm-10 col-md-11 projectTitle">
							<h1><?= $_SESSION["nombre"]." ".$_SESSION["apellidos"]?></h1>
							<p>Computación Paralela Primer Semestre 2015</p>
							<ul class="breadcrumb visible-md visible-lg">
								<li><a href="index.php">Home</a></li>
								<li><a href="codigos.php">Codigos</a></li>
								<li class="active">Incendios</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<!-- call to action -->
					<section class="pt30 pb30 mb15">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="ctaBox ctaBox2Cols color2">
										<h1>Formulario de Percolación para Incendios Forestales</h1>
										<div class="col-lg-12">
											<form method="post" action="controlador.php" id="form-ppi" role="form"  enctype="multipart/form-data">
												<input type="hidden" name="algoritmo" id="algoritmo" value="-ppi">
												<div class="col-lg-3">
													<div class="form-group">
														<label for="tipoArbol">Tipo Arbol</label>
														<select class="form-control" name="tipoArbol" id="tipoArbol">
															<option value="">Seleccione un Arbol</option>
															<option value="1">Quillay</option>
															<option value="2">Peumo</option>
															<option value="3">Boldo</option>
															<option value="4">Roble</option>
															<option value="5">Rauli</option>
														</select>
													</div>
												</div>
												<div class="col-lg-3">
													<div class="form-group">
														<label for="name">Tipo Suelo</label>
														<select class="form-control" name="tipoSuelo" id="tipoSuelo">
															<option value="">Seleccione un Suelo</option>
															<option value="1">Serranias aridas o semiaridas</option>
															<option value="2">Granitico de la costa</option>
															<option value="3">Vetisoles</option>
															<option value="4">Aluviales del valle central</option>
														</select>
													</div>
												</div>
												<div class="col-lg-3">
													<div class="form-group">
														<label for="email">Email</label>
														<input type="email" class="form-control" name="email" value="<?php echo $_SESSION["email"]; ?>" id="email" placeholder="Email *">
													</div>
												</div>
												<div class="col-lg-2">
													<div class="form-group">
														<label for="distribucion">Distribución</label>
														<input type="text" class="form-control" name="distribucion" id="distribucion" placeholder="%">
														<!--<div class="input-group">
							                                <input class="form-control" type="text" data-mask="99%">
							                                <span class="input-group-addon">99%</span>
							                            </div>-->
													</div>
												</div>
												<div class="col-lg-1">
													<div class="form-group">
														<label for="tamano">Tamaño</label>
														<input type="text" class="form-control" name="tamano" id="tamano" placeholder="">
													</div>
												</div>
													<input type="hidden" name="size" id="size" value="96">
												</div>
												<div class="row">
													<div class="col-lg-12">
														<button class="btn btn-succes" id="enviar" type="submit" name="submitComment">Enviar</button>
													</div>
												</div>
												
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- call to action -->
			<section id="content" class="mt30">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<img src="images/portfolio/forestal.jpg" alt="SEATTLE premium website template" class="img-responsive mb30"/>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12 col-sm-4">
									<h1> Incendios Forestales</h1>
									<p> Por medio del concepto de percolación, simularemos un incendio forestal en donde es necesario que se ingrese el tipo de árbol, tipo de suelo, el tamaño de la región y la distribución de los arboles. Los resultados serán enviados a su correo electrónico por medio de un documento formato  PDF.</p>
								</div>
								<div class="col-md-12 col-sm-4">
									<h2>Integrantes</h2>
									<p>Sergio Abarca Flores</p>
									<p>Rosa Gonzalez Soto</p>
									<p>Claudio Piña Novoa</p>
									<h2>Technology</h2>
									<p>Bootstrap, PHP, MPI PYTHON</p>
								</div>
							</div>
						</div>
					</div>
				</div>
					
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
	<script type="text/javascript">
		$("#form-ppi").validate({
	           rules: {
	                email: { 
	                 	required: true,
      					email: true
	                } ,
	                distribucion: { 
	                 	required: true,
	                 	range: [1,100]
	                } ,
	                tamano: { 
	                 	required: true,
	                 	number: true
	                } ,
	                tipoSuelo: { 
	                 	required: true
	                } ,
	                tipoArbol: { 
	                 	required: true
	                } ,


	           },
	     messages:{
	        email: { 
	                 required:"Debe escribir un correo correcto"
	               },
           distribucion: { 
             		required:"Campo requerido",
             		range: "El rango debe ser entre 1 y 100"
           			},
           	tamano: { 
             		required:"Campo requerido",
             		number: "Ingresar solo numeros enteros"
           			},
           	tipoSuelo: { 
             		required:"Campo requerido"
           			},
           	tipoArbol: { 
             		required:"Campo requerido"
           			},
	     }
	     });
		$("#enviar").click(function(){
	       var validado = $("#form-pfa").valid();
	       console.log(validado);
	       if(validado){
	       		$.get( "exito.php", function( data ) {
						  $("#solicitud").html(data);
						});
	       }
	    });


	</script>
</body>
</html>
