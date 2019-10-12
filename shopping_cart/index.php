<?php 
	require 'database/cartDataBase.php';
?>

<?php //unset($shopping_cart['sp02']); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Giỏ hàng</title>
	<link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>
<body>
	<div id="wrapper">
		<h1>GIỎ HÀNG</h1>
		<p><b><u>Hướng dẫn:</u></b> Để xóa sản phẩm khỏi giỏ hàng, click <b>Xóa</b> / Để thêm số lượng, điền số lượng sản phẩm vào ô rồi click <b>Cập nhật</b></p>
		<table>
			<tr>
				<th>Thông tin sản phẩm</th>
				<th>Số lượng</th>
				<th>Tạm tính</th>
			</tr>

			<!---x--- Start foreach loop ---x--->

			<?php
				$total = 0;
				foreach ($shopping_cart as $key => $value) {
					$total += $value['price'] * $value['quantity'];
			?>
			<!----- Hiển thị thông tin dưới dạng bảng với id = $key ---->
			<tr id="<?php echo "$key";?>">
				<td>
					<p>
						<?php 
							echo $value['name'];
						?>
					</p>
					<p>
						<?php 
							echo $value['price'];
						?>
					</p>
					<form action="index.php" method="POST">
						<button id="btnRemove" type="submit">Xóa sản phẩm này</button>
					</form>
				</td>
				<td>
					<?php
						echo $value['quantity'];
					?>
				</td>
				<td>
					<?php 
						echo $value['price'] * $value['quantity'];
					?>
				</td>
			</tr>
			<?php } ?> 
			<!---x--- End foreach Loop ---x--->

			<!----- JavaScript ----->
			<script type="text/javascript">
				document.addEventListener("DOMContentLoaded", function(){
					let btnRemove = document.querySelectorAll('#btnRemove');		

					for(let i = 0; i < btnRemove.length; i++) {
						// Xóa sản phẩm ở trên trình duyệt
						btnRemove[i].addEventListener("click", function(){
							// console.log(btnRemove[i].parentElement.parentElement.id);
							btnRemove[i].parentElement.parentElement.style.display = "none";
						});

						// TODO: Thực hiện xóa sản phẩm theo mã $key ở trình duyệt và ở Database khi người dùng bấm nút xóa
						
						// Xóa sản phẩm ở CSDL
						<?php 
								// unset($shopping_cart['$key']);
								echo "/* ";
								print_r($shopping_cart);
								echo " */";
						?>
					}
				});
			</script>
			<tr>
				<td colspan="2">Tổng tiền đơn hàng (* Đã bao gồm VAT )</td>
				<td>
					<!-- // Tổng số tiền của đơn hàng -->
					<?php echo $total; ?>
				</td>
			</tr>
		</table> <!-- End table -->
	</div> <!-- End div#wrapper -->
	
</body>
</html>