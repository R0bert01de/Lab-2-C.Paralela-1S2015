<?php
//var_dump($_POST["algoritmo"]);
$output = array(); //contendrá cada linea salida desde la aplicación en Python
//var_dump($_POST);
error_reporting(E_ALL);
ini_set('display_errors','on');
include("simpleql/class.simpleql.php");
session_start();
/*Utilizando exec y enviando le el comando para ejecutar la aplicación
*solo hará que se ejecute mas no se mostrará nada...
*/
//exec("python /var/www/holamundo.py");

/*Usando exec, pero agregando le como parametro además del comando para  ejecutar la aplicación un arreglo; tendriamos la salida de nuestra aplicación en dicho arreglo; así que recorriendo e imprimiendo cada subindice del arreglo se mostraria la salida de nuestra aplicación en python utilizando php
*/
//echo $_POST["algoritmo"];
//$alg = $_POST["algoritmo"];
//$comando = "sudo -u paralela /usr/bin/mpirun -np 95 --hostfile /home/hostfile python /mpi/hola_mundo_mpi.py";
//exec($comando, $result);
switch($_POST["algoritmo"]){
	case "-ppi":
		$output = "pi".date("Ymshis");
		$comando = "sudo -u paralela mpirun -np ".$_POST["size"]." --hostfile /home/hostfile python /mpi/Percolacion/perFinal/paralelo.py ".$_POST["tipoArbol"]." ".$_POST["tipoSuelo"]." ".$_POST["distribucion"]." ".$_POST["tamano"]." ".$_POST["email"]." ".$output;
		//echo "<br>[".$comando."]<br>";
		$simpleql = new Mysql();
		//echo $_SESSION["id"];
		$arreglo = array('id_usuario' => addslashes($_SESSION["id"]),
					'arbol' => addslashes($_POST["tipoArbol"]),
					'suelo' => addslashes($_POST["tipoSuelo"]),
					'documento' => $output,
					'tipo' => "-ppi",
					'tamano' => addslashes($_POST["tamano"]),
					'distribucion' => addslashes($_POST["distribucion"]),
					'size' => addslashes($_POST["size"])
					);
		$result = $simpleql->inserTable("historial_percolacion", $arreglo);
		//var_dump($result);
		exec($comando . ' > /tmp/salidap1 2> /tmp/salidap1.errores &');
		break;
	case "-ppe":
		$output = "pe".date("Ymshis");
		$comando = "sudo -u paralela mpirun -np ".$_POST["size"]." --hostfile /home/hostfile python /mpi/Percolacion/enfer/paralelo.py ".$_POST["tipoEnfermedad"]." ".$_POST["distribucion"]." ".$_POST["tamano"]." ".$_POST["email"]." ".$output;
		//echo "<br>[".$comando."]<br>";
		//var_export(getcwd());
		//var_export($comando);
		$simpleql = new Mysql();
		$arreglo = array('id_usuario' => addslashes($_SESSION["id"]),
					'arbol' => 0,
					'suelo' => 0,
					'distribucion' => addslashes($_POST["distribucion"]),
					'tamano' => addslashes($_POST["tamano"]),
					'size' => addslashes($_POST["size"]),
					'documento' => $output,
					'tipo' => "-ppe",
					'enfermedad' =>  addslashes($_POST["tipoEnfermedad"])
					);
		$result = $simpleql->inserTable("historial_percolacion", $arreglo);
		//var_dump($result);
		exec($comando . ' > /tmp/salidap2 2> /tmp/salidap2.errores &');
		break;
	case "-pfa":
		$uploaddir = '/var/www/html/webParalela/FASTA/';
		$uploadfile = $uploaddir . basename($_FILES['documento']['name']);

		if (move_uploaded_file($_FILES['documento']['tmp_name'], $uploadfile)) {
			$output = "FastaADN".date("Ymshis");
			//echo $output."<br>";
		    $archivo = basename($_FILES['documento']['name']);
		    $comando = "sudo -u paralela /usr/bin/mpirun -np ".$_POST["size"]." --hostfile /home/hostfile python /mpi/FASTA/paralelo.py ".$archivo." matlist.".$_POST['matriz']." ".$_POST['penalizacion']." ".$_POST['resultado']." ".$_POST['email']." ".$output;
			$simpleql = new Mysql();
			$arreglo = array('id_usuario' => addslashes($_SESSION["id"]),
						'documento' => $output,
						'matriz' => addslashes($_POST["matriz"]),
						'penalizacion' => addslashes($_POST["penalizacion"]),
						'numero_resultado' => addslashes($_POST["resultado"]),
						'size' => addslashes($_POST["size"]),
						'tipo' => "-pfa"
						);
			$result = $simpleql->inserTable("historial_fasta", $arreglo);
			    //echo "<br>[".$comando."]<br>";
		    exec($comando . ' > /tmp/salidaf1 2> /tmp/salidaf1.errores &');
		} else {
		    echo "¡Posible ataque de carga de archivos!\n";
		    exit(0);
		}
		
		//break;
		//$comando = "mpirun -np ".$_POST["size"]." --hostfile /home/hostfile python ";
		//exec($comando . ' > /tmp/salida 2> /tmp/salida.errores &');
		break;
	case "-pfp":
		$uploaddir = '/var/www/html/webParalela/FASTA/';
		$uploadfile = $uploaddir . basename($_FILES['documento']['name']);

		if (move_uploaded_file($_FILES['documento']['tmp_name'], $uploadfile)) {
			$output = "FastaPRO".date("Ymshis");
			//echo $output."<br>";
		    $archivo = basename($_FILES['documento']['name']);
		    $comando = "sudo -u paralela /usr/bin/mpirun -np ".$_POST["size"]." --hostfile /home/hostfile python /mpi/FASTA/paralelo_prote_new.py ".$archivo." matlist.".$_POST['matriz']." ".$_POST['penalizacion']." ".$_POST['resultado']." ".$_POST['email']." ".$output;
		    //echo "<br>[".$comando."]<br>";
			$simpleql = new Mysql();
			$arreglo = array('id_usuario' => addslashes($_SESSION["id"]),
						'documento' => $output,
						'matriz' => addslashes($_POST["matriz"]),
						'penalizacion' => addslashes($_POST["penalizacion"]),
						'numero_resultado' => addslashes($_POST["resultado"]),
						'size' => addslashes($_POST["size"]),
						'tipo' => "-pfp"
						);
			$result = $simpleql->inserTable("historial_fasta", $arreglo);
		   exec($comando . ' > /tmp/salidaf2 2> /tmp/salidaf2.errores &');
		} else {
		    echo "¡Posible ataque de carga de archivos!\n";
		    exit(0);
		}
		//$comando = "mpirun -np ".$_POST["size"]." --hostfile /home/hostfile python ";
		//exec($comando . ' > /tmp/salida 2> /tmp/salida.errores &');
		
		break;
	case "-pbi":
		$uploaddir = '/mpi/BIBLIA/Serial/';
		$uploadfile = $uploaddir . basename($_FILES['documento']['name']);

		if (move_uploaded_file($_FILES['documento']['tmp_name'], $uploadfile)) {
			$output = "Biblia_".date("Ymshis");
			//echo $output."<br>";
		    $pdf = basename($_FILES['documento']['name']);
		    $archivo = explode(".", $pdf);
		    //echo $archivo[0];
		    $comando = "sudo -u paralela /usr/bin/mpirun -np ".$_POST["size"]." --hostfile /home/hostfile python3 /mpi/BIBLIA/implicitParalell.py ".$archivo[0]." ".$_POST['saltos']." ".$_POST['email']." ".$output;
		    //echo "<a href='00-ironman.clustermarvel.utem/webParalela/BIBLIA/index.php?pagina=2&file=".$archivo[0]."&pattern=implicito'> Respuesta</a>";
            //echo "<br>[" . $comando . "]<br>";
		   
		} else {
		    echo "¡Posible ataque de carga de archivos!\n";
		    exit(0);
		}
		//var_export(getcwd());
		//var_export($comando);
		$simpleql = new Mysql();
		$arreglo = array('id_usuario' => addslashes($_SESSION["id"]),
					'documento' => $output,
					'patron' => "0",
					'saltos' => addslashes($_POST["saltos"]),
					'size' => addslashes($_POST["size"]),
					'tipo' => "-pbi"
					);
		$result = $simpleql->inserTable("historial_torah", $arreglo);
		exec($comando . ' > /tmp/salidab1 2> /tmp/salidab1.errores &');
		//echo "<h3> Se ha enviado al correo </h3><b>". $_POST['email']."</b> la busqueda Implicita. <h3>Se adjunta documento pdf con estadisticas encontradas. Saludos.</h3>";
		//echo "\n<a href='biblia.php'>Regresar</a>";
		//
		break;
	case "-pbe":
		$uploaddir = '/mpi/BIBLIA/Serial/';
		$uploadfile = $uploaddir . basename($_FILES['documento']['name']);

		if (move_uploaded_file($_FILES['documento']['tmp_name'], $uploadfile)) {
			$output = "Biblia_".date("Ymshis");
			//echo $output."<br>";
		    $pdf = basename($_FILES['documento']['name']);
		    $archivo = explode(".", $pdf);
		    //echo $archivo[0];
		    $comando = "sudo -u paralela /usr/bin/mpirun -np ".$_POST["size"]." --hostfile /home/hostfile python3 /mpi/BIBLIA/explicitParalell.py ".$archivo[0]." \"" .$_POST['patron']. "\" ".$_POST['saltos']." ".$_POST['email']." ".$output;
		    //echo "<br>[".$comando."]<br>";
		   
		} else {
		    echo "¡Posible ataque de carga de archivos!\n";
		    exit(0);
		}

		$simpleql = new Mysql();
		$arreglo = array('id_usuario' => addslashes($_SESSION["id"]),
					'documento' => $output,
					'patron' => addslashes($_POST["patron"]),
					'saltos' => addslashes($_POST["saltos"]),
					'size' => addslashes($_POST["size"]),
					'tipo' => "-pbe"
					);
		$result = $simpleql->inserTable("historial_torah", $arreglo);
		//var_export(getcwd());
		//var_export($comando);
		exec($comando . ' > /tmp/salidab2 2> /tmp/salidab2.errores &');
		//echo "<h3> Se ha enviado al correo </h3><b>". $_POST['email']."</b> la busqueda Explicita. <h3>Se adjunta documento pdf con estadisticas encontradas. Saludos.</h3>";
		//echo "\n<a href='biblia.php'>Regresar</a>";
		//
		break;

}
//echo $output;
//var_dump($result);
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
						<div class="col-xs-2 col-sm-2 col-md-1">
							<a href="javascript:history.go(-1)" class="btn btn-sm btn-inverse"><i class="icon-left-open-mini"></i>back</a>
						</div>  
						<div class="col-xs-10 col-sm-10 col-md-11 projectTitle">
							<h1><?= $_SESSION["nombre"]." ".$_SESSION["apellidos"]?></h1>
							<p>Computación Paralela Primer Semestre 2015</p>
							<ul class="breadcrumb visible-md visible-lg">
								<li><a href="index.php">Home</a></li>
								<li><a href="codigos.php">Codigos</a></li>
								<li class="active">paralela</li>
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
							<div class="row">
								<div class="col-md-12">
									<div class="ctaBox color2" data-nekoanim="bounceIn" data-nekodelay="100">
										<div class="ctaBoxText">
											<h1>
												Su requerimiento esta siendo procesado.
											</h1>
											<h2>Una vez terminado, seran enviados los resultados a su correo electronico
											<a href="javascript:history.go(-1)" class="btn btn-sm btn-inverse"><i class="icon-left-open-mini"></i>back</a>
											</h2>
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
