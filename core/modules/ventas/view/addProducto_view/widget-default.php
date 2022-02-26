<?php


$lotes = loteData::getAll( );
 
?>

<div class="col-md-12 mb-2">
    <a href="index.php?view=producto_view" class="btn btn-dark btn-circle btn-sm">
        <i class="fas fa-angle-left"></i>
    </a>
    <h1>Registro de Producto</h1>
</div>

<form class="row g-3" method="POST" action="index.php?view=addProducto_controlador">
    <div class="col-md-12" style="max-width: 500px;">

        <div class="col-md-12 mt-1">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="nombre">
        </div>
        <div class="col-md-12 mt-1">
            <label for="calibre" class="form-label">Calibre</label>
            <input name="calibre" type="text" class="form-control" id="calibre">
        </div>
        <div class="col-md-12 mt-1">
            <label for="grado_brix" class="form-label">Grado Brix</label>
            <input name="grado_brix" type="text" class="form-control" id="grado_brix">
        </div>
        <div class="col-md-12 mt-1">
            <label for="peso" class="form-label">Peso</label>
            <input name="peso" type="text" class="form-control" id="peso">
        </div>



        <div class="col-md-12 mt-1">
            <label for="dimension" class="form-label">Seleccione número de Lote</label>
            <div class="form-select" aria-label="Default select example">
                <select name="id_lote" id="id_lote" class="form-control">
                    <option selected>Ninguna Opcion Seleccionada</option>

                    <?php  foreach($lotes as $lote){
                        ?>

                    <option value="<?php  echo $lote->id;   ?>">

                        <?php  echo $lote->numero;?>
                    </option>


                    <?php }?>
                </select>
            </div>
        </div>






        <div class="col-md-12 mt-1">
            <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
            <input onchange="fechaCaduca()" name="fecha_ingreso" type="date" class="form-control" id="fecha_ingreso">
        </div>


        <div class="col-md-12 mt-1">
            <label for="fecha_caducidad" class="form-label">Fecha de Caducidad</label>
            <input name="fecha_caducidad" type="date" class="form-control" id="fecha_caducidad">
        </div>





        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </div>

    </div>
</form>

<script>

sumaFecha = function(d, fecha) {
    var Fecha = new Date();
    var sFecha = fecha || (Fecha.getDate() + "/" + (Fecha.getMonth() + 1) + "/" + Fecha.getFullYear());
    var sep = sFecha.indexOf('/') != -1 ? '/' : '-';
    var aFecha = sFecha.split(sep);
    var fecha = aFecha[2] + '/' + aFecha[1] + '/' + aFecha[0];
    fecha = new Date(fecha);
    fecha.setDate(fecha.getDate() + parseInt(d));
    var anno = fecha.getFullYear();
    var mes = fecha.getMonth() + 1;
    var dia = fecha.getDate();
    mes = (mes < 10) ? ("0" + mes) : mes;
    dia = (dia < 10) ? ("0" + dia) : dia;
    var fechaFinal = dia + sep + mes + sep + anno;
    return (fechaFinal);
}

function formatDate(input) {
    var datePart = input.match(/\d+/g),
        year = datePart[0].substring(2), // get only two digits
        month = datePart[1],
        day = datePart[2];

    return day + '/' + month + '/' + year;
}



function fechaCaduca() {
    let fechaInicio = document.getElementById("fecha_ingreso").value;
    let fechaFi =  formatDate(fechaInicio);
    console.log(fechaFi )
  //  var fecha = sumaFecha(8,);
  //  alert(fecha);

}


</script>