<?php
	if(!isset($login)){exit();}
?>
<div class="container-fluid">
                        <h1 class="mt-4">Chi tiết sản phẩm</h1>
                       
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<?php 
	include('../connect.php');
	$sl= 'select * from san_pham join thongtinsp on san_pham.masp= thongtinsp.masp where san_pham.masp='.$_GET['masp'];
	$exec= mysqli_query($connect, $sl);
	$row= mysqli_fetch_array($exec);
?>
<tr>
	<td>
		<h6>Tên sản phẩm:</h6>
	</td>
		<td><?php echo $row['tensp']; ?></td>
</tr>
<tr>
	<td>
		<h6>Giá sản phẩm</h6>
	</td>
	<td>
		<?php echo number_format($row['giasp'],0,",",".")."đ"; ?>
	</td>
</tr>
<tr>
	<td>
	<h6>Số lượng</h6>
	</td>
	<td><?php echo $row['soluong']; ?></td>
</tr>
<tr>
	<td>
		<h6>Loại sản phẩm</h6>
	</td>
	<td>
			
			
			
			<?php $loaisp= $row['loaisp'];
			switch ($loaisp) {
				case 'casio':
					echo "Đồng hồ Casio";
					break;
				case 'citizen':
					echo "Đồng hồ Citizen";
					break;
				case 'doxa':
					echo "Đồng hồ Doxa";
					break;
				case 'tissot':
					echo "Đồng hồ Tissot";
					break;
				case 'longines':
					echo "Đồng hồ Longines";
					break;
				case 'movado':
					echo "Đồng hồ Movado";
					break;
				case 'frederiqueconstant':
					echo "Đồng hồ Frederique Constant";
					break;						
			}?>
		</td>
		</tr>
		<tr>
		<td>
		<h6>Thương hiệu sản phẩm</h6>
	</td>
		<td>
                                        <?php  
                                            $thuong_hieu= $row['id_thuong_hieu'];
                                            switch ($thuong_hieu) {
                                                case '1':
                                                    echo "Thương hiệu Casio";
                                                    break;
                                                case '2':
                                                    echo "Thương hiệu Citizen";
                                                    break;
                                                case '3':
                                                    echo "Thương hiệu Doxa";
                                                    break;
                                                case '7':
                                                    echo "Thương hiệu Tissot";
                                                    break;
                                                case '4':
                                                    echo "Thương hiệu Longines";
                                                    break;
                                                case '5':
                                                    echo "Thương hiệus Movado";
                                                    break;
                                                case '6':
                                                    echo "Thương hiệu Frederique Constant";
                                                    break;                      
                                            }
                                        ?>                                       
                                    </td>
</tr>
<tr>
	<td>
		<h6>Hình ảnh</h6>
	</td>
	<td>
		<img src="../images/<?php echo $row['img']; ?>" alt="" name="img" width="80px" height="100px" = >
					<img src="../images/<?php echo $row['img1']; ?>" alt="" name="img1" width="80px" height="100px" >
					<img src="../images/<?php echo $row['img2']; ?>" alt="" name="img2" width="80px" height="100px" >
				</td>
</tr>


					<tr>
						
						<tr>
							<td><h6>Số hiệu sản phẩm:</h6></td>	
							<td><?php echo $row['so_hieu_sp']; ?></td>
						</tr>		
						<tr>
							<td><h6>Xuất xứ:</h6></td>	
							<td><?php echo $row['xuat_xu']; ?></td>
						</tr>		
						<tr>
							<td><h6>Kính:</h6></td>	
							<td><?php echo $row['kinh']; ?></td>
						</tr>		
						<tr>
							<td><h6>Máy:</h6></td>	
							<td><?php echo $row['may']; ?></td>
						</tr>					
					</tr>
					
</table>
</div>
</div>
</div>
<a class="btn btn-success" style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;"  href="?menu=sua_sp&masp=<?php echo $row['masp']; ?>">Sửa</a></td>
        <td><a class="btn btn-danger" style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;" onclick="return confirm('Bạn có muốn xóa không?');" href="?menu=xoa_sp&masp=<?php echo $row['masp']; ?>">Xóa</a>
</div>


