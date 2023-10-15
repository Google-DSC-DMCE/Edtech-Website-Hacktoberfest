<?php
 require('fpdf.php');
 $pdf=new FPDF();
 $pdf->AddPage();
 $pdf->SetFont('Arial','B',16);
 $pdf->SetFont('Times','B',12);
 function ViewTable(){

    $this->SetFont('Times','',12);
    $pdf->Cell(20,10,'Sr.No');
    $pdf->Cell(50,10,'Question');  
    $pdf->Cell(80,10,'Your Answer');    
    $pdf->Cell(110,10,'Correct Answer');
    $pdf->Ln();
   
   
   
   }
 ViewTable()
 $pdf->Output();
?>
