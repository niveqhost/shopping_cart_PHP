<?php
	include("templates/tieude.php");
	include("database.php");

	$proid = $_GET['id'];

	$sql = "SELECT * FROM products WHERE productID=:proid";

	$stmt = $conn->prepare($sql);
	$stmt->bindParam(":proid", $proid);
	$stmt->execute();

	$item = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div style="clear: both;"></div>
<div id="content">
	<div id="content-main">
		<div id="order"  style="background-color: #fff;">
			<h2>Thông tin chi tiết sản phẩm</h2>

			<div id="navigator">Trang chủ > Thiết bị di động > <?php echo $item['productName'];?></div>

			<div id="detail">
				<h3><?php echo $item['productName'] . " - " . $item['productID']; ?></h3>
				<div id="detail-left">
					<div id="detail-left-img">
						<img src="assets/images/products/<?php echo $item['thumbnail'];?>" width="100%">
					</div>
					<div id="detail-left-thum">
						<?php 
							$imgs = explode(";", $item['image']);
							for($i=0; $i<count($imgs); $i++){
						?>
						<img src="assets/images/products/<?php echo $imgs[$i]; ?>" width="80px" height="90px">
						<?php } ?>
					</div>
				</div>
				<div id="detail-right">
					<div id="detail-price">
						<?php 
							echo number_format($item['unitPrice']-($item['unitPrice']*$item['discount'])/100, 0, ',', '.');
						?> đ
					</div>
					<div id="detail-old-price">
						Giá hãng: 
						<s>
							<?php echo number_format($item['unitPrice'], 0, ',', '.'); ?>
						đ</s>
					</div>
					<div class="buy">
						<input type="button" name="btnBuy" value="MUA NGAY" id="inpBuy">
					</div>
					<div class="buy">
						<input type="button" name="btnAddCart" class="add_to_cart" value="THÊM VÀO GIỎ" style="background-color: #3498db;"  id="<?php echo $item['productID']; ?>" >
					</div>
				</div>
			</div>
			<div style="clear:both; border-bottom: 1px solid gray;"></div>
			<div id="description">
				<h2>Mô tả chi tiết</h2>
				<div id="description-content">
					<?php echo $item['description']; ?>
				</div>
			</div>
		</div>
	</div>
	<div id="content-right">Right</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.add_to_cart').click(function(){
			let product_id = $(this).attr("id");
			let product_name = $('#detail h3')[0].innerText;
			let product_price = $('#detail-price')[0].innerText;
			let product_oldprice = $('#detail-old-price s')[0].innerText;
			capnhat_giohang(product_id, product_name, product_price, product_oldprice);
		});

		function capnhat_giohang(product_id, product_name, product_price, product_oldprice){
			$.ajax({
				url:"./process/xulygiohang.php",
				method:"POST",
				data: {
					product_id:product_id,
					product_name:product_name,
					product_price:product_price,
					product_oldprice:product_oldprice
				},
				success: function(data) {
					let product = JSON.parse(data);
					console.log(product);
					$('#number a').text(product.total_item);
					alert("Đã thêm sản phẩm vào giỏ hàng!");
				}
			});
		}

	});
</script>

<?php
include("templates/hamuc.php");
?>