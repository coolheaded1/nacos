<?php 
session_start();
ob_start();
include "connect.php";
$stuData = $_SESSION['stuData'];
switch ($_GET['func']) {
	case "payment":
	initPay($stuData);
	break;
	case "Upl oadImage":
	UploadImage();
	break;
}

function initPay($data){
	$payID = uniqid();
	$val = json_decode($data);
	$metadata = json_encode (array(
		'stuID' => $val->id,
		'email' => $val->email,
		'FirstName' => $val->f_name,
		'Ammount' => $val->amount."00",
		'MiddleName' => $val->m_name,
		'Surname' => $val->s_name,
		'Telephone' => $val->phone,
		'payFor' => 'Cert',
		'transID' => $payID,
	));
	$arrayName = array(
		'callback_url' => 'https://nacos.org.ng/accounts/assets/callBackPayCert.php',  
		'email' => $val->email, 
		'metadata' => $metadata, 
		'f_name' => $val->f_name,
		's_name' => $val->s_name,
		'amount' => $val->amount."00", 
	);
	PayStack($arrayName);
}
?>