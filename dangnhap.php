<?php
include("templates/tieude.php");
?>

<div style="clear: both;"></div>
<div id="content">
	<div id="content-main">
		<div id="order">
			<h2>Đăng nhập với tài khoản ITech - Shop</h2>
			<form action="./process/xulydangnhap.php" method="post">
				<div id="reg-form1">
					<label>Email (*)</label>
					<input type="text" name="txtEmail" placeholder="Nhập email của bạn"><br>
					<label>Mật khẩu (*)</label>
					<input type="password" name="txtPass" placeholder="Nhập mật khẩu của bạn"><br>
				</div>
				<div id="reg-form2">
					<input type="submit" name="btnLog" value="ĐĂNG NHẬP" style="width: 100%">
				</div>
				<div style="clear: both;"></div>
			</form>
		</div>
	</div>
	<div id="content-right">
		<h3>Bản tin</h3>
		<div class="news">
			<img src="assets/images/vnpay.jpg" width="193px" height="193px">
		</div>
	</div>
</div>

<?php
include("templates/hamuc.php");
?>