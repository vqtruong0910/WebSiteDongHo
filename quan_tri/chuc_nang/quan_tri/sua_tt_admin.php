<?php
	if(!isset($login)){exit();}
	include('../connect.php');
	$sl1= "select * from quan_tri where name='".$_SESSION['user']."'";
	$exec1= mysqli_query($connect, $sl1);
	$row1= mysqli_fetch_array($exec1);
	if($row1['quyen_truy_cap']==1){
?>
<?php 
	include('../connect.php');
	$sl= "select * from quan_tri where id=".$_GET['id'];
	$exec= mysqli_query($connect, $sl);
	$row= mysqli_fetch_array($exec);
?>
<div class="container-fluid">
                        <h1 class="mt-4">Đổi mật khẩu quản trị viên</h1>
                       
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
<form action="?menu=exec_sua_tt_admin" method="post">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<tr>
			<td><label for="username">Tên đăng nhập: </label></td>
			<td><input type="text" disabled name="username" id="username" value="<?php echo $row['name']; ?>" required ></td>
		</tr>
		<tr>
			<td><label for="pass">Mật khẩu mới: </label></td>
			<td><input type="password" name="pass" id="pass" required ><input type="hidden" name="id" value="<?php echo $row['id']; ?>" ></td>
		</tr>
		<tr>
			<td><label for="re_pass">Nhập lại mật khẩu: </label></td>
			<td><input type="password" name="re_pass" id="re_pass"  required >
		</tr>
		<tr>
			<td>
				<input class="btn btn-primary" type="submit" name="submit" value="Sửa">
				<a class="btn btn-primary" href="?menu=quan_ly_admin">Hủy</a>	
			</td>
		</tr>
	</table>
</form>
<?php }
	else{
		echo "<script> alert('Bạn không có quyền truy cập vào trang này.'); location.href='?menu=?menu=trang_chu'; </script>";
	}
?>