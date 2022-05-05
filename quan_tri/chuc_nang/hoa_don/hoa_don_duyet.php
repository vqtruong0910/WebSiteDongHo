<?php
	if(!isset($login)){exit();}
?>
<div class="container-fluid">
    <h1 class="mt-4">Danh sách hóa đơn</h1>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Mã hóa đơn</th>
                            <th>Tên khách hàng</th>
                            <th>Ngày mua</th>
                            <th>Tình trạng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
						include('../connect.php');
						$sl="select * from hoa_don join thanh_vien on hoa_don.email = thanh_vien.email where tinh_trang = 'Đã xác nhận' ";
						$exec= mysqli_query($connect, $sl);
						while($row=mysqli_fetch_array($exec)){ 
                    ?>
                            <tr>
                                <td><?php echo $row['mahd']; ?></td>
                        		<td><?php echo $row['hoten']; ?></td>
                        		<td><?php echo $row['ngay_mua']; ?></td>
                        		<td><?php echo $row['tinh_trang']; ?></td>
                        		<td><a class="btn btn-primary" style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;" href="?menu=chi_tiet_hoa_don&ma_hoadon=<?php echo $row['mahd']; ?>">Chi tiết</a></td>
                            </tr>
                    <?php  
                        } 
                    ?>
                    </tbody>
                </table>
            </div>
         </div>
    </div>
</div>