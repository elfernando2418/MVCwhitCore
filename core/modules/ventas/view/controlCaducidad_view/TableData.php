<?php
 include "./../../model/producto.php";
 include "./../../../../controller/Database.php";
 include "./../../../../controller/Executor.php";
 
  $listproductos = productoData::getByTipo($_POST['tipo']);
  $activeFechaCaducidad = false;
?>
<div class="col-md-12 mt-1 mb-2">
    <label for="name" class="form-label">Durabilidad</label>
    <input disabled type="text" class="form-control" value="15 Días" id="name">
</div>
<div class="col-md-12 mt-4 mb-4">
    <label for="dimension" class="form-label">Seleccione Producto</label>
    <div class="form-select" aria-label="Default select example">
        <select  onchange="onSelectPRoducto()" name="selectProducto" id="selectProducto" class="form-control">
            <option selected>Seleccione un Producto </option>
            <?php foreach($listproductos as $producto){
                $activeFechaCaducidad= true;
                        ?>

            <option value="<?php   echo $producto->fecha_caducidad;   ?>">
              
                <?php echo $producto->nombre;?>
            </option>
            <?php }?>
        </select>
    </div>
</div>
 
 
<div class="col-md-12 mt-1 mb-2" id="fechaCaducidad">
    <label for="name" class="form-label">Fecha de Caducidad</label>
    <input disabled type="text" class="form-control" value="12/12/12" id="fechaCaduca">
</div>
 

<script>
    document.getElementById('fechaCaducidad').style.visibility = "hidden"; // hide
    function onSelectPRoducto() {
            document.getElementById('fechaCaducidad').style.visibility = "visible"; // show
            let fechaProducto = document.getElementById('selectProducto').value;
     
            
            document.getElementById('fechaCaduca').value = fechaProducto; // show
            
    }
</script>

