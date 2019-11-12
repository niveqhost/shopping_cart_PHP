<?php
	include("../database.php");
	include("templates/tieude.php");

	$sql = "SELECT * FROM products";

	$stmt = $conn->prepare($sql);
	$stmt->execute();

?>
	<h2>DANH SÁCH SẢN PHẨM CỦA CỬA HÀNG</h2>
	<hr>
	<table width="100%" border="1">
		<tr>
			<th>Hình ảnh</th>
			<th>Mã SP</th>
			<th>Tên SP</th>
			<th>Giá</th>
			<th>Số lượng</th>
			<th>Giảm giá</th>
			<th colspan="2">Chức năng</th>
		</tr>
		<?php 
			while ($p = $stmt->fetch(PDO::FETCH_ASSOC)) {
		?>
		<tr>
			<td><img src="../assets/images/products/<?php echo $p['thumbnail']; ?>" alt="" width="150px"></td>
			<td><?php echo $p['productID']; ?></td>
			<td><?php echo $p['productName']; ?></td>
			<td><?php echo $p['unitPrice']; ?></td>
			<td><?php echo $p['quantity']; ?></td>
			<td><?php echo $p['discount']; ?></td>
			<td><a href="capnhattaikhoan.php?id=<?php echo $p['productID']; ?>">Cập nhật</a></td>
			<td><a href="capnhattaikhoan.php?id=<?php echo $p['productID']; ?>">Xóa</a></td>
			
		</tr>
		<?php } ?>
	</table>

<?php
	include("templates/hamuc.php");
?>