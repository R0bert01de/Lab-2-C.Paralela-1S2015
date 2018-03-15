<?php
error_reporting(E_ALL);
ini_set('display_errors','on');
session_start();
include("simpleql/class.simpleql.php");
$advertencia = "";
if($_POST){
	$simpleql = new Mysql();
	$where = array("email" =>  $_POST["email"],
					"password" => $_POST["password"]
					);
	$result = $simpleql->arreglo("usuarios", $where);
	
	if(count($result)==1){
		//var_dump($result);
		$_SESSION["id"] = $result[0]["id"];
		$_SESSION["nombre"] = $result[0]["nombre"];
		$_SESSION["password"] = $result[0]["password"];
		$_SESSION["email"] = $result[0]["email"];
		$_SESSION["apellidos"] = $result[0]["apellidos"];
		header("Location: codigos.php");
	}
	else{
		$advertencia = '<div class="snippet"><div class="alert alert-danger">
							<strong>Epa!</strong> Usuario y/o contraseña incorrectos
						</div></div>';
	}
}
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
				<section id="content">
					<!-- icon boxes -->
					<!-- services and skills -->
					<!-- call to action -->
					<section class="pt40 pb40">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="ctaBox color2" data-nekoanim="bounceIn" data-nekodelay="100">
										<div class="ctaBoxText">
											<h1>
												Login
											</h1>
											<h2>Ingresa a utilizar nuestros servicios.
											</h2>
										</div>
										<?php echo $advertencia; ?>
										<div class="ctaBoxBtn">
											<div class="row">
											<form method="post" action="" id="form-login" role="form" novalidate="novalidate">
												<div class="col-md-6 col-md-offset-3">
													<div class="form-group">
														<label for="email">Correo electrónico</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="ingrese su correo" title="Por favor ingresar una dirrección de correo válida">
													</div>
													<div class="form-group">
														<label for="password">Contraseña</label>
														<input name="password" class="form-control required" type="password" id="password" size="30" value="" placeholder="Ingrese su contraseña" title="Las contraseñas deben coincidir">
													</div>
												</div>

												<div class="col-md-8 col-md-offset-4">
													<div class="result"></div>
													<a href="registrar.php">Obtener una cuenta</a>
													<button name="submit" type="submit" class="btn btn-lg" id="submit"> Ingresar</button>
												</div>
												<div class="col-md-12">
													<div class="result"></div>
													
												</div>
											</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
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
	<script type="text/javascript">
		$("#form-login").validate({
	           rules: {
	                email: { 
	                 	required: true,
      					email: true
	                } ,
	                password: { 
	                 required: true,
	                    minlength: 6,


	           },
	     messages:{
	        password: { 
	                 required:"El Password es Requerido"

	               },
	        email: { 
	                 required:"Debe escribir un correo correcto"
	               }


	     	}
	     });

	</script>
</body>
</html>
