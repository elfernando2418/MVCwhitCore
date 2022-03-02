<?php

if(count($_POST)>0){
    $materiaPrima = new materia_primaData();

    // $materiaPrima->id = $_POST['id_ruta'];
    $materiaPrima->id = $_POST['id'];
    $materiaPrima->codigo = $_POST['codigo'];
    $materiaPrima->id_tipo_mateira = $_POST['id_tipo_mateira'];
    $materiaPrima->cantidad = $_POST['cantidad'];
     $materiaPrima->update();
}
 
print "<script>window.location='index.php?view=materia_prima_view';</script>";
 


?>