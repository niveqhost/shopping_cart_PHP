<?php
	require '../database.php';
	session_start();

	$total_item = 0;
	if(isset($_POST['product_id'])) {

		$total_item += 1;

		$sql = "SELECT * FROM products WHERE productID=:pro_id";

		$stmt = $conn->prepare($sql);
		$stmt->bindParam(":pro_id", $_POST['product_id']);
		$stmt->execute();

		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$price = $result['unitPrice']-($result['unitPrice']*$result['discount'])/100;
		$old_price = $result['unitPrice'];
		$cost = $result['quantity'] * $old_price;
		
		$_SESSION['shopping_cart'] = array(
			'id' => $result['productID'], 
			'thumbnail' => $result['thumbnail'],
			'name' => $result['productName'],
			'price' => number_format($price, 0,',','.'),
			'old_price' => number_format($old_price, 0,',','.'),
			'quantity' => $result['quantity'],
			'cost' => number_format($cost, 0,',','.'),
			'total_item' => $total_item
		);
		
	}

	echo json_encode($_SESSION['shopping_cart']);
	
?>
