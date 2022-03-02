<?php

require('fpdf/fpdf.php');
include "./../core/modules/ventas/model/materia_prima.php"; 
include "./../core/modules/ventas/model/producto.php"; 
include "./../core/modules/ventas/model/lote.php"; 
include "./../core/controller/Database.php";
include "./../core/controller/Executor.php";

$materiasPrima = materia_primaData::getAll();
$productos = productoData::getAll();


$pdf = new FPDF(); 
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);


/* --- Text --- */
$pdf->SetFont('', 'B', 12);
$pdf->Text(51, 20, 'REPORTE DE MODULO PRODUCTO Y MATERIA PRIMA');
$pdf->Ln();
$pdf->SetXY(10, 38);
$width_cell=array(35,50,50,45);
$pdf->SetFillColor(193,229,252); // Background color of header 
// Header starts /// 
$pdf->Cell($width_cell[0],10,'Codigo',1,0,'C',true); // First header column 
$pdf->Cell($width_cell[1],10,'Descripcion',1,0,'C',true); // Second header column
$pdf->Cell($width_cell[2],10,'Nombre',1,0,'C',true); // Third header column 
$pdf->Cell($width_cell[3],10,'Lote',1,1,'C',true); // Fourth header column
//// header is over ///////

$pdf->SetFont('Arial','',10);

foreach($materiasPrima as $materia  ){
    $nameMateriaPrima = "";
    if( $materia->id_tipo_mateira == 1 ){
        $nameMateriaPrima = "Hijuelos";
    }else{
        $nameMateriaPrima = "Abono";
    }
    
// First row of data 
$pdf->Cell($width_cell[0],10, $materia->codigo ,1,0,'C',false); // First column of row 1 

$pdf->Cell($width_cell[1],10,'Materia Prima'  ,1,0,'C',false); // Second column of row 1 

$pdf->Cell($width_cell[2],10,   $nameMateriaPrima  ,1,0,'C',false); // Third column of row 1 

$pdf->Cell($width_cell[3],10,  "No Contiene"  ,1,1,'C',false); // Fourth column of row 1 
//  First row of data is over 
}

foreach($productos as $producto  ){
   
    $loteData = LoteData::getById($producto->id_lote );

// First row of data 
$pdf->Cell($width_cell[0],10, $producto->codigoProducto ,1,0,'C',false); // First column of row 1 

$pdf->Cell($width_cell[1],10,'Producto'  ,1,0,'C',false); // Second column of row 1 

$pdf->Cell($width_cell[2],10,  utf8_decode( $producto->nombre) ,1,0,'C',false); // Third column of row 1 

$pdf->Cell($width_cell[3],10,  $loteData->numero  ,1,1,'C',false); // Fourth column of row 1 
//  First row of data is over 
}
$pdf->Output();


?>