<?php
	include('connect.php');
	$kh=$_SESSION['login'];
	$sl= "select * from thanh_vien where email='".$kh['email']."'";
	$exec= mysqli_query($connect, $sl);
	$row = mysqli_fetch_array($exec); 
?>

<style>
.error{
	color:red;
}
</style>
	<form id="chanpass"  method="post">
		<table class="table">
			<tr>
				<td><label for="old_password">Mật khẩu cũ: </label></td>
				<td><input class="form-control" type="password" name="old_password" id="old_password" placeholder="Nhập mật khẩu cũ" ></td>
			</tr>
			<tr>
				<td><label for="new_password">Mật khẩu mới: </label></td>
				<td><input class="form-control" type="password" name="new_password" id="new_password" placeholder="Nhập mật khẩu mới"  ></td>
			</tr>
			<tr>
				<td><label for="re_password">Nhập lại mật khẩu mới: </label></td>
				<td><input class="form-control" type="password" name="re_password" id="re_password" placeholder="Nhập lại mật khẩu mới"  ></td>
			</tr>
			<tr align="center">
				<td colspan="2"><input class="btn btn-success" type="submit" name="submit" value="Cập nhật"></td>
			</tr>
		</table>
	</form>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script>
	 



			 $("#chanpass").validate({
                       rules: {
                    old_password: {
                        required: true,
					
                       
                        
                    }
                    ,
                    new_password: {
                        required: true,
                        minlength: 8
                    },
                   re_password: {
                        equalTo: "#new_password"
                    }
                   
                },
                messages: {
                    old_password: {
                        required: "Bạn chưa nhập mật khẩu cũ",
				
                       
                    },
                   new_password: {
                        required: "Bạn chưa nhập password",
                        minlength: "Password tối thiểu là 8 ký tự"
                    },
                   re_password: {
                        equalTo: "Mật khẩu nhập lại không khớp"
                    }
                   

                },
                submitHandler: function (form) {
                    console.log($(form).serializeArray());
                    $.ajax({
                        type: "POST",
                        url: '',
                        data: $(form).serializeArray(),
                        success: function (response) {
                            response = JSON.parse(response);
                            if (response.status == 0) { //Đăng nhập lỗi
                                alert(response.message);
                            } else { //Đăng nhập thành công
                                alert(response.message);
                                location.href = 'login.php';
                            }
                        }
                    });
                }
            });
			</script>