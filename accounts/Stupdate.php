<?php 
session_start();
ob_start();
include "assets/connect2.php";
$id = "";
include "assets/fetcher.php";
$stuDataGet = json_decode($_SESSION['stuData']);  
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

							<h3>Edit your Profile</h3>

						<div class="membership_chk_bg">
							<form method="POST" action="assets/formHandler.php?func=edit&ColID=<?php echo microtime(); ?>">
								<input type="hidden" name="id" value="<?php echo $stuDataGet->id; ?>">
								<div class="row">
									<div class="col-md-6">
										<div class="ui search focus mt-30 lbel25">
											<label>SurName </label>
											<div class="ui left icon input swdh11 swdh19">
												<input class="prompt srch_explore" type="text" name="s_name" value="<?php echo $stuDataGet->s_name; ?>" id="id_holdername" required="" >
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="ui search focus mt-30 lbel25">
											<label>First Name </label>
											<div class="ui left icon input swdh11 swdh19">
												<input class="prompt srch_explore" type="text" name="f_name" value="<?php echo $stuDataGet->f_name; ?>" id="id_holdername" required="" >
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="ui search focus mt-30 lbel25">
											<label>Middle Name </label>
											<div class="ui left icon input swdh11 swdh19">
												<input class="prompt srch_explore" type="text" name="m_name" value="<?php echo $stuDataGet->m_name; ?>" id="id_holdername" required="" >
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="ui search focus mt-30 lbel25">
											<label>E-mail </label>
											<div class="ui left icon input swdh11 swdh19">
												<input class="prompt srch_explore" type="email" name="mail" value="<?php echo $stuDataGet->email; ?>" id="id_holdername" required="" >
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="ui search focus mt-30 lbel25">
											<label>Phone </label>
											<div class="ui left icon input swdh11 swdh19">
												<input class="prompt srch_explore" type="text" name="hphone" value="<?php echo $stuDataGet->phone; ?>" id="id_holdername" required="" >
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="ui search focus mt-30 lbel25">
											<label>Gender </label>
											<div class="ui left icon input swdh11 swdh19">
												<input class="prompt srch_explore" type="text" name="gender" value="<?php echo $stuDataGet->gender; ?>" id="id_holdername" required="" >
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="ui search focus mt-30 lbel25">
											<label>D.O.B </label>
											<div class="ui left icon input swdh11 swdh19">
												<input class="prompt srch_explore" type="text" name="dob" value="<?php echo $stuDataGet->dob; ?>" id="id_holdername" required="">
											</div>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="lbel25 mt-30">
											<label>Institution Type</label>
											<select class="ui hj145 dropdown cntry152 prompt srch_explore" name="institution_type">
												<option value="<?php echo $stuDataGet->institution_type; ?>"><?php echo $stuDataGet->institution_type; ?></option>
												<option value="1">January</option>
												<option value="2">February</option>
												<option value="3">March</option>
												<option value="4">April</option>
												<option value="5">May</option>
												<option value="6">June</option>
												<option value="7">July</option>
												<option value="8">August</option>
												<option value="9">September</option>
												<option value="10">October</option>
												<option value="11">November</option>
												<option value="12">December</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="lbel25 mt-30">
											<label>Institution </label>
											<select class="ui hj145 dropdown cntry152 prompt srch_explore" name="institution">
												<option value="<?php echo $stuDataGet->intitution; ?>"><?php echo $stuDataGet->intitution; ?></option>
												<option value="">Month</option>
												<option value="1">January</option>
												<option value="2">February</option>
												<option value="3">March</option>
												<option value="4">April</option>
												<option value="5">May</option>
												<option value="6">June</option>
												<option value="7">July</option>
												<option value="8">August</option>
												<option value="9">September</option>
												<option value="10">October</option>
												<option value="11">November</option>
												<option value="12">December</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="ui search focus mt-30 lbel25">
											<label>Department</label>
											<div class="ui left icon input swdh11 swdh19">
												<input class="prompt srch_explore" type="text" name="dept" value="<?php echo $stuDataGet->dept; ?>">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="ui search focus mt-30 lbel25">
											<label>Level</label>
											<div class="ui left icon input swdh11 swdh19">
												<input class="prompt srch_explore" type="text" name="level"  value="<?php echo $stuDataGet->level; ?>">
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="ui search focus mt-30 lbel25">
											<label>Area of Interest</label>
											<div class="ui left icon input swdh11 swdh19">
												<input class="prompt srch_explore" type="text" name="Area" value="<?php echo $stuDataGet->area_of_int; ?>" >
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="ui search focus mt-30 lbel25">
											<label>Membership No</label>
											<div class="ui left icon input swdh11 swdh19">
												<input class="prompt srch_explore" type="text" name="memebership" readonly="" value="<?php echo $stuDataGet->membershipNo; ?>" >
											</div>
										</div>
									</div>
									<div style="float: right;margin-top: 4%;" >
										<button class="btn btn-success chckot_btn" type="submit" >Update</button>
									</div>
									<!-- <button class="chckot_btn"  style="float: right;" type="submit">Update</button> -->
								</div>
							</form>
						</div>
					</div>	


				</div>



			</div>
		</div>
		<?php  include "assets/footer.php.php"; ?>

		<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vertical-responsive-menu.min.js"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="vendor/OwlCarousel/owl.carousel.js"></script>
		<script src="vendor/semantic/semantic.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/night-mode.js"></script>
	</body>
	</html>