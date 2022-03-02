<?php


if(count($_POST)>0){

    $envioProducto = new envio_productoData();

 
	$envioProducto->codigo_ruta = $_POST['codigo_ruta'];
	$envioProducto->fecha_transporte = $_POST['fecha_transporte'];
	$envioProducto->empresa_transporte = $_POST['empresa_transporte'];
	$envioProducto->nombre_conductor = $_POST['nombre_conductor'];
	$envioProducto->placa = $_POST['placa'];
	$envioProducto->numero_envio = $_POST['numero_envio'];
	$envioProducto->remitente = $_POST['remitente'];
	$envioProducto->destinatario = $_POST['destinatario'];
	$envioProducto->id_producto = $_POST['id_producto'];
	$envioProducto->peso = $_POST['peso'];
	$envioProducto->id_estadoProducto = $_POST['id_estadoProducto'];
 	$envioProducto->add();

}


print "<script>window.location='index.php?view=envio_producto_view';</script>";
 


?>