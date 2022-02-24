<div class="col-md-12 mb-2">
    <a href="index.php" class="btn btn-dark btn-circle btn-sm">
        <i class="fas fa-angle-left"></i>
    </a>
    <h1>Registro de Lote</h1>
</div>

<form class="row g-3" method="POST" action="index.php?view=addLote_controlador">
    <div class="col-md-12" style="max-width: 500px;">

        <div class="col-md-12 mt-1">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="col-md-12 mt-1">
            <label for="num_lot" class="form-label">Numeo de lote</label>
            <input type="text" class="form-control" id="num_lot">
        </div>
        <div class="col-md-12 mt-1">
            <label for="dimension" class="form-label">Dimension</label>
            <input type="text" class="form-control" id="dimension">
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