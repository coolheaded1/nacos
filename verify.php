<?php
include "include/connect.php";
$conn = DB();
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$token = $_GET['token'];
	try {
		$sql = "UPDATE registration SET activate = ? WHERE token  = ?";
		$conn->prepare($sql)->execute(['1', $id]);
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
?>