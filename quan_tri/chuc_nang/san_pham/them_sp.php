<?php
	if(!isset($login)){exit();}
?>
<div class="container-fluid">
	<h1 class="mt-4">Thêm sản phẩm mới</h1>
    <div class="card mb-4">
    	<div class="card-body">
            <div class="table-responsive">
				<form method="post" action="?menu=exec_them_sp" enctype="multipart/form-data">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<tr>
							<td><h4>Tên sản phẩm</h4></td>
							<td><h4>Giá</h4></td>
							<td><h4>Số lượng</h4></td>
							<td><h4>Loại sản phẩm</h4></td>
							<td><h4>Thương hiệu sản phẩm</h4></td>
						</tr>
						<tr>
							<td><input class="form-control form-control-user" type="text" id="tensp" name="tensp" required></td>
							<td><input class="form-control form-control-user" type="text" id="giasp" name="giasp" pattern="^[0-9]*[1-9][0-9]*$" title="Giá sản phẩm phải là số nguyên dương." required></td>
							<td><input class="form-control form-control-user" type="text" id="soluong" name="soluong" pattern="^[0-9]*[1-9][0-9]*$" title="Số lượng sản phẩm là số lớn hơn 0 ." required></td>
							<td>
								<select class="form-control form-control-user" name="loaisp" id="loaisp" required >
									<option value="casio">Đồng hồ Casio</option>
									<option value="citizen">Đồng hồ Citizen</option>
									<option value="doxa">Đồng hồ Doxa</option>
									<option value="tissot">Đồng hồ Tissot</option>
									<option value="longines">Đồng hồ longines</option>
									<option value="movado">Đồng hồ Movado</option>
									<option value="frederiqueconstant">Đồng hồ Frederique Constant</option>
								</select>
							</td>
							<td>
								<select class="form-control form-control-user" name="thuong_hieu" id="thuong_hieu" required >
									<option value="1">Thương hiệu Casio</option>
									<option value="2">Thương hiệu Citizen</option>
									<option value="3">Thương hiệu Doxa</option>
									<option value="7">Thương hiệu Tissot</option>
									<option value="4">Thương hiệu longines</option>
									<option value="5">Thương hiệu Movado</option>
									<option value="6">Thương hiệu Frederique Constant</option>
								</select>
							</td>
						</tr>
					</table>
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<tr>
							<td colspan="3"><h4>Hình ảnh</h4></td>
						</tr>
						<tr>
							<td class="right">
								<label for="image1">Ảnh 1:</label><br>
								<label for="image2">Ảnh 2:</label><br>
								<label for="image3">Ảnh 3:</label><br>
							</td>
							<td>
								<input type="file" id="image1" name="image1"  required ><br>
								<input type="file" id="image2" name="image2"  required><br>
								<input type="file" id="image3" name="image3"  required><br>
							</td>
						</tr>
					</table>
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<!-- <tr>
										<td><h6>Thương hiệu:</h6></td>	
										<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="thuong_hieu" name="thuong_hieu" required ></td>
									</tr>	 -->
									<tr>
										<td><h6>Số hiệu sản phẩm:</h6></td>	
										<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="so_hieu_sp" name="so_hieu_sp" required   ></td>
									</tr>			
									<tr>
										<td><h6>Xuất xứ:</h6></td>	
										<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="xuat_xu" name="xuat_xu" required   ></td>
									</tr>			
									<tr>
										<td><h6>Kính:</h6></td>	
										<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="kinh" name="kinh" required   ></td>
									</tr>			
									<tr>
										<td><h6>Máy:</h6></td>	
										<td><input style="width: 40em;" class="form-control form-control-user" type="text" id="may" name="may"  required   ></td>
									</tr>	
					</table>
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<tr>
							<td><h5 for="noi_bat">Nổi bật: </h5></td>
							<td>
								<select name="noi_bat" id="noi_bat" class="form-control form-control-user">
									<option value="có"> Có</option>
									<option selected="" value="không">Không</option>
								</select>
							</td>
						</tr>
					</table>
					</table>
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<tr>
							<td><h5 for="noi_bat">Mới: </h5></td>
							<td>
								<select name="noi_bat" id="noi_bat" class="form-control form-control-user">
									<option value="có"> Có</option>
									<option selected="" value="không">Không</option>
								</select>
							</td>
						</tr>
					</table>
					<?php if (checkPrivilege('index.php?menu=ql_sanpham')) { ?>
					<input class="btn btn-primary" type="submit" name="submit" value="Thêm">
					<?php } ?>
					<a class="btn btn-primary" href="?menu=ql_sanpham">Hủy</a>				
				</form>
			</div>
		</div>
	</div>
</div>