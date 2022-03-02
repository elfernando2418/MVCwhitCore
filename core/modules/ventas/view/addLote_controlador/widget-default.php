<?php


if(count($_POST)>0){

    $lote = new loteData();

    $lote->codigo = $_POST["codigo"];
	$lote->numero = $_POST["numero"];
	$lote->fecha_elaboracion = $_POST["fecha_elaboracion"];
 

	$lote->add();
//	die();

}
 
print "<script>window.location='index.php?view=lote_view';</script>";
 


?>