<?php
	include('connect.php');
	$kh= $_SESSION['login'];
	$sl="select * from thanh_vien where email='".$kh['email']."'";
	$exec= mysqli_query($connect, $sl);
	$row = mysqli_fetch_array($exec); 
?>
	<div class="panel panel-warning">
	    <div class="panel-heading">Sửa thông tin thành viên</div>
	    <div class="panel-body">
			<form action="?menu=exec_sua_tt_thanh_vien" method="post">
				<table class="table table-bordered">
					<tr>
						<td><label for="email">Email:</label></td>
						<td><input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email']; ?>" readonly ></td>
					</tr>
					<tr>
						<td><label for="hoten">Họ và tên:</label></td>
						<td><input type="text" name="hoten" id="hoten" class="form-control"  placeholder="Nhập họ và tên bạn.." value="<?php echo $row['hoten']; ?>" required ></td>
					</tr>	
					<tr>
						<td><label for="sdt">Số điện thoại:</label></td>
						<td><input type="text" name="sdt" id="sdt" class="form-control"  placeholder="Nhập số điện thoại.." value="<?php echo $row['sdt']; ?>" required ></td>
					</tr>
					<tr>
						<td><label for="diachi">Địa chỉ:</label></td>
						<td><input type="text" name="diachi" id="diachi" class="form-control"  placeholder="Tổ, thôn...."  value="<?php echo $row['diachi']; ?>" required ></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" class="btn btn-success" name="submit" value="Cập nhật">
							<input type="submit" class="btn btn-danger" name="cancel" value="Hủy">
						</td>
					</tr>
				</table>
			</form>
</div>
</div>
