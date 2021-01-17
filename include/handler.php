<?php
session_start();
ob_start();
include "connect.php";
switch ($_GET['params']) {
  case "RegSubmit":
  RegSubmit($_POST);
  break;
  case "UploadImage":
  UploadImage();
  break;
  case "  ss":
  echo "Your favorite color is green!";
  break;
}

function RegSubmit($params){
  global $urlServer;
  $conn = DB();   
  $date = date("Y");
  $id = uniqid();
  $to = $params["register_email"];
  $toname = $params["register_fname"]." ".$params["register_name"];
  $subject = "Activation Link";
  $token = md5($params["register_email"].time());
  $mailfrom= "";$mailfromname="";$tag="";
  $img ="image is here";
  $data = [
    'f_name' => $params["register_name"],
    's_name' => $params["register_fname"],
    'm_name' => $params["register_mname"],
    'email' => $params["register_email"],
    'password' => MD5($params["register_password"]),
    'gender' => $params["register_gender"],
    'phone' => $params["register_deptno"],
    'img' => $img,
    'token' => $id,
    'activate' => '0',
    'alert' => '',
    'params' => $params["register_password"],
    'dob' => '',
    'institution_type' => '',
    'intitution' => '',
    'dept' => '',
    'level' => '',
    'area_of_int' => '',
    'membershipNo' => '',
    'year_of_reg' => $date,
    'pay' => '',
    'amount' => '',
    'paystatus' => '',
    'zone' => '',
    'chapter_reg' => '',
  ];
  try {
    $ins = "INSERT INTO registration (f_name, s_name, m_name, email, password, gender, phone, img, token, activate,alert, params,dob, institution_type, intitution, dept, level, area_of_int, membershipNo, year_of_reg, pay, amount, paystatus, zone, chapter_reg) VALUES (:f_name, :s_name, :m_name, :email, :password, :gender, :phone, :img, :token, :activate, :alert, :params, :dob, :institution_type, :intitution, :dept, :level, :area_of_int, :membershipNo, :year_of_reg, :pay, :amount, :paystatus, :zone, :chapter_reg)";
    $stmt = $conn->prepare($ins);
    if ($stmt->execute($data) > 0) {
      $html = 'Thanks for signing up!<br>
      Your account has been created,<br>
      -----------------------------------------------------<br>
      Please click this link to activate your account:<br>
      '.$urlServer.'/verify.php?id='.$id.'&token='.$token.'<br>
      -----------------------------------------------------'; // Our message above including the link
      $text = 'Thanks for signing up! 
      Your account has been created,
      -----------------------------------------------------
      Please click this link to activate your account: 
      '.$urlServer.'/verify.php?id='.$id.'&token='.$token.'
      -----------------------------------------------------';
      sendmailbymailgun($to,$toname,$subject,$html,$text,$mailfrom,$mailfromname,$tag);
      // echo"successful"; 
      echo "<script>
      alert('registration successful. check your mail for activation link');
      </script>";
      header('Refresh: 0; url=../register.php');
    }else{$msg = "Error submitting your information";header('Location:'.$urlServer.'/register.php');}
  } catch(PDOException $e) {
    if ($e->getCode() == 23000) {
      echo "dupplicate email";
       $msg = "Error submitting your information";header('Location:'.$urlServer.'/register.php');
    } else {
        $msg = "Error submitting your information";header('Location:'.$urlServer.'/register.php');
    }
    // echo $ins . "<br>" . $e->getMessage();
  }    
  $conn = null;
}

function UploadImage(){
  if(isset($_FILES['File']['name'])){

   /* Getting file name */
   $filename = $_FILES['File']['name'];

   /* Location */
   $location = '../uploads/'.$filename;
   $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
   $imageFileType = strtolower($imageFileType);

   /* Valid extensions */
   $valid_extensions = array("jpg","jpeg","png","pdf","word","doc","txt");

   $response = 0;
   /* Check file extension */
   if(in_array(strtolower($imageFileType), $valid_extensions)) {
    /* Upload file */
    if(move_uploaded_file($_FILES['File']['tmp_name'],$location)){
     $response = $filename;
   }
 }

 echo $response;
 exit;
}
}



?>