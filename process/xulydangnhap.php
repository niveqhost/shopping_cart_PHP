<?php
session_start();
if(isset($_POST['btnLog'])){
	$email = $_POST['txtEmail'];
	$pass = $_POST['txtPass'];

	include("../database.php");
	$sql = "SELECT * FROM customers WHERE email=:e AND password=:p";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(":e", $email);
	$stmt->bindParam(":p", $pass);
	$stmt->execute();

	//Chuyển đổi kết quả được trả về từ Object chuyển đổi thành Array (Association array)
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	if($stmt->rowCount()>0){
		//Tạo phiên làm việc cho tài khoản này
		$_SESSION['fullname'] = $result['fullName'];
		$_SESSION['email'] = $email;
		$_SESSION['logged'] = true;
		header("location:../trangchu.php");
	}else{
		header("location:../dangnhap.php");
	}
}else{
	header("location:../trangchu.php");
}
?>