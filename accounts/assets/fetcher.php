<?php  
$conn = DB();
$mailfrom= "";$mailfromname="";$tag="";

if(!empty($token)){
	$stmt = $conn->prepare('SELECT * FROM registration WHERE token=? AND activate = ?');
// $stmt = $pdo->prepare('SELECT * FROM registration WHERE email = ? AND token=? AND password = ? AND activate = ?');
	$stmt->execute([$token, '1']);
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$user = $stmt->fetch();
	$vals = json_decode(json_encode($user));
	$vals->id;
	$vals->img;
	$vals->alert;
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
      '.$to.'  Password :  '.$vals->params.' Once again you are welcome!
      -----------------------------------------------------'; // Our message above including the link
      sendmailbymailgun($to,$toname,$subject,$html,$text,$mailfrom,$mailfromname,$tag);
      $conn = null;
  }
  ?>