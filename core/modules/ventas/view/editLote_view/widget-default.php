  <?php

     
  $idLote = $_GET['id'];



  $lote = LotData::getById( $idLote );


  var_dump( $lote );
  
  ?>
  
  <h1>EDIT LOTE</h1>
  
  
  <form method="POST" action="index.php?view=uppdateLote_controlador">

    <p style="display:none" >nombre: <input type="text" name="id"  value="<?php echo $lote->id  ?>"  ></p>


       <p>nombre: <input type="text" name="name"  value="<?php echo $lote->name  ?>"  ></p>


       <p>num lote: <input type="number" name="num_lot"  value="<?php echo $lote->num_lot  ?>"  ></p>


       <p> dimension: <input type="number" name="dimension" value="<?php echo $lote->dimension  ?>"  ></p>



       <button type="submit"> ENVIAR </button>


   </form>