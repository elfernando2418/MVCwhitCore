<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
	$productos = productoData::getAll();

	 
?>
<div class="col-md-12 mb-2">
    <a href="index.php" class="btn btn-dark btn-circle btn-sm">
        <i class="fas fa-angle-left"></i>
    </a>
    <h1>Registro de Producto</h1>
</div>

<form class="row g-3" method="POST" onsubmit="return validarDatos()" action="index.php?view=addEnvioProducto_controller">
    <div class="col-md-12" style="max-width: 500px;">

        
        <div class="col-md-12 mt-1">
            <label for="fom_data" class="form-label">codigo_ruta</label>
            <input name="codigo_ruta" type="text" class="form-control" id="codigo_ruta">
        </div>
        <div class="col-md-12 mt-1">
            <label for="fom_data" class="form-label">fecha_transporte</label>
            <input name="fecha_transporte" type="date" class="form-control" id="fecha_transporte">
        </div>
        <div class="col-md-12 mt-1">
            <label for="fom_data" class="form-label">empresa_transporte</label>
            <input name="empresa_transporte" type="text" class="form-control" id="empresa_transporte">
        </div>
        <div class="col-md-12 mt-1">
            <label for="fom_data" class="form-label">nombre_conductor</label>
            <input name="nombre_conductor" type="text" class="form-control" id="nombre_conductor">
        </div>
        <div class="col-md-12 mt-1">
            <label for="fom_data" class="form-label">placa</label>
            <input name="placa" type="text" class="form-control" id="placa">
        </div>
        <div class="col-md-12 mt-1">
            <label for="fom_data" class="form-label">numero_envio</label>
            <input name="numero_envio" type="number" class="form-control" id="numero_envio">
        </div>
        <div class="col-md-12 mt-1">
            <label for="fom_data" class="form-label">remitente</label>
            <input name="remitente" type="text" class="form-control" id="remitente">
        </div>
        <div class="col-md-12 mt-1">
            <label for="fom_data" class="form-label">destinatario</label>
            <input name="destinatario" type="text" class="form-control" id="destinatario">
        </div>



        <div class="col-md-12 mt-1">
            <label for="fom_data" class="form-label">Producto</label>
            <div class="form-select" aria-label="Default select example">
                <select name="id_producto" id="id_producto" class="form-control">
                    <option selected value="" >Ninguna Opción Seleccionada</option>

                 
                    <?php foreach($productos as $producto){
                        ?>

                    <option 
                    value="<?php   echo $producto->id;   ?>">

                    <?php echo $producto->nombre;?>
                    </option>


                    <?php }?> -->
                </select>
            </div>
        </div>

        <div class="col-md-12 mt-1">
            <label for="fom_data" class="form-label">peso</label>
            <input name="peso" type="number" class="form-control" id="peso">
        </div>



    
        <div class="col-md-12 mt-1">
            <label for="dimension" class="form-label">Estado Producto</label>
            <div class="form-select" aria-label="Default select example">
                <select name="id_estadoProducto" id="id_estadoProducto" class="form-control">
                    <option selected value="" >Ninguna Opción Seleccionada</option>
                    <option  value="1">PENDIENTE </option>
                    <option  value="2">ENVIADO </option>
                </select>
            </div>
        </div>





        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </div>

    </div>
</form>

<script>
  function validarDatos() {

    let codigo_ruta = document.getElementById("codigo_ruta").value;
    let fecha_transporte = document.getElementById("fecha_transporte").value;
    let empresa_transporte = document.getElementById("empresa_transporte").value;
    let nombre_conductor = document.getElementById("nombre_conductor").value;
    let placa = document.getElementById("placa").value;
    let numero_envio = document.getElementById("numero_envio").value;
    let remitente = document.getElementById("remitente").value;
    let destinatario = document.getElementById("destinatario").value;
    let peso = document.getElementById("peso").value;
    let id_estadoProducto = document.getElementById("id_estadoProducto").value;
    let id_producto = document.getElementById("id_producto").value;
 
    
    if (!codigo_ruta.trim()) {
        swal("Debe Ingresar un Código de Ruta", '', 'warning');
        return false
    }
    if (!fecha_transporte.trim()) {
        swal("Debe Ingresar una Fecha", '', 'warning');
        return false
    }
    if (!empresa_transporte.trim()) {
        swal("Debe Ingresar una Empresa", '', 'warning');
        return false
    }
    if (!nombre_conductor.trim()) {
        swal("Debe Ingresar un Nombre de Conductor", '', 'warning');
        return false
    }
    if (!placa.trim()) {
        swal("Debe Ingresar una Placa", '', 'warning');
        return false
    }
    if (!numero_envio.trim()) {
        swal("Debe Ingresar un Numero de Envío", '', 'warning');
        return false
    }
    if (!remitente.trim()) {
        swal("Debe Ingresar un Remitente", '', 'warning');
        return false
    }
    if (!destinatario.trim()) {
        swal("Debe Ingresar un Destinatario", '', 'warning');
        return false
    }
    if (!id_producto.trim()) {
        swal("Debe Seleccionar un Producto", '', 'warning');
        return false
    }
    if (!peso.trim()) {
        swal("Debe Ingresar un Peso", '', 'warning');
        return false
    }
    if (!id_estadoProducto.trim()) {
        swal("Debe Seleccionar un Estado del Producto", '', 'warning');
        return false
    }

    console.log('here')
    return true;
  }

</script>