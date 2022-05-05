<?php
	$masp = $_GET['masp'];
	$soluong= $_GET['soluong'];
	$sp= 0;
	if(isset($_SESSION['giohang'][$masp])){
		$sp= $_SESSION['giohang'][$masp] + $soluong;
	}
	else{
		$sp= $soluong;
	}
	$_SESSION['giohang'][$masp]=$sp;
	echo "<script>  swal({
					icon: 'success',
					title: 'Thêm Vào Giỏ Hàng Thành Công ',
					text: 'Hãy tiếp tục mua hàng',
					button:null,
					
					timer:3000
			
  
				})	;
				 $('.swal-text').css('color', 'blue');
				$('.swal-text').css('font-size', '15pt');
				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
				$('.swal-modal').css('border-radius','20pt');//Optional changes the color of the sweetalert 
        
			setTimeout(function(){   location.href='?menu=san_pham';
                    },1000)
                           ;  </script>";
?>