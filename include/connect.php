<?php
include "api.php";
session_start();
ob_start();
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
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$conn;
	try {
		$conn = new PDO("mysql:host=$servername;dbname=nacoss_national", $username, $password);
  // set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	return $conn;
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

#https://metacpan.org/pod/SQL::QueryBuilder::OO
?>