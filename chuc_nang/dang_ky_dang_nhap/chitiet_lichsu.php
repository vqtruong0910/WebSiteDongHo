<?php
	if(!isset($_SESSION['login'])){exit();}
	$ma_hoadon= $_GET['ma_hoadon'];
	$sl="select * from hoa_don join thanh_vien on hoa_don.email = thanh_vien.email where mahd=".$ma_hoadon;
	$exec= mysqli_query($connect,$sl);
	$row= mysqli_fetch_array($exec);
?>
<div class="container-fluid">
    <h1 class="mt-4">Chi tiết hóa đơn</h1>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<tr>
						<td>Họ tên khách hàng: </td>
						<td><?php echo $row['hoten']; ?></td>
					</tr>
					<tr>
						<td>Địa chỉ: </td>
						<td><?php echo $row['diachi']; ?></td>
					</tr>
					<tr>
						<td>Số điện thoại: </td>
						<td><?php echo $row['sdt']; ?></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><?php echo $row['email']; ?></td>
					</tr>
				</table>
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<tr>
						<td colspan="4"><h3>Thông tin sản phẩm đã mua</h3></td>
					</tr>
					<tr>
						<td>Tên sản phẩm</td>
						<td>Đơn giá</td>
						<td>Số lượng</td>
						<td>Thành tiền</td>
					</tr>
					<?php 
						$sql = "select * from hoadon_chitiet  where hoadon_chitiet.mahd='".$ma_hoadon."' ";
						$exec= mysqli_query($connect, $sql);
						$thanh_tien1=0;
						while($row2=mysqli_fetch_array($exec)){	
							$masp=$row2['masp'];	
							$sql2 = "select * from san_pham where masp=".$masp;	
							$exec2 = mysqli_query($connect, $sql2);
							$row3 = mysqli_fetch_assoc($exec2);
							$dongia=$row2['dongia'];
							$soluong=$row2['soluong'];
							$thanh_tien= $soluong*$dongia;
							$thanh_tien1=$thanh_tien1+$thanh_tien;	
					?>
						<tr>
							<td><?php echo $row3['tensp']; ?></td>
							<td><?php echo number_format($dongia,0,",",".")."đ"; ?></td>
							<td><?php echo $soluong; ?></td>
							<td><?php echo number_format($thanh_tien,0,",",".")."đ"; ?></td>
						</tr>
					<?php		
						}
					?>
					<tr>
						<td colspan="3"><h3>Tổng tiền đơn hàng: </h3></td>
						<td><h3><?php echo number_format($thanh_tien1,0,",",".")."đ"; ?></h3></td>
					</tr>
					<tr>
						<td >Tình trạng đơn hàng:</td>
						<td colspan="3"><?php echo '<span style="color: blue;" >'.$row['tinh_trang'].'</span>'; ?></td>	
					</tr>
					<?php
						if($row['tinh_trang']=="Chưa xử lý" ){
					?>
					<tr>
						<td colspan="4">
							<a class="btn btn-primary"  onclick="return confirm('Bạn có muốn hủy đơn hàng?');"  href="?menu=huy_donhang&ma_hoadon=<?php echo $row['mahd']; ?>&soluong=<?php echo $soluong; ?>&masp=<?php echo $masp; ?>">Hủy hóa đơn</a>			
						    <a class="btn btn-primary" href="?menu=lichsu_muahang">Quay lại</a>
						</td>
					</tr>
					<?php
						}elseif($row['tinh_trang']=="Đã xác nhận"){
					?>
					<tr>
						<td colspan="4">
						
							
							<a class="btn btn-primary" href="?menu=lichsu_muahang">Quay lại</a>
						</td>
					</tr>
					<?php
						}else{
					?>
					<tr>
						<td colspan="4">
							<a class="btn btn-primary" href="?menu=lichsu_muahang">Quay lại</a>
						</td>
					</tr>
					<?php		
						}
					?>
				</table>
			</div>
		</div>
	</div>
</div>