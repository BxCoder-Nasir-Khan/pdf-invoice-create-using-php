<?php 

 include '../../fpdf/fpdf.php';
 include '../../fpdf/table/exfpdf.php';
 include '../../fpdf/table/easyTable.php';






$products 	= $_POST['products'];
$qty 		= $_POST['qty'];
$price 		= $_POST['price'];



$pdf = new exFPDF();

$pdf->AddPage();

$pdf->SetFont("Arial","",30);
$pdf->Cell(0,15,"Your Invoice",0,0,'C');
$pdf->Ln(20);




$pdf->SetFont("Arial","",10);

$table=new easyTable($pdf, '{200, 100, 200}', 'width:500;border:0');

$table->easyCell("

	Best Ecommerce in Bangaldesh
	bestEcom@gmail.com
	0163723226
	Best-Ecommerce.com
	Dhanmondi 15, Dhaka
	Bangladesh

"); 

$table->easyCell('
	Invoice: SQK-1212
	Date: 12-12-2020
',"align:C");

$table->easyCell('
	Best Customer
	bestCustomer@gmail.com
	01637234234
	Dhanmondi 32, Dhaka
	Bangladesh
','align:R');

$table->printRow();

$table->endTable(1);

$pdf->Ln(20);


$pdf->SetFont("Arial","B",12);
$table = new easyTable($pdf, '{50, 300, 50, 100}', 'width:500;border:1;');

$table->easyCell('No','align:C');
$table->easyCell('Name','align:C');
$table->easyCell('QTY','align:C');
$table->easyCell('Price','align:C');
$table->printRow();






$pdf->SetFont("Arial","",10);


$total_price = 0;
$total_qty = 0;


$total_product = count($products);

$no = 0;
$index = 0;

while ($total_product != 0) {

   // print all product as row
	$no++;

	$table->easyCell($no,'align:C');
	$table->easyCell($products[$index],'align:L');
	$table->easyCell($qty[$index],'align:C');
	$table->easyCell($price[$index],'align:C');
	$table->printRow();


	// calculate toatl price and total qty
	$total_qty 		+= $qty[$index];
	$total_price    += $price[$index];

	$index++; // update array index
	$total_product--; // loop limit

}


// print last row
$table->easyCell('Grand','align:C;colspan:2');
$table->easyCell($total_qty,'align:C');
$table->easyCell($total_price,'align:C');
$table->printRow();

$table->endTable(1);



// add signature
$pdf->Ln(30);
$pdf->AddFont("MaulidaMaya","","Maulidamaya.php");
$pdf->SetFont('MaulidaMaya','',20);

$pdf->Cell(0,5,'Best-Ecommerce.com',0,1);
$pdf->Cell(0,5,'_______________',0,1);
$pdf->Cell(0,5,'12-12-2020',0,1);


$pdf->Output();

// for download
// $pdf->Output("your-invoice.pdf","F");

// for download
// $pdf->Output("your-invoice.pdf","D");



?>