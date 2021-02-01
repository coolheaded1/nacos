<?php
require_once('vendor/autoload.php');

use setasign\Fpdi\Fpdi;

// initiate FPDI
$pdf = new Fpdi();

// add a page
// $pdf->AddPage();

// The new content
$fontSize = '12';
$fontColor = `255,0,0`;

$left1 = 140;
$top2 = 40;
$left = 40;
$top = 51;
$top3=91;
$left3 =115;
$text = 'Yakubu Abiola Sunday';
$text3 = 'you registered for the course';
$text2 = date('M/d/Y');
// set the source file
$pdf->setSourceFile("ADMISSION LETTER.pdf");

// import page 1
// $tplId = $pdf->importPage(2);

// use the imported page and place it at point 10,10 with a width of 100 mm
for ($i=1; $i < 3; $i++) {
    $pdf->AddPage();     	
    $tplId = $pdf->importPage($i);
    $pdf->useTemplate($tplId);
    if($i == 1){   
    $pdf->SetFont("helvetica", "B", 15);
	$pdf->SetTextColor($fontColor);
	$pdf->Text($left1,$top2,$text2);
	$pdf->Text($left,$top,$text);
	$pdf->Text($left3,$top3,$text3);
	
    }
}
// $pdf->useTemplate($tplId);


//set the font, colour and text to the page.


//see the results
$pdf->Output();  
// $pdf->Output($text.'ADMISSION LETTER.pdf', 'D');  