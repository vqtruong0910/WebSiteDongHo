<style type="text/css">
	.content .sp {
    height: 315px;
    margin-top: 10px;
    }
</style>
<?php
	if(isset($_GET['menu'])){
		$menu= $_GET['menu'];
		switch($menu){ 
			case 'san_pham': include('chuc_nang/san_pham/san_pham.php'); break;
			//case 'search_avanced': include('chuc_nang/search/search_avanced.php'); break;
			case 'product_info': include('chuc_nang/san_pham/product_info.php'); break;
			case 'gio_hang': include('chuc_nang/gio_hang/gio_hang.php'); break;
			case 'addcart': include('chuc_nang/gio_hang/add_cart.php'); break;
			case 'del_cart': include('chuc_nang/gio_hang/del_cart.php'); break;
			case 'thanh_toan': include('chuc_nang/gio_hang/thanh_toan.php'); break;
			case 'hoa_don': include('chuc_nang/gio_hang/hoa_don.php'); break;
			case 'dang_ky': include('chuc_nang/dang_ky_dang_nhap/dang_ky.php'); break;
			case 'dang_nhap': include('chuc_nang/dang_ky_dang_nhap/dang_nhap.php'); break;
		//	case 'dang_ky_dang_nhap': include('chuc_nang/dang_ky_dang_nhap/dang_ky_dang_nhap.php'); break;
			case 'exec_dang_ky': include('chuc_nang/dang_ky_dang_nhap/exec_dang_ky.php'); break;
			case 'exec_dang_nhap': include('chuc_nang/dang_ky_dang_nhap/exec_dang_nhap.php'); break;
			case 'casio': include('chuc_nang/san_pham/casio.php'); break;
			case 'citizen': include('chuc_nang/san_pham/citizen.php'); break;
			case 'doxa': include('chuc_nang/san_pham/doxa.php'); break;
			case 'tissot': include('chuc_nang/san_pham/tissot.php'); break;
			case 'longines': include('chuc_nang/san_pham/longines.php'); break;
			case 'movado': include('chuc_nang/san_pham/movado.php'); break;
			case 'frederiqueconstant': include('chuc_nang/san_pham/frederiqueconstant.php'); break;
			case 'noi_bat': include('chuc_nang/san_pham/sp_noibat.php'); break;
			case 'moi': include('chuc_nang/san_pham/sp_moi.php'); break;
			case 'thanh_vien_form': include('chuc_nang/gio_hang/thanh_vien_form.php'); break;
			case 'thanh_vien': include('chuc_nang/dang_ky_dang_nhap/thanh_vien.php'); break;
			case 'sua_tt_thanh_vien': include('chuc_nang/dang_ky_dang_nhap/sua_tt_thanh_vien.php'); break;
			case 'exec_sua_tt_thanh_vien': include('chuc_nang/dang_ky_dang_nhap/exec_sua_tt_thanh_vien.php'); break;
			case 'change_password': include('chuc_nang/dang_ky_dang_nhap/change_password.php'); break;
			case 'exec_change_password': include('chuc_nang/dang_ky_dang_nhap/exec_change_password.php'); break;
			case 'search': include('chuc_nang/search/search.php'); break;
			//
			case 'loc': include('chuc_nang/search/loc.php'); break;
			case 'khach_hang': include('chuc_nang/gio_hang/thong_tin_khach_hang.php'); break;
			case 'logout': include('chuc_nang/dang_ky_dang_nhap/logout.php'); break;		
			
		//	case 'huong_dan_mua_hang': include('chuc_nang/footer/huong_dan_mua_hang.php'); break;
			case 'lichsu_muahang': include('chuc_nang/dang_ky_dang_nhap/lichsu_muahang.php'); break;
			case 'chitiet_lichsu': include('chuc_nang/dang_ky_dang_nhap/chitiet_lichsu.php'); break;
			case 'huy_donhang': include('chuc_nang/dang_ky_dang_nhap/huy_donhang.php'); break;
			default: include('slideshow.php'); break;
		}
	}
	else{
		include('slideshow.php');
		include('chuc_nang/san_pham/san_pham.php');
	}
?>