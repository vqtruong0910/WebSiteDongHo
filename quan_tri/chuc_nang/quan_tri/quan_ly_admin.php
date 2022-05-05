<?php
	//if(!isset($login)){exit();}
	include('../connect.php');
	$sl1= "select * from quan_tri where name='".$_SESSION['user']."'";
	$exec1= mysqli_query($connect, $sl1);
	$row1= mysqli_fetch_array($exec1);
	// if($row1['quyen_truy_cap']==1){
?>
<div class="container-fluid">
    <h1 class="mt-4">Danh sách quản trị viên</h1>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<tr>
						<td><h4>Tên tài khoản</h4></td>
						<td><h4>Loại tài khoản</h4></td>
						<td><h4>Thao tác</h4></td>
					</tr>
					<?php
						$sl= "select * from quan_tri";
						$exec= mysqli_query($connect, $sl);
						while($row= mysqli_fetch_array($exec)){
					?>
					<tr>
						<td><?php echo $row['name']; ?></td>
						<td>
							<?php 
								if($row['quyen_truy_cap']==1){
									echo "Quản trị";
							?>
						</td>
									<td>
										 <?php if (checkPrivilege('index.php?menu=sua_tt_admin&id='.$row['id'].'')) { ?>
										<a class="btn btn-primary" href="?menu=sua_tt_admin&id=<?php echo $row['id']; ?>">Đổi mật khẩu</a>
									<?php } ?>
									<?php if (checkPrivilege('index.php?menu=phan_quyen&id='.$row['id'].'')) { ?>
										<a class="btn btn-success" href="?menu=phan_quyen&id=<?php echo $row['id']; ?>">Phân Quyền</a>
										<?php }?>
									</td>	
							<?php		
								}else{
									echo "Nhân viên";
							?>
									<td>
									<?php if (checkPrivilege('index.php?menu=sua_tt_admin&id='.$row['id'].'')) { ?>
										<a class="btn btn-primary" href="?menu=sua_tt_admin&id=<?php echo $row['id']; ?>">Đổi mật khẩu</a>
										<?php } ?>
										<?php if (checkPrivilege('index.php?menu=phan_quyen&id='.$row['id'].'')) { ?>
										<a class="btn btn-success" href="?menu=phan_quyen&id=<?php echo $row['id']; ?>">Phân Quyền</a>
										<?php }?>
										<?php if (checkPrivilege('index.php?menu=xoa_tt_admin&id='.$row['id'].'')) { ?>
										<a  class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa không?');" href="?menu=xoa_tt_admin&id=<?php echo $row['id']; ?>">Xóa tài khoản</a>
								<?php } ?>
									</td>	
							<?php	
								}
							?>					
					</tr>
					<?php 
						} 
					?>
				</table>
			</div>
		</div>
	</div>
</div>				
<?php 
	// }else {
	// 	echo "<script> alert('Bạn không có quyền truy cập vào trang này.'); location.href='?menu=dashboard'; </script>";
	// }
?>