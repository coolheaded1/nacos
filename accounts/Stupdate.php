<?php 
session_start();
ob_start();
include "assets/connect2.php";
$id = "";
include "assets/fetcher.php";
$stuDataGet = json_decode($_SESSION['stuData']);  
$getSchoolZone = $_SESSION['getSchoolZone'];
$getSchool =json_encode($_SESSION['getSchool']);
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
											<label>Institution Type / Zone</label>
											<select class="ui hj145 dropdown cntry152 prompt srch_explore" name="institution_type" id="Ultra" onchange="getZone()">
												<?php if(empty($stuDataGet->institution_type)){$zone = 'Select Institution zone';}else{$zone = $stuDataGet->institution_type; } ?>
												<option value="<?php echo $zone; ?>"><?php echo $zone; ?></option>
												<?php foreach ($getSchoolZone as $row) {
													echo '<option value="'. $row['zone'].'">'. $row['zone'] .'</option>';
												} ?>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="lbel25 mt-30">
											<label>Institution </label>
											<select id="institute" class="ui hj145 dropdown cntry152 prompt srch_explore" name="institution">
												<?php if(empty($stuDataGet->intitution)){$inst = 'Select Institution';}else{$inst = $stuDataGet->intitution; } ?>
												<option selected="" value="<?php echo $inst;?>"><?php echo $inst; ?></option>												
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
		<script>
			function getZone(){
				var GetZone = document.getElementById("Ultra").value;
				var data = $.parseJSON('<?php echo $getSchool; ?>');
				var newData = data.filter(p => p.zone == GetZone);
				for(var i=0;i<newData.length; i++)
				{
					document.getElementById("institute").innerHTML +="<option value='"+newData[i].schoo_name+'&'+ newData[i].chapter_reg+"'>"+ newData[i].schoo_name +"</option>";             
				}
			}
			
		</script>
	</body>
	</html>