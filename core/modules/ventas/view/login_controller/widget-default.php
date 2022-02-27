<?php
include "./../../model/usuario.php";
include "./../../../../controller/Database.php";
include "./../../../../controller/Executor.php";

 
 
$email = $_POST['email'];
$password = $_POST['password'];
$listproductos = usuarioData::getByemailPassword($email,$password);
 
if(!isset($listproductos->id)){
  print "
  <h1>Correo o Contraseña incorrecta</h1>
  <script>

    timeout = setTimeout(alertFunc, 2000);
  
  
  function alertFunc() {
    window.open('./../../../../../index.php','_self')
  }
 1
   </script>";
}else{
  SESSION_START();
  $_SESSION['idUsuario']=$listproductos->id;
 
  print "<script> 
  window.open('./../../../../../index.php','_self')
  
  
  </script>";


}




  die();

 
  
?>