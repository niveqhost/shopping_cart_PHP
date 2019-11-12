<!DOCTYPE html>
<html>
<head>
	<title>Admin ITech - Shop</title>
	<link rel="stylesheet" type="text/css" href="assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div id="top">
		Xin chào: <a href="#">Admin</a> &nbsp; | &nbsp;
		<a href="#">Đăng xuất</a>
	</div>
	<div id="header">
		<div id="logo"><a href="trangchu_admin.php">Admin ITech - Shop</a></div>
		<div id="search">
			<form action="timkiem.php" method="post">
				<input type="text" name="txtTimkiem" placeholder="Nhập tên sản phẩm cần tìm">
				<input type="submit" name="btnTimkiem" value="Tìm">
			</form>
		</div>
	</div>
	<div style="clear: both;"></div>
	<div id="content">
		<div id="content-left">
			<ul>
				<li><a href="#">Bảng điều khiển</a></li>
				<li><a href="#">Quản lý đơn hàng</a></li>
				<li><a href="quanlysanpham.php">Quản lý sản phẩm</a></li>
				<li><a href="#">Quản lý danh mục</a></li>
				<li><a href="#">Quản lý đối tác vận chuyển</a></li>
				<li><a href="#">Quản lý khách hàng</a></li>
				<li><a href="#">Quản lý nhân viên</a></li>
			</ul>
		</div>
		<div id="content-main">