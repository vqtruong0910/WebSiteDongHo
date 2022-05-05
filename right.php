<?php  
	if(isset($_SESSION['login'])) {
		include('chuc_nang/dang_ky_dang_nhap/user_info.php');
	}else {
		include('chuc_nang/dang_ky_dang_nhap/dang_ky_dang_nhap.php');
	}
?>
