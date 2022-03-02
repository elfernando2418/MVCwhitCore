<?php

var_dump($_POST);
if(count($_POST)>0){

    $usuario = new usuarioData();
    $usuario->id = $_POST["id"];
    $usuario->nombre = $_POST["nombre"];
    $usuario->telefono = $_POST["telefono"];
    $usuario->email = $_POST["email"];
    $usuario->password = $_POST["password"];
    $usuario->tipo = $_POST["tipo"];
	$usuario->update();
   
}


print "<script>window.location='index.php?view=usuario';</script>";
 


?>