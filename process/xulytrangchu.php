<?php
include("database.php");

//Lấy sản phẩm của danh mục 1 (Thiết bị di động)
function getProductsByCategory1($_catid){
	global $conn;
	$sql = "SELECT * FROM products WHERE categoryID = :catid";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(":catid", $_catid);

	$stmt->execute();
	//Tạo 1 mảng chứa các bản ghi nhận được
	$items = array();
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$items[] = $row;
	}
	return $items;
}

//Lấy sản phẩm của danh mục 1 (Thiết bị di động)
function getProductsByCategory2($_catid){
	global $conn;
	$sql = "SELECT * FROM products WHERE categoryID = :catid";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(":catid", $_catid);

	$stmt->execute();
	//Tạo 1 mảng chứa các bản ghi nhận được
	$items = array();
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$items[] = $row;
	}
	return $items;
}
?>