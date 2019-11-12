<?php
if(isset($_POST['btnReg'])){
	//Tạo ra các biến nhận dữ liệu từ form gửi lên
	$email = $_POST['txtEmail'];
	$pass = $_POST['txtPass'];
	$full = $_POST['txtFullname'];

	//Tiếp tục làm sạch dữ liệu tại đây

	//Kết nối với CSDL
	include("../database.php");

	//Tạo truy vấn cho chức năng 'Đăng ký'
	$sql = "INSERT INTO customers(email,password,fullName) VALUES(:e, :p, :f)";

	//Tạo đối tượng 'statement' để prepare câu truy vấn
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(":e", $email);
	$stmt->bindParam(":p", $pass);
	$stmt->bindParam(":f", $full);

	//Thực thi truy vấn
	$result = $stmt->execute();

	if($result == true){
		header("location:../thongbao.php");
	}else{
		header("location:../loi.php");
	}

}
?>