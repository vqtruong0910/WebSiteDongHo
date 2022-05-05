<?php
	if(!isset($login)){exit();}
?>
<?php
	include('../connect.php');
	$masp=$_GET['masp'];
	$sl= 'select * from san_pham join thongtinsp on san_pham.masp= thongtinsp.masp where san_pham.masp='.$masp;
	$exec= mysqli_query($connect,$sl);
	$row= mysqli_fetch_array($exec);
?>
<div class="container-fluid">
<h1 class="mt-4">Sửa sản phẩm</h1>
                       
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
	

	<form method="post" action="?menu=exec_sua_sp" enctype="multipart/form-data">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<tr>
				<td><h4>Tên sản phẩm</h4></td>
				<td><h4>Giá</h4></td>
				<td><h4>Số lượng</h4></td>
				<td><h4>Loại sản phẩm</h4></td>
				<td><h4>Thương hiệu sản phẩm</h4></td>

			</tr>
			<tr>
				<td><input class="form-control form-control-user" type="text" id="name" name="name"  value="<?php echo $row['tensp']; ?>" ></td>
				<td><input class="form-control form-control-user" type="text" id="cost" name="cost" pattern="^[0-9]*[1-9][0-9]*$" title="Giá sản phẩm phải là số nguyên dương."  value="<?php echo $row['giasp']; ?>" ></td>
				<td><input class="form-control form-control-user" type="text" id="soluong" name="soluong"  value="<?php echo $row['soluong']; ?>" disabled ></td>
				<td>
					<select name="loaisp" id="loaisp"   class="form-control form-control-user">
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
						  ?> >Đồng hồ Movado</option>
						  <option value="frederiqueconstant" <?php if($row['loaisp']=="frederiqueconstant"){echo "selected";} 
						  ?> >Đồng hồ Frederique Constant</option>
					</select>
				</td>
				<td>
					<select name="thuong_hieu" id="thuong_hieu"   class="form-control form-control-user">
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
				<td colspan="2"><h4>Hình ảnh</h4></td>
			</tr>
			<tr>
				
				<td>
					<input type="hidden" name="masp" value="<?php echo $row['masp']; ?>">
					<input type="hidden" name="img" value="<?php echo $row['img']; ?>">
					<input type="hidden" name="img1" value="<?php echo $row['img1']; ?>">
					<input type="hidden" name="img2" value="<?php echo $row['img2']; ?>">
					<img src="../images/<?php echo $row['img']; ?>" alt="" name="img" width="80px" height="100px" ><input type="file" id="image" name="image"   ><br>
					<img src="../images/<?php echo $row['img1']; ?>" alt="" name="img1" width="80px" height="100px" ><input type="file" id="image1" name="image1"><br>
					<img src="../images/<?php echo $row['img2']; ?>" alt="" name="img2" width="80px" height="100px" ><input type="file" id="image2" name="image2"><br>
				</td>
			</tr>
		</table>

		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			
						
						<tr>
							<td><h6>Số hiệu sản phẩm:</h6></td>	
							<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="so_hieu_sp" name="so_hieu_sp"  value="<?php echo $row['so_hieu_sp']; ?>"  ></td>
						</tr>			
						<tr>
							<td><h6>Xuất xứ:</h6></td>	
							<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="xuat_xu" name="xuat_xu"  value="<?php echo $row['xuat_xu']; ?>"  ></td>
						</tr>			
						<tr>
							<td><h6>Kính:</h6></td>	
							<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="kinh" name="kinh"  value="<?php echo $row['kinh']; ?>"  ></td>
						</tr>			
						<tr>
							<td><h6>Máy:</h6></td>	
							<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="may" name="may"  value="<?php echo $row['may']; ?>"  ></td>
						</tr>					
					
			
		</table>
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<tr>
				<td><h5 for="noi_bat">Nổi bật: </h5></td>
				<td>
					<select name="noi_bat" id="noi_bat" class="form-control form-control-user">
						<option value="có" <?php if($row['noi_bat']=="có"){echo "selected";} ?> > Có</option>
						<option value="không" <?php if($row['noi_bat']=="không" OR $row['noi_bat']==""){echo "selected";} ?> >Không</option>
					</select>
				</td>
			</tr>
		</table>
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<tr>
				<td><h5 for="noi_bat">Mới: </h5></td>
				<td>
					<select name="noi_bat" id="noi_bat" class="form-control form-control-user">
						<option value="có" <?php if($row['moi']=="có"){echo "selected";} ?> > Có</option>
						<option value="không" <?php if($row['moi']=="không" OR $row['moi']==""){echo "selected";} ?> >Không</option>
					</select>
				</td>
			</tr>
		</table>
		<tr>
		<td> <?php if (checkPrivilege('index.php?menu=exec_sua_sp')) { ?><input class="btn btn-primary" type="submit" name="submit" value="Sửa"><?php } ?>
				<a class="btn btn-primary" href="?menu=ql_sanpham">Hủy</a>
			</td>
			</tr>
	</form>
</div>
</div>
</div>
</div>