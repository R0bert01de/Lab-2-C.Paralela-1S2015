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
							<a class="navbar-brand" href="index.html"><img src="images/main-logo.png" alt="SEATTLE website template"/></a>
						</div>
						<div class="collapse navbar-collapse" id="mainMenu">
							<!-- Main navigation -->
							<ul class="nav navbar-nav pull-right">
								<li class="primary">
									<a href="index.php" class="firstLevel  hasSubMenu" >Home</a>
								</li>
								<li class="sep"></li>
								<li class="primary"> 
									<a href="codigos.php" class="firstLevel  hasSubMenu" >Servicios</a>
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
								<li id="lastMenu" class="last"><a href="resultados.php" class="firstLevel active last">Resultados</a></li>
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
								<li class="active">Resultados</li>
							</ul>
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
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-condensed" id="example">
								<thead>
									<tr>
										<th>Servicio</th>
										<th>Procesadores</th>
										<th>Fecha</th>
										<th>Documento</th>
										<th>Detalle</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$simpleql = new Mysql();
										$where = array("id_usuario" => $_SESSION["id"],
														"tipo" => "-pfa");
										$fasta_as = $simpleql->arreglo("historial_fasta",$where);
										$simpleql = new Mysql();
										$where = array("id_usuario" => $_SESSION["id"],
														"tipo" => "-pfp");
										$fasta_ps = $simpleql->arreglo("historial_fasta",$where);
										$simpleql = new Mysql();
										$where = array("id_usuario" => $_SESSION["id"],
														"tipo" => "-ppi");
										$percolacion_is = $simpleql->arreglo("historial_percolacion",$where);
										$simpleql = new Mysql();
										$where = array("id_usuario" => $_SESSION["id"],
														"tipo" => "-ppe");
										$percolacion_es = $simpleql->arreglo("historial_percolacion",$where);
										$simpleql = new Mysql();
										$where = array("id_usuario" => $_SESSION["id"],
														"tipo" => "-pbe");
										$biblia_es = $simpleql->arreglo("historial_torah",$where);
										$simpleql = new Mysql();
										$where = array("id_usuario" => $_SESSION["id"],
														"tipo" => "-pbi");
										$biblia_is = $simpleql->arreglo("historial_torah",$where);
										foreach ($fasta_as  as $fasta_a) {
											echo'
											<tr class="odd gradeX">
												<td>Cadenas ADN</td>
												<td>'.$fasta_a["size"].'</td>
												<td>'.$fasta_a["fecha"].'</td>
												<td class="center"><a href="/webParalela/FASTA/Envio/'.$fasta_a["documento"].'.pdf" target="_blank">'.$fasta_a["documento"].'</a></td>
												<td class="center">
													<button type="button" class="btn btn-primary btn-sm" onclick="Detalle('.$fasta_a["fasta_id"].',1);">
												  	Detalle
													</button>
												</td>
											</tr>
											';
										}
										foreach ($fasta_ps  as $fasta_p) {
											echo'
											<tr class="odd gradeX">
												<td>Proteinas</td>
												<td>'.$fasta_p["size"].'</td>
												<td>'.$fasta_p["fecha"].'</td>
												<td class="center"><a href="/webParalela/FASTA/Envio/'.$fasta_p["documento"].'.pdf" target="_blank">'.$fasta_p["documento"].'</a></td>
												<td class="center">
													<button type="button" class="btn btn-primary btn-sm" onclick="Detalle('.$fasta_p["fasta_id"].',2);">
												  	Detalle
													</button>
												</td>
											</tr>
											';
										}
										foreach ($percolacion_is  as $percolacion_i) {
											echo'
											<tr class="odd gradeX">
												<td>Incendios</td>
												<td>'.$percolacion_i["size"].'</td>
												<td>'.$percolacion_i["fecha"].'</td>
												<td class="center"><a href="/webParalela/PERCOLACION/'.$percolacion_i["documento"].'.pdf" target="_blank">'.$percolacion_i["documento"].'</a></td>
												<td class="center">
													<button type="button" class="btn btn-primary btn-sm" onclick="Detalle('.$percolacion_i["percolacion_id"].',3);">
												  	Detalle
													</button>
												</td>
											</tr>
											';
										}
										foreach ($percolacion_es  as $percolacion_e) {
											echo'
											<tr class="odd gradeX">
												<td>Enfermedades</td>
												<td>'.$percolacion_e["size"].'</td>
												<td>'.$percolacion_e["fecha"].'</td>
												<td class="center"><a href="/webParalela/PERCOLACION/'.$percolacion_e["documento"].'.pdf" target="_blank">'.$percolacion_e["documento"].'</a></td>
												<td class="center">
													<button type="button" class="btn btn-primary btn-sm" onclick="Detalle('.$percolacion_e["percolacion_id"].',4);">
												  	Detalle
													</button>
												</td>
											</tr>
											';
										}
										foreach ($biblia_es  as $biblia_e) {
											echo'
											<tr class="odd gradeX">
												<td>Explicito</td>
												<td>'.$biblia_e["size"].'</td>
												<td>'.$biblia_e["fecha"].'</td>
												<td class="center"><a href="/webParalela/BIBLIA/PDF/'.$biblia_e["documento"].'.pdf" target="_blank">'.$biblia_e["documento"].'</a></td>
												<td class="center">
													<button type="button" class="btn btn-primary btn-sm" onclick="Detalle('.$biblia_e["torah_id"].',5);">
												  	Detalle
													</button>
												</td>
											</tr>
											';
										}
										foreach ($biblia_is  as $biblia_i) {
											echo'
											<tr class="odd gradeX">
												<td>Implicito</td>
												<td>'.$biblia_i["size"].'</td>
												<td>'.$biblia_i["fecha"].'</td>
												<td class="center"><a href="/webParalela/BIBLIA/PDF/'.$biblia_i["documento"].'.pdf" target="_blank">'.$biblia_i["documento"].'</a></td>
												<td class="center">
													<button type="button" class="btn btn-primary btn-sm" onclick="Detalle('.$biblia_i["torah_id"].',6);">
												  	Detalle
													</button>
												</td>
											</tr>
											';
										}
									?>
								</tbody>
							</table>
						</div>
					</section>
								</div> <!-- Queda hasta acá-->
							</div>
						</div> 
					</section>
					<!-- call to action -->
				</section>
			</section>
			<!-- Button trigger modal -->


<div id="modal"></div>
		<!-- content -->
		<!-- footer -->
		<?php require_once("footer.php"); ?>
		<!-- End footer -->
		</div>
		<!-- global wrapper -->
	<!-- End Document 
	================================================== -->
	<?php require_once("js.php"); ?>
	<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
			function Detalle (id,tipo) {
				$.get( "modal.php?id=" + id + "&tipo=" + tipo, function( data ) {
					console.log(data);
				  $( "#modal" ).html( data );
				  $( "#myModal" ).modal("show");
				});
			}
	</script>
</body>
</html>