<script type="text/javascript">
$(document).ready(function() {
    document.title = 'Đăng nhập';
});
</script>
<?php
if(isset($_SESSION['login'])){
		include('chuc_nang/gio_hang/thanh_vien_form.php');
	}else{
?>
<form id="login-form" action="?menu=exec_dang_nhap" method="post">
    <table class="table">
        <tr>
            <td><label for="user">Email: </label></td>
            <td><input class="form-control" type="text" name="email" id="user" placeholder="Nhập tên đăng nhập.."></td>
        </tr>
        <tr>
            <td><label for="pass">Mật khẩu:</label></td>
            <td><input class="form-control" type="password" name="password" id="pass" placeholder="Nhập mật khẩu..">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" id="submit" name="submit" class="btn btn-primary"
                    value="Đăng nhập"></td>
        </tr>
    </table>
</form>
<?php
}
?>

<script>



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
			
                        }else{ //Đăng nhập thành công
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

</script>