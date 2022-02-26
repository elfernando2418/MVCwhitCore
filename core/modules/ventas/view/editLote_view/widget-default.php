<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  

  <?php

     
  $idLote = $_GET['id'];



  $lote = LoteData::getById( $idLote );

  
  ?>
  <div class="col-md-12 mb-2">
    <a href="index.php?view=lote_view" class="btn btn-dark btn-circle btn-sm">
        <i class="fas fa-angle-left"></i>
    </a>
    <h1>Editar Lote</h1>
</div>

<form class="row g-3" method="POST"  onsubmit="return validarDatos()"  action="index.php?view=editLote_controller">
    <div class="col-md-12" style="max-width: 500px;">

    <div class="col-md-12 mt-1" style="display:none;">
            <label for="codigo" class="form-label">id</label>
            <input name="id" type="text" class="form-control" id="id" value="<?php echo $lote->id  ?>">
        </div>

        <div class="col-md-12 mt-1">
            <label for="codigo" class="form-label">Código</label>
            <input name="codigo" type="text" class="form-control" id="codigo" value="<?php echo $lote->codigo  ?>">
        </div>
        <div class="col-md-12 mt-1">
            <label for="numero" class="form-label">Número de lote</label>
            <input name="numero" type="number" class="form-control" id="numero" value="<?php echo $lote->numero  ?>">
        </div>
        <div class="col-md-12 mt-1">
            <label for="fecha_elaboracion" class="form-label">Fecha Elaboracion</label>
            <input name="fecha_elaboracion" type="date" class="form-control" id="fecha_elaboracion" value="<?php echo $lote->fecha_elaboracion  ?>">
        </div>




      

        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary">Agregar Lote</button>
        </div>

    </div>
</form>



<script>
  function validarDatos() {

    let codigo = document.getElementById("codigo").value;

    let numero = document.getElementById("numero").value;

    let fecha_elaboracion = document.getElementById("fecha_elaboracion").value;
 

    if (!codigo.trim()) {
        swal("Debe Ingresar un Código", '', 'warning');
        return false
    }
    if (!numero.trim()) {
        swal("Debe Ingresar un Número", '', 'warning');
        return false
    }
    if (!fecha_elaboracion.trim()) {
        swal("Debe Ingresar una fecha Elaboracion", '', 'warning');
        return false
    }

    console.log('here')
    return true;
  }

</script>
