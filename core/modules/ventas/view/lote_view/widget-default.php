<?php
	$lotes = LotData::getAll();


?>
 


<a type="button" href="index.php?view=addLote_view" class="btn btn-primary">Agregar producto</a>
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
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
																		
										<?php
										foreach($lotes as $lote  ){?>

										<tr>
											<td>  <?php echo  $lote->name;    ?></td>
											<td>  <?php echo  $lote->num_lot;    ?></td>
											<td>  <?php echo  $lote->dimension;    ?></td>
											<td>  <?php echo  $lote->condicion;    ?></td>
											<td> 
												<a href="index.php?view=editLote_view&amp;id=<?php echo $lote->id ?>">EDITAR</a>
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
