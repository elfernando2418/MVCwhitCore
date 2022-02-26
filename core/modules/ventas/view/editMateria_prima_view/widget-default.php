  <?php

     
  $idMateria = $_GET['id'];



  $materia = materia_primaData::getById( $idMateria );


  var_dump( $materia );
  
  ?>
  <div class="col-md-12 mb-2">
    <a href="index.php?view=materia_prima_view" class="btn btn-dark btn-circle btn-sm">
        <i class="fas fa-angle-left"></i>
    </a>
    <h1>Editar Materia Prima</h1>
</div>

<form class="row g-3" method="POST" action="index.php?view=addLote_controlador">
    <div class="col-md-12" style="max-width: 500px;">

        <div class="col-md-12 mt-1">
            <label for="codigo" class="form-label">Codigo</label>
            <input name="codigo" type="text" class="form-control" id="codigo" value="<?php echo $materia->codigo  ?>">
        </div>
        <div class="col-md-12 mt-1">
            <label for="id_tipo_mateira" class="form-label">Tipo de Materia</label>
            <input name="id_tipo_mateira" type="text" class="form-control" id="id_tipo_mateira" value="<?php echo $materia->id_tipo_mateira  ?>">
        </div>
        <div class="col-md-12 mt-1">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input name="cantidad" type="number" class="form-control" id="cantidad" value="<?php echo $materia->cantidad  ?>">
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
            <button type="submit" class="btn btn-primary">Agregar Materia Prima</button>
        </div>

    </div>
</form>