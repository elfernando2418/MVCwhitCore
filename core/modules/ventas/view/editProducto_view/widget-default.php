<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

     
  $idProducto = $_GET['id'];



  $producto = productoData::getById( $idProducto );

  $lotes = loteData::getAll( );

 
  
  ?>
  <div class="col-md-12 mb-2">
      <a href="index.php?view=producto_view" class="btn btn-dark btn-circle btn-sm">
          <i class="fas fa-angle-left"></i>
      </a>
      <h1>Editar Producto</h1>
  </div>

  <form class="row g-3" method="POST" onsubmit="return validarDatos()" action="index.php?view=editProducto_controller">
      <div class="col-md-12" style="max-width: 500px;">

      
      <div class="col-md-12 mt-1" style="display:none;" >
              <label for="nombre" class="form-label">ID</label>
              <input name="id" type="text" class="form-control" id="id"
                  value="<?php echo $producto->id  ?>">
          </div>

          <div class="col-md-12 mt-1">
              <label for="nombre" class="form-label">Nombre</label>
              <input name="nombre" type="text" class="form-control" id="nombre"
                  value="<?php echo $producto->nombre  ?>">
          </div>
          <div class="col-md-12 mt-1">
              <label for="calibre" class="form-label">Calibre</label>
              <input name="calibre" type="text" class="form-control" id="calibre"
                  value="<?php echo $producto->calibre  ?>">
          </div>
          <div class="col-md-12 mt-1">
              <label for="grado_brix" class="form-label">Grado Brix</label>
              <input name="grado_brix" type="text" class="form-control" id="grado_brix"
                  value="<?php echo $producto->grado_brix  ?>">
          </div>
          <div class="col-md-12 mt-1">
              <label for="peso" class="form-label">Peso</label>
              <input name="peso" type="text" class="form-control" id="peso" value="<?php echo $producto->peso  ?>">
          </div>

          <div class="col-md-12 mt-1">
              <label for="dimension" class="form-label">Seleccione número de Lote</label>
              <div class="form-select" aria-label="Default select example">
                  <select name="id_lote" id="id_lote" class="form-control">
                      <option>Ninguna Opcion Seleccionada</option>

                      <?php  foreach($lotes as $lote){

                        if( $producto->id_lote ==  $lote->id ){ ?>

                      <option selected value="<?php  echo $lote->id;   ?>">

                          <?php  echo $lote->numero;?>
                      </option>



                      <?php
                        }else{?>

                      <option value="<?php  echo $lote->id;   ?>">

                          <?php  echo $lote->numero;?>
                      </option>


                      <?php      }

                        ?>



                      <?php }?>
                  </select>
              </div>
          </div>

 

          <div class="col-md-12 mt-1">
              <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
              <input name="fecha_ingreso" type="date" class="form-control" id="fecha_ingreso"
                  value="<?php echo $producto->fecha_ingreso  ?>">
          </div>
          <div class="col-md-12 mt-1">
              <label for="fecha_caducidad" class="form-label">Fecha de Caducidad</label>
              <input name="fecha_caducidad" type="date" class="form-control" id="fecha_caducidad"
                  value="<?php echo $producto->fecha_caducidad  ?>">
          </div>



          <div class="col-12 mt-4">
              <button type="submit" class="btn btn-primary">Agregar Producto</button>
          </div>

      </div>
  </form>

  <script>
  function validarDatos() {

    let nombre = document.getElementById("nombre").value;
    let calibre = document.getElementById("calibre").value;
    let grado_brix = document.getElementById("grado_brix").value;
    let peso = document.getElementById("peso").value;
    let fecha_ingreso = document.getElementById("fecha_ingreso").value;
 

    if (!nombre.trim()) {
        swal("Debe Ingresar un Nombre", '', 'warning');
        return false
    }
    if (!calibre.trim()) {
        swal("Debe Ingresar un Calibre", '', 'warning');
        return false
    }
    if (!grado_brix.trim()) {
        swal("Debe Ingresar un Grado brix", '', 'warning');
        return false
    }
    if (!peso.trim()) {
        swal("Debe Ingresar un Peso", '', 'warning');
        return false
    }
    if (!fecha_ingreso.trim()) {
        swal("Debe Ingresar una Fecha", '', 'warning');
        return false
    }

    console.log('here')
    return true;
  }

</script>