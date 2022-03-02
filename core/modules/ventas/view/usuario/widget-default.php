<?php
	$usuarios = usuarioData::getAll();

?>

<h1>Usuario</h1>

<a type="button" href="index.php?view=addUsuario_view" class="btn btn-primary">Agregar Usuario</a>
<br><br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabla de Usuario</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="95%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
						  foreach($usuarios as $usuario  ){?>

                    <tr>
                        <td> <?php  echo  $usuario->nombre;    ?> </td>
                        <td> <?php echo  $usuario->telefono;    ?> </td>
                        <td> <?php echo  $usuario->email;    ?>  </td>
                        <td> <?php echo  $usuario->tipo;    ?>  </td>
                        <td>
                            <a href="index.php?view=editUsuario&amp;id=<?php echo $usuario->id ?>" class="btn btn-warning btn-circle btn-sm">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="index.php?view=deleteUsuario&amp;id=<?php echo $usuario->id ?>"  class="btn btn-danger btn-circle btn-sm">
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