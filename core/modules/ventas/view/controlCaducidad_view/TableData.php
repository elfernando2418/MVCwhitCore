<?php
 include "./../../model/pproductData.php";
 include "./../../../../controller/Database.php";
 include "./../../../../controller/Executor.php";

  var_dump( $_POST['tipo']) ;
 
  $listproductos = ProductData::getAllByCategoryId($categ);
  die();

?>

<div class="col-md-12 mt-1 mb-4">
    <label for="dimension" class="form-label">Seleccione Producto</label>
    <div class="form-select" aria-label="Default select example">
        <select name="selectProducto" id="selectProducto" class="form-control">
            <option selected>Seleccione un Producto </option>
            <?php foreach($lotes as $lote){
                        ?>

            <option value="<?php   echo $lote->id;   ?>">

                <?php echo $lote->numero;?>
            </option>

        </select>
    </div>
</div>