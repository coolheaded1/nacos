<?php
session_start();
ob_start();
include "connect.php";
if (isset($_SESSION['stuData'])) {	
    $_SESSION['stuData'] = $_SESSION['stuData'];	
}else{
	$msg = "Please Login First, your IP Address has been flaged by our system";
	header('Location:../../register.php?msg='.$msg);
}

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
							<h1 class="thnk_coming_title">Ops !!!</h1>
							<h4 class="thnk_title1">please update your information before proceeding</h4>
							<a href="../dashboard.php" class="upload_btn " >Goto Dashboard</a>
							<a href="../Stupdate.php" class="upload_btn" >Update Information</a>
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