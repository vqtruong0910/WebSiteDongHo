<?php
	if(!isset($login)){exit();}
?>
<?php
	include('../connect.php');
	$ma_hoadon= $_GET['ma_hoadon'];
	$sl="select * from hoa_don join thanh_vien on hoa_don.email = thanh_vien.email where mahd=".$ma_hoadon;
	$exec= mysqli_query($connect,$sl);
	$row= mysqli_fetch_array($exec);
?>
<style type="text/css">
	@media print{    
    .no-print, .no-print *{
        display: none !important;
    }
}
</style>
<div class="container-fluid">
    <h1 class="mt-4 no-print">Chi tiết hóa đơn</h1>
    <div class="card mb-4">
    	<div class="col-md-12 col-md-offset-2">
                <div class="text-center">
                    <h2><label for="Choose Report"  style="color:#E74C3C">HILL TOP WATCH</label></h2>
                    <h4><label>Địa chỉ: 99 An Dương Vương, Phường 16, Quận 8.</label></h4>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-tasks"></span></span>
                    </div>                         
                    <h5>
                        <label for="a">&nbsp;Ngày đặt hàng:</label>
                        <?php
                        	$date = new DateTime($row['ngay_mua']);
                        	echo date_format($date, 'h:m d/m/Y');
                        ?>
                    </h5>
                </div> 
            </div>
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
							<td><a href="?menu=chi_tiet&masp=<?php echo $row3['masp']; ?>"><?php echo $row3['tensp']; ?></a></td>
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
					<tr class="no-print">
						<td >Tình trạng đơn hàng:</td>
						<td colspan="3"><?php echo '<span style="color: blue;" >'.$row['tinh_trang'].'</span>'; ?></td>	
					</tr>
					<?php
						if($row['tinh_trang']=="Chưa xử lý" ){
					?>
					<tr>
						<td colspan="4">
						<?php if (checkPrivilege('index.php?menu=xu_ly&ma_hoadon='.$row['mahd'].'')) { ?>
							<a class="btn btn-primary" href="?menu=xu_ly&ma_hoadon=<?php echo $row['mahd']; ?>">Xác nhận đơn hàng</a>
							<?php } ?>
												<?php if (checkPrivilege('index.php?menu=xoa&ma_hoadon='.$row['mahd'].'&soluong='.$soluong.'&masp='.$masp.'')) { ?>
							<a class="btn btn-primary no-print"  onclick="return confirm('Bạn có muốn hủy hóa đơn?');"  href="?menu=xoa&ma_hoadon=<?php echo $row['mahd']; ?>&soluong=<?php echo $soluong; ?>&masp=<?php echo $masp; ?>">Hủy đơn hàng</a>	
							<?php } ?>		
						</td>
					</tr>
					<?php
						}elseif($row['tinh_trang']=="Đã xác nhận"){
					?>
					<tr>
						<td colspan="4">
																	<?php if (checkPrivilege('index.php?menu=xoa&ma_hoadon='.$row['mahd'].'')) { ?>
							<a class="btn btn-primary no-print"  onclick="return confirm('Bạn có muốn hủy hóa đơn?');"  href="?menu=xoa&ma_hoadon=<?php echo $row['mahd']; ?>">Hủy hóa đơn</a>
							<?php }?>
							<a class="btn btn-primary no-print" href="?menu=hoa_don">Quay lại</a>
						</td>
					</tr>
					<?php
						}else{
					?>
					<tr>
						<td colspan="4">
							<a class="btn btn-primary no-print" href="?menu=hoa_don">Quay lại</a>
						</td>
					</tr>
					<?php		
						}
					?>
					<tr>
						<td colspan="4">
							<input class="btn btn-primary no-print" type="button" onClick="window.print()" value="In hóa đơn"/>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>