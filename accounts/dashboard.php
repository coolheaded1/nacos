<?php
session_start();
ob_start();
include "assets/connect2.php";
$token = $_SESSION['token'];if(empty($token)){ $token = $_GET['parser'];}
include "assets/fetcher.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>Student Dashboard</title>

	<link rel="icon" type="image/png" href="../assets/img/NACOSS site.png">

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,500" rel='stylesheet'>
	<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
	<link href="css/vertical-responsive-menu.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/night-mode.css" rel="stylesheet">

	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">
	<?php  include "assets/header.php"; ?>

	<div class="wrapper">
		<div class="sa4d25">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-9 col-lg-8">
						<?php 
						if (empty($allert)) {
							echo "<div> Please ensure to complete your profile registration <a href='Stupdate.php?func=edit&ColID=".microtime()."'>Here</a> or click on <b>Profile Update </b></div>";
						}
						?>
						<div class="section3125">
							<h4 class="item_title">Dashboard</h4>
							<a href="" class="see150">Welcome</a>
							<div class="la5lo1">
								<div class="row">
									<div class="col-lg-4 col-md-4">
										<div class="fcrse_1 mt-30">
											<div class="tutor_img">
												<div class="value_icon">
													<i class='uil uil-history'></i>
												</div>
											</div>
											<div class="tutor_content_dt">
												<div class="tutor150">
													<form id="Stuedit" method="POST" action="Stupdate.php?func=edit&ColID=<?php echo microtime(); ?>" >
														<input type="hidden" name="id" value="">
														<?php echo sprintf("<input id='json_vals'  name='stuData' type='hidden' value='%s'/>", json_encode($stuData)); ?>
														<button type="submit" name="stuEdit" class=" btn upload_btn"> Update Profile</button>  
													</form>
												</div>
											</div>
										</div>
									</div>
									<!--  -->
									<div class="col-lg-4 col-md-4">
										<?php if($stu_paystatus_cert <= 0){
											$urlFunc = "assets/payCert.php?func=payment";
										}else{
											$urlFunc = "assets/printCert.php?func=printCert";
										} ?>
										<div class="fcrse_1 mt-30">
											<div class="tutor_img">
												<a href="<?php echo $urlFunc;?>&ColID=<?php echo microtime(); ?>" >
													<div class="value_icon">
														<i class='uil uil-book-open'></i>
													</div>
												</a> 
											</div>
											<div class="tutor_content_dt">
												<div class="tutor150">													
													<form id="Stuedit" method="POST" action="<?php echo $urlFunc;?>&ColID=<?php echo microtime(); ?>" >
														<input type="hidden" name="id" value="">
														<?php echo sprintf("<input id='json_vals'  name='stuData' type='hidden' value='%s'/>", json_encode($stuData)); ?>
														<button type="submit" name="stuEdit" class=" btn upload_btn"> Download Certificate</button>  
													</form>
												</div>
											</div>
										</div>
									</div>
									<!--  -->
									<div class="col-lg-4 col-md-4">
										<?php if($stu_paystatus_cert <= 0){
											$urlFunc3 = "assets/payCert.php?func=payment";
										}else{
											$urlFunc3 = "assets/printCert.php?func=printCert";
										} ?>
										<div class="fcrse_1 mt-30">
											<div class="tutor_img">
												<a href="">
												<div class="value_icon">
													<i class='uil uil-bell'></i>
												</div>
												</a>
											</div>
											<div class="tutor_content_dt">
												<div class="tutor150">
													<form id="Stuedit" method="POST" action="" >
														<input type="hidden" name="id" value="">
														<?php echo sprintf("<input id='json_vals'  name='stuData' type='hidden' value='%s'/>", json_encode($stuData)); ?>
														<button type="submit" name="stuEdit" class=" btn upload_btn">View Notifications</button>  
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						
						<div class="section3125 mt-10  _bg4586">
							<div class="_216b01">


								<div class="row justify-content-md-center  ">
									<div class="col-md-10">
										<div class="section3125 rpt145">
											<div class="row">
												<div class="col-lg-12">
													<a href="Stupdate.php?func=edit&ColID=<?php echo microtime();?>" class="_216b22">
														<span><i class="fas fa-user-edit"></i></span> Profile
													</a>
													<div class="dp_dt150">
														<div class="img148">
															<img src="images/left-imgs/img-1.jpg" alt="">
														</div>
														<div class="prfledt1">
															<h2><?php echo $names ;?></h2>
															<span>Membership No: <?php echo $StumembershipNo; ?></span>
														</div>
														<div class="text-right">
															<a href="Stupdate.php?func=edit&ColID=<?php echo microtime(); ?>" class="_216b12">
																<span><i class="fas fa-user-edit"></i></span>Profile
															</a></div>
														</div>

														<div class="table-responsive mt-20 col-sm-12">
															<table class="table u cp-table">
																<thead class="thead-s">
																	<tr>
																		<th class=" text-white" scope="col">E-mail</th>
																		<th class="cell-ta text-white" scope="col"><?php echo $email?></th>
																	</tr>
																	<tr>
																		<th class=" text-white" scope="col">Gender</th>
																		<th class="cell-ta text-white" scope="col"><?php echo $gender; ?></th>
																	</tr>
																	<tr>
																		<th class="text-white" scope="col">Phone</th>
																		<th class="cell-ta text-white" scope="col"><?php echo $phone; ?></th>
																	</tr>
																	<tr>
																		<th class="text-white" scope="col">D.O.B</th>
																		<th class="cell-ta text-white" scope="col"><?php echo $stuDOB; ?></th>
																	</tr>
																	<tr>
																		<th class="text-white" scope="col">Institution Type</th>
																		<th class="cell-ta text-white" scope="col"><?php echo $stuInstType; ?></th>
																	</tr>
																	<tr>
																		<th class=" text-white" scope="col">Institution </th>
																		<th class="cell-ta text-white" scope="col"><?php echo $stuInst; ?></th>
																	</tr>
																	<tr>
																		<th class=" text-white" scope="col">Department </th>
																		<th class="cell-ta text-white" scope="col"><?php echo $stuDept; ?></th>
																	</tr>
																	<tr>
																		<th class=" text-white" scope="col">Level </th>
																		<th class="cell-ta text-white" scope="col"><?php echo $Level ?></th>
																	</tr>
																	<tr>
																		<th class="text-white" scope="col">Area Of Interest </th>
																		<th class="cell-ta text-white" scope="col"><?php echo $stuAreOfIntrest ?></th>
																	</tr>
																</thead>
															</table>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>


						<div class="col-xl-3 col-lg-4">
							<div class="right_side">
								<div class="fcrse_2 mb-30">
									<div class="tutor_img">
										<a href="my_instructor_profile_view.html"><img src="../assets/img/executives/presido.jpeg" alt=""></a>
									</div>
									<div class="tutor_content_dt">
										<div class="tutor150">
											<a href="my_instructor_profile_view.html" class="tutor_name">Comr. Olamilekan Toyeeb Abolade</a>
											<div class="mef78" title="Verify">
												<i class="uil uil-check-circle"></i>
											</div>
										</div>
										<div class="tutor_cate">NACOS National President</div>
										<ul class="tutor_social_links">
											<li><a href="index.html#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="index.html#" class="tw"><i class="fab fa-twitter"></i></a></li>
											<li><a href="index.html#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
										<!-- <div class="tut1250">
											<span class="vdt15">615K Students</span>
											<span class="vdt15">12 Courses</span>
										</div> -->
										<a href="../executive.php" class="prfle12link">Go To Profile</a>
									</div>
									<div class="get1452">
										<h4>Get personalized recommendations</h4>
										<p>Answer a few questions for your top picks</p>
										<button class="Get_btn" onclick="window.location.href = '#';">Get Started</button>
									</div>

								</div>
							</div>


						</div>
					</div>
				</div>
				<?php  include "assets/footer.php"; ?>

				<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vertical-responsive-menu.min.js"></script>
				<script src="js/jquery-3.3.1.min.js"></script>
				<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
				<script src="vendor/OwlCarousel/owl.carousel.js"></script>
				<script src="vendor/semantic/semantic.min.js"></script>
				<script src="js/custom.js"></script>
				<script src="js/night-mode.js"></script>
			</body>
			</html>