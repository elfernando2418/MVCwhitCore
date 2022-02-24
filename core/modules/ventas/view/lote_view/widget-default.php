<?php
	$lotes = LotData::getAll();


?>
 

<table>
    <thead>
        <th>HOLA</th>
        <th>HOLA</th>
		<th>HOLA</th>
		<th>HOLA</th>
		<th>acciones</th>
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



<br><br><br><br>

<a href="index.php?view=addLote_view">ME VOY A OTRA PESTANIA</a>




<br><br><br><br><br><br>