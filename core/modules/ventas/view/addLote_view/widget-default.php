<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
<div class="col-md-12 mb-2">
    <a href="index.php?view=lote_view" class="btn btn-dark btn-circle btn-sm">
        <i class="fas fa-angle-left"></i>
    </a>
    <h1>Registro de Lote</h1>
</div>

<form class="row g-3" method="POST"  onsubmit="return validarDatos()"  action="index.php?view=addLote_controlador">
    <div class="col-md-12" style="max-width: 500px;">

        <div class="col-md-12 mt-1">
            <label for="codigo" class="form-label">Codigo</label>
            <input name="codigo" type="text" class="form-control" id="codigo">
        </div>

        <div class="col-md-12 mt-1">
            <label for="numero" class="form-label">Numero de lote</label>
            <input name="numero" type="number" class="form-control" id="numero">
        </div>

        <div class="col-md-12 mt-1">
            <label for="fecha_elaboracion" class="form-label">Fecha Elaboracion</label>
            <input name="fecha_elaboracion" type="date" class="form-control" id="fecha_elaboracion">
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
        swal("Debe Ingresar una fecha Elaboración", '', 'warning');
        return false
    }

    console.log('here')
    return true;
  }

</script>