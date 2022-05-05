
<style type="text/css">

	.content .sp {
    height: 330px;
    }
    .btn-default{
    	margin-top: 10px;
    }
    
</style>

<div class="panel panel-warning" style="margin-top: 1em;">
    <div class="panel-heading">Sản phẩm nổi bật</div>
    <div class="panel-body">
		<div class="product">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="product">
			<?php
				include('connect.php');
				$sl = 'select * from san_pham where noi_bat="co" limit 0,4';
				$exec = mysqli_query($connect, $sl);
				while($row= mysqli_fetch_array($exec)){
			?>
					<div class="sp img-thumbnail col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="img img-thumbnail col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><img src="images/<?php echo $row['img']; ?>" alt=""></a>
						</div>
						<div class="title">
							<a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
						</div>
						<div class="cost">
							<span><?php echo number_format($row['giasp'],0,",",".")."đ"; ?></span>
						</div>
						<div class="buy">
							<a class="btn btn-info" href="?menu=product_info&masp=<?php echo $row['masp']; ?>">Chi tiết</a>
							<a class="btn btn-warning" href="?menu=addcart&masp=<?php echo $row['masp']; ?>&soluong=1"><b class="fa fa-cart-plus"></b></a>
						</div>
					</div>
			<?php 
				}
				$sl2 = 'select * from san_pham where noi_bat="co" ';
				$exec2 = mysqli_query($connect, $sl2);
				if(mysqli_num_rows($exec2) > 4) {
			?>	
				<div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<a href="?menu=noi_bat" class="text-center btn btn-default">Xem thêm</a>
				</div>
			<?php
				}
			?>
			</div>
		</div>
	</div>
</div>

<div class="panel panel-warning">
    <div class="panel-heading">Sản phẩm mới</div>
    <div class="panel-body">
		<div class="product">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="product">
			<?php
				include('connect.php');
				$sl= 'select * from san_pham where moi="co" limit 0,4';
				$exec= mysqli_query($connect, $sl);
				while($row= mysqli_fetch_array($exec)){
			?>
					<div class="sp img-thumbnail col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="img img-thumbnail col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><img src="images/<?php echo $row['img']; ?>" alt=""></a>
						</div>
						<div class="title">
							<a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
						</div>
						<div class="cost">
							<span><?php echo number_format($row['giasp'],0,",",".")."đ"; ?></span>
						</div>
						<div class="buy">
							<a class="btn btn-info" href="?menu=product_info&masp=<?php echo $row['masp']; ?>">Chi tiết</a>
							<a class="btn btn-warning" href="?menu=addcart&masp=<?php echo $row['masp']; ?>&soluong=1"><b class="fa fa-cart-plus"></b></a>
						</div>
					</div>
			<?php 
				}
				$sl2 = 'select * from san_pham where moi="co" ';
				$exec2 = mysqli_query($connect, $sl2);
				if(mysqli_num_rows($exec2) > 4) {
			?>
				<div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<a href="?menu=moi" class="text-center btn btn-default">Xem thêm</a>
				</div>
			<?php
				}
			?>
			</div>
		</div>
	</div>
</div>