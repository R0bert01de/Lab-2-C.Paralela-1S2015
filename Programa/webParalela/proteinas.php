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
								<li class="active">Proteinas</li>
							</ul>
						</div>
					</div>
				</div>
			</header>

				<!-- works -->
				<section class="pt30 pb30 mb15">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="ctaBox ctaBox2Cols color2">
										<div class="col-lg-12">
											<h1>Formulario de Fasta para Proteinas</h1>
											<form method="post" action="controlador.php" id="form-pfp" role="form"  enctype="multipart/form-data">
												<input type="hidden" name="algoritmo" id="algoritmo" value="-pfp">
												<div class="col-lg-12">
													<div class="form-group">
														<label for="tipoArbol">Subir Archivo</label>
														<input name="documento" id="documento" type="file" require accept=".fasta">
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<label for="name">Matriz Sustituci&oacuten</label>
														<select class="form-control" name="matriz" id="matriz">
															<option name= "" value="">Seleccionar Matriz</option>
															<option name= "pam60" value="pam60">Pam60</option>
															<option name= "pam120" value="pam120">Pam120</option>
															<option name= "pam180" value="pam180">Pam180</option>
															<option name= "pam250" value="pam250">Pam250</option>
															<option name= "pam30" value="pam30">Pam30</option>
															<option name= "pam300" value="pam300">Pam300</option>
															<option name= "pam90" value="pam90">Pam90</option>
															<option name= "blosum30" value="blosum30">Blosum30</option>
															<option name= "blosum35" value="blosum35">Blosum35</option>
															<option name= "blosum40" value="blosum40">Blosum40</option>
															<option name= "blosum45" value="blosum45">Blosum45</option>
															<option name= "blosum50" value="blosum50">Blosum50</option>
															<option name= "blosum55" value="blosum55">Blosum55</option>
															<option name= "blosum60" value="blosum60">Blosum60</option>
															<option name= "blosum62" value="blosum62">Blosum62</option>
															<option name= "blosum65" value="blosum65">Blosum65</option>
															<option name= "blosum70" value="blosum70">Blosum70</option>
															<option name= "blosum75" value="blosum75">Blosum75</option>
															<option name= "blosum80" value="blosum80">Blosum80</option>
															<option name= "blosum85" value="blosum85">Blosum85</option>
															<option name= "blosum90" value="blosum90">Blosum90</option>
															<option name= "blosum95" value="blosum95">Blosum95</option>
															<option name= "blosum100" value="blosum100">Blosum100</option>
															<option name= "benner6" value="benner6">Benner6</option>
															<option name= "benner22" value="benner22">Benner22</option>
															<option name= "benner74" value="benner74">Benner74</option>
														</select>
													</div>
												</div>
												<div class="col-lg-3">
													<div class="form-group">
														<label for="email">Email</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Email *" value="<?php echo $_SESSION["email"]; ?>" require>
													</div>
												</div>
												<div class="col-lg-2">
													<div class="form-group">
														<label for="distribucion">Penalización -1 -10</label> 
														<input type="text" class="form-control" name="penalizacion" id="penalizacion" placeholder="" require>
													</div>
												</div>
												<div class="col-lg-2">
													<div class="form-group">
														<label for="tamano">Numero Resultado</label>
														<input type="text" class="form-control" name="resultado" id="resultado" placeholder="" require>
													</div>
												</div>
												<input type="hidden" class="form-control" name="size" id="size" value="111"></label>
													
												<div class="row">
													<div class="col-lg-2">
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
							<img src="images/portfolio/proteinas.jpg" alt="SEATTLE premium website template" class="img-responsive mb30"/>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12 col-sm-4">
									<h1> Comparacion de Cadenas de Proteinas</h1>
									<p> Un alineamiento de secuencias en bioinformática es una forma de representar y comparar dos o más secuencias o cadenas de estructuras primarias proteicas para resaltar sus zonas de similitud, que podrían indicar relaciones funcionales o evolutivas entre los genes o proteínas consultados. Los resultados serán enviados a su correo electrónico por medio de un documento formato  PDF.</p>
								</div>
								<div class="col-md-12 col-sm-4">
									<h2>Integrantes</h2>
									<p>Carlos Guerrero Urbina</p>
									<p>Daniel Gutierrez Pizarro</p>
									<p>Rodrigo Arratia Allende</p>
									<h2>Technology</h2	>
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
		$("#form-pfp").validate({
	           rules: {
	                email: { 
	                 	required: true,
      					email: true
	                } ,
	                matriz: { 
	                 	required: true
	                } ,
	                penalizacion: { 
	                 	required: true,
	                 	range: [-10,-1]
	                } ,
	                resultado: { 
	                 	required: true,
	                 	number: true,
	                 	range: [1,10],
      					digits: true
	                } ,
	                documento: { 
	                 	required: true
	                } ,
	                


	           },
	     messages:{
	        email: { 
	                 required:"Debe escribir un correo correcto"
	               },
           	matriz: { 
             		required:"Campo requerido"
           			},
           	penalizacion: { 
             		required:"Campo requerido",
             		range: "El rango debe ser entre -10 y -1"
           			},
           	resultado: { 
             		required:"Campo requerido",
             		number: "Ingresar solo numeros enteros",
             		range: "El rango debe ser entre 1 y 10",
      				digits: "Debe ser Dígitos"
           			},
           	documento:  "Ingrese un archivo fasta"
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
