<script type="text/javascript">
$(document).ready(function() {
    document.title = 'Đăng ký';
});
</script>

<script src="js/sweetalert.min.js"></script>


<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<style>
.error {
    color:red;
}
</style>
<div class="panel panel-primary">
    <div class="panel-heading">Đăng ký</div>
    <div class="panel-body">
        <form id="register-form" method="post" role="form" data-toggle="validator">
            <table class="table">
                <tr>
                    <td><label for="email">Email:</label> <span style="color: red;">(*)</span></td>
                    <td><input type="text" name="email" id="email" class="form-control"
                            placeholder="Nhập địa chỉ Email.."></td>

                </tr>
                <tr>
                    <td><label for="pass">Mật khẩu:</label> <span style="color: red;">(*)</span></td>
                    <td><input type="password" name="password" id="pass" class="form-control"
                            placeholder="Nhập mật khẩu.."></td>
                </tr>
                <tr>
                    <td><label for="repass">Nhập lại mật khẩu:</label> <span style="color: red;">(*)</span></td>
                    <td><input type="password" name="repass" class="form-control" id="repass"
                            placeholder="Nhập lại mật khẩu.."></td>
                </tr>
                <tr>
                    <td><label for="hoten">Họ và tên:</label> <span style="color: red;">(*)</span></td>
                    <td><input type="text" name="hoten" id="hoten" class="form-control"
                            placeholder="Nhập họ và tên bạn.."></td>
                </tr>
                <tr>
                    <td><label for="sdt">Số điện thoại:</label> <span style="color: red;">(*)</span></td>
                    <td><input type="text" name="sdt" id="sdt" class="form-control" placeholder="Nhập số điện thoại..">
                    </td>
                </tr>
                <tr>
                    <td><label for="diachi">Địa chỉ:</label> <span style="color: red;">(*)</span></td>
                    <td><input type="text" name="diachi" id="diachi" class="form-control" placeholder="Nhập địa chỉ">
                    </td>
                </tr>
                <tr>
                    <td align="center"><input type="submit" onclick="" class="btn btn-primary" name="submit"
                            value="Đăng ký"></td>
        </form>
        <td align="center">
            <form action="?menu=exec_dang_ky" action="post"><input type="submit" class="btn btn-primary" name="cancel"
                    value="Hủy"></form>
        </td>
        </tr>
        </table>
        </form>
    </div>
</div>

<script>


//     //      jQuery.validator.addMethod('check_email', function (value) {
//     // var regex = /^[a-z0-9]+([-._][a-z0-9]+)*@([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{1,5}$/;
//     // return value.trim().match(regex);
//   });


      jQuery.validator.addMethod('check_sdt', function (value) {
    var regex = /^((09|03|07|08|05)+([0-9]{8})\b)$/;
    return value.trim().match(regex);
 });

      jQuery.validator.addMethod('check_hoten', function (value) {
    var regex = /^[a-z\d_" "àáãạảăắằẳẵặâấầẩẫậèéẹẻẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹýÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ]{5,20}$/i;
    return value.trim().match(regex);
 });

      jQuery.validator.addMethod('check_diachi', function (value) {
    var regex = /[a-z0-9-\/." "àáãạảăắằẳẵặâấầẩẫậèéẹẻẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹýÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ]+/;
    return value.trim().match(regex);
 });


	  $("#register-form").validate({
  
                rules: {
                    email: {
                        required: true,
                        email: true,
                        remote: {
                        url: "chuc_nang/dang_ky_dang_nhap/check-email.php",
                        type: "POST"
                    }
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    repass: {
                        equalTo: "#pass"
                    },
                    hoten: {
                        required: true,
                        check_hoten: true,
                        minlength :6 ,
                             remote: {
                        url: "chuc_nang/dang_ky_dang_nhap/check-hoten.php",
                        type: "POST"
                    }
                        
                    },
                    sdt:{
                        required: true,
                       check_sdt: true,
                         remote: {
                        url: "chuc_nang/dang_ky_dang_nhap/check-sdt.php",
                        type: "POST"
                    }

                    },
                     diachi:{
                        required: true,
                        check_diachi: true,
                        minlength : 10
                    }
                },
                messages: {
                    email: {
                        required: "Bạn chưa nhập email",
                        email: "Email chưa đúng định dạng",
                        remote: "Email đã tồn tại trong hệ thống. Mời bạn chọn email khác"
                       
                    },
                    password: {
                        required: "Bạn chưa nhập password",
                        minlength: "Password tối thiểu là 8 ký tự"
                    },
                    repass: {
                        equalTo: "Mật khẩu nhập lại không khớp"
                    },
                    hoten: {
                        required: "Bạn chưa nhập họ tên",
                        check_hoten: "Tên không chứa kí tự đặc biệt",
                        minlength: "Họ tên tối thiểu là 6 kí tự",
                       
                        remote: "Họ và tên đã có người sử dụng"
                    },
                     sdt: {
                        required: "Bạn chưa nhập số điện thoại",
                        check_sdt: "Số điện thoại không đúng",
                        remote: "Số điện thoại đã có người sử dụng"
                    },
                      diachi: {
                        required: "Bạn chưa nhập địa chỉ",
                        minlength: "Tối thiểu 10 ký tự",
                        check_diachi: "Đia chỉ không chứa ký tự đặc biệt"
                    }

                },
                  submitHandler: function (form) {
                    console.log($(form).serializeArray());
                    $.ajax({
                        type: "POST",
                        url: 'chuc_nang/dang_ky_dang_nhap/exec_dang_ky.php',
                        data: $(form).serializeArray(),
                        success: function (response) {
                            response = JSON.parse(response);
                            if (response.status == 0) { //Đăng nhập lỗi
                                alert(response.message);
                            } else { //Đăng nhập thành công
                                swal({
					icon: 'success',
					title: 'Đăng ký thành công',
					text: 'Bạn sẽ được đưa về trang chủ',
					button:null,
					
					timer:3000
			
  
				})	;
				 $(".swal-text").css('color', 'blue');
				$(".swal-text").css('font-size', '15pt');
				$(".swal-modal").css('background-color','rgb(255, 255, 255)');
				$(".swal-modal").css('border-radius','20pt');//Optional changes the color of the sweetalert 
        
			
                          setTimeout(function(){   location.href="index.php";
                    },3000)  ;


                            }
                        }
                    });
                }
            });

          
		

  
		
</script>
