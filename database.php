<?php
//Khai báo các thuộc tính của CSDL
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "EcommerceDB";

//Tiến hành kết nối CSDL
try{
	$conn = new PDO("mysql:host=$server_name;dbname=$db_name",$username, $password);
	//Kiểm soát luồng dữ liệu vào ra tuân thủ theo chuẩn Unicode
	$conn->exec("SET NAMES 'utf8'");
}catch(PDOException $ex){
	echo "Lỗi: ". $ex->getMessage();
}
?>