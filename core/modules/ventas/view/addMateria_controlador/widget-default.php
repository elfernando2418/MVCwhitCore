<?php


if(count($_POST)>0){

    $materia = new materia_primaData();

    $materia->codigo = $_POST["codigo"];
	$materia->id_tipo_mateira = $_POST["id_tipo_mateira"];
	$materia->cantidad = $_POST["cantidad"];
 

	$materia->add();
//	die();

}
 
print "<script>window.location='index.php?view=materia_prima_view';</script>";
 


?>