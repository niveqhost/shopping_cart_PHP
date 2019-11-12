<?php
include("templates/tieude.php");

?>

<div style="clear: both;"></div>
<div id="content">
	<div id="content-main">
		<div id="order"  style="background-color: #fff;">
			<h2>Giỏ hàng</h2>
			<div id="cart-table">
				<table>
				<?php if(isset($_SESSION['shopping_cart'])) { ?>
					<tr id="title">
						<td width="20%">Ảnh sản phẩm</td>
						<td width="50%">Thông tin sản phẩm</td>
						<td width="15%">Số lượng</td>
						<td width="15%">Tạm tính</td>
					</tr>
					<tr id="item">
						<td>
							<img src="assets/images/products/<?php echo $_SESSION['shopping_cart']['thumbnail']; ?>" width="150px" height="150px">
						</td>
						<td class="item-name">
							<?php echo $_SESSION['shopping_cart']['name']; ?>
							<div style="color: #f00;margin-top: 10px;">
								<?php echo $_SESSION['shopping_cart']['price']; ?>đ
							</div>
							<div style="color: #808080;margin-top: 10px;text-decoration: line-through;">
								<?php echo $_SESSION['shopping_cart']['old_price']; ?>đ
							</div>
						</td>
						<td class="item-quantity"><?php echo $_SESSION['shopping_cart']['quantity']; ?></td>
						<td class="item-money" style="color: #f00;"> 
							<?php echo $_SESSION['shopping_cart']['cost']; ?> đ
						</td>
					</tr>
					<tr style="height: 40px;">
						<td colspan="2" style="padding-left: 10px; font-weight: bold;">
							Tổng giá trị đơn hàng:
								<?php //echo $_SESSION['data']['price']; ?>
						</td>
						<td>
							<!-- <input type="button" name="btnContinue" value="MUA TIẾP" style="background-color: #0B872B;"> -->
							<a href="trangchu.php" style="background-color: #0B872B;">MUA TIẾP</a>
						</td>
						<td>
							<!-- <input type="button" name="btnOrder" value="ĐẶT HÀNG"> -->
							<a href="#" id="btnOrder">ĐẶT HÀNG</a>
						</td>
					</tr>
				<?php 
					} else {
						echo "<tr><td colspan='4' align='center'>Giỏ hàng của bạn chưa có sản phẩm nào</td></tr>";
					}
				?>
				</table>
			</div>
		</div>
	</div>
	<div id="content-right">Right</div>
</div>

<?php
include("templates/hamuc.php");
?>