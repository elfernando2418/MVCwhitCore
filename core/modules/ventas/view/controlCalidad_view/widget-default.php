<?php
	$lotes = loteData::getAllName();

?>
<h1>Control Calidad</h1>



<br><br>
<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">


        <div class="col-md-12 mt-1 mb-4">
            <label for="dimension" class="form-label">Seleccione Lote</label>
            <div class="form-select" aria-label="Default select example">
                <select onchange="onSelectTipo()" name="selectTipo" id="selectTipo" class="form-control">
                    <option selected value="0">Seleccione un lote </option>

                    <?php foreach($lotes as $lote){
                        ?>

                    <option value="<?php   echo $lote->id;   ?>">

                        <?php echo $lote->numero;?>
                    </option>


                    <?php }?>
                </select>
            </div>
        </div>

    </div>
</div>





<div id="respuesta"></div>
<script>
function onSelectTipo() {
    console.log('CAMBIO ESTO');
    
    let tipo = 'tipo=' + document.getElementById("selectTipo").value;
    
        $.ajax({
                url: 'core/modules/ventas/view/controlCalidad_view/TablaControlCalidad.php',
                type: 'POST',
                data: tipo,
            })
            .done(function(res) {
                $('#respuesta').html(res)
            })

     

}
</script>