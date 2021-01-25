<?php
session_start();
ob_start();
include "connect.php";
 // parse_str($gtpay_echo_data, $output);
$curl = curl_init();
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if(!$reference){
	die('No reference supplied');
}

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_HTTPHEADER => [
		"accept: application/json",
		"authorization: Bearer ".$pri_key,
		"cache-control: no-cache"
	],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
    // there was an error contacting the Paystack API
	die('Curl returned error: ' . $err);
}

$tranx = json_decode($response);

if(!$tranx->status){
  // there was an error from the API
	die('API returned error: ' . $tranx->message);
}
// var_dump($tranx);
$message = $tranx->message; #"Verification successful"
$reference = $tranx->data->reference; #"Verification successful"
$gatamount = ($tranx->data->amount/100); #"Verification successful"
$paid_at = date("d F Y h:i:s a",strtotime('+1 hour',strtotime($tranx->data->paid_at))); #"Verification successful"
$created_at = $tranx->data->created_at; #"Verification successful"
$stuID = $tranx->data->metadata->stuID; #"Verification successful"
$email = $tranx->data->metadata->email; #"Verification successful"
$FirstName = $tranx->data->metadata->FirstName; #"Verification successful"
$Ammount = $tranx->data->metadata->Ammount; #"Verification successful"
$MiddleName = $tranx->data->metadata->MiddleName; #"Verification successful"
$Surname = $tranx->data->metadata->Surname; #"Verification successful"
$payFor =  $tranx->data->metadata->payFor; #"Verification successful"
$transID = $tranx->data->metadata->transID; #"Verification successful"
$customer_code = $tranx->data->customer->customer_code; #"Verification successful"
$custemail = $tranx->data->customer->email; #"Verification successful"
global $urlServer;
$conn = DB();   
$data = [
	'gatamount' => $gatamount,
	'reference' => $reference,
	'message' => $message,
	'paid_at' => $paid_at,
	'stuID' => $stuID,
	'email' => $email,
	'FirstName' => $FirstName,
	'MiddleName' => $MiddleName,
	'Surname' => $Surname,
	'payFor' => $payFor,
];
$data2 = [
	'pay' => $reference,
	'paystatus' => '2',
	'id' => $stuID,
];
try {
	$ins = "INSERT INTO payments (gatamount, reference, message, paid_at, stuID, email, FirstName, MiddleName, Surname, payFor) VALUES (:gatamount, :reference, :message, :paid_at, :stuID, :email, :FirstName, :MiddleName, :Surname, :payFor)";
	$stmt = $conn->prepare($ins);
	if ($stmt->execute($data) > 0) {
		#update the student registration tble
		$sql2 = "UPDATE registration SET pay = :pay, paystatus = :paystatus WHERE id = :id";
		$stmt2= $conn->prepare($sql2);
		$stmt2->execute($data2);
		#select to dashboard back
		$stmt3 = $conn->prepare('SELECT * FROM registration WHERE email=? AND id = ? AND activate > ? ');
		$stmt3->execute([$email, $stuID, '0']);
		$result = $stmt3->setFetchMode(PDO::FETCH_ASSOC);
		$user = $stmt3->fetch();
		if($user == false){echo $msg = "Please Activate your Account First, Check your email";header('Location:'.$urlServer.'/register.php');}
		$_SESSION["stuData"] = json_encode($user);

		header('Refresh: 1; url=printCert.php');
	}else{$msg = "Error submitting your information";header('Location:'.$urlServer.'/register.php');}
} catch(PDOException $e) {
	if ($e->getCode() == 23000) {
		echo "dupplicate email";
		$msg = "Error submitting your information";header('Location:'.$urlServer.'/register.php');
	} else {
		$msg = "Error submitting your information";header('Location:'.$urlServer.'/register.php');
	}
    // echo $ins . "<br>" . $e->getMessage();
}    
$conn = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>Payment Page</title>

	<link rel="icon" type="image/png" href="../../assets/img/NACOSS site.png">

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,500" rel='stylesheet'>
	<link href='../vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
	<link href="../css/vertical-responsive-menu.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">

	<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="../vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="../vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../vendor/semantic/semantic.min.css">
</head>
<body class="coming_soon_style">

	<div class="wrapper coming_soon_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="cmtk_group">
						<div class="ct-logo">
							<a href="index.html"><img src="../../assets/img/NACOSS site.png" style="width: 200px;" alt=""></a>
						</div>
						<div class="cmtk_dt">
							<h1 class="thnk_coming_title">Thank You</h1>
							<h4 class="thnk_title1">Your Payment  is Confirmed!</h4>
							<!-- <p class="thnk_des">Top Print Your Booking Order No.<span> #ABE-ME-12345678</span> (Invoice) - <a href="invoice.html">Click Here</a></p> -->
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="../vendor/semantic/semantic.min.js"></script>
	<script src="../js/custom.js"></script>
</body>
</html>