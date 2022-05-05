<?php
	if(!isset($login)){exit();}
	include('../connect.php');
	$connect->begin_transaction();
	$mahd=$_GET['ma_hoadon'];
	$masp = $_GET['masp'];
	$soluong = $_GET['soluong'];
	$sl='update hoa_don set tinh_trang="Hủy" where mahd='.$_GET['ma_hoadon'];
	$sl2="UPDATE san_pham SET soluong=(soluong + '".$soluong."') WHERE masp='".$masp."'";
	$exec= mysqli_query($connect, $sl);
	$exec2 = mysqli_query($connect, $sl2);
	if($exec){
		if($exec2){
			echo "<script> alert('Hủy hóa đơn thành công');location.href='?menu=chi_tiet_hoa_don&ma_hoadon=$mahd';  </script>";
			$connect->commit();
		}else{
			echo "<script> alert('Hệ thống đang bận. Vui lòng thử lại sau');location.href='?menu=chi_tiet_hoa_don&ma_hoadon=$mahd'; </script>";
			$connect->rollback();
		}
	}else{
		echo "<script> alert('Hệ thống đang bận. Vui lòng thử lại sau');location.href='?menu=chi_tiet_hoa_don&ma_hoadon=$mahd'; </script>";
		$connect->rollback();
	}
?>