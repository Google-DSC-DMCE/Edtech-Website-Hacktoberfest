<?php

require('fpdf.php');
 
class myPDF extends FPDF{

  function header(){
          
   $this->SetFont('Arial','B',14);
   $this->Cell(276,5,'Expressions and control statements in PHP',0,0,'C');
   $this->Ln();
   $this->SetFont('Times','',12);
   $this->Cell(276,10,'Chapter1');
   $this->Ln(20);

   }

   function footer(){

   $this->SetY(-15);      
   $this->SetFont('Arial','',8);
   $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');  

   }


  /* function headerTable(){
     
    $this->SetFont('Times','B',12);
    $this->Cell(20,10,'Sr.No');
    $this->Cell(276,10,'Question');  
    $this->Cell(276,10,'Your Answer');    
    $this->Cell(276,10,'Correct Answer');
    $this->Ln();
 
   }
   

   function ViewTable(){


      

          $this->Cell(20,10,$data->id,1,0,'C');
          $this->Cell(40,10,$data->que,1,0,'L');  
          $this->Cell(60,10,$data->ans,1,0,'L');    
          $this->Cell(36,10,$data->rig,1,0,'L');
          $this->Ln();
        
      }*/

   }




$pdf= new myPDF();
$pdf->AliasNbPages();
$pdf->AddPages('L','A4',0);
$pdf->headerTable();
$pdf->ViewTable();
$pdf->Output();

?>











