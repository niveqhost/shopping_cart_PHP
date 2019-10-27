<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<link rel="icon" type="shortcut icon" href="./view/images/shopping_cart.ico">
	<link rel="stylesheet" type="text/css" href="./view/css/style.css">
</head>
<body>
	<div class="wrapper">
	<!------ Header ------>
		<header>
			<div class="header-top">
				<div class="header-top_left">
					<a href="index.php"><img src="view/images/logo.png" alt="MilkStore"></a>
				</div>
				<div class="header-top_right">
					<a href="#">Giới thiệu</a>
					<a href="#">Thông tin</a>
					<?php 
						if(isset($_SESSION['user_session'])) {
							if($_SESSION['user_session'] == 'admin') {
								echo "<div>
										Chào mừng, <span style='color: #f00;'>". $_SESSION['user_session'] . "</span>
										<a href='admin_page.php'>Tới trang quản trị</a>
										<a href='logout.php'>Đăng xuất</a>
									</div>";
							}
							else {
								echo "<div>
										Chào mừng, <span style='color: #f00;'>". $_SESSION['user_session'] . "</span>
										<a href='logout.php'>Đăng xuất</a>
									</div>";
							}
						}
						else {
							echo '<div>
									<a href="login.php" class="sign-in">Đăng nhập</a>
									<span>hoặc</span>
									<a href="register.php" class="register">Đăng ký</a>
								</div>';
						}
					?>
					
				</div>
			</div>

			<!------ MENU ------>
			<div class="menu">
				<nav class="menu-left">
					<ul>
						<li><a href="index.php">Trang chủ</a></li>
						<li><a href="#">Liên hệ</a></li>
						<li><a href="#">Sản phẩm</a></li>
						<li><a href="#">Sữa</a></li>
						<li><a href="cart.php">Giỏ hàng</a></li>
					</ul>
				</nav>
				<div class="menu-right"></div>
			</div>
			<!------ END MENU ------>
		</header> 
		<!---x--- End header ---x--->