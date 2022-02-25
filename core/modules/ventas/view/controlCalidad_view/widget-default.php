<?php
	$productos = productoData::getAll();
 
?>



<a type="button" href="index.php?view=addLote_view" class="btn btn-primary">Control Calidad</a>
<br><br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="95%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre Producto</th>
                        <th>Grado Brix</th>
                        <th>Calibre</th>
                        <th>Peso</th>
                        <th>Fecha Ingreso</th>
                        <th>Fecha Caducidad</th>
                        <th>Tipo Distribucion</th>
                    </tr>
                </thead>
                <tbody>
<?php
                foreach($productos as $producto ){?>

                    <tr>
                        <td> <?php echo  $producto->nombre;    ?></td>
                        <td> <?php echo  $producto->grado_brix;    ?></td>
                        <td> <?php echo  $producto->calibre;    ?></td>
                        <td> <?php echo  $producto->peso;    ?></td>
                        <td> <?php echo  $producto->fecha_ingreso;    ?></td>
                        <td> <?php echo  $producto->fecha_caducidad;    ?></td>
                        <td>DISTRIBUIDA</td>
                    </tr>

                    <?php
										}

									?>


                </tbody>
            </table>





        </div>
    </div>
</div>