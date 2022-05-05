<?php
	if(!isset($login)){exit();}
?>
<?php
	include('../connect.php');
	$masp=$_GET['masp'];
	$sl= 'select * from san_pham  where masp='.$masp;
	$exec= mysqli_query($connect,$sl);
	$row= mysqli_fetch_array($exec);
?>
<div class="container-fluid">
<h1 class="mt-4">Nhập hàng</h1>
                       
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
	

	<form method="post" action="?menu=exec_nhap_hang" enctype="multipart/form-data">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<tr>
				<td><h4>Tên sản phẩm</h4></td>
				<td><h4>Giá</h4></td>
				<td><h4>Số lượng</h4></td>
				<td><h4>Loại sản phẩm</h4></td>
				<td><h4>Thương hiệu sản phẩm</h4></td>

			</tr>
			<tr>
				<input type="hidden" name="masp" value="<?php echo $row['masp']; ?>">
				<td><input class="form-control form-control-user" type="text" id="name" name="name"  value="<?php echo $row['tensp']; ?>" disabled></td>
				<td><input class="form-control form-control-user" type="text" id="cost" name="cost"  value="<?php echo $row['giasp']; ?>" disabled></td>
				<td><input class="form-control form-control-user" type="text" id="soluong" name="soluong" pattern="^[0-9]*[1-9][0-9]*$" title="Số lượng sản phẩm phải lớn hơn 0."  value="<?php echo $row['soluong']; ?>" required></td>
				<td>
					<select name="loaisp" id="loaisp"  disabled class="form-control form-control-user">
						<option value="casio" <?php if($row['loaisp']=="casio"){echo "selected";} 
						  ?> >Đồng hồ Casio</option>
						<option value="citizen" <?php if($row['loaisp']=="citizen"){echo "selected";} 
						  ?> >Đồng hồ Citizen</option>
						  <option value="doxa" <?php if($row['loaisp']=="doxa"){echo "selected";} 
						  ?> >Đồng hồ Doxa</option>
						  <option value="tissot" <?php if($row['loaisp']=="tissot"){echo "selected";} 
						  ?> >Đồng hồ Tissot</option>
						  <option value="longines" <?php if($row['loaisp']=="longines"){echo "selected";} 
						  ?> >Đồng hồ Longines</option>
						  <option value="movado" <?php if($row['loaisp']=="movado"){echo "selected";} 
						  ?> >Đồng hô Movado</option>
						  <option value="frederiqueconstant" <?php if($row['loaisp']=="frederiqueconstant"){echo "selected";} 
						  ?> >Đồng hồ Frederique Constant</option>
					</select>
				</td>
				<td>
					<select name="thuong_hieu" id="thuong_hieu" disabled  class="form-control form-control-user">
						<option value="1" <?php if($row['id_thuong_hieu']=="1"){echo "selected";} 
						  ?> >Thương hiệu Casio</option>
						<option value="2" <?php if($row['id_thuong_hieu']=="2"){echo "selected";} 
						  ?> >Thương hiệu Citizen</option>
						  <option value="3" <?php if($row['id_thuong_hieu']=="3"){echo "selected";} 
						  ?> >Thương hiệu Doxa</option>
						  <option value="7" <?php if($row['id_thuong_hieu']=="7"){echo "selected";} 
						  ?> >Thương hiệu Tissot</option>
						  <option value="4" <?php if($row['id_thuong_hieu']=="4"){echo "selected";} 
						  ?> >Thương hiệu Longines</option>
						  <option value="5" <?php if($row['id_thuong_hieu']=="5"){echo "selected";} 
						  ?> >Thương hiệu Movado</option>
						  <option value="6" <?php if($row['id_thuong_hieu']=="6"){echo "selected";} 
						  ?> >Thương hiệu Frederique Constant</option>
					</select>
				</td>
			</tr>
		</table>
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			
			<tr>
				<td><input class="btn btn-primary" type="submit" name="submit" value="Xác nhận">
				<a class="btn btn-primary" href="?menu=sp_hethang">Hủy</a>
			</td>
			</tr>
		</table>
	</form>
</div>
</div>
</div>
</div>