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
							<a class="navbar-brand" href="../index.php"><img src="/webParalela/images/main-logo.png" alt="SEATTLE website template"/></a>
						</div>
						<div class="collapse navbar-collapse" id="mainMenu">
							<!-- Main navigation -->
							<ul class="nav navbar-nav pull-right">
								<li class="primary">
									<a href="index.php" class="firstLevel active hasSubMenu" >Home</a>
								</li>
								<li class="sep"></li>
								<li class="primary"> 
									<a href="../codigos.php" class="firstLevel hasSubMenu" >Codigos</a>
									<ul class="subMenu">
										<li><a href="../percolacion.php">Perocolación</a></li>
										<li><a href="../fasta.php">Fasta</a></li>
										<li><a href="../biblia.php">Codigo de la Biblia</a></li>
									</ul>
								</li>
								<li class="sep"></li>
								<li id="lastMenu" class="last"><a href="../contacto.php" class="firstLevel last">Contacto</a></li>
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
			<header class="page-header mb25">
				<div class="container">
					<div class="row">
						<div class="col-sm-10">
							<h1>
								<?php
									//error_reporting(E_ALL);
									//ini_set('display_errors','on');
									ini_set('memory_limit', '512M');
									
									// MAXIMO DE ANCHO DE LA MATRIZ DE SALIDA
									$maximo_linea = 40;
								    
								    $archivo = $_GET["file"];
								    if($archivo == "prueba"){ $maximo_linea=10;}
								    $frase = $_GET["pattern"];
								    if(isset($_GET["pagina"]))
								    {
								    	$pagina=($_GET["pagina"]);
								    }else{
								    	$pagina=0;
								    }
								    
								    // Proceso lectura respuesta
								    $way_file = "respuesta_".$archivo."_".$frase.".json";
									
									// echo "$way_file";
									$string = file_get_contents("./Respuestas/".$way_file,true);
									
									$arr_resp = json_decode($string, true);
									$con = 0;
									$sal_m = -1;
									$posiciones1 = array(); // array_push($posiciones1, $inicio);
									$posiciones2 = array(); // array_push($posiciones2, [$inicio,$color]);
									$posiciones3 = array(); // Paginas con respuestas

									// Colores para mostrar coincidencias
									$colores = ["red","blue","green","brown","orange","fuchsia","purple","yellow","black","lime","olive","maroon","navy","teal","gray","silver","black"];
									$color = 0;
									$limite_resultados = count($colores);

									// Proceso lectura texto
									$string = file_get_contents("./Textos/".$archivo.".txt",true);
									$arr_page = json_decode($string, true);
									$con2 = 0;
									$cant_paginas = sizeof($arr_page);
									
									echo '<h3>Frase "<b>'.strtoupper(str_replace('_', ' ', $frase)).'</b>" en '.$archivo.'.pdf</h3>';

									// Proceso de inversion
									$pal_orig = explode("_", $frase);
									$can_pal_orig = count($pal_orig);
									for($i=0; $i<$can_pal_orig; $i++)
									{
										array_push($pal_orig,strrev($pal_orig[$i]));
									}
									$can_pal_post = count($pal_orig);
									echo '<h6>Palabras de busqueda: &lt; <b>'.strtoupper(implode('</b> &gt;  &lt <b>', $pal_orig)).'</b> &gt;</h6>';

								?>
							</h1>
							<ul class="breadcrumb visible-md visible-lg">
								<?php echo "<h3><i>Pagina $pagina de $cant_paginas</i></h3>"; ?>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<section id="content" class="mt30 pb30">
				<div class="container">
					<div class="row">
						<!-- page content-->
						<section class="col-md-9">
								<?php
								    $coincidencias_pagina = array();
								    $unicos = array();
								    //var_dump($arr_resp);
									foreach ($arr_resp as $json_r) // respuestas
									{ 
								    	if($json_r["pagina"]==$pagina & $json_r["salto"]>2 & in_array($json_r["keyword"],$unicos)==FALSE & count($coincidencias_pagina)<$limite_resultados)
								    	{
									    	$salto = $json_r["salto"];
									    	$inicio = $json_r["inicio"]-1;
									    	$act_word = $json_r["keyword"];
									    	
									    	if($salto>=$maximo_linea) // Palabras diagonales
									    	{
									    		if($salto==$maximo_linea)
									    		{
									    			$forma = "recta vertical";
									    		}else{
									    			$forma = "diagonal";
									    		}
									    		array_push($unicos,$act_word);
										    	array_push($coincidencias_pagina,[$salto,$inicio,$act_word,$color,$forma]);
										    	$con += 1;
										    	
										    	if($sal_m<$salto){$sal_m=$inicio+$salto*count($act_word);}

										    	array_push($posiciones1, $inicio);
										    	array_push($posiciones2, [$inicio,$color]);
										    	
										    	for($i=0; $i<strlen($json_r["keyword"])-1; $i++)
										    	{
										    		$inicio = $inicio + $salto;
										    		$par = [$inicio,$color];
										    		array_push($posiciones1, $inicio);
										    		array_push($posiciones2, $par);
										    	}
										    	$color += 1;
										    }
										    if((($inicio%$maximo_linea)+(strlen($act_word)*$salto))<$maximo_linea) // Palabras Rectas
										    {
										    	array_push($unicos,$act_word);
										    	array_push($coincidencias_pagina,[$salto,$inicio,$act_word,$color,"recta"]);
										    	$con += 1;
										    	
										    	if($sal_m<$salto){$sal_m=$inicio+$salto*count($act_word);}

										    	array_push($posiciones1, $inicio);
										    	array_push($posiciones2, [$inicio,$color]);
										    	
										    	for($i=0; $i<strlen($json_r["keyword"])-1; $i++)
										    	{
										    		$inicio = $inicio + $salto;
										    		$par = [$inicio,$color];
										    		array_push($posiciones1, $inicio);
										    		array_push($posiciones2, $par);
										    	}
										    	$color += 1;
										    }
								    	}
									}

									for($i=0; $i<sizeof($arr_resp); $i++) // respuesta
									{
										for($j=1; $j<sizeof($arr_page)+1; $j++) // paginas
										{
											if($j == $arr_resp[$i]["pagina"])
											{
												array_push($posiciones3, $j);
											}
										}
									}

									if($con == 0) 
									{ 
										echo "<br>NO HAY COINCIDENCIAS EN LA PAGINA $pagina <br>";
										echo "<h3>Paginas con resultados</h3>";
									    echo '<b><font size="2" face="courier">';

										if($_GET['pagina']==0){echo "Se detecto que no ingreso ningun parametro.\nUse por ejemplo el siguiente enlace: <a href='http://00-ironman.clustermarvel.utem/webParalela/BIBLIA/index.php?pagina=1&file=prueba&pattern=food_roses_order'> Link </a>";}
									    
									    for($i=1; $i<=sizeof($arr_page); $i++)
									    {
									    	if(array_search($i, $posiciones3)!==FALSE)
									    	{
									    		echo "<a href=index.php?pagina=$i&file=$archivo&pattern=$frase>[$i]</a>";
									    		echo '  ';
									    	}
									    }
									    echo '</font></b><hr>';

									}else{

										echo "<h3>Paginas con resultados</h3>";
									    echo '<b><font size="2" face="courier">';
									    
									    for($i=1; $i<=sizeof($arr_page); $i++)
									    {
									    	if(array_search($i, $posiciones3)!==FALSE)
									    	{
									    		echo "<a href=index.php?pagina=$i&file=$archivo&pattern=$frase>[$i]</a>";
									    		echo '  ';
									    	}
									    }
									    echo '</font></b><hr>';

									    echo "<h3>Resultados</h3><h4>Se encontraron ".count($coincidencias_pagina)." veces el patron en esta pagina, ".count($arr_resp)." en todo el documento. Utilizando una matriz de ancho $maximo_linea.</h4><ol>";
									    foreach ($coincidencias_pagina as $key) {
									    	echo '<li><font color="'.$colores[$key[3]].'"'."> Desde el caracter <b>$key[1]</b>, con un salto de <b>$key[0]</b> posiciones, de forma <b>$key[4]</b>. Patron: <b>[".strtoupper(implode('-',str_split($key[2])))."]</b></font></li>";
									    }

										echo "</ol><hr><h3>Texto</h3>";
										echo '<font size="3" face="courier">';
										for($i=0; $i<strlen($arr_page[$pagina-1]); $i++)
										{
											if(in_array($i, $posiciones1))
											{
												for($j=0;$j<sizeof($posiciones2);$j++)
												{
													if($posiciones2[$j][0]==$i)
													{ 
														$actual_col=$posiciones2[$j][1];
													}
												}
												
												echo '<b><font size="3" face="courier" color="'.$colores[$actual_col].'">'.strtoupper($arr_page[$pagina-1][$i])."</font></b>";
												$con2 += 1;

											}else{
												echo ($arr_page[$pagina-1][$i])."";
												$con2 += 1;
											}
											if($archivo=="prueba"){$sal_m=10;}else{$sal_m=$maximo_linea;}
											if($con2==$sal_m){echo "<br>"; $con2 =0;}
										}
										echo "</font>";
									}
								?>							
						</section>
						<!--end page content-->
					</div>
				</div>
			</section>
		</section>
		<!-- content -->
		<!-- footer -->
		<?php require_once("../footer.php"); ?>
			<!-- End footer -->
		</div>
		<!-- global wrapper -->
	<!-- End Document 
	================================================== -->
	<?php require_once("../js.php"); ?>
	</body>
</html>