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
$pdf->SetFont('Arial','',10);

/*Cell(width , height , text , border , end line , [align] )*/
$pdf->Cell(195 ,30,'',0,1);

$pdf->Cell(169 ,10,'INVOICE',0,0);
$id= $_POST['id'];
$query="SELECT * from orders where id=$id";

$query_run=mysqli_query($connect,$query);
if(mysqli_num_rows($query_run)> 0){
while($row = mysqli_fetch_assoc($query_run)){
	$pdf->Cell(59 ,10,$row['date'],0,1);
}}


$pdf->SetFont('Arial','B',15);
$pdf->Cell(71 ,5,'TITAN COMPANY LIMITED',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,'CUSTOMER DETAILS',0,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(130 ,5,'C-101 to 110',0,0);
$pdf->Cell(25 ,5,'NAME:',0,0);
$id= $_POST['id'];
$query="SELECT * from orders where id=$id";

$query_run=mysqli_query($connect,$query);
if(mysqli_num_rows($query_run)> 0){
while($row = mysqli_fetch_assoc($query_run)){
$pdf->Cell(34 ,5,$row['uname'],0,1);
}}

$pdf->Cell(130 ,5,'KARIMPANAL LAXMI TOWERSMEENAKSHI PURAM',0,0);
$pdf->Cell(25 ,5,'ADDRESS:',0,0);
$id= $_POST['id'];
$query="SELECT * from orders where id=$id";

$query_run=mysqli_query($connect,$query);
if(mysqli_num_rows($query_run)> 0){
while($row = mysqli_fetch_assoc($query_run)){
$pdf->Cell(34 ,5,$row['address'],0,1);
}}
 
$pdf->Cell(130 ,5,'NAGERCOIL 629001',0,0);
$pdf->Cell(25 ,5,'Invoice No:',0,0);
$id= $_POST['id'];
$query="SELECT * from orders where id=$id";

$query_run=mysqli_query($connect,$query);
if(mysqli_num_rows($query_run)> 0){
while($row = mysqli_fetch_assoc($query_run)){
$pdf->Cell(34 ,5,$id,0,1);
}}


$pdf->Cell(130 ,5,'Ph: 04652-230098, 789767678',0,0);
$pdf->Cell(25 ,5,'Phone Number: ',0,0);
$id= $_POST['id'];
  $query="SELECT * from orders where id=$id";
  $query_run=mysqli_query($connect,$query);
  if(mysqli_num_rows($query_run)> 0){
  while($row = mysqli_fetch_assoc($query_run)){
$pdf->Cell(34 ,5,$row['phno'],0,1);
  }}

$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189 ,10,'',0,1);



$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);
/*Heading Of the table*/
$pdf->Cell(10 ,6,'SI',1,0,'C');
$pdf->Cell(80 ,6,'DESCRIPTION',1,0,'C');
$pdf->Cell(23 ,6,'QUANTITY',1,0,'C');
$pdf->Cell(30 ,6,'UNIT PRICE',1,0,'C');
$pdf->Cell(20 ,6,'GST',1,0,'C');
$pdf->Cell(25 ,6,'TOTAL',1,1,'C');/*end of line*/
/*Heading Of the table end*/

/// each record is one row  ///
$id= $_POST['id'];
$query="SELECT * from orders where id=$id";

$query_run=mysqli_query($connect,$query);
if(mysqli_num_rows($query_run)> 0){
while($row = mysqli_fetch_assoc($query_run)){
	$pdf->SetFont('Arial','',10);

	$s=1;
	
  $total=0;
  $sno=1;
  foreach($_SESSION['cart'] as $keys=>$values)
  {
    $amt=$values["qty"]*$values["price"];
  $gst=$amt*18/100;
  $gt=$amt+$gst;
  $total+=$gt;
			$pdf->Cell(10 ,6,$s,1,0,'C');

		$pdf->Cell(80 ,6,$values["name"],1,0,'L');
		$pdf->Cell(23 ,6,$values['qty'],1,0,'R');
		$pdf->Cell(30 ,6,$amt,1,0,'R');
		$pdf->Cell(20 ,6,$gst,1,0,'R');
		$pdf->Cell(25 ,6,$gt,1,1,'R');
		
  }	
				
}
$s++;
}
else{
    echo "No record found";
  }


  $pdf->Cell(133 ,6,'',0,0);
  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(30 ,6,'GRAND TOTAL',0,0);

  $id= $_POST['id'];
  $query="SELECT * from orders where id=$id";
  $query_run=mysqli_query($connect,$query);
  if(mysqli_num_rows($query_run)> 0){
  while($row = mysqli_fetch_assoc($query_run)){
	$total=0;

	foreach($_SESSION['cart'] as $keys=>$values)
	{
		$amt=$values["qty"]*$values["price"];
	$gst=$amt*18/100;
	$gt=$amt+$gst;
	$total+=$gt;

	}
	$pdf->Cell(25 ,6,$total,1,1,'R');
  }
  }
/// end of records /// 


$pdf->Cell(195 ,30,'',0,1);
$pdf->Cell(59 ,5,'------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1);
$pdf->SetFont('Arial','B',10);

$pdf->Cell(195 ,20,'',0,1);
$pdf->Cell(59 ,6,'Customer Signature',0,0);
$pdf->Cell(69 ,20,'',0,0);
$pdf->Cell(59 ,6,'Seal Of The Company',0,1);

$pdf->Cell(195 ,2,'',0,1);
$pdf->Cell(59 ,5,'------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1);
$pdf->Output();
ob_end_flush();
?>