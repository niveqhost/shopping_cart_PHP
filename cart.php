<?php
	require 'database/cartDb.php';
	require './view/require/header.php';
	$folder_path = "view/images";

	function showImages($path, $imgName) {
		// Kiểm tra xem thư mục chứa hình ảnh có tồn tại hay không
		if(is_dir($path)) {
			// Lấy tên các hình ảnh có trong thư mục
			$name = scandir($path);
			// Lấy đường dẫn đến hình ảnh trong thư mục
			for($i = 0; $i < count($name); $i++) {
				// Kiểm tra xem trong mảng đã tồn tại hình ảnh hay chưa
				// Nếu đã có hình ảnh thì hiển thị đường dẫn
				if( $name[$i] != '.' && $name[$i] != '..' && $name[$i] == $imgName) {
					// Hiển thị đường dẫn				
					echo $path . '/' . $name[$i];
				}
			}
		}
	}

?>
		<!------ Main Content -------->

		<div class="content">
			<h1>Giỏ hàng của bạn</h1>
			<table>
				<tr>
					<th>Ảnh</th>
					<th>Sản phẩm</th>
					<th>Số lượng</th>
					<th>Đơn giá</th>
					<th>Thành tiền</th>
				</tr>
				<!-- Start foreach loop -->
				<?php
					$total = 1; $totalCost = 0;
					foreach($cart as $key => $value) {
						$total = $cart[$key]['price'] * $cart[$key]['quantity'];
						$totalCost += $total;
				?>
				<tr>
					<td>
						<img src=" 
							<?php
								showImages($folder_path, $cart[$key]['imageName']);
							?> 
						">
					</td>
					<td><?php echo $cart[$key]['name']; ?></td>
					<td>
						<input id="<?php echo $key; ?>" class="quantity" type="number" value="<?php echo $cart[$key]['quantity']; ?>" min="1">
						<div style="margin-top: 8px;">
							<a class="update" href="#">Cập nhật</a>
							<a class="remove" href="#">Xóa</a>
						</div>
						
					</td>
					<td><span class="price"><?php echo number_format($cart[$key]['price'], 0, ',', '.'); ?><sup>đ</sup></span></td>
					<td><span class="price"><?php echo number_format($total, 0, ',', '.'); ?><sup>đ</sup></span></td>
				</tr>
				<!-- End foreach loop -->
				<?php } ?>
				<tr>
					<th colspan="4">Tổng cộng: </th>
					<th><span class="price"><?php echo number_format($totalCost, 0, ',', '.');?><sup>đ</sup></span></th>
				</tr>
			</table>
		</div>

		<!---x--- End Main Content ---x--->

		<!------ Footer ------>
		<?php require './view/require/footer.php'; ?>
		<!------ End Footer ------>
	</div>

	<!------ JavaScript ------->
	<script type="text/javascript" src="./view/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="./view/js/cart.js"></script>
</body>
</html>