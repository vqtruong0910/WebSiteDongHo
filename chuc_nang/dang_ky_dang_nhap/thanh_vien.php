<?php 
	include('connect.php');
	$kh= $_SESSION['login'];
	$sl="select * from thanh_vien where email='".$kh['email']."'";
	$exec= mysqli_query($connect, $sl);
	$row = mysqli_fetch_array($exec); 
?>
	<table class="table table-bordered">
		<tr align="center">
			<td colspan="2" style="color:red;"><h3>Thông tin thành viên</h3></td>
		</tr>
		<tr>
			<td><label>Email: </label></td>
			<td><?php echo $row['email']; ?></td>
		</tr>
		<tr>
			<td><label>Họ và tên: </label></td>
			<td><?php echo $row['hoten']; ?></td>
		</tr>
		<tr>
			<td><label>Số điện thoại: </label></td>
			<td><?php echo $row['sdt']; ?></td>
		</tr>
		<tr>
			<td><label>Địa chỉ: </label></td>
			<td><?php echo $row['diachi'];?></td>
		</tr>		
		<tr align="center">
			<td colspan="2"><a class="btn btn-success" href="?menu=sua_tt_thanh_vien">Chỉnh sửa</a></td>
		</tr>
	</table>