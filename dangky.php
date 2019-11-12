<?php
include("templates/tieude.php");
?>

<div style="clear: both;"></div>
<div id="content">
	<div id="content-main">
		<div id="order">
			<h2>Tạo tài khoản ITech - Shop</h2>
			<form action="./process/xulydangky.php" method="post">
				<div id="reg-form1">
					<label>Email (*)</label>
					<input type="text" name="txtEmail" placeholder="Nhập email của bạn"><br>
					<label>Mật khẩu (*)</label>
					<input type="password" name="txtPass" placeholder="Nhập mật khẩu của bạn"><br>
					<label>Họ và tên</label>
					<input type="text" name="txtFullname" placeholder="Nhập họ và tên của bạn"><br>
				</div>
				<div id="reg-form2">
					<label>Ngày sinh</label>
					<select name="cbDay">
						<option value="1">01</option>
						<option value="2">02</option>
						<option value="3">03</option>
					</select>
					<select name="cbMonth">
						<option value="1">01</option>
						<option value="2">02</option>
						<option value="3">03</option>
					</select>
					<select name="cbYear">
						<option value="1990">1990</option>
						<option value="1991">1991</option>
						<option value="1992">1992</option>
					</select><br>
					<label>Giới tính</label>
					<input type="radio" name="rbGender" checked="true"> Nam
					<input type="radio" name="rbGender"> Nữ<br>
					<label></label>
					<input type="submit" name="btnReg" value="ĐĂNG KÝ">
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