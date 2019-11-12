	<?php
	include("templates/tieude.php");
	?>
		<div id="header-bottom">
			<div id="menu">Menu</div>
			<div id="slider">Slider</div>
		</div>
	</div>

	<div style="clear: both;"></div>
	<div id="content">
		<div id="content-main">
			<div id="order">
				<h2>Sản phẩm bán chạy nhất</h2>
				
			</div>
			<div style="clear: both;"></div>
			<div class="category">
				<h2>Thiết bị di động</h2>
				<?php
				include("./process/xulytrangchu.php");
				$p1 = getProductsByCategory1("DTDD");
				foreach($p1 as $k => $v){
				?>
				<a href="chitiet.php?id=<?php echo $v['productID'];?>">
					<div class="item">
						<div class="image">
							<img src="assets/images/products/<?php echo $v['thumbnail'];?>" width="150px" height="150px">
						</div>
						<div class="name"><?php echo $v['productName'];?></div>
						<div class="price">
							<?php 
								echo number_format($v['unitPrice']-($v['unitPrice']*$v['discount'])/100, 0, ',', '.');
							?> đ
						</div>
						<div class="discount">
							<div class="percent"><?php echo $v['discount'];?>%</div>
							<div class="oldprice">
								<?php 
									echo number_format($v['unitPrice'], 0, ',', '.');
								?>
							đ</div>
						</div>
					</div>
				</a>
				<?php
				}
				?>
			</div>
			<div style="clear: both;"></div>
			<div class="category">
				<h2>Máy tính</h2>
				<?php
				$p2 = getProductsByCategory2("MTXT");
				foreach($p2 as $k => $v){
				?>
				<a href="chitiet.php?id=<?php echo $v['productID'];?>">
					<div class="item">
						<div class="image">
							<img src="assets/images/products/<?php echo $v['thumbnail'];?>" width="150px" height="150px">
						</div>
						<div class="name"><?php echo $v['productName'];?></div>
						<div class="price">
							<?php 
								echo number_format($v['unitPrice']-($v['unitPrice']*$v['discount'])/100, 0, ',', '.');
							?> đ
						</div>
						<div class="discount">
							<div class="percent"><?php echo $v['discount'];?>%</div>
							<div class="oldprice">
								<?php 
									echo number_format($v['unitPrice'], 0, ',', '.');
								?>
							đ</div>
						</div>
					</div>
				</a>
				<?php
				}
				?>
			</div>
		</div>
		<div id="content-right">
			<h3>Bản tin</h3>
			<div class="news">
				<img src="assets/images/vnpay.jpg" width="193px" height="193px">
			</div>
			<h3>Tư vấn mua sắm</h3>
			<div class="news">
				
			</div>
		</div>
	</div>
	<?php
	include("templates/hamuc.php");
	?>
