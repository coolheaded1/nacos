<?php
session_start();
ob_start();
error_reporting(E_ALL);
include "connect.php";
if (isset($_SESSION['stuData'])) {
	$vals = json_decode($_SESSION['stuData']);
	$StumembershipNo = $vals->membershipNo;
	$f_name = $vals->f_name;
	$s_name = $vals->s_name;
	$m_name = $vals->m_name;
	$stuInst = $vals->intitution;
	$stuDept = $vals->dept;
	$stuInstType = $vals->institution_type;
	$names = $s_name." ".$f_name ." ". $m_name;
	$_SESSION['stuData'] = $_SESSION['stuData'];	
}else{
	$msg = "Please Login First, your IP Address has been flaged by our system";
	header('Location:../../register.php?msg='.$msg);
}
$mont = date('F');
$day  = date('jS');
$year = date('Y');
$signature1 = "../images/ybSignature.png";

require_once('../word/vendor/autoload.php');
use setasign\Fpdi\Fpdi;
	// initiate FPDI
$pdf = new Fpdi();		
$fontSize = '16';
$fontColor = `255,0,0`;

$leftMemb = 140;
$topMem = 53;
$leftName = 26;
$topName = 76;
$schLeft = 40;
$schtop = 129;
$courleft = 46;
$courtop = 151;
$dayleft = 41;
$daytop = 173;
$montLeft = 84.3;
$yearleft = 129;
// set the source file
$pdf->setSourceFile("../images/NACOSS_membership_cert.pdf");
$pdf->AddPage('L', 'Letter');
$pdf->SetAutoPageBreak('auto',0);
// import page 1
$tplId = $pdf->importPage(1);
$pdf->useTemplate($tplId, 0, 0, 280);

$pdf->SetFont("helvetica", "B", 15);
$pdf->SetTextColor(255,255,255);
$pdf->Text($leftMemb,$topMem,$StumembershipNo);
$pdf->SetTextColor($fontColor);
$pdf->Text($leftName,$topName,$names);
$pdf->Text($schLeft,$schtop,$stuInst,[10]);
$pdf->Text($courleft,$courtop,$stuDept);
$pdf->Text($dayleft,$daytop,$day);
$pdf->Text($montLeft,$daytop,$mont);
$pdf->Text($yearleft,$daytop,$year);
$pdf->Output(); 
							// $pdf->Output($text.'Acceptance LETTER.pdf', 'D'); 
?>
