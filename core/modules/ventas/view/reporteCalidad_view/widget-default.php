<?php
 
    $productos = productoData::getAll();
 
  $totalProductos = count($productos  );
  $totalLocal = 0;
  $totalExportacion = 0;
  foreach($productos as $producto ){
    $calibre = $producto->calibre;
    $gradoBrix = $producto->grado_brix;
    
    if( $calibre >= 5 && $calibre <= 10  && $gradoBrix == 12 ){                     
    //  echo "Exportación";
      $totalExportacion++;
    }else{
      $totalLocal++;
  //  echo "Local";
    }
  }


  


?>

<h1>MODULO CALIDAD </h1>
<br><br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
 
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Total Productos", "Local", "Exportación", "", ""];
var yValues = [<?php echo $totalProductos?> , <?php echo $totalLocal?> ,  <?php echo $totalExportacion?> , 0, 0];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Cantidad de Productos Local - Exportación"
    }
  }
});
</script>

