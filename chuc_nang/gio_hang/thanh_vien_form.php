<?php 
	if (!isset($_SESSION['login'])) {
		 echo "<script> location.href='index.php/?menu=dang_nhap'; </script>";
	}
	$kh=$_SESSION['login'];
	$email = $kh['email'];
	$sql= "select * from thanh_vien where email='".$email."'";
	$ex= mysqli_query($connect, $sql);
	$row2= mysqli_fetch_array($ex);
	$email= $row2['email'];
	$tenkh= $row2['hoten'];	
	$sdt= $row2['sdt'];
	$diachi= $row2['diachi'];
	foreach($_SESSION['giohang'] as $masp=> $sp){
	$id_array[]= $masp;
}
$list_id= implode(',',$id_array);
$sl= 'select * from san_pham where masp in ('.$list_id.')';
$exec= mysqli_query($connect, $sl);
$sp_mua="";
$tg=0;
$list_product="";
	echo "<h4 style='color:red;'>Xin chào ".$tenkh.", bạn đã thêm vào giỏ hàng các sản phẩm của chúng tôi là:</h4> <br><br>";
?>
<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Giỏ hàng';
    });

</script>
<div class="table-responsive">
<table class="table table-bordered" style="border-collapse: collapse; width: 600px;">
<thead>
	<tr  height="40px" style="font-weight: bold; ">

		<th scope="col">Tên sản phẩm</th>
		<th scope="col">Đơn giá</th>
		<th scope="col">Số lượng</th>
		<th scope="col">Thành tiền</th>
	</tr>
</thead>
<?php 
while($row= mysqli_fetch_array($exec)){
	$soluong= $_SESSION['giohang'][$row['masp']];
	$gia_sp=$row['giasp'];
	$masp= $row['masp'];
	$sp_mua= $sp_mua.$masp.",";
?>
<tbody>
	<tr >
	
		<td><?php echo $row['tensp']; ?></td>
		<td><?php echo number_format($gia_sp,0,",",".")."đ"; ?></td>
		<td ><?php echo $soluong; ?></td>
		<td><?php echo number_format(($gia_sp*$soluong),0,",",".")."đ"; ?></td>
	</tr>
<?php
	$tg= $tg+ ($soluong*$gia_sp);
}
?>
	<tr height="40px" style="font-weight: bold;">
		<td colspan="3">Tổng giá trị đơn hàng:</td>
		<td><?php echo number_format($tg,0,",",".")."đ"; ?></td>
	</tr>
	</tbody>
</table>
</div>
<p class="alert alert-success">Vui lòng bấm vào nút đặt hàng bên dưới để xác nhận mua hàng.</p>
<form method="post" action="?menu=hoa_don">
	<form id="form" action="?menu=hoa_don" method="post">
	<table style="width: 150px;">
		<tr>
			<td><input type="hidden" name="sp_mua" value="<?php echo $sp_mua; ?>">
			</td>
			<td><input type="hidden" name="tenkh" value="<?php echo $tenkh; ?>"></td>
			<td><input type="hidden" name="email" value="<?php echo $email; ?>">
			</td>
			<td><input type="hidden" name="sdt" value="<?php echo $sdt; ?>">
			</td>
			<td><input type="hidden" name="diachi" value="<?php echo $diachi; ?>">
			<input type="hidden" name="list_id" value="<?php echo $list_id; ?>">
			</td>
		</tr>
		<tr >
			<td><input class="btn btn-primary" type="submit" name="submit" value="Đặt hàng"></td>
			<td><input class="btn btn-primary" type="submit" name="cancel" value="Hủy"></td>
		</tr>
	</table>
</form>