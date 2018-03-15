<?php
include("simpleql/class.simpleql.php");
switch($_GET["tipo"]){
  case 1:
    $simpleql = new Mysql();
    $where = array("fasta_id" => $_GET["id"],
                   "tipo" => "-pfa");
    $arreglo = $simpleql->arreglo("historial_fasta",$where);
    $data ="";
    $data .="<p><strong>Numero de Resultado:</strong> ".$arreglo[0]["numero_resultado"]."</p>";
    $data .="<p><strong>Matriz:</strong> ".$arreglo[0]["matriz"]."</p>";
    $data .="<p><strong>Penalización:</strong> ".$arreglo[0]["penalizacion"]."</p>";
  break;

  case 2:
    $simpleql = new Mysql();
    $where = array("fasta_id" => $_GET["id"],
                   "tipo" => "-pfp");
    $arreglo = $simpleql->arreglo("historial_fasta",$where);
    $data ="";
    $data .="<p><strong>Numero de Resultado:</strong> ".$arreglo[0]["numero_resultado"]."</p>";
    $data .="<p><strong>Matriz:</strong> ".$arreglo[0]["matriz"]."</p>";
    $data .="<p><strong>Penalización:</strong> ".$arreglo[0]["penalizacion"]."</p>";
  break;

  case 3:
    $simpleql = new Mysql();
    $where = array("percolacion_id" => $_GET["id"],
                   "tipo" => "-ppi");
    $arreglo = $simpleql->arreglo("historial_percolacion",$where);
    $simpleql2 = new Mysql();
    $where2 = array("id_tipo_arbol" => $arreglo[0]["arbol"]);
    $arreglo2 = $simpleql2->arreglo("tipo_arbol",$where2);
    $simpleql3 = new Mysql();
    $where3 = array("id_tipo_suelo" => $arreglo[0]["suelo"]);
    $arreglo3 = $simpleql3->arreglo("tipo_suelo",$where3);
    $data ="";
    $data .="<p><strong>Tipo Arbol:</strong> ".$arreglo2[0]["nombre"]."</p>";
    $data .="<p><strong>Suelo:</strong> ".$arreglo3[0]["nombre"]."</p>";
    $data .="<p><strong>Distribución:</strong> ".$arreglo[0]["distribucion"]."</p>";
    $data .="<p><strong>Tamano:</strong> ".$arreglo[0]["tamano"]."</p>";
  break;

  case 4:
    $simpleql = new Mysql();
    $where = array("percolacion_id" => $_GET["id"],
                   "tipo" => "-ppe");
    $arreglo = $simpleql->arreglo("historial_percolacion",$where);
    $simpleql2 = new Mysql();
    $where2 = array("id_tipo_enfermedad" => $arreglo[0]["enfermedad"]);
    $arreglo2 = $simpleql2->arreglo("tipo_enfermedad",$where2);
    $data .="<p><strong>Tipo Enfermedad:</strong> ".$arreglo2[0]["nombre_enfermedad"]."</p>";
    $data .="<p><strong>Distribución:</strong> ".$arreglo[0]["distribucion"]."</p>";
    $data .="<p><strong>Tamano:</strong> ".$arreglo[0]["tamano"]."</p>";
  break;

  case 5:
    $simpleql = new Mysql();
    $where = array("torah_id" => $_GET["id"],
                   "tipo" => "-pbe");
    $arreglo = $simpleql->arreglo("historial_torah",$where);
    $data .="<p><strong>Saltos:</strong> ".$arreglo[0]["saltos"]."</p>";
    $data .="<p><strong>Patrón:</strong> ".$arreglo[0]["patron"]."</p>";
  break;

  case 6:
    $simpleql = new Mysql();
    $where = array("torah_id" => $_GET["id"],
                   "tipo" => "-pbi");
    $arreglo = $simpleql->arreglo("historial_torah",$where);
    $data .="<p><strong>Saltos:</strong> ".$arreglo[0]["saltos"]."</p>";
  break;

}
?>
<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Detalles</h4>
      </div>
      <div class="modal-body">
       <?= $data; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!-- end Modal -->