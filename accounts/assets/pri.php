<?php
session_start();
ob_start();
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
$signature2 = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="user-scalable=yes, shrink-to-fit=yes" />
	<!-- <meta name="viewport" content="width=device-width, shrink-to-fit=9"> -->
	<meta name="description" content="NACOS NATIONAL">
	<meta name="author" content="NACOS NATIONAL">
	<title> Certification Center</title>

	<link rel="icon" type="image/png" href="images/fav.png">

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,500" rel='stylesheet'>
	<link href='../vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
	<link href="../css/vertical-responsive-menu.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
	<link href="../css/night-mode.css" rel="stylesheet">

	<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="../vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="../vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../vendor/semantic/semantic.min.css">
	<style>
		.move{height:110px;width:100%;} /*#191919*/
		.membership{text-transform:uppercase;margin-left:50%;margin-top:3.2%;font-size:16px; color:white;}
		.full_name{text-transform:uppercase;margin-left:5%;margin-top:2.9%;font-size:16px; color:#3b444b !important;}
		.move2{height:97px;width:100%;}
		.he{height:6px;width:100%;}
		.institution{text-transform:uppercase;padding-top:1%;margin-left:22%;font-size:16px;color:#3b444b !important;}
		.department{text-transform:uppercase;margin-left:17%;font-size:16px;color:#3b444b !important;}
		.signature{float: right;margin-right:12%;margin-top: -1.6%;}
		.datet{}
	</style>
	
</head>
<body>

	<header class="header clearfix">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="back_link">
						<a href="Dashboard.php" class="hde151">Back To Dashboard</a>
						<a href="Dashboard.php" class="hde152">Back</a>
					</div>
					<div class="ml_item">
						<div class="main_logo main_logo15" id="logo">
							<a href="Dashboard.php"><img src="../../assets/img/NACOSS site.png" width="150px" alt=""></a>
							<a href="Dashboard.php"><img class="logo-inverse" src="../../assets/img/NACOSS site.png" width="150px" alt=""></a>
						</div>
					</div>
					<div class="header_right pr-0">
						<ul>
							<li class="ui top right pointing dropdown">
								<a href="certification_center.html#" class="opts_account">
									<img src="../images/hd_dp.jpg" alt="">
								</a>
								<div class="menu dropdown_account">
									
									<a href="../logout.php" class="item channel_item">Sign Out</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>


	<div class="wrapper _bg4586 _new89">	
		<div class="_215td5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title589">
							<h2> Certification</h2>
							<p>Congratulations on being a registered NACOS member, get your cerificate</p>
							
						</div>
					</div>
					<div class="col-lg-12">
						<div class="col-sm-11" style="margin: 0px auto;">

							<div id="dvContents2" >
								<div style="background-image: url('../images/nacoss_membership_certificate.jpeg');background-size: 100% 600px; height:600px;width:100%;">
									<div class="move"></div>
									<p class="membership"><?php echo $StumembershipNo; ?></p>
									<p class="full_name" ><?php echo $names; ?></p>
									<div class="move"></div>
									<div class="he" ></div>
									<table style="width: 68%;height: 74px;">
										<tr>
											<td> 
												<p class="institution"><?php echo $stuInst; ?>   Congratulations on being a registered NACOS member, get your cerificate</p>
											</td>
										</tr>
									</table>
									<p class="department"><?php echo $stuDept; ?> <span class="signature"> <img src="<?php echo $signature1 ?>" style="width:100px;" /></span></p>
									<table style="width: 70%;height: 74px;float: left;">
										<tr>
											<td width="18%" >
												<p style="text-align:right;text-transform:uppercase;font-size:16px;padding-top:11%;color:#3b444b !important;" ><?php echo $day; ?></p>
											</td>
											<td width="26%" >
												<p style="text-align:center;text-transform:uppercase;font-size:16px;color:#3b444b !important;"  ><?php echo $mont; ?></p>
											</td>
											<td width="18%">
												<p style="margin-left: -18%;color:#3b444b !important;" ><?php echo $year; ?></p>
											</td>
										</tr>
									</table>
									<table style="width: 20%;height: 74px;">
										<tr>
											<td style="float: right;" >
												 <img src="<?php echo $signature1 ?>" style="width:100px;padding-top:34%;" />
											</td>
										</tr>
									</table>
									
								</div>								
							</div>

						</div>
					</div>
					<div style="margin:2% auto 0;" >
						<button id="downloadPDF" onclick="certificate()" style="color:#fff;" class="btn btn-success" > print certificate</button>
					</div>
				</div>
			</div>
		</div>

		<footer class="footer mt-30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="footer_bottm">
							<div class="row">
								<div class="col-md-6">
									<ul class="fotb_left">
										<li>
											<a href="index.html">
												<div class="footer_logo">
													<img src="../../assets/img/NACOSS site.png" alt="">
												</div>
											</a>
										</li>
										<li>
											<p>© <?php echo date('Y'); ?> <strong>NACOS NATIONAL</strong>. All Rights Reserved.</p>
										</li>
									</ul>
								</div>
								<div class="col-md-6">
									<div class="edu_social_links">
										<a href="index.html#"><i class="fab fa-facebook-f"></i></a>
										<a href="index.html#"><i class="fab fa-twitter"></i></a>
										<a href="index.html#"><i class="fab fa-instagram"></i></a>
										<a href="index.html#"><i class="fab fa-youtube"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="../vendor/semantic/semantic.min.js"></script>
	<script src="../js/custom.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
	<script src="../js/night-mode.js"></script>
	<script type="text/javascript">
		function a(){
			var options = {
				//'width': 800,
				'height': 640,
			};
			var pdf = new jsPDF('p', 'pt', 'a4');
			pdf.addHTML($("#dvContents2"), -1, 40, options, function() {
				pdf.save('admit_card.pdf');
			});
		}

		function certificate() {
			html2canvas(document.getElementById('dvContents2'), {
				onrendered: function(canvas) {
					var data = canvas.toDataURL();
					var docDefinition = {
						content: [{
							image: data,
							width: 500
						}]
					};
					pdfMake.createPdf(docDefinition).download("Profit-margin.pdf");
				}
			});
		}

	</script>
</body>
</html>