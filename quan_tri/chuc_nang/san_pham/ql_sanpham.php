<div class="container-fluid">
    <h1 class="mt-4">Danh sách sản phẩm</h1>
    <div class="card mb-4">  
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Loại sản phẩm</th>
                            <th>Thương hiệu</th>
                            <th>Xem chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include('../connect.php');
                            $sl= "select * from san_pham";
                            $exec= mysqli_query($connect, $sl);
                            while($row= mysqli_fetch_array($exec)){
                        ?>
                                <tr>
                                    <td><?php echo $row['tensp']; ?></td>
                                    <td><?php echo number_format($row['giasp'],0,",",".")."đ"; ?></td>
                                    <td><?php echo $row['soluong']; ?></td>
                                    <td>
                                        <?php  
                                            $loaisp= $row['loaisp'];
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
                                            }
                                        ?>                                       
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
                                    <td>
                                    <?php if (checkPrivilege('index.php?menu=chi_tiet&masp='.$row['masp'].'')) { ?>
                                        <a class="btn btn-primary" style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;"  href="?menu=chi_tiet&masp=<?php echo $row['masp']; ?>">Chi tiết</a>
                                        <?php }?>
                                    </td>   
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