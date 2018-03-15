<?php
    $archivo = $_GET["file"];
    $palabra = $_GET["word"];
    $orden = $_GET["way"];
    if(isset($_GET["pagina"]))
    {
    	$pagina=($_GET["pagina"]);
    }else{
    	$pagina=0;
    }

    // Proceso lectura respuesta
    $way_file = "";
    if($orden=="orden"){$way_file="respuesta_o_".$archivo."_".$palabra.".json";
	}else{if($orden=="inverso"){$way_file="respuesta_i_".$archivo."_".$palabra.".json";}}
	
	$string = file_get_contents("./Respuestas/".$way_file,true);
	
	$json_a = json_decode($string, true);
	$con = 0;
	$sal_m = -1;
	$posiciones1 = array();
	$posiciones2 = array();
	$posiciones3 = array();

	// Colores para mostrar coincidencias
	$colores = ["red","blue","green","brown","orange","pink","purple","yellow","","#70DB93","#5C3317","#9F5F9F","#B5A642","#D9D919","#A62A2A"];
	$color = 0;

	// Proceso lectura texto
	$string = file_get_contents("./Textos/".$archivo.".txt",true);
	$json_b = json_decode($string, true);
	$con2 = 0;
	$cant_paginas = sizeof($json_b);
	
	echo "Palabra <b>".$json_a[0]["keyword"]."</b> en $archivo.pdf<br>";
	echo "Pagina $pagina de $cant_paginas<br>";

    echo "<hr>"; 

	foreach ($json_a as $json_r) 
	{ 
    	if($json_r["pagina"]==$pagina)
    	{
	    	$salto = $json_r["salto"];
	    	$inicio = $json_r["inicio"]-1;
	    	echo "salto->: $salto  inicio-> $inicio<br />\n";
	    	$con += 1;
	    	if($sal_m<$salto){$sal_m=$salto;}

	    	array_push($posiciones1, $inicio);
	    	array_push($posiciones2, [$inicio,$color]);
	    	for($i=0; $i<strlen($json_a[0]["keyword"])-1; $i++)
	    	{
	    		$inicio = $inicio + $salto;
	    		$par = [$inicio,$color];
	    		array_push($posiciones1, $inicio);
	    		array_push($posiciones2, $par);
	    	}
	    	$color += 1;
    	}
	}
	if($con == 0) { echo "<br>NO HAY COINCIDENCIAS EN LA PAGINA $pagina <br>";}

	for($i=0; $i<sizeof($json_a); $i++) // respuesta
	{
		for($j=0; $j<sizeof($json_b); $j++) // paginas
		{
			if($j == $json_a[$i]["pagina"])
			{
				array_push($posiciones3, $j);
			}
		}
	}

	$ind = 0;
    echo '<hr><b>Lista de Paginas con resultados: <font size="2" face="courier">';
    
    for($i=1; $i<=sizeof($json_b); $i++)
    {
    	if(array_search($i, $posiciones3)!==FALSE)
    	{
    		echo "<a href=json_2015.php?pagina=$i&file=$archivo&way=$orden&word=$palabra>[$i]</a>";
    		echo '  ';
    		
    		$ind +=1;
    		if($ind==20){echo "<br>";$ind=0;}
    	}
    }
    echo '</font></b>';

	echo '<hr><blockquote><font size="3" face="courier">';
	for($i=0; $i<strlen($json_b[$pagina-1]); $i++)
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
			
			echo '<b><font size="3" face="courier" color="'.$colores[$actual_col].'">'.strtoupper($json_b[$pagina-1][$i])."</font></b>";
			$con2 += 1;

		}else{
			echo ($json_b[$pagina-1][$i])."";
			$con2 += 1;
		}
		if($con2==100){echo "<br>"; $con2 =0;}
	}
	echo "</font></blockquote>";





?>