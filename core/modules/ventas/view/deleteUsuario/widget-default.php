<?php


if(count($_GET)>0){
    $usuario = new usuarioData();
    $usuario->delete( $_GET['id']  );
}

print "<script>window.location='index.php?view=usuario';</script>";
 


?>