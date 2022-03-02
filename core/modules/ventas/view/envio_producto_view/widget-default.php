<?php
	$rutas = envio_productoData::getAll();

?>


<h1>Rutas</h1>

<a type="button" href="index.php?view=addEnvioProducto_view" class="btn btn-primary">Agregar Ruta</a>

<br><br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabla de Rutas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="95%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Codigo Ruta</th>
                        <th>Fecha de Transporte</th>
                        <th>Empresa de Transporte</th>
                        <th>Nombre del Conductor</th>
                        <th>Placa</th>
                        <th>Numero de Envio</th>
                        <th>Remitente</th>
                        <th>Destinatario</th>
                        <th>Nombre del Producto</th>
                        <th>Peso</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
				foreach($rutas as $ruta  ){?>

                    <tr>
                        <td> <?php  echo  $ruta->codigo_ruta;    ?></td>
                        <td> <?php  echo  $ruta->fecha_transporte;    ?></td>
                        <td> <?php  echo  $ruta->empresa_transporte;    ?></td>
                        <td> <?php  echo  $ruta->nombre_conductor;    ?></td>
                        <td> <?php  echo  $ruta->placa;    ?></td>
                        <td> <?php  echo  $ruta->numero_envio;    ?></td>
                        <td> <?php  echo  $ruta->remitente;    ?></td>
                        <td> <?php  echo  $ruta->destinatario;    ?></td>
                        <td> <?php 
                        	$producto = productoData::getById($ruta->id_producto);
                        
                         echo $producto->nombre;    
                         ?></td>
                        <td> <?php  echo  $ruta->peso;    ?></td>
                        <td> <?php  

                        if($ruta->id_estadoProducto == 1 ){
                            echo "Pendiente" ;  
                        }else{
                            echo "Enviado" ;  
                        }
                        
                        
                        ?></td>
                        <td>
                            <a href="index.php?view=editEnvioProducto_view&amp;id=<?php echo $ruta->id ?>"
                                class="btn btn-warning btn-circle btn-sm">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="index.php?view=deleteEnvioProducto_controller&amp;id=<?php echo $ruta->id ?>" 
                             class="btn btn-danger btn-circle btn-sm">
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