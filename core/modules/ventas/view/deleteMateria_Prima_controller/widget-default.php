<?php


if(count($_GET)>0){
    $ruta = new materia_primaData();
    $ruta->delete( $_GET['id']  );
}

print "<script>window.location='index.php?view=materia_prima_view';</script>";
 


?>