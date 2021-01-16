<?php
session_start();
ob_start();
include "include/connect.php";
$conn = DB();
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$token = $_GET['token'];
	try {
		$stmt = $conn->prepare("UPDATE registration SET activate = ? WHERE token  = ? AND alert <> ?");
		 $stmt->execute(['1', $id,'1']);
		if($stmt->rowCount() == 0){$msg = "Please Login First";session_unset($_SESSION["token"]);header('Location:'.$urlServer.'/register.php');}
			echo "<script>
		alert('Activation Successful, you will be redirected now');
		</script>";
		$_SESSION["token"] = $id;
		header('Refresh: 0; url=accounts/dashboard.php?data='.$id);
	} catch(PDOException $e) {
		// echo $sql . "<br>" . $e->getMessage();
		echo "<script>
		alert('your link has corrupt, You will be redirected to request for new activation key');
		</script>";
		header('Refresh: 0; url=activate.php');
	}
	$conn = null;
}else{
	// 
}

if (!empty($_GET['func']) && $_GET['func'] == "Lkwmd") {
	try {
		$email = $_POST['email'];
		$pass = MD5($_POST['password']);
		$stmt = $conn->prepare('SELECT * FROM registration WHERE email=? AND password = ? AND activate > ? ');
		$stmt->execute([$email, $pass, '0']);
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$user = $stmt->fetch();
		if($user == false){echo $msg = "Please Activate your Account First, Check your email";header('Location:'.$urlServer.'/register.php');}
		echo "<script>
		alert('Login Successful, Redirecting Now');
		</script>";die;
		$_SESSION["stuData"] = json_encode($user);
		header('Refresh: 0; url=accounts/dashboard.php?data='.$id);
	} catch(PDOException $e) {
		// echo $sql . "<br>" . $e->getMessage();
		echo "<script>
		alert('your link has corrupt, You will be redirected to request for new activation key');
		</script>";
		header('Refresh: 0; url=activate.php');
	}
}
?>