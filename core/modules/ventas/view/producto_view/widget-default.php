<?php
	$productos = productoData::getAll();


?>

<h1>Producto</h1>

<a type="button" href="index.php?view=addProducto_view" class="btn btn-primary">Agregar Producto</a>
<br><br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabla de Productos</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="95%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Calibre</th>
                        <th>Grado Brix</th>
                        <th>Peso</th>
                        <th>ID del Lote</th>
                        <th>Fecha de Ingreso</th>
                        <th>Fecha de Caducidad</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
<?php
					                foreach($productos as $producto  ){?>

										<tr>
											<td>  <?php  echo  $producto->nombre;    ?></td>
											<td>  <?php echo  $producto->calibre;    ?></td>
											<td>  <?php echo  $producto->grado_brix;    ?></td>
											<td>  <?php echo  $producto->peso;    ?></td>
                                            <td>  <?php echo  $producto->id_lote;    ?></td>
											<td>  <?php echo  $producto->fecha_ingreso;    ?></td>
											<td>  <?php echo  $producto->fecha_caducidad;    ?></td> 

                                            <a href="index.php?view=editProducto_view&amp;id=<?php echo $producto->id ?>" class="btn btn-warning btn-circle btn-sm">
                                                  <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                  <i class="fas fa-trash"></i>
                                            </a>
                            
										</tr>

										<?php
										}

									?> 


                </tbody>
            </table>





        </div>
    </div>
</div>