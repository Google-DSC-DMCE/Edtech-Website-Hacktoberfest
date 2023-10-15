<?php

require('C:/xampp/htdocs/testpdf/fpdf.php');
$db = new PDO('mysql:host=localhost;dbname=notes','root','');
 
class myPDF extends FPDF{

  function header(){
    
  /* $this->Image('result.jpg',10,6);   */   
   $this->SetFont('Arial','B',14);
   $this->Cell(276,5,'Expressions and control statements in PHP',0,0,'C');
   $this->Ln();
   $this->SetFont('Times','',12);
   $this->Cell(276,10,'Chapter 1',0,0,'C');
   $this->Ln(20);

   }

   function footer(){

   $this->SetY(-15);      
   $this->SetFont('Arial','',8);
   $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');  

   }


   function headerTable(){
     
    $this->SetFont('Times','B',12);
    $this->Cell(10,10,'Sr.No');
    $this->Cell(180,10,'Question',0,0,'C');  
    $this->Cell(40,10,'Your Answer',0,0,'C');    
    $this->Cell(40,10,'Correct Answer',0,0,'C');
    $this->Ln();
 
   }
   

   function AddPages(){}

   function ViewTable($db){


      $this->SetFont('Times','',12);
      $stmt = $db->query('select * from demo');
      while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {

          $this->Cell(10,10,$data->id,1,0,'C');
          $this->Cell(180,10,$data->que,1,0,'L');  
          $this->Cell(40,10,$data->ans,1,0,'L');    
          $this->Cell(40,10,$data->rig,1,0,'L');
          $this->Ln();
        
      }

   }

}


$pdf= new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->ViewTable($db);
$pdf->Output();

?>










