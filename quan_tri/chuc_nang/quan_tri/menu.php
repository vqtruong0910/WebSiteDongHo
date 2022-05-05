<?php
	if(!isset($login)){exit();}
?>
<?php
	if(isset($_GET['menu'])){
	$menu= $_GET['menu'];
	switch($menu){
		
		case 'exec_them_sp': include('chuc_nang/san_pham/exec_them_sp.php'); break;
		case 'exec_sua_sp': include('chuc_nang/san_pham/exec_sua_sp.php'); break;
		case 'exec_nhap_hang': include('chuc_nang/san_pham/exec_nhap_hang.php'); break;
		case 'ql_sanpham': include('chuc_nang/san_pham/ql_sanpham.php'); break;
		case 'sp_hethang': include('chuc_nang/san_pham/sp_hethang.php'); break;
		case 'sua_sp': include('chuc_nang/san_pham/sua_sp.php'); break;
		case 'them_sp': include('chuc_nang/san_pham/them_sp.php'); break;
		case 'nhap_hang': include('chuc_nang/san_pham/nhap_hang.php'); break;
		case 'xoa_sp': include('chuc_nang/san_pham/xoa_sp.php'); break;
		case 'logout': include('chuc_nang/quan_tri/logout.php'); break;
		case 'quan_tri': include('chuc_nang/quan_tri/quan_tri.php'); break;
		case 'quan_ly_admin': include('chuc_nang/quan_tri/quan_ly_admin.php'); break;
		case 'quan_ly_thanhvien': include('chuc_nang/quan_tri/quan_ly_thanhvien.php'); break;
		case 'useractive': include('chuc_nang/quan_tri/useractive.php'); break;
		case 'usernotactive': include('chuc_nang/quan_tri/usernotactive.php'); break;
		case 'change': include('chuc_nang/quan_tri/change.php'); break;
		case 'sua_tt_admin': include('chuc_nang/quan_tri/sua_tt_admin.php'); break;
		case 'exec_sua_tt_admin': include('chuc_nang/quan_tri/exec_sua_tt_admin.php'); break;
		case 'xoa_tt_admin': include('chuc_nang/quan_tri/xoa_tt_admin.php'); break;
		case 'exec_them_tt_admin': include('chuc_nang/quan_tri/exec_them_tt_admin.php'); break;
		case 'them_tt_admin': include('chuc_nang/quan_tri/them_tt_admin.php'); break;	
		case 'them_anh_slide': include('chuc_nang/slideshow/them_anh_slide.php'); break;
		case 'ql_slideshow': include('chuc_nang/slideshow/ql_slideshow.php'); break;
		case 'xoa_anh_slide': include('chuc_nang/slideshow/xoa_anh_slide.php'); break;
		case 'sua_anh_slide': include('chuc_nang/slideshow/sua_anh_slide.php'); break;
		case 'exec_them_anh_slide': include('chuc_nang/slideshow/exec_them_anh_slide.php'); break;
		case 'exec_sua_anh_slide': include('chuc_nang/slideshow/exec_sua_anh_slide.php'); break;
		case 'chi_tiet_hoa_don': include('chuc_nang/hoa_don/chi_tiet_hoa_don.php'); break;
		case 'xoa': include('chuc_nang/hoa_don/xoa.php'); break;
		case 'xu_ly': include('chuc_nang/hoa_don/xu_ly.php'); break;
		case 'hoa_don': include('chuc_nang/hoa_don/hoa_don.php'); break;
		case 'hoa_don_chua': include('chuc_nang/hoa_don/hoa_don_chua.php'); break;
		case 'hoa_don_duyet': include('chuc_nang/hoa_don/hoa_don_duyet.php'); break;
		case 'hoa_don_huy': include('chuc_nang/hoa_don/hoa_don_huy.php'); break;
		case 'chi_tiet': include('chuc_nang/san_pham/chi_tiet.php'); break;
		case 'thongke': include('chuc_nang/quan_tri/thongke.php'); break;
		case 'phan_quyen': include('chuc_nang/quan_tri/phan_quyenTV.php'); break;
		
		//case 'trang_chu': include('chuc_nang/quan_tri/trang_chu.php'); break;
		default: include_once('chuc_nang/quan_tri/dashboard.php'); break;
	}
}
else{
	include_once('chuc_nang/quan_tri/trang_chu.php');
}
?>