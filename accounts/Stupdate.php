<?php 
session_start();
ob_start();
include "assets/connect2.php";
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
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
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
											<label>Surname </label>
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
												<input class="prompt srch_explore"  readonly="" type="text" name="gender" value="<?php echo $stuDataGet->gender; ?>" id="id_holdername" required="" >
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="ui search focus mt-30 lbel25">
											<label>D.O.B </label>
											<div class="ui left icon input swdh11 swdh19">
												<input class="prompt srch_explore" type="text" name="dob" value="<?php echo $stuDataGet->dob; ?>" id="dob" required="">
											</div>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="lbel25 mt-30">
											<label>Institution Type</label>
											<select class="ui hj145 dropdown cntry152 prompt srch_explore" name="institution_type" id="Ultra" onchange="getZone();">
												<?php if(empty($stuDataGet->institution_type)){$zone = 'Select Institution zone';}else{$zone = $stuDataGet->institution_type; } ?>
												<option value="<?php echo $zone; ?>"><?php echo $zone; ?></option>
												<?php foreach ($getSchoolZone as $row) {
													echo '<option value="'. $row['institute_type'].'">'. $row['institute_type'] .'</option>';
												} ?>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="lbel25 mt-30">
											<label>Institution </label>
											<select id="institute" onchange="ComposeMemNo();" class="ui hj145 dropdown cntry152 prompt srch_explore" name="institution">
												<?php if(empty($stuDataGet->intitution)){$inst = 'Select Institution';}else{$inst = $stuDataGet->intitution; } ?>
												<option selected="" value="<?php echo $inst;?>"><?php echo $inst; ?></option>												
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="lbel25 mt-30">
											<label>Department</label>
											<select class="ui hj145 dropdown cntry152 prompt srch_explore" name="dept" >
												<?php if(empty($stuDataGet->dept)){$dept = 'Select Department';}else{$dept = $stuDataGet->dept; } ?>
												<option value="<?php echo $dept; ?>"><?php echo $dept; ?></option>
												<option value="Computer Science ">Computer Science </option>
												<option value="Computer Engineering">Computer Engineering </option>
												<option value="Information Systems"> Information Systems</option>
												<option value="Software Engineering"> Software Engineering</option>
												<option value="Cyber Security">Cyber Security </option>
												<option value="Telecomunications">Telecomunications </option>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="lbel25 mt-30">
											<label>Level</label>
											<select class="ui hj145 dropdown cntry152 prompt srch_explore" name="level" >
												<?php if(empty($stuDataGet->level)){$level = 'Select Level';}else{$level = $stuDataGet->level; } ?>
												<option value="<?php echo $level; ?>"><?php echo $level; ?></option>
												<option value="100L">100L </option>
												<option value="200L">200L </option>
												<option value="300L"> 300L</option>
												<option value="400L"> 400L</option>
												<option value="500L">500L </option>
												<option value="ND I"> ND I  </option>
												<option value="ND II">ND II</option>
												<option value="HND I"> HND I </option>
												<option value="HND II">HND I </option>
												<option value="NCE I">NCE I</option>
												<option value="NCE II">NCE II</option>
												<option value="NCE III">NCE III</option>
											</select>
										</div>
									</div>

									<div class="col-md-5">
										<div class="lbel25 mt-30">
											<label>Area of Interest</label>
											<select multiple="multiple"  class="ui hj145 form-control cntry152 prompt srch_explore select2_mul_hero1" name="Area[]">
												<?php if(empty($stuDataGet->area_of_int)){$area_of_int = 'Select Option';}else{$area_of_int = $stuDataGet->area_of_int; } ?>
												<option selected="" value="<?php echo $area_of_int; ?>"><?php echo $area_of_int; ?></option>
												<option value="Accounting & Finance">Accounting & Finance </option>
												<option value="Office, Clerical, & Administrative">Office, Clerical, & Administrative</option> 
												<option value="Call Center & Customer Service ">Call Center & Customer Service </option>  
												<option value="Industrial & Manufacturing">Industrial & Manufacturing </option>		
												<option value="Science">Science</option>
												<option value="Information & Technology">Information & Technology </option>    
												<option value="Engineering">Engineering </option>  
											</select>
										</div>
									</div>

									<div class="col-md-5">
										<div class="ui search focus mt-30 lbel25">
											<label>Membership No</label>
											<div class="ui left icon input swdh11 swdh19">
												<input class="prompt srch_explore" type="text" name="memebership" readonly="" value="<?php echo $stuDataGet->membershipNo; ?>" id="memebership" >
												<input type="hidden" name="memebership2" readonly="" value="<?php echo $stuDataGet->membershipNo; ?>" id="memebership2" >
												<input type="hidden" name="regMem" readonly="" id="regMem" >
												<input type="hidden" name="zone" readonly="" value="<?php echo $stuDataGet->zone; ?>" id="zone" >
												<input type="hidden" name="chapter_reg" readonly="" value="<?php echo $stuDataGet->chapter_reg; ?>" id="chapter_reg" >
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
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js" ></script>
		<script type="text/javascript" src="js/select2.min.js" ></script><!-- incase if the above cdn is not working -->
		<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
		<script src="js/jquery-ui.js"></script> <!-- incase if the above cdn is not working -->
		<script src="js/custom.js"></script>
		<script src="js/night-mode.js"></script>
		<script>
			var data;
			var reg;
			function getZone(){
				var GetZone = document.getElementById("Ultra").value;
				data = $.parseJSON('<?php echo $getSchool; ?>');
				var newData = data.filter(p => p.institute_type == GetZone);
				for(var i=0;i<newData.length; i++)
				{

					document.getElementById("institute").innerHTML +="<option value='"+newData[i].schoo_name+"'>"+ newData[i].schoo_name +"</option>";             
				}
			}

			function ComposeMemNo(){
				
				var institute = document.getElementById("institute").value;
				// var memebership = document.getElementById("memebership").value;
				var memebership2 = document.getElementById("memebership2").value;
				if(memebership2 == null || memebership2.length === 0 || memebership2 == ""){
					var d = new Date();
					var n = d.getFullYear();
					var newData = data.filter(p => p.schoo_name == institute);
					for(var i=0;i<newData.length; i++)
					{
						if(parseInt(newData[i].user_reg) == 0){reg = '100'+ parseInt(newData[i].user_reg) + 1}else{ reg = parseInt(newData[i].user_reg) + 1}   
							var data2 ="NA"+n+"-"+newData[i].school_allias+"/"+reg; 
						document.getElementById("memebership").value = data2
						document.getElementById("regMem").value = reg
						document.getElementById("zone").value = newData[i].zone
						document.getElementById("chapter_reg").value = newData[i].chapter_reg
					}
				}else{
					document.getElementById("regMem").value = 'no';
				}
			}
			var newDate;
			$(document).ready(function() {
				$(".select2_mul_hero1").select2({
					placeholder: "Select one or multiple fields"
				});				
				var serv = new Date().getFullYear();
				newDate = (serv-10);
			});

			$('#dob').datepicker({			
			    onSelect: function(value, ui) {
			        var today = new Date(), 
			            dob = new Date(value), 
			            age = new Date(today - dob).getFullYear() - 1970;
			    },
			    maxDate: '+0d',
			    yearRange: '1920:'+newDate,
			    changeMonth: true,
			    changeYear: true
			});

		</script>

		<!-- $('.datepicker').datepicker({changeYear: true, yearRange : 'yy-50:yy+1'}); -->
		<!-- changeMonth: true,
      changeYear: true,
      yearRange: "1930:2025" -->
	</body>
	</html>
