<?php
	if(!isset($login)){exit();}
?>
<?php
	if(isset($_POST['submit'])){
	include('../connect.php');
	$masp = $_POST['masp'];
	$soluong=$_POST['soluong'];
	
		// if ($soluong <= 0 OR !(is_numeric($soluong)) ) {
		// 	$kt=0;	
			
		// 		echo "<script> alert('Nhập hàng không thành công. Số lượng sản phẩm phải lớn hơn 0.'); location.href='?menu=sp_hethang'; </script>";
					
		// }
		// else {
			$sl= "update san_pham set soluong=".$soluong." where masp=".$masp;
	$exec= mysqli_query($connect,$sl);
	if($exec){
		echo "<script> alert('Nhập hàng thành công');location.href='?menu=chi_tiet&masp=$masp'; </script>";
	}
	// else{
	// 	echo "<script> alert('Nhập hàng không thành công'); location.href='?menu=sp_hethang'; </script>";
	// }			
		
	// }
	// $sl= "update san_pham set soluong=".$soluong." where masp=".$masp;
	// $exec= mysqli_query($connect,$sl);
	// if($exec){
	// 	echo "<script> alert('Nhập hàng thành công');location.href='?menu=chi_tiet&masp=$masp'; </script>";
	// }
	// else{
	// 	echo "<script> alert('Nhập hàng không thành công'); location.href='?menu=sp_hethang'; </script>";
	// }
}
?>