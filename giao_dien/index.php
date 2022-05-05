<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<title>HILL TOP WATCH</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="jquery/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/ajax.js"></script>
	<script src="js/responsive.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="jquery/jRating.jquery.js"></script>
	<link rel="stylesheet" href="jquery/jRating.jquery.css" type="text/css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<script type="text/javascript" src="js/sweetalert.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>


	
</head>
<body>

	<div class="container" style="width: 100%;"> 
		<div class="header col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-image: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,88,121,1) 35%, rgba(0,212,255,1) 100%);">
				<?php include('header.php'); ?>		
		</div>
		<div class="content col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="left col-xs-12 col-sm-12 col-md-2 col-lg-2">
				<?php include('left.php');  ?>
			</div>
           
			<div class="content col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<?php include('content.php'); ?>
			</div>
            
			<div class="right col-xs-12 col-sm-12 col-md-2 col-lg-2">
				<?php include('right.php'); ?>
			</div>
		</div>
		<div class="footer col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php include('footer.php'); ?>		
		</div>
	</div>
<!-- Messenger Plugin chat Code -->
    <!-- <div id="fb-root"></div> -->
      <!-- <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script> -->

      <!-- Your Plugin chat code -->
      <!-- <div class="fb-customerchat"
        attribution="page_inbox"
        page_id="105304271723936">
      </div> -->

</body>
</html>

<!-- <script>
$("#login-form").submit(function (event) {
			event.preventDefault();
               
                $.ajax({
					
                    type: "POST",
                    url: 'chuc_nang/dang_ky_dang_nhap/exec_dang_nhap.php',
                    data: $(this).serializeArray(),
                    success: function (response) {
                        response = JSON.parse(response);
						
                        if(response.status == 0){ //Đăng nhập lỗi
					swal({
					icon: 'error',
					title: 'Đăng nhập thất bại',
					text: 'Email hoặc mật khẩu không chính xác',
					button:null,
					timer:3000
  
				});
				$(".swal-text").css('color', 'red');
				$(".swal-text").css('background-color', '#FEFAE3');
				$(".swal-text").css('padding', '17px');
				$(".swal-text").css('border', '1px solid #F0E1A1');
				$(".swal-text").css('display', 'block');
				$(".swal-text").css('font-size', '15pt');
				$(".swal-text").css('margin', '22px');
				$(".swal-text").css('text-align', 'center');
				
				$(".swal-modal").css('background-color','rgb(255, 255, 255)');
				$(".swal-modal").css('border-radius','20pt');
			
                        }else if(response.status==2){
							swal({
					icon: 'error',
					title: 'Đăng nhập thất bại',
					text: 'Bạn phải nhập đủ thông tin đăng nhập',
					button:null,
					timer:3000
  
				});
				$(".swal-text").css('color', 'red');
				$(".swal-text").css('background-color', '#FEFAE3');
				$(".swal-text").css('padding', '17px');
				$(".swal-text").css('border', '1px solid #F0E1A1');
				$(".swal-text").css('display', 'block');
				$(".swal-text").css('font-size', '15pt');
				$(".swal-text").css('margin', '22px');
				$(".swal-text").css('text-align', 'center');
				
				$(".swal-modal").css('background-color','rgb(255, 255, 255)');
				$(".swal-modal").css('border-radius','20pt');
			
						}
						else if(response.status==3){
							swal({
					icon: 'error',
					title: 'Đăng nhập thất bại',
					text: 'Xin lỗi tài khoản của bạn đang tạm khóa \nhãy liên hệ với chúng tôi qua chatbox để mở khóa!',
					button:null,
					timer:3000
  
				});
				$(".swal-text").css('color', 'red');
				$(".swal-text").css('background-color', '#FEFAE3');
				$(".swal-text").css('padding', '17px');
				$(".swal-text").css('border', '1px solid #F0E1A1');
				$(".swal-text").css('display', 'block');
				$(".swal-text").css('font-size', '15pt');
				$(".swal-text").css('margin', '22px');
				$(".swal-text").css('text-align', 'center');
				
				$(".swal-modal").css('background-color','rgb(255, 255, 255)');
				$(".swal-modal").css('border-radius','20pt');
			
						}
						else{ //Đăng nhập thành công
                    swal({
					icon: 'success',
					title: 'Đăng nhập thành công',
					text: 'Hill Top Watch xin chào bạn',
					button:null,
					
					timer:3000
			
  
				})	;
				 $(".swal-text").css('color', 'blue');
				$(".swal-text").css('font-size', '15pt');
				$(".swal-modal").css('background-color','rgb(255, 255, 255)');
				$(".swal-modal").css('border-radius','20pt');//Optional changes the color of the sweetalert 
        
			
                          setTimeout(function(){   location.reload();
             },1000)  ;
                        }
                    }
                });
            });

</script> -->