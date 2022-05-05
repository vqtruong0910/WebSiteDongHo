<?php
	$masp= $_GET['masp'];
	if($masp==0){
		unset($_SESSION['giohang']);
		echo "<script> swal({
					icon: 'success',
					title: 'Xóa toàn sản phẩm thành công',
					text: 'Đừng để trống giỏ hàng nhé!',
					button:null,
					
					timer:3000
			
  
				})	;
				 $('.swal-text').css('color', 'red');
				$('.swal-text').css('font-size', '15pt');
				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
				$('.swal-modal').css('border-radius','20pt');//Optional changes the color of the sweetalert 
        
			
                          setTimeout(function(){   location.href='?menu=gio_hang';
                    },2000)  ;  </script>";
		
				
	}
	else{
		unset($_SESSION['giohang'][$masp]);
		echo "<script> swal({
					icon: 'success',
					title: 'Xóa sản phẩm thành công',
					text: 'Đừng để trống giỏ hàng nhé!',
					button:null,
					
					timer:3000
			
  
				})	;
				 $('.swal-text').css('color', 'red');
				$('.swal-text').css('font-size', '15pt');
				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
				$('.swal-modal').css('border-radius','20pt');//Optional changes the color of the sweetalert 
        
			
                          setTimeout(function(){   location.href='?menu=gio_hang';
                    },2000)  ;  </script>";
		
				}
	//echo "<script> location.href='?menu=gio_hang'; </script>";
?>