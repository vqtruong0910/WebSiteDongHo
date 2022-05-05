<script type="text/javascript">
    $(document).ready(function() {
        document.title = 'Giỏ hàng';
    });
</script>
<?php
	if(isset($_SESSION['login'])) {
		include('chuc_nang/gio_hang/thanh_vien_form.php');
	}else {

echo "<script> swal({
				icon: 'warning',
				title: 'Cảnh báo',
				text: 'Bạn phải đăng nhập để mua hàng',
				button:null
				
			})
			$('.swal-text').css('color', 'red');
			$('.swal-text').css('background-color', '#FEFAE3');
			$('.swal-text').css('padding', '17px');
				$('.swal-text').css('border', '1px solid #F0E1A1');
			$('.swal-text').css('display', 'block');
			$('.swal-text').css('font-size', '15pt');
			$('.swal-text').css('margin', '22px');
		$('.swal-text').css('text-align', 'center');
				
			$('.swal-modal').css('background-color','rgb(255, 255, 255)');
				$('.swal-modal').css('border-radius','20pt');
				
			setTimeout(function(){   location.href='?menu=dang_nhap';
             },2000);
		</script>";



?>
		<!-- <p class="alert alert-warning">Bạn chưa đăng nhập.. Vui lòng <a href="?menu=dang_nhap">vào đây</a> để đăng nhập.<br></p>
		<p class="alert alert-warning">
		 Nếu bạn chưa có tài khoản thì có thể bấm <a href="?menu=dang_ky">vào đây</a> để tạo tài khoản mới</p> -->
<?php
	}
?>