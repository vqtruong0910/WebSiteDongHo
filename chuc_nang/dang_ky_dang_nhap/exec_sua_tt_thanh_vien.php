<?php
	if(isset($_POST['submit'])){
	include('connect.php');
	$kh= $_SESSION['login'];
	$hoten = $_POST['hoten'];
	$email = $_POST['email'];
	$sdt = $_POST['sdt'];
	$diachi = $_POST['diachi'];
	$sl="update thanh_vien set hoten='".$hoten."',sdt='".$sdt."',diachi='".$diachi."' where email='".$kh['email']."'";
	$exec= mysqli_query($connect,$sl);
	if($exec){ 
		echo "<script> swal({
					icon: 'success',
					title: 'Chỉnh Sửa Thông tin Thành Công',
					text: 'Xin chúc mừng bạn',
					button:null,
					
					timer:3000
			
  
				})	;
				 $('.swal-text').css('color', 'blue');
				$('.swal-text').css('font-size', '15pt');
				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
				$('.swal-modal').css('border-radius','20pt');//Optional changes the color of the sweetalert 
        
			
                          setTimeout(function(){   location.href='?menu=thanh_vien';
                    },2000)  ;  </script>";
	}
	else{
		echo $sl;
		echo "<script>  swal({
					icon: 'error',
					title: 'Chỉnh Sửa Thông Tin Thất Bại',
					text: 'Xin thử lại sau',
					button:false
					
					
			
  
				})	;
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
			setTimeout(function(){  location.href='javascript: history.back(-1)';
                    },2000) 
                             </script>";
		// echo 'Bấm<a href="javascript:history.back(-1);"> vào đây </a> để quay lại trang sửa chữa';
	}
	}
	if(isset($_POST['cancel'])){
	echo "<script> location.href='index.php'; </script>";
}
?>