<?php

if(count($_POST)>0){
    $lote = new LoteData();
var_dump($_POST);
    
    $lote->id = $_POST['id'];
    $lote->codigo = $_POST['codigo'];
    $lote->numero = $_POST['numero'];
    $lote->fecha_elaboracion = $_POST['fecha_elaboracion'];
     $lote->update();
}
 
print "<script>window.location='index.php?view=lote_view';</script>";
 


?>