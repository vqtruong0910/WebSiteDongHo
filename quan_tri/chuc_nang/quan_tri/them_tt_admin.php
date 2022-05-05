<?php
	if(!isset($login)){exit();}
	include('../connect.php');
	$sl1= "select * from quan_tri where name='".$_SESSION['user']."'";
	$exec1= mysqli_query($connect, $sl1);
	$row1= mysqli_fetch_array($exec1);
	if($row1['quyen_truy_cap']==1){
?>
<div class="container-fluid">
                        <h1 class="mt-4">Thêm tài khoản quản trị viên</h1>
                       
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">

<form action="?menu=exec_them_tt_admin" method="post">
	 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<tr>
			<td>Tên tài khoản:</td>
			<td><input class="form-control form-control-user" type="text" name="name" id="name" required ></td>
		</tr>
		<tr>
			<td>Mật khẩu:</td>
			<td><input class="form-control form-control-user" type="password" name="pass" id="pass" required ></td>
		</tr>
		<tr>
			<td>Nhập lại mật khẩu:</td>
			<td><input class="form-control form-control-user" type="password" name="re_pass" id="re_pass" required></td>
		</tr>
		<tr>
			<td><?php if (checkPrivilege('index.php?menu=exec_them_tt_admin')) { ?><input class="btn btn-primary" type="submit" name="submit" value="Thêm"><?php } ?>
			<a class="btn btn-primary" href="?menu=quan_ly_admin">Hủy</a>	
			</td>
		</tr>
	</table>
</form>
<?php }
	else{
		echo "<script> alert('Bạn không có quyền truy cập vào trang này.'); location.href='?menu=ql_sanpham'; </script>";
	}
?>