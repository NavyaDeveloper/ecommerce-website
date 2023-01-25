<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include("connection.php");//connection to database
ob_start();
require('fpdf17/fpdf.php');
$pdf = new FPDF('p','mm','A4'); 
$pdf->AddPage();

$pdf->Image('tanishq_logo.png',95,10,25,20,'PNG');

/*output the result*/

/*set font to arial, bold, 14pt*/
$pdf->SetFont('Arial','B',15);

/*Cell(width , height , text , border , end line , [align] )*/
$pdf->Cell(195 ,30,'',0,1);

$pdf->Cell(192 ,10,'REPORT OF CUSTOMERS',0,1,'C');



$pdf->SetFont('Arial','',11);
$pdf->Cell(59 ,10,'',0,1);
$pdf->Cell(71 ,5,'TITAN COMPANY LIMITED',0,1);
$pdf->Cell(59 ,5,'C-101 to 110',0,1);
$pdf->Cell(130 ,5,'KARIMPANAL LAXMI TOWERSMEENAKSHI PURAM',0,1);
$pdf->Cell(130 ,5,'NAGERCOIL- 629006',0,1);
$pdf->Cell(59 ,10,'',0,1);
$pdf->SetFont('Arial','',10);



$pdf->SetFont('Arial','B',10);
/*Heading Of the table*/
$pdf->Cell(10 ,6,'SI',1,0,'C');
$pdf->Cell(30 ,6,'CUSTOMER NAME',1,0,'C');
$pdf->Cell(23 ,6,'STATE',1,0,'C');
$pdf->Cell(70 ,6,'ADDRESS',1,0,'C');
$pdf->Cell(30 ,6,'PH N0',1,0,'C');
$pdf->Cell(25 ,6,'DATE',1,1,'C');/*end of line*/
/*Heading Of the table end*/

$pdf->SetFont('Arial','',10);
$query="SELECT * from orders ";
$s=1;
$query_run=mysqli_query($connect,$query);
if(mysqli_num_rows($query_run)> 0){
while($row = mysqli_fetch_assoc($query_run)){
  $pdf->Cell(10 ,6,$s,1,0,'C');
  $pdf->Cell(30 ,6,$row['uname'],1,0,'C');
  $pdf->Cell(23 ,6,$row['state'],1,0,'C');
  $pdf->Cell(70 ,6,$row['address'],1,0,'C');
  $pdf->Cell(30 ,6,$row['phno'],1,0,'C');
  $pdf->Cell(25 ,6,$row['date'],1,1,'C');
  $s++;
}

}


$pdf->Output();
ob_end_flush();
?>
