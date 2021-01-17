<?php 
include "api.php";
$projectPhase = "";#change to 'online' when going live
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
	$urlServer = "https"; 
else
	$urlServer = "http"; 
// Here append the common URL characters. 
$urlServer .= "://"; 
// Append the host(domain name, ip) to the URL. 
$urlServer .= $_SERVER['HTTP_HOST'];
if ($urlServer == 'http://localhost') {
	$urlServer .= '/nacos'; 
}

function DB(){	
	global $servername;
	global $username;
	global $password;
	global $dbname;	
	$conn;
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	return $conn;
	$conn = null;
}

#mailgun api
define('MAILGUN_URL', $MAILGUN_URL);
define('MAILGUN_KEY', $MAILGUN_KEY); 
function sendmailbymailgun($to,$toname,$subject,$html,$text,$mailfrom,$mailfromname,$tag){
	if (empty($mailfrom)) {$mailfrom = "info@nacoss.org.ng";}
	if (empty($mailfromname)) {$mailfromname = "NACOS NATIONAL";}
	if (empty($tag)) {$tag = "important";}
	$replyto = "info@nacoss.org.ng";
	$array_data = array(
		'from'=> $mailfromname .'<'.$mailfrom.'>',
		'to'=>$toname.'<'.$to.'>',
		'subject'=>$subject,
		'html'=>$html,
		'text'=>$text,
		'o:tracking'=>'yes',
		'o:tracking-clicks'=>'yes',
		'o:tracking-opens'=>'yes',
		'o:tag'=>$tag,
		'h:Reply-To'=>$replyto
	);

	$session = curl_init(MAILGUN_URL.'/messages');
	curl_setopt($session, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($session, CURLOPT_USERPWD, 'api:'.MAILGUN_KEY);
	curl_setopt($session, CURLOPT_POST, true);
	curl_setopt($session, CURLOPT_POSTFIELDS, $array_data);
	curl_setopt($session, CURLOPT_HEADER, false);
	curl_setopt($session, CURLOPT_ENCODING, 'UTF-8');
	curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($session, CURLOPT_SSL_VERIFYPEER, false);
	$response = curl_exec($session);
	curl_close($session);
	$results = json_decode($response, true);
	return $results;
}

function getSchool(){
	$conn = DB();
	try {
		global $getSchool;
		$stmt = $conn->prepare('SELECT * FROM schools');
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$getSchool = $stmt->fetchAll();
		if($getSchool == false){$getSchool = "";}
	} catch(PDOException $e) {
		// echo $sql . "<br>" . $e->getMessage();
	}
	return $getSchool;
}
$_SESSION['getSchool'] = getSchool();

function getSchoolZone(){
	$conn = DB();
	try {
		global $getSchoolZone;
		$stmt = $conn->prepare("SELECT zone,count(*) as count FROM schools  GROUP BY zone ");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$getSchoolZone = $stmt->fetchAll();
		if($getSchoolZone == false){$getSchoolZone = "";}
	} catch(PDOException $e) {
		// echo $sql . "<br>" . $e->getMessage();
	}
	return $getSchoolZone;
}
$_SESSION['getSchoolZone'] = getSchoolZone();

function genReferenceForCustomer($qtd){
//Under the string $Caracteres you write all the characters you want to be used to randomly generate the code.
	$Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
	$QuantidadeCaracteres = strlen($Caracteres);
	$QuantidadeCaracteres--;
	$Hash=NULL;
	for($x=1;$x<=$qtd;$x++){
		$Posicao = rand(0,$QuantidadeCaracteres);
		$Hash .= substr($Caracteres,$Posicao,1);
	}
	return $Hash;
}

function PayStack(){

	$curl = curl_init();
	$email = "yakubuabiola2003@gmail.com";
	$amount = 30000; 
	$callback_url = $urlServer.'/include/callback_url.php';  
	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => json_encode([
			'amount'=>$amount,
			'email'=>$email,
			'callback_url' => $callback_url,
			"metadata" =>['variable_name' => 'damsel','display_name' => 'damsel','value' => genReferenceForCustomer(9)],
		]),
		CURLOPT_HTTPHEADER => [
    "authorization: Bearer sk_test_ccacc3e60ce8dad28d4664250eb36b307f6c3fec", //replace this with your own test key
    "content-type: application/json",
    "cache-control: no-cache"
],
));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	if($err){
  // there was an error contacting the Paystack API
		die('Curl returned error: ' . $err);
	}

	$tranx = json_decode($response, true);

	if(!$tranx['status']){
  // there was an error from the API
		print_r('API returned error: ' . $tranx['message']);
	}
	header('Location: ' . $tranx['data']['authorization_url']);

}
?>