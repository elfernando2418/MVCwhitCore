  <?php

     
  $idMateria = $_GET['id'];



  $materia = materia_primaData::getById( $idMateria );


  var_dump( $materia );
  
  ?>
  
  <h1>EDIT MATERIA PRIMA</h1>
  
  
  <form method="POST" action="index.php?view=uppdateLote_controlador">

    <p style="display:none" >Codigo: <input type="text" name="codigo"  value="<?php echo $materia->codigo  ?>"  ></p>


       <p>Tipo de Materia: <input type="text" name="id_tipo_mateira"  value="<?php echo $materia->id_tipo_mateira  ?>"  ></p>


       <p>Cantidad: <input type="number" name="cantidad"  value="<?php echo $materia->cantidad  ?>"  ></p>


       <button type="submit"> ENVIAR </button>


   </form>