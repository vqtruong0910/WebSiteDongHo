<?php
	if(!isset($_SESSION['login'])){exit();}
	include('connect.php');
	$kh=$_SESSION['login'];
    $email= $kh['email'];
	$sl="select * from hoa_don join thanh_vien ON hoa_don.email = thanh_vien.email WHERE thanh_vien.
    email= '".$email."'";
	$exec= mysqli_query($connect, $sl);
    $count = mysqli_num_rows($exec);
?>
<div class="container-fluid">
    <h1 class="mt-4">Đơn hàng của tôi</h1>                      
    <div class="card mb-4">
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
            <?php
                if($count<1){
                    echo "<h3>Bạn chưa mua hàng lần nào</h3>";
                }else{
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Mã hóa đơn</th>
                            <th>Ngày đặt hàng</th>
                            <th>Tình trạng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>                                     
                    <?php 

                        while($row = mysqli_fetch_array($exec)) {
                        	$date = new DateTime($row['ngay_mua']);
                    ?>
                        <tr>
                            <td><?php echo $row['mahd']; ?></td>
                            <td><?php echo date_format($date, 'd-m-Y H:i'); ?></td>
                           	<td><?php echo $row['tinh_trang']; ?></td>
                         
                            <td>
                                <a class="btn btn-primary" style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;" href="?menu=chitiet_lichsu&ma_hoadon=<?php echo $row['mahd']; ?>">Quản lý</a>
                            </td>
                        </tr>
                    <?php  
                        } 
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>