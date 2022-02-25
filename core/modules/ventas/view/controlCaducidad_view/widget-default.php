<?php
	$lotes = loteData::getAllName();

?>


<div class="col-md-12 mb-2">
    <!-- <a href="index.php" class="btn btn-dark btn-circle btn-sm">
        <i class="fas fa-angle-left"></i>
    </a> -->
    <h1>Control Caducidad</h1>
</div>


<br><br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">



        <h6 class="m-0 font-weight-bold text-primary">Tabla de Productos</h6>
    </div>
    <div class="card-body">


    <div class="col-md-12 mt-1 mb-4">
            <label for="dimension" class="form-label">Seleccione Lote</label>
            <div class="form-select" aria-label="Default select example">
                <select onchange="onSelectTipo()" name="selectTipo" id="selectTipo" class="form-control">
                    <option selected>Seleccione un lote </option>

                    <?php foreach($lotes as $lote){
                        ?>

                    <option value="<?php   echo $lote->id;   ?>">

                        <?php echo $lote->numero;?>
                    </option>


                    <?php }?>
                </select>
            </div>
        </div>



        <div id="respuesta"></div>
        <script>
        function onSelectTipo() {
            console.log('CAMBIO ESTO');

            let tipo = 'tipo=' + document.getElementById("selectTipo").value;
            $.ajax({
                    url: 'core/modules/ventas/view/controlCaducidad_view/TableData.php',
                    type: 'POST',
                    data: tipo,
                })
                .done(function(res) {
                    $('#respuesta').html(res)
                })

        }
        </script>




    </div>
</div>