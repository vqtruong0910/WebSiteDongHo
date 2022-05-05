<?php
	include('connect.php');
	$old_password= $_POST['old_password'];	
	$old_password= md5($old_password);
	$kh=$_SESSION['login'];
	$sql= "select * from thanh_vien where password='".$old_password."' and email='".$kh['email']."'";
	$qr= mysqli_query($connect, $sql);
	$num= mysqli_num_rows($qr);
	if($num>0){
	$password= $_POST['new_password'];
	$password= md5($password);
	$re_password= $_POST['re_password'];
	$re_password= md5($re_password);
	if($password==$re_password){
	$sl="update thanh_vien set password='".$password."' where email='".$kh['email']."'";
	$exec= mysqli_query($connect, $sl);
	if(isset($exec)){
		echo "<script> swal({
					icon: 'success',
					title: 'Đổi mật khẩu Thành Công',
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
		?>
	<!-- <p class="alert alert-success">Đổi mật khẩu thành công.<br>Bấm <a href="?menu=thanh_vien">vào đây</a> để quay lại.</p> -->
		<?php
	}
	else{
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
		?>
	<!-- <p class="alert alert-danger">Đổi mật khẩu thất bại.<br>Bấm <a href="javascript: history.back(-1);">vào đây</a> để quay lại.</p> -->
		<?php
	
	}else{
		echo "<script>  swal({
					icon: 'warning',
					title: 'Mật khẩu bạn nhập lại không đúng',
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
	
		//echo "<script> location.href='javascript: history.back(-1);'; </script>";	
	}
}else{
	echo "<script>  swal({
					icon: 'warning',
					title: 'Mật khẩu cũ không đúng',
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
	
	//echo "<script> location.href='javascript: history.back(-1);'; </script>";	
}
	
?>