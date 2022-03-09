<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

$lote = materia_primaData::getLastId(  );
//var_dump($lote);
$code="M0000";
if( isset($lote->id)){
    $code = $code.($lote->id+1);
}
//echo $code;
//echo "<br>";
?>
<div class="col-md-12 mb-2">
    <a href="index.php?view=materia_prima_view" class="btn btn-dark btn-circle btn-sm">
        <i class="fas fa-angle-left"></i>
    </a>
    <h1>Registro de Materia Prima</h1>
</div>

<form class="row g-3" method="POST" onsubmit="return validarDatos()" action="index.php?view=addMateria_controlador">
    <div class="col-md-12" style="max-width: 500px;">

        <div class="col-md-12 mt-1">
            <label for="codigo" class="form-label">Codigo</label>
            <input readonly name="codigo"  value="<?php echo $code;?>" type="text" class="form-control" id="codigo">
        </div>



        <div class="col-md-12 mt-1">
            <label for="dimension" class="form-label">Tipo Materia Prima</label>
            <div class="form-select" aria-label="Default select example">
                <select name="id_tipo_mateira" id="id_tipo_mateira" class="form-control">
                    <option selected value="">Ninguna Opción Seleccionada</option>

                    <option value="1">Hijuelos</option>
                    <option value="2">Abono</option>
                   
                </select>
            </div>
        </div>

        

        <div class="col-md-12 mt-1">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input name="cantidad" type="number" class="form-control" id="cantidad">
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
    let id_tipo_mateira = document.getElementById("id_tipo_mateira").value;
 

    if (!codigo.trim()) {
        swal("Debe Ingresar un Código", '', 'warning');
        return false
    }
    if (!id_tipo_mateira.trim()) {
        swal("Debe Seleccionar un Tipo Materia Prima", '', 'warning');
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