<?php

var_dump( $_GET['id'] );

if(count($_GET)>0){
    $ruta = new envio_productoData();
    $ruta->delete( $_GET['id']  );
}

print "<script>window.location='index.php?view=envio_producto_view';</script>";
 


?>