<?php
include "./../../model/producto.php";
include "./../../../../controller/Database.php";
include "./../../../../controller/Executor.php";

$productos = productoData::getByTipo($_POST['tipo']);


?>

<!-- Calibre 5-10 
    Grado brix 12 -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabla de Productos</h6>
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
                        <th>Calidad</th>
                        <th>Tipo Distribucion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                foreach($productos as $producto ){
                    $calibre = $producto->calibre;
                    $gradoBrix = $producto->grado_brix;
                    $peso =  $producto->peso;
                    ?>

                    <tr>
                        <td> <?php echo  $producto->nombre;    ?></td>
                        <td> <?php echo  $producto->grado_brix;    ?></td>
                        <td> <?php echo  $producto->calibre;    ?></td>
                        <td> <?php echo  $producto->peso;    ?></td>
                        <td> <?php echo  $producto->fecha_ingreso;    ?></td>
                        <td> <?php echo  $producto->fecha_caducidad;    ?></td>
                        <td>
                            <?php
                            

                        if( $calibre == 10 &&  $peso <= 1.19  ){ // Categoria C
                                echo "Categoria C";
                        }
                        if( ($calibre == 9  || $calibre == 8 ) &&  ( $peso >= 1.2 && $peso <= 1.55  ) ){ // Categoria B
                            echo "Categoria B";
                        }
                        if( ($calibre == 7  || $calibre == 5 ) &&  (   $peso >= 1.56  ) ){ // Categoria A
                            echo "Categoria A";
                        }
                            
                            ?>
                        </td>
                        <td> <?php  
                    
                        if( $calibre >= 5 && $calibre <= 10  && $gradoBrix >= 12 && $gradoBrix <= 15 ){
                            if( strpos( $producto->nombre, "md2",0)!== false  ){
                                echo "Exportación";
                            }
                            else if( strpos( $producto->nombre, "MD2",0)!== false  ){
                                echo "Exportación";
                            }else if( strpos( $producto->nombre, "Md2",0)!== false  ){
                                echo "Exportación";
                            }else{
                                echo "Local";
                            }
                            
                        }else{
                            echo "Local";
                        }

                        
                        ?> </td>
                    </tr>

                    <?php
										}

									?>


                </tbody>
            </table>





        </div>
    </div>
</div>