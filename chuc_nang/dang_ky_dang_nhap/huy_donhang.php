<?php
	if(!isset($_SESSION['login'])){exit();}
	$connect->begin_transaction();
	$mahd=$_GET['ma_hoadon'];
	if(isset ($_GET['masp']))
	{
	$masp = $_GET['masp'];
	}
	if(isset ($_GET['soluong'])){
	$soluong = $_GET['soluong'];
	}
	$sl='update hoa_don set tinh_trang="Hủy" where mahd='.$_GET['ma_hoadon'];
	$sl2="UPDATE san_pham SET soluong=(soluong + '".$soluong."') WHERE masp='".$masp."'";
	$exec= mysqli_query($connect, $sl);
	$exec2 = mysqli_query($connect, $sl2);
	if($exec){
		if($exec2){
			echo "<script> swal({
					icon: 'success',
					title: 'Hủy Hóa Đơn Thành Công',
					text: 'Cảm ơn bạn đã quan tâm đến cửa hàng.',
					button:null,
					
					timer:3000
			
  
				})	;
				 $('.swal-text').css('color', 'blue');
				$('.swal-text').css('font-size', '15pt');
				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
				$('.swal-modal').css('border-radius','20pt');//Optional changes the color of the sweetalert 
				setTimeout(function(){   location.href='?menu=chitiet_lichsu&ma_hoadon=$mahd';
				},2000)  ;
			 </script>";
			$connect->commit();
		}else{
			echo "<script> swal({
					icon: 'error',
					title: 'Hệ thống đang bận vui lòng thử lại sau',
					text: 'Cảm ơn bạn đã quan tâm đến cửa hàng.',
					button:null,
					
					timer:3000
			
  
				})	;
				 $('.swal-text').css('color', 'blue');
				$('.swal-text').css('font-size', '15pt');
				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
				$('.swal-modal').css('border-radius','20pt');//Optional changes the color of the sweetalert 
        
			
                          setTimeout(function(){  location.href='?menu=chitiet_lichsu&ma_hoadon=$mahd';
                    },2000)  ; </script>";
			$connect->rollback();
		}
	}else{
		echo "<script> swal({
					icon: 'error',
					title: 'Hệ thống đang bận vui lòng thử lại sau',
					text: 'Cảm ơn bạn đã quan tâm đến cửa hàng.',
					button:null,
					
					timer:3000
			
  
				})	;
				 $('.swal-text').css('color', 'blue');
				$('.swal-text').css('font-size', '15pt');
				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
				$('.swal-modal').css('border-radius','20pt');//Optional changes the color of the sweetalert 
        
			
                          setTimeout(function(){  location.href='?menu=chitiet_lichsu&ma_hoadon=$mahd';
                    },2000)  ; </script>";
		$connect->rollback();
	}
?>