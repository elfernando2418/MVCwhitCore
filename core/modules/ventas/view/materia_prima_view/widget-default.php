<?php
	$materias = materia_primaData::getAll();


?>

<h1>Materia Prima</h1>

<a type="button" href="index.php?view=addMateria_prima_view" class="btn btn-primary">Agregar Materia Prima</a>
<br><br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabla de Materias Primas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="95%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Tipo de Materia</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    
                    <?php
										foreach($materias as $materia  ){?>

										<tr>
											<td>  <?php echo  $materia->codigo;    ?></td>
											<td>  <?php echo  $materia->id_tipo_mateira;    ?></td>
											<td>  <?php echo  $materia->cantidad;    ?></td>
											<td>
                                                 <a href="index.php?view=editMateria_prima_view&amp;id=<?php echo $materia->id ?>" class="btn btn-warning btn-circle btn-sm">
                                                     <i class="fas fa-pen"></i>
                                                 </a>
                                                 <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                     <i class="fas fa-trash"></i>
                                                 </a>                           
                                            </td>
											
										</tr>

										<?php
										}

									?>


                </tbody>
            </table>





        </div>
    </div>
</div>