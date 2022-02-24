<?php

var_dump( $_POST );

if(count($_POST)>0){

    $lote = new LotData();
    $lote->id = $_POST["id"];
    $lote->name = $_POST["name"];
	$lote->num_lot = $_POST["num_lot"];
	$lote->dimension = $_POST["dimension"];

	$lote->update();


}


print "<script>window.location='index.php?view=lote_view';</script>";
 


?>