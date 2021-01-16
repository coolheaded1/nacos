<?php
  include "connect.php";
  switch ($_GET['params']) {
    case "RegSubmit":
    RegSubmit($_POST);
    break;
    case "UploadImage":
    UploadImage();
    break;
    case "green":
    echo "Your favorite color is green!";
    break;
    default:
    echo "Your favorite color is neither red, blue, nor green!";
  }

  function RegSubmit($params){
    global $urlServer;
    $conn = DB();   
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
    ];
    try {
      $ins = "INSERT INTO registration (f_name, s_name, m_name, email, password, gender, phone, img, token, activate,alert, params) VALUES (:f_name, :s_name, :m_name, :email, :password, :gender, :phone, :img, :token, :activate, :alert, :params)";
      $stmt = $conn->prepare($ins);
      $stmt->execute($data);
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
      echo"successful"; 
    } catch(PDOException $e) {
      echo $ins . "<br>" . $e->getMessage();
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