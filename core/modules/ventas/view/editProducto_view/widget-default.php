  <?php

     
  $idProducto = $_GET['id'];



  $producto = productoData::getById( $idProducto );


  var_dump( $producto );
  
  ?>
  
  <h1>EDIT PRODUCTO</h1>
  
  
  <form method="POST" action="index.php?view=uppdateLote_controlador">

    <p style="display:none" >Nombre: <input type="text" name="nombre"  value="<?php echo $producto->nombre  ?>"  ></p>


       <p>Calibre: <input type="text" name="calibre"  value="<?php echo $producto->calibre  ?>"  ></p>


       <p>Grado Brix: <input type="number" name="grado_brix"  value="<?php echo $producto->grado_brix  ?>"  ></p>


       <p>Peso: <input type="text" name="peso"  value="<?php echo $producto->peso  ?>"  ></p>


       <p>ID del Lote: <input type="number" name="id_lote"  value="<?php echo $producto->id_lote  ?>"  ></p>


       <p>Fecha de Ingreso: <input type="date" name="fecha_ingreso"  value="<?php echo $producto->fecha_ingreso  ?>"  ></p>


       <p>Fecha de Caducidad: <input type="date" name="fecha_caducidad"  value="<?php echo $producto->fecha_caducidad  ?>"  ></p>


       <button type="submit"> ENVIAR </button>


   </form>