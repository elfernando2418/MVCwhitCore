<?php


if(count($_POST)>0){

    $producto = new productoData();
 
    
    $producto->id = $_POST["id"];
    $producto->codigoProducto = $_POST["codigoProducto"];
    $producto->nombre = $_POST["nombre"];
    $producto->calibre = $_POST["calibre"];
    $producto->grado_brix = $_POST["grado_brix"];
    $producto->peso = $_POST["peso"];
    $producto->id_lote = $_POST["id_lote"];
    $producto->fecha_ingreso = $_POST["fecha_ingreso"];
    $producto->fecha_caducidad = $_POST["fecha_caducidad"];


	$producto->update();
 
}


print "<script>window.location='index.php?view=producto_view';</script>";
 


?>