<?php
	include('connect.php');
	if (!isset($_SESSION['login'])) {
    	echo "<script> location.href='index.php'; </script>";
  	}else {
		$kh= $_SESSION['login'];
		$sql1="select * from thanh_vien where email='".$kh['email']."'";
		$rs1=mysqli_query($connect,$sql1);
		$row=mysqli_fetch_array($rs1);
?>
		<div class="panel panel-success" style="width: 186px; margin-left: -16px;">
			<div class="panel-heading">Thành viên</div>
			<table class="table">
				<tr>
					<td>
						<p style="padding-left: 2px;font-weight: bold;">KH: 
							<a href="?menu=thanh_vien" style=""><?php echo $row['hoten']; ?></a>
						</p>
					</td>
				</tr>
				<tr>
					<td><p style="text-align: center;font-weight: bold;"><a href="?menu=lichsu_muahang">Lịch sử mua hàng</a></p></td>
				</tr>
				<tr>
					<td><p style="text-align: center;font-weight: bold;"><a href="?menu=change_password">Đổi mật khẩu</a></p></td>
				</tr>
				<tr>
				</tr>
					<td><p style="padding-left: 2px;font-weight: bold;">Giỏ hàng: <a href="?menu=gio_hang"><?php echo $cart; ?></a></p></td>
				</tr>
				<tr>
					<td><p style="text-align: center;"><a class="btn btn-primary" href="?menu=logout">Đăng xuất</a></p></td>
				</tr>
			</table>
		</div>
<?php
	}
?>
