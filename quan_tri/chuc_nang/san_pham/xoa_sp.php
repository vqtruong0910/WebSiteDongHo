<?php
	if(!isset($login)){exit();}
?>
<?php
	include('../connect.php');
	$masp= $_GET['masp'];
	$sl="delete  from thongtinsp where masp=".$masp;
	$exec= mysqli_query($connect, $sl);
	if($exec){
		$sl2="delete from san_pham where masp=".$masp;
		$rs = mysqli_query($connect,$sl2);
		if($rs){
			echo "<script> alert('Xóa sản phẩm thành công'); location.href='?menu=ql_sanpham'; </script>";		
		}
	}
	else{
		echo "<script> alert('Xóa sản phẩm không thành công'); location.href='?menu=ql_sanpham'; </script>";
	}
?>