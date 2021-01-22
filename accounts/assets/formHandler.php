<?php 
session_start();
ob_start();
// error_reporting('E_ALL');
include "connect.php";
switch ($_GET['func']) {
	case "edit":
	EditStudent($_POST);
	break;
	case "Upl oadImage":
	UploadImage();
	break;
}

function EditStudent($dataGet){
	$conn = DB();
	$id = $dataGet['id'];
	$dd = $dataGet['Area'];
	$Area = implode(' | ',$dd);
	// join()
	// $Area = json_encode($area);
	$regMem = $dataGet['regMem'];
	if (empty($id)) {
		echo "<script>
		alert('sorry, please login ');
		</script>";
		header('Refresh: 0; url=register.php');
	}
	try {
		// echo $Area;die;
		if(!empty($regMem) && $regMem <> 'no'){
			$data2 = [
				'value' => $regMem,
			];
			$sql2 = "UPDATE numList SET value = :value";
			$stmt2= $conn->prepare($sql2);
			$stmt2->execute($data2);
		} if($regMem == 'no'){
			$data = [
			's_name' => $dataGet['s_name'],
			'f_name' => $dataGet['f_name'],
			'm_name' => $dataGet['m_name'],
			'email' => $dataGet['mail'],
			'phone' => $dataGet['hphone'],
			'gender' => $dataGet['gender'],
			'dob' => $dataGet['dob'],
			'dept' => $dataGet['dept'],
			'level' => $dataGet['level'],
			'area_of_int' => $Area,
			'membershipNo' => $dataGet['memebership'],
			'alert' => '1',
			'zone' => $dataGet['zone'],
			'chapter_reg' => $dataGet['chapter_reg'],
			'id' => $id,
		];
		$sql = "UPDATE registration SET f_name = :f_name, s_name= :s_name , m_name = :m_name, email = :email, phone = :phone, gender = :gender, dob = :dob, dept = :dept, level = :level, area_of_int = :area_of_int, membershipNo = :membershipNo , alert = :alert, zone = :zone, chapter_reg = :chapter_reg WHERE id  = :id";
		$stmt= $conn->prepare($sql);
		$stmt->execute($data);
		}else{
			$data = [
			's_name' => $dataGet['s_name'],
			'f_name' => $dataGet['f_name'],
			'm_name' => $dataGet['m_name'],
			'email' => $dataGet['mail'],
			'phone' => $dataGet['hphone'],
			'gender' => $dataGet['gender'],
			'dob' => $dataGet['dob'],
			'institution_type' => $dataGet['institution_type'],
			'intitution' => $dataGet['institution'],
			'dept' => $dataGet['dept'],
			'level' => $dataGet['level'],
			'area_of_int' => $Area,
			'membershipNo' => $dataGet['memebership'],
			'alert' => '1',
			'zone' => $dataGet['zone'],
			'chapter_reg' => $dataGet['chapter_reg'],
			'id' => $id,
		];
		$sql = "UPDATE registration SET f_name = :f_name, s_name= :s_name , m_name = :m_name, email = :email, phone = :phone, gender = :gender, dob = :dob, institution_type = :institution_type, intitution = :intitution, dept = :dept, level = :level, area_of_int = :area_of_int, membershipNo = :membershipNo , alert = :alert, zone = :zone, chapter_reg = :chapter_reg WHERE id  = :id";
		$stmt= $conn->prepare($sql);
		$stmt->execute($data);
		}
		
		$stmt2 = $conn->prepare("SELECT * FROM registration WHERE id=? AND membershipNo=?");
		$stmt2->execute([$id, $dataGet['memebership']]); 
		$stmt2->setFetchMode(PDO::FETCH_ASSOC);
		$userr = $stmt2->fetch();
		if($stmt->rowCount() == 0 AND $stmt2 == false){$msg = "Sorry the update is unsuccessful. we discover a malicious attempt. Please Login First";session_unset($_SESSION["token"]);header('Location:'.$urlServer.'/register.php');}
		echo "<script>
		alert('Data Updated successfully, you will be redirected now');
		</script>";
		$_SESSION['stuData'] = json_encode($userr);
		header('Refresh: 0; url=../dashboard.php?data='.$id);
	} catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
		echo "<script>
		alert('sorry the update is unsuccessful. redirecting');
		</script>";
		header('Refresh: 0; url=../dashboard.php?data='.$id);
	}
	$conn = null;
}
?>