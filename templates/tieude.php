<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>ITech - Shop</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<script src="./assets/js/jquery-3.4.1.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="top">
		<a href="#">Chăm sóc khách hàng</a> &nbsp;&nbsp;| &nbsp;&nbsp;
		
		<?php
		if(isset($_SESSION['email']) && isset($_SESSION['logged']) && $_SESSION['logged']==true){
			echo "<a href='capnhattaikhoan.php'>".$_SESSION['fullname']. "</a>";
		}else{
			echo '<a href="dangky.php">Đăng ký</a> &nbsp; / &nbsp;';
			echo '<a href="dangnhap.php">Đăng nhập</a>&nbsp;&nbsp;';
		}
		?>
	</div>

	<div id="header">
		<div id="header-top">
			<div id="logo"><a href="trangchu.php">ITech - Shop</a></div>
			<div id="search">
				<form action="timkiem.php" method="post">
					<input type="text" name="txtTimkiem" placeholder="Nhập tên sản phẩm cần tìm">
					<input type="submit" name="btnTimkiem" value="Tìm">
				</form>
			</div>
			<div id="cart">
				Giỏ hàng: 
				<span id="number">
				<a href="giohang.php">
					<?php
						if(isset($_SESSION['shopping_cart'])) {
							echo $_SESSION['shopping_cart']['total_item']; 
						}
						else {
							echo 0;
						}
					?>
				</a>
			</span>
			</div>
		</div>
		<div style="clear: both;"></div>












