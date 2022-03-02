<?php


if(count($_GET)>0){
    $ruta = new productoData();
    $ruta->delete( $_GET['id']  );
}

print "<script>window.location='index.php?view=producto_view';</script>";
 


?>