<?php  
$conn = DB();
$mailfrom= "";$mailfromname="";$tag="";
// print_r($_SESSION);
if(!empty($token)){
	$stmt = $conn->prepare('SELECT * FROM registration WHERE token=? AND activate = ?');
// $stmt = $pdo->prepare('SELECT * FROM registration WHERE email = ? AND token=? AND password = ? AND activate = ?');
	$stmt->execute([$token, '1']);
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$user = $stmt->fetch();
	$vals = json_decode(json_encode($user));
	if (!empty($vals->alert)) {
		echo "
		<script>
		alert('Please Login First');
		</script>
		";
		session_unset();
		session_destroy();
		header('Refresh: 0; url='.$urlServer.'register.php');
	}
	$stuData  = $vals;
	$stuid = $vals->id;
	$stutok = $vals->token;
	$img = $vals->img;
	$email = $vals->email;
	$StumembershipNo = $vals->membershipNo;
	$gender = $vals->gender; 
	$phone = $vals->phone;
	$f_name = $vals->f_name;
	$s_name = $vals->s_name;
	$m_name = $vals->m_name;
	$stuDOB = $vals->dob;
	$stuInstType = $vals->institution_type;
	$stuInst = $vals->intitution;
	$stuDept = $vals->dept;
	$Level = $vals->level;
	$stuArea = $vals->area_of_int;
	$stu_year_of_reg = $vals->year_of_reg;
	$stu_pay_cert = $vals->pay;
	$stu_amount_cert = $vals->amount;
	$stu_paystatus_cert = $vals->paystatus;
	$stuAreOfIntrest = $vals->area_of_int;
	$names = $s_name." ".$f_name ." ". $m_name;
	$allert = $vals->alert;
  $_SESSION['stuData'] = json_encode($stuData); 
	#send mail 
	$toname = $vals->f_name ." ". $vals->s_name;
	$to = $vals->email;
	$subject = "Activation Successful";
	$html = '<b>Welcome to NACOS</b><br>We are happy to inform you that your registration was successful and <br>
	Your account has been created,<br>
	-----------------------------------------------------<br>
	Please ensure to complete your profile registration:<br> Below are your Login Details<br> Username / Email : 
	'.$to.'<br> Password : <b> '.$vals->params.'<b><br> Once again you are welcome!
      -----------------------------------------------------'; // Our message above including the link
      $text = 'Welcome to NACOS, We are happy to inform you that your registration was successful and  
      Your account has been created, 
      ----------------------------------------------------- 
      Please ensure to complete your profile registration:  Below are your Login Details Username / Email : 
      '.$to.'  Password :  '.$vals->params.' Once again you are welcome!<r>
      -----------------------------------------------------'; // Our message above including the link
      // sendmailbymailgun($to,$toname,$subject,$html,$text,$mailfrom,$mailfromname,$tag);
      $conn = null;
  }else	if (isset($_SESSION['stuData'])) {
  	$vals = json_decode($_SESSION['stuData']);
  	$stuid = $vals->id;
  	$stutok = $vals->token;
  	$img = $vals->img;
  	$email = $vals->email;
  	$StumembershipNo = $vals->membershipNo;
  	$gender = $vals->gender; 
  	$phone = $vals->phone;
  	$f_name = $vals->f_name;
  	$s_name = $vals->s_name;
  	$m_name = $vals->m_name;
  	$stuDOB = $vals->dob;
  	$stuInstType = $vals->institution_type;
  	$stuInst = $vals->intitution;
  	$stuDept = $vals->dept;
  	$Level = $vals->level;
  	$stuArea = $vals->area_of_int;
  	$stu_year_of_reg = $vals->year_of_reg;
  	$stu_pay_cert = $vals->pay;
  	$stu_amount_cert = $vals->amount;
  	$stu_paystatus_cert = $vals->paystatus;
  	$stuAreOfIntrest = $vals->area_of_int;
  	$names = $s_name." ".$f_name ." ". $m_name;
  	$allert = $vals->alert;
	#send mail 
  	$toname = $vals->f_name ." ". $vals->s_name;
  	$to = $vals->email;
  }
  
  switch ($_GET['func']) {
  	case "edit":
  	// editStudent($_POST);
  	break;
  	case "Upl oadImage":
  	UploadImage();
  	break;
  }
  
  ?>