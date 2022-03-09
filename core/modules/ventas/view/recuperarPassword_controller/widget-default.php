<?php
include "./../../model/usuario.php";
include "./../../../../controller/Database.php";
include "./../../../../controller/Executor.php";

 
 var_dump($_POST);
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];

$banderaPassword = false;
$listproductos = usuarioData::getByData($email,$nombre,$telefono);
var_dump($listproductos);
if(isset($listproductos->password)){
  echo 'EXISTE PASSS';
  $hash=password_hash($_POST["password"], PASSWORD_DEFAULT);

  usuarioData::updatePassword( $hash,$listproductos->id );
  $banderaPassword = true;
  /*if (password_verify($_POST['password'], $listproductos->password)) {
  }*/
}else{
  echo 'No existe';
}
 

if(!isset($listproductos->id)){
  print "
  <h1>Datos Incorrectos</h1>
  <script>

    timeout = setTimeout(alertFunc, 2000);
  
  
  function alertFunc() {
    window.open('./../../../../../index.php','_self')
  }
 1
   </script>";
}else{
  
  print "
  
  <script>
    window.open('./../../../../../index.php','_self');
    
    </script>"; 

}




  die();

 
  
?>