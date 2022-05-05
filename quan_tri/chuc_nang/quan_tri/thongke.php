<?php
	//if(!isset($login)){exit();}
	include('../connect.php');
	$sl1= "select * from quan_tri where name='".$_SESSION['user']."'";
	$exec1= mysqli_query($connect, $sl1);
	$row1= mysqli_fetch_array($exec1);
//	if($row1['quyen_truy_cap']==1){
?>

<style type="text/css">         
    body {
        overflow:auto;  
    }

    .input-group-addon
    {
        background-color: rgb(50, 118, 177);
        border-color: rgb(40, 94, 142);
        color: rgb(255, 255, 255);
    }  
    #datepicker{
    width:180px; 
    margin: 0 20px 20px 20px;
    }

#datepicker > span:hover{
    cursor: pointer;
    }
</style>
<div class="container-fluid">
    <h1 class="mt-4">Báo cáo thống kê</h1>
    <form class="form-signin" method="POST" action="?menu=thongke">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="">
                    <h2><label for="Choose Report"  style=" color:rgb(231, 69, 60);" >Chọn thời gian</label></h2>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-tasks"></span></span>
                    </div>                         
                    <h5>
                        <input id="a" type="radio" name="thoigian" value="ngay"><label for="a">&nbsp;Ngày hôm nay</label><br>
                    </h5>
                    <div class="customer" >
                        <div class="input-group ">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            <label>Từ ngày: </label><br>
                            <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy"> <input class="form-control" type="date" name="date1"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                            </div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Đến ngày: </label><br>
                            <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy"> <input class="form-control" type="date" name="date2"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
                            </div>
                        </div>
                    </div>
                    <button style="margin-bottom: 1em;" type="submit" name="submit" class="btn btn-primary btn-lg btn3d"><span  class="glyphicon glyphicon-search"></span> Xem</button><br>
                </div> 
            </div>
        </div>        
    </form> 
    <div class="panel-body">    
    <?php 
        if(isset($_POST['submit'])){
            include('../connect.php');
            if($_POST['date1'] != "" AND $_POST['date2'] != "") {
                $date1 = $_POST['date1'];
                $date2 = $_POST['date2'];
                $sql = "SELECT * FROM hoa_don join hoadon_chitiet WHERE hoa_don.mahd = hoadon_chitiet.mahd AND DATE(ngay_mua) BETWEEN '".$date1."' AND '".$date2."'";
                $query = mysqli_query($connect, $sql);   
                //$sql = "SELECT * FROM hoa_don join hoadon_chitiet WHERE hoa_don.mahd = hoadon_chitiet.mahd ";
                //$query = mysqli_query($connect, $sql);
                $tongtien = 0;
                $count = mysqli_num_rows($query);
                $sql2 = "SELECT * FROM hoa_don join hoadon_chitiet WHERE hoa_don.mahd = hoadon_chitiet.mahd AND tinh_trang ='Đã xác nhận' AND DATE(ngay_mua) BETWEEN '".$date1."' AND '".$date2."'";
                $query2 = mysqli_query($connect, $sql2);
                $tongtien2 = 0;
                while($rs = mysqli_fetch_array($query2) ){
                    $soluong = $rs['soluong'];
                    $dongia = $rs['dongia'];
                    $tongtien2 = $tongtien2 + $soluong * $dongia;
                }
            }elseif(isset($_POST['thoigian'])) {
                $thoigian = $_POST['thoigian'];
                if ($thoigian == 'ngay') {
                    $date = date('Y-m-d');
                    $sql = "SELECT * FROM hoa_don join hoadon_chitiet WHERE hoa_don.mahd = hoadon_chitiet.mahd AND DATE(ngay_mua) = '".$date."'";
                    $query = mysqli_query($connect, $sql);
                    $tongtien = 0;
                    $count = mysqli_num_rows($query);
                    $sql2 = "SELECT * FROM hoa_don join hoadon_chitiet WHERE hoa_don.mahd = hoadon_chitiet.mahd AND tinh_trang ='Đã xác nhận' AND DATE(ngay_mua) = '".$date."'";
                    $query2 = mysqli_query($connect, $sql2);
                    $tongtien2 = 0;
                    while($rs = mysqli_fetch_array($query2) ){
                        $soluong = $rs['soluong'];
                        $dongia = $rs['dongia'];
                        $tongtien2 = $tongtien2 + $soluong * $dongia;
                    }
                }
            }else{
    ?>
                <h1>Bạn chưa chọn ngày</h1>
    <?php
                die();
            }
    ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>Mã hóa đơn</th>
                        <th>Tổng tiền</th>
                        <th>Ngày</th>
                        <th>Tình trạng</th>
                        <th>Nhân viên xử lý</th>
                    </tr>
                </thead>   
                <tbody>
                <?php                
                    while($rs = mysqli_fetch_array($query)) {
                        $date = new DateTime($rs['ngay_mua']);
                        $soluong = $rs['soluong'];
                        $dongia = $rs['dongia'];
                        $tongtien = $tongtien + $soluong * $dongia;
                ?>
                        <tr>
                            <td class="text-center" ><?php echo $rs['mahd']; ?></td>
                            <td class="text-center" ><?php echo number_format($rs['soluong']*$rs['dongia'],0,",","."); ?></td>
                            <td class="text-center" ><?php echo date_format($date, 'd/m/Y'); ?></td>
                            <td class="text-center" ><?php echo $rs['tinh_trang']; ?></td>
                            <td class="text-center" ><?php echo $rs['NhanVienXuLy']; ?></td>
                        </tr>
                <?php 
                    }                      
                ?>
              </tbody>
            </table>
    </div>

    <div class="col-md-5 col-md-offset-2">
         <div class=" float-left">
            <br>
           
            <h4><label style="color:#E74C3C" for="Total">Tổng doanh thu bán hàng:</label><?php echo " ".number_format($tongtien2,0,",","."); ?></h4> 
            <h4><label style="color:#E74C3C" for="Total">Tổng đơn hàng:</label><?php echo " ".$count; ?></h4>
        </div>
    </div>
<?php          
    }
?>          
</div>
<?php 
	// }else {
	// 	echo "<script> alert('Bạn không có quyền truy cập vào trang này.'); location.href='?menu=dashboard'; </script>";
	// }
?>