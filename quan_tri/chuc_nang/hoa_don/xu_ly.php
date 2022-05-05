<?php
	if(!isset($login)){exit();}
?>
<?php 
echo "hello";
	include('../connect.php');
	$sl='update hoa_don set tinh_trang="Đã xác nhận" where mahd='.$_GET['ma_hoadon'];
	$exec= mysqli_query($connect,$sl);
	if($exec){
		echo "<script> alert('Đã xác nhận hóa đơn'); location.href='?menu=hoa_don'; </script>";
	}else{
		echo "<script> alert('Hệ thống đang bận. Vui lòng thử lại sau'); location.href='?menu=hoa_don'; </script>";
	}

	$sl1="update hoa_don set NhanVienXuLy='".$_SESSION['user']."' where mahd='".$_GET['ma_hoadon']."'";
	$exec1=mysqli_query($connect,$sl1);
	if($exec){
		echo "<script> alert('Đã xác nhận Nan vien'); location.href='?menu=hoa_don'; </script>";
	}else{
		echo "<script> alert('Hệ thống đang bận. Vui lòng thử lại sau'); location.href='?menu=hoa_don'; </script>";
	}
?>