<?php
session_start();
ob_start();
include "connect.php";
if (isset($_SESSION['stuData'])) {
	$vals = json_decode($_SESSION['stuData']);
	$StumembershipNo =  strtoupper($vals->membershipNo);
	$f_name = $vals->f_name;
	$s_name = $vals->s_name;
	$m_name = $vals->m_name;
	$stuInst =  strtoupper($vals->intitution);
	$stuDept =  strtoupper($vals->dept);
	$stuInstType =  strtoupper($vals->institution_type);
	$names =  strtoupper( $s_name." ".$f_name ." ". $m_name );
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
$leftMemb = 150;
$topMem = 53;
$leftName = 24;
$topName = 82;
$schLeft = 40;
$schtop = 133.4;
$courleft = 46;
$courtop = 162.4;
$dayleft = 41;
$daytop = 179;
$montLeft = 84.3;
$yearleft = 135;
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
$pdf->SetFont("helvetica", "B", 26);
$pdf->Text($leftName,$topName,$names);
$pdf->SetFont("helvetica", "B", 15);
$pdf->SetXY($schLeft, $schtop);
$pdf->SetRightMargin(90);
// $pdf->Text($schLeft,$schtop,$stuInst);
$pdf->Write(10.5,$stuInst);
$pdf->Text($courleft,$courtop,$stuDept);
$pdf->Text($dayleft,$daytop,$day);
$pdf->Text($montLeft,$daytop,$mont);
$pdf->Text($yearleft,$daytop,$year);
$search  = array('$', '!', ' ','  ','/');
$replace = array('-', '-', '-', '', '-');
$str = str_replace($search, $replace,$names);
$str = $str."pdf";
$pdf->Output($str,'I'); 
// header('Refresh: 1; url=../dashboard.php');
// $pdf->Output($text.'Acceptance LETTER.pdf', 'D'); 
#https://manuals.setasign.com/fpdi-manual/v1/the-fpdi-class/examples/
#http://www.fpdf.org/en/doc/setmargins.htm
?>
