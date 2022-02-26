  <?php

     
  $idLote = $_GET['id'];



  $lote = LoteData::getById( $idLote );


  var_dump( $lote );
  
  ?>
  
  <h1>EDIT LOTE</h1>
  
  
  <form method="POST" action="index.php?view=uppdateLote_controlador">

    <p style="display:none" >Codigo: <input type="text" name="codigo"  value="<?php echo $lote->codigo  ?>"  ></p>


       <p>Numero: <input type="number" name="numero"  value="<?php echo $lote->numero  ?>"  ></p>


       <p>Fecha Elaboracion: <input type="date" name="fecha_elaboracion"  value="<?php echo $lote->fecha_elaboracion  ?>"  ></p>


       <button type="submit"> ENVIAR </button>


   </form>