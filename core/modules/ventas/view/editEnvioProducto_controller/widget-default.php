<?php

var_dump( $_POST );

if(count($_POST)>0){
    $ruta->id = $_POST['id'];
    $ruta->codigo_ruta = $_POST['codigo_ruta'];
    $ruta->fecha_transporte = $_POST['fecha_transporte'];
    $ruta->empresa_transporte = $_POST['empresa_transporte'];
    $ruta->nombre_conductor = $_POST['nombre_conductor'];
    $ruta->placa = $_POST['placa'];
    $ruta->numero_envio = $_POST['numero_envio'];
    $ruta->remitente = $_POST['remitente'];
    $ruta->destinatario = $_POST['destinatario'];
    $ruta->id_producto = $_POST['id_producto'];
    $ruta->peso = $_POST['peso'];
    $ruta->id_estadoProducto = $_POST['id_estadoProducto'];
    $ruta->
	
//	die();

}
die();
 
print "<script>window.location='index.php?view=lote_view';</script>";
 


?>