<?php


if(count($_GET)>0){
    $ruta = new loteData();
    $ruta->delete( $_GET['id']  );
}

print "<script>window.location='index.php?view=lote_view';</script>";
 


?>