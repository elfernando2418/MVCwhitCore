<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  
  
  <?php

     
  $idMateria = $_GET['id'];

  $materia = materia_primaData::getById( $idMateria );


  
  ?>
  <div class="col-md-12 mb-2">
      <a href="index.php?view=materia_prima_view" class="btn btn-dark btn-circle btn-sm">
          <i class="fas fa-angle-left"></i>
      </a>
      <h1>Editar Materia Prima</h1>
  </div>

  <form class="row g-3" method="POST" onsubmit="return validarDatos()" action="index.php?view=editMateriPrima_controller">
      <div class="col-md-12" style="max-width: 500px;">


      <div class="col-md-12 mt-1" style="display:none;">
              <label for="id" class="form-label">id</label>
              <input name="id" type="text" class="form-control" id="id" value="<?php echo $materia->id  ?>">
          </div>




          <div class="col-md-12 mt-1">
              <label for="codigo" class="form-label">Codigo</label>
              <input readonly name="codigo" type="text" class="form-control" id="codigo" value="<?php echo $materia->codigo  ?>">
          </div>




          <div class="col-md-12 mt-1">
              <label for="dimension" class="form-label">Tipo de Materia</label>
              <div class="form-select" aria-label="Default select example">
                  <select name="id_tipo_mateira" id="id_tipo_mateira" class="form-control">
                       
                      <?php 
                    
                    if( $materia->id_tipo_mateira == "1") {?>
                      <option selected value="1">Hijuelos</option>
                      <option value="2">Abono</option>
                      <?php
                    }else{?>


                      <option value="1">Hijuelos</option>
                      <option selected  value="2">Abono</option>
                      <?php
                        
                    }
                   ?>


                  </select>
              </div>
          </div>



          <div class="col-md-12 mt-1">
              <label for="cantidad" class="form-label">Cantidad</label>
              <input name="cantidad" type="number" class="form-control" id="cantidad"
                  value="<?php echo $materia->cantidad  ?>">
          </div>





          <div class="col-12 mt-4">
              <button type="submit" class="btn btn-primary">Agregar Materia Prima</button>
          </div>

      </div>
  </form>

  <script>
  function validarDatos() {

    let codigo = document.getElementById("codigo").value;

    let cantidad = document.getElementById("cantidad").value;
 

    if (!codigo.trim()) {
        swal("Debe Ingresar un Código", '', 'warning');
        return false
    }
    if (!cantidad.trim()) {
        swal("Debe Ingresar una Cantidad", '', 'warning');
        return false
    }

    console.log('here')
    return true;
  }

</script>