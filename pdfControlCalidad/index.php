<?php

require('./../pdfGENERATOR/fpdf/fpdf.php');
include "./../core/modules/ventas/model/materia_prima.php"; 
include "./../core/modules/ventas/model/producto.php"; 
include "./../core/modules/ventas/model/lote.php"; 
include "./../core/controller/Database.php";
include "./../core/controller/Executor.php";




$lotes = loteData::getAllName();


//PDF



$pdf = new FPDF(); 
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);


/* --- Text --- */
$pdf->SetFont('', 'B', 12);
$pdf->Text(75, 20, 'REPORTE CONTROL CALIDAD');
$pdf->Ln();
$pdf->SetXY(10, 38);
$width_cell=array(60,60,60);
$pdf->SetFillColor(193,229,252); // Background color of header 
// Header starts /// 
$pdf->Cell($width_cell[0],10,'Nombre de Producto',1,0,'C',true); // First header column 
$pdf->Cell($width_cell[1],10,'Categoria',1,0,'C',true); // Second header column
$pdf->Cell($width_cell[2],10,'Tipo Distribucion',1,0,'C',true); // Third header column 

//// header is over ///////

$pdf->SetFont('Arial','',10);



foreach ($lotes as  $lote) {
     
    $productos = productoData::getByTipo($lote->id);

    
    
foreach($productos as $producto ){
    //var_dump( $producto) ;
    $pdf->Ln();
    $calibre = $producto->calibre;
    $gradoBrix = $producto->grado_brix;
    $peso =  $producto->peso;

    $pdf->Cell($width_cell[0],10, $producto->nombre ,1,0,'C',false); // First column of row 1 

    $CATEGORIAname= "";
    // CATEGORIA
    if( $calibre == 10 &&  $peso <= 1.19  ){ // Categoria C
        $CATEGORIAname= "Categoria C";
    }
    if( ($calibre == 9  || $calibre == 8 ) &&  ( $peso >= 1.2 && $peso <= 1.55  ) ){ // Categoria B
        $CATEGORIAname= "Categoria B";
    }
    if( ($calibre == 7  || $calibre == 5  || $calibre == 6 ) &&  (   $peso >= 1.56  ) ){ // Categoria A
        $CATEGORIAname= "Categoria A";
    }

    $pdf->Cell($width_cell[1],10, $CATEGORIAname ,1,0,'C',false); // First column of row 1 

    //TIPO DISTRIBUCION
    $CALIBREname= "";
    if( $calibre >= 5 && $calibre <= 10  && $gradoBrix >= 12 && $gradoBrix <= 15 ){
        if( strpos( $producto->nombre, "md2",0)!== false  ){
            $CALIBREname= "Exportación";
        }
        else if( strpos( $producto->nombre, "MD2",0)!== false  ){
            $CALIBREname= "Exportación";
        }else if( strpos( $producto->nombre, "Md2",0)!== false  ){
            $CALIBREname= "Exportación";
        }else{
            $CALIBREname= "Local";
        }
        
    }else{
        $CALIBREname= "Local";
    }
    $pdf->Cell($width_cell[2],10, $CALIBREname ,1,0,'C',false); // First column of row 1 


}


   
    
}


// foreach($materiasPrima as $materia  ){
//     $pdf->Ln(); 
// // First row of data 

// $pdf->Cell($width_cell[0],10, $materia->codigo ,1,0,'C',false); // First column of row 1 
// $pdf->Cell($width_cell[1],10, $materia->codigo ,1,0,'C',false); // First column of row 1 

// $pdf->Cell($width_cell[2],10, $materia->codigo ,1,0,'C',false); // First column of row 1 

// }

 
$pdf->Output();


?>