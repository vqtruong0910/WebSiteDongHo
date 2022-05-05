<?php
    include('connect.php');
    $sql = "SELECT * FROM hoa_don";
    $query = mysqli_query($connect, $sql);
    $rowcount = mysqli_num_rows($query);
    $sql2 = "SELECT * FROM hoa_don join hoadon_chitiet WHERE hoa_don.mahd = hoadon_chitiet.mahd AND tinh_trang ='Đã xác nhận'";
    $query2 = mysqli_query($connect, $sql2);
    $tongtien = 0;
    while($rs = mysqli_fetch_array($query2) ){
        $soluong = $rs['soluong'];
        $dongia = $rs['dongia'];
        $tongtien = $tongtien + $soluong * $dongia;
    }
    $rowcount2 = mysqli_num_rows($query2);
    $sql3 = "SELECT * FROM hoa_don where tinh_trang = 'Hủy'";
    $query3 = mysqli_query($connect, $sql3);
    $rowcount3 = mysqli_num_rows($query3);
    $sql4 = "SELECT * FROM hoa_don where tinh_trang = 'Chưa xử lý'";
    $query4 = mysqli_query($connect, $sql4);
    $rowcount4 = mysqli_num_rows($query4);
?>
<h1 class="mt-4">Tổng quan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Tổng số đơn hàng</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class=" text-white stretched-link" href="?menu=hoa_don"><?php echo $rowcount; ?></a>
                                        <div class=" text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Đơn hàng chưa xử lý</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class=" text-white stretched-link" href="?menu=hoa_don_chua"><?php echo $rowcount4; ?></a>
                                        <div class=" text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Đơn hàng thành công</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class=" text-white stretched-link" href="?menu=hoa_don_duyet"><?php echo $rowcount2; ?></a>
                                        <div class=" text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Đơn hàng bị hủy</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class=" text-white stretched-link" href="?menu=hoa_don_huy"><?php echo $rowcount3; ?></a>
                                        <div class=" text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        