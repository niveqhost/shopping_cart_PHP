<?php 
	session_start();

	if(isset($_SESSION['user_session']) && $_SESSION['user_session'] == 'admin'){
		echo "<h1 style='text-align: center;'>Chào mừng ". $_SESSION['user_session'] ." đến với trang quản trị</h1>
			<br><a href='index.php'>Đi tới trang chủ</a>
			<a href='logout.php'>Đăng xuất</a>
		";
	}
	else {
		header('location: login.php');
	}
?>