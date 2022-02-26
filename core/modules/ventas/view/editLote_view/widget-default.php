  <?php

     
  $idLote = $_GET['id'];



  $lote = LoteData::getById( $idLote );


  var_dump( $lote );
  
  ?>
  <div class="col-md-12 mb-2">
    <a href="index.php?view=lote_view" class="btn btn-dark btn-circle btn-sm">
        <i class="fas fa-angle-left"></i>
    </a>
    <h1>Editar Lote</h1>
</div>

<form class="row g-3" method="POST" action="index.php?view=addLote_controlador">
    <div class="col-md-12" style="max-width: 500px;">

        <div class="col-md-12 mt-1">
            <label for="codigo" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="codigo" value="<?php echo $lote->codigo  ?>">
        </div>
        <div class="col-md-12 mt-1">
            <label for="numero" class="form-label">Numero de lote</label>
            <input type="number" class="form-control" id="numero" value="<?php echo $lote->numero  ?>">
        </div>
        <div class="col-md-12 mt-1">
            <label for="fecha_elaboracion" class="form-label">Fecha Elaboracion</label>
            <input type="date" class="form-control" id="fecha_elaboracion" value="<?php echo $lote->fecha_elaboracion  ?>">
        </div>




        <div class="col-md-12 mt-1">
            <label for="dimension" class="form-label">Dimension</label>
            <div class="form-select" aria-label="Default select example">
                <select name="selectTipo" id="selectTipo" class="form-control">
                    <option selected>Ninguna Opcion Seleccionada</option>

                    <option value="1">Opcion 1</option>
                    <option value="2">Opcion 2</option>
                    <!-- <?php //foreach($users as $user){
                        ?>

                    <option 
                    value="<?php  // echo $user->id;   ?>">

                    <?php// echo $user->name;?>
                    </option>


                    <?php// }?> -->
                </select>
            </div>
        </div>

        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary">Agregar Lote</button>
        </div>

    </div>
</form>