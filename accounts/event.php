<?php
session_start();
ob_start();
include "assets/connect2.php";
$data=json_decode($_SESSION['stuData']);

@$token = $_SESSION['token'];
if(empty($token))
{ 

	@$token = $_GET['parser'];
}
include "assets/fetcher.php";
if(isset($_GET['aler'])){
	$data = $_GET['aler'];
	echo "<script>alert('".$data."')</script>";
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
	<title>Student Dashboard - Events</title>

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
							<h4 class="item_title">Events</h4>
							<a href="" class="see150">Upcoming Events</a>
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
														<a href="Stupdate.php?func=edit&ColID=<?php echo microtime(); ?>"  >
														<button type="" name="stuEdit" class=" btn upload_btn"> Update Profile</button>  
													</a>
												</div>
											</div>
										</div>
									</div>
									<!--  -->
									<div class="col-lg-4 col-md-4">
										<?php if($stu_paystatus_cert <= 0){
											$urlFunc = "assets/complete.php?func=payment";
										}else if($stu_paystatus_cert >0 && $stu_paystatus_cert <2){
											$urlFunc = "assets/payCert.php?func=payment";
										}else{
											$urlFunc = "assets/printCert.php?func=printCert";
										} ?>
										<div class="fcrse_1 mt-30">
											<div class="tutor_img">
												<a href="<?php echo $urlFunc;?>&ColID=<?php echo microtime(); ?>" target="_blank" >
													<div class="value_icon">
														<i class='uil uil-book-open'></i>
													</div>
												</a> 
											</div>
											<div class="tutor_content_dt">
												<div class="tutor150">													
													<a href="<?php echo $urlFunc;?>&ColID=<?php echo microtime(); ?>" target="_blank"  >
														<button type="" name="stuEdit" class=" btn upload_btn"> Download Certificate</button>  
													</a>
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
													<a href="<?php echo $urlFunc;?>&ColID=<?php echo microtime(); ?>" >
														<button type="" name="stuEdit" class=" btn upload_btn">View Notifications</button>  
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
                        <?php 
                        
                            $query=mysqli_query($connect,"SELECT * FROM event WHERE CURRENT_DATE < dateclose and status='valid' order by id desc");
                            while($row=mysqli_fetch_array($query))
                            {
                            ?>
                                
                                    <div class="section3125 mt-10  _bg4586">
                                        <div class="_216b01">
            
                                            <div class="row justify-content-md-center ">
                                                <div class="col-md-10">
                                                    <div class="section3125 rpt145">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                
                                                                <div class="dp_dt150">
                                                                    <div class="img148">
                                                                        <img src="../assets/<?= $row['images']?>" alt="">
                                                                    </div>
                                                                    <div class="prfledt1">
                                                                        <h2><?= $row['title'] ?></h2>
                                                                        <span class="text-justify "><?= $row['description'] ?></span>

                                                                        <p class="text-justify pt-2"><i class="fa fa-map-marker pr-2 text-danger" aria-hidden="true"></i> <span class=""><?= $row['venue'] ?></span></p>
                                                                        <p class="text-justify pt-2"><i class="fa fa-calendar pr-2 text-danger" aria-hidden="true"></i> Date  <span class=""> <?= $row['date'] ?></span></p>
                                                                        <div class="alert alert-danger" role="alert">
                                                                           <b>Note the Event registration is to close by <?=$row['dateclose'] ?></b>
                                                                           <a role="button" href="eventapply.php?id=<?=$row['id']?>" class="btn btn-success btn-md">Click here to apply</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-right">
                                                                        
                                                                        </div>
                                                                    </div>
            
                                                                    
                                                                </div>
            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
            
                                        </div>
                                
                                        
                                <?php    }
                                ?>
						
						
                            

                            <!--End of events  -->
						</div>


						<div class="col-xl-3 col-lg-4">
							<div class="right_side">
								<div class="fcrse_2 mb-30">
									<div class="tutor_img">
										<a href="../executive.php"><img src="../assets/img/executives/presido.jpeg" alt=""></a>
									</div>
									<div class="tutor_content_dt">
										<div class="tutor150">
											<a href="../executive.php" class="tutor_name">Comr. Olamilekan Toyeeb Abolade</a>
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