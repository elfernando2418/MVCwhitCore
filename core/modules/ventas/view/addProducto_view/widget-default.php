<div class="col-md-12 mb-2">
    <a href="index.php" class="btn btn-dark btn-circle btn-sm">
        <i class="fas fa-angle-left"></i>
    </a>
    <h1>Registro de Producto</h1>
</div>

<form class="row g-3" method="POST" action="index.php?view=addLote_controlador">
    <div class="col-md-12" style="max-width: 500px;">

        <div class="col-md-12 mt-1">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre">
        </div>
        <div class="col-md-12 mt-1">
            <label for="calibre" class="form-label">Calibre</label>
            <input type="text" class="form-control" id="calibre">
        </div>
        <div class="col-md-12 mt-1">
            <label for="grado_brix" class="form-label">Grado Brix</label>
            <input type="text" class="form-control" id="grado_brix">
        </div>
        <div class="col-md-12 mt-1">
            <label for="peso" class="form-label">Peso</label>
            <input type="text" class="form-control" id="peso">
        </div>
        <div class="col-md-12 mt-1">
            <label for="id_lote" class="form-label">ID del Lote</label>
            <input type="number" class="form-control" id="id_lote">
        </div>
        <div class="col-md-12 mt-1">
            <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
            <input type="date" class="form-control" id="fecha_ingreso">
        </div>
        <div class="col-md-12 mt-1">
            <label for="fecha_caducidad" class="form-label">Fecha de Caducidad</label>
            <input type="date" class="form-control" id="fecha_caducidad">
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
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </div>

    </div>
</form>