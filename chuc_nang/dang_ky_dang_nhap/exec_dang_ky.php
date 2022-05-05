

<?php

//  function nameValid($string)
//     {
//         if ( preg_match('/^[a-z\d_]{5,20}$/i', $string) ) {
// 		return true;



// }
//     }

//       function fullnameValid($string)
//     {
//         if ( preg_match('/^[a-z\d_" "]{5,20}$/i', $string) ) {
// 		return true;



// }
//     }

// 	  function addressValid($string)
//     {
//        if ( preg_match('/[a-z\d_,.\/\" "]{10,100}/', $string) ) {
// 		return true;



// }
//     }

//  function emailValid($string)
//     {
//         if (preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $string))
//             return true;
//     }


//      function phoneValid($string)
//     {
//         if (preg_match ("/((09|03|07|08|05)+([0-9]{8})\b)/", $string))
//             return true;
//     }








// 	if(isset($_POST['submit'])){
// 		include('connect.php');
// 		// $email = $_POST['email'];
// 		// $password= $_POST['password'];
// 		// $username= $_POST['hoten'];
// 		// $phonenumber= $_POST['sdt'];
// 		// $address= $_POST['diachi'];
	
// 		if (!empty($_POST['submit'])) {
// 			if (!empty($_POST['email'])) {
// 			$email = $_POST['email'];
// 			if (!emailValid($email)) {
// 				echo "<script> swal({
			
// 					text: 'Email không đúng định dạng',
// 					button:null
  
// 				});
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('font-size', '20px');
// 				$('.swal-modal').css('border', '1px solid black');
				
// 				setTimeout(function(){   location.href='javascript: history.back(-1)';
//               },900); </script>";
// 				$err=false;
				
// 			exit();
// 			}
// 		}else{
// 			echo "<script> swal({
					
// 					text: 'Email không được bỏ trống',
// 					button:false,
					
					

					
  
// 				});
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('font-size', '20px');
// 				$('.swal-modal').css('border', '1px solid black');
			
				
// 				setTimeout(function(){   location.href='javascript: history.back(-1)';
//               },900); </script>";
// 			$err=false;
			
// 			exit();

// 		}


// 		if (!empty($_POST['password'])) {

// 			$password=$_POST['password'];
// 				//$uppercase = preg_match('@[A-Z]@', $password);
// 				//$lowercase = preg_match('@[a-z]@', $password);
// 				//$number    = preg_match('@[0-9]@', $password);
// 			// 	if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
// 			// 		echo '<span id="error_1" style="color:red;">Mat khau phai lon hon 8 ky tu </span></div>';
// 			// $err=false;

// 			// }
// 			if( strlen($password) < 8) {
// 					echo "<script>swal({
			
// 					text: 'Mật khẩu phải lớn hơn 8 kí tự',
// 					button:null
  
// 				})
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('font-size', '20px');
// 				$('.swal-modal').css('border', '1px solid black');
				
// 				setTimeout(function(){   location.href='javascript: history.back(-1)';
//               },900);</script>";

// 					$err=false;
				
// 			exit();


// 			}

// 		}else{
// 			echo "<script>swal({
			
// 					text: 'Mật khẩu không được bỏ trống',
// 					button:null
  
// 				})
// 			$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('font-size', '20px');
// 				$('.swal-modal').css('border', '1px solid black');
				
// 				setTimeout(function(){   location.href='javascript: history.back(-1)';
//               },900);</script>";

// 					$err=false;
				
			
// 			$err=false;
			
// 			exit();

// 		}


// 		if (!empty($_POST['re-pass'])) {

// 			$Repassword=$_POST['re-pass'];
// 				//$uppercase = preg_match('@[A-Z]@', $password);
// 				//$lowercase = preg_match('@[a-z]@', $password);
// 				//$number    = preg_match('@[0-9]@', $password);
// 			// 	if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
// 			// 		echo '<span id="error_1" style="color:red;">Mat khau phai lon hon 8 ky tu </span></div>';
// 			// $err=false;

// 			// }
// 			if($Repassword!=$password) {
// 					echo "<script>swal({
			
// 					text: 'Mật khẩu Không khớp',
// 					button:null
  
// 				})
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('font-size', '20px');
// 				$('.swal-modal').css('border', '1px solid black');
			
// 				setTimeout(function(){   location.href='javascript: history.back(-1)';
//               },900);</script>";

// 					$err=false;
				
// 			exit();


// 			}

// 		}else{
// 			echo "<script>swal({
			
// 					text: ' Bạn phải xác nhận lại mật khẩu',
// 					button:null
  
// 				})
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('font-size', '20px');
// 				$('.swal-modal').css('border', '1px solid black');
				
// 				setTimeout(function(){   location.href='javascript: history.back(-1)';
//               },900);</script>";

// 					$err=false;
				
			
// 			$err=false;
			
// 			exit();

// 		}

// 		if (!empty($_POST['hoten'])) {
// 			$fullname = $_POST['hoten'];
// 			if (!fullnameValid($fullname)) {
// 				echo "<script>swal({
			
// 					text: ' Họ và tên không chứa kí tự đặn biệt',
// 					button:null
  
// 				})
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('font-size', '20px');
// 				$('.swal-modal').css('border', '1px solid black');
				
// 				setTimeout(function(){   location.href='javascript: history.back(-1)';
//               },900);</script>";
// 			$err=false;
			
// 			exit();
// 			}

// 		}else{
// 			echo "<script>swal({
			
// 					text: 'Không bỏ trống họ và tên',
// 					button:null
  
// 				})
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('font-size', '20px');
// 				$('.swal-modal').css('border', '1px solid black');
				
// 				setTimeout(function(){   location.href='javascript: history.back(-1)';
//               },900);</script>";
// 			$err=false;
			
// 			exit();
// 		}

		


// 		if (!empty($_POST['sdt'])) {
// 			$phone = $_POST['sdt'];
// 			if (!phoneValid($phone)) {
// 				echo "<script>swal({
			
// 					text: 'Số điện thoại không đúng',
// 					button:null
  
// 				})
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('font-size', '20px');
// 				$('.swal-modal').css('border', '1px solid black');
				
// 				setTimeout(function(){  location.href='javascript: history.back(-1)';
//               },900);</script>";
// 			$err=false;
		
// 			exit();
// 			}

// 		}else{

// 			echo "<script>swal({
			
// 					text: ' Không bỏ trống Số điện thoại',
// 					button:null
  
// 				})
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('font-size', '20px');
// 				$('.swal-modal').css('border', '1px solid black');
				
// 				setTimeout(function(){   location.href='javascript: history.back(-1)';
//               },900);</script>";
// 			$err=false;
			
// 			exit();
// 		}

// 		if (!empty($_POST['diachi'])) {
// 			$address = $_POST['diachi'];
// 			if (!addressValid($address)) {
// 				echo "<script>swal({
			
// 					text: 'Địa chỉ không được chứa các kí tự đặc biệt',
// 					button:null
					
  
// 				})
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('font-size', '20px');
// 				$('.swal-modal').css('border', '1px solid black');
				
// 				setTimeout(function(){   location.href='javascript: history.back(-1)';
//               },900);
// 				</script>";
// 			$err=false;
		
// 			exit();
// 			}

// 		}else{

// 			echo "<script>swal({
			
// 					text: ' Không bỏ trống địa chỉ',
// 					button:null
					
// 				})
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('font-size', '20px');
// 				$('.swal-modal').css('border', '1px solid black');
				
// 				setTimeout(function(){   location.href='javascript: history.back(-1)';
//               },900);</script>";
// 			$err=false;
			
// 			exit();
// 		}

// 		}else{
// 			echo "<script>swal({
			
// 					text: 'Vui lòng nhập đầy đủ thông tin',
// 					button:null
					
  
// 				})
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('font-size', '20px');
// 				$('.swal-modal').css('border', '1px solid black');
				
// 				setTimeout(function(){   location.href='javascript: history.back(-1)';
//               },900);
// 				</script>";
// 			$err=false;
		
// 			exit();
// 		}



	

		




// 		$sql= "select * from thanh_vien";
// 		$exec1=mysqli_query($connect, $sql);
// 		while($row= mysqli_fetch_array($exec1)){
// 			if($row['email']==$_POST['email']){
// 				$kt=1;
// 				echo"<script> swal({
// 					icon: 'warning',
// 					title: 'Cảnh Báo',
// 					text: 'Email đã có người đăng ký vui lòng chọn Email khác',
// 					button:null
  
// 				})
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('background-color', '#FEFAE3');
// 				$('.swal-text').css('padding', '17px');
// 				$('.swal-text').css('border', '1px solid #F0E1A1');
// 				$('.swal-text').css('display', 'block');
// 				$('.swal-text').css('font-size', '15pt');
// 				$('.swal-text').css('margin', '22px');
// 				$('.swal-text').css('text-align', 'center');
				
// 				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
// 				$('.swal-modal').css('border-radius','20pt');
				
// 				setTimeout(function(){   location.href='javascript: history.back(-1)';
//               },3000); </script>";
// 			  exit();
			
					
// 			}
// 		elseif ($row['sdt']==$_POST['sdt']) {
// 				echo"<script> swal({
// 					icon: 'warning',
// 					title: 'Cảnh Báo',
// 					text: 'Số điện thoại đã có người đăng ký vui lòng chọn Số điện thoại khác',
// 					button:null
  
// 				})
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('background-color', '#FEFAE3');
// 				$('.swal-text').css('padding', '17px');
// 				$('.swal-text').css('border', '1px solid #F0E1A1');
// 				$('.swal-text').css('display', 'block');
// 				$('.swal-text').css('font-size', '15pt');
// 				$('.swal-text').css('margin', '22px');
// 				$('.swal-text').css('text-align', 'center');
				
// 				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
// 				$('.swal-modal').css('border-radius','20pt');
				
// 				setTimeout(function(){   location.href='javascript: history.back(-1)';
//               },3000); </script>";
// 			  exit();
// 			}else{
// 				$kt=0;
// 			}
// 		}
// 		if($kt==0){			
// 			$password = $_POST['password'];
// 			$password = md5($password);
// 			$repass= $_POST['re-pass'];
// 			$repass= md5($repass);
// 			if($password==$repass){
// 				$hoten = $_POST['hoten'];
// 				$sdt = $_POST['sdt'];
// 				$diachi = $_POST['diachi'];	
// 				$sl="insert into thanh_vien values('','".$email."','".$password."','".$hoten."','".$sdt."','".$diachi."')";
// 				$exec= mysqli_query($connect,$sl);
// 				if($exec){
// 	

//  echo "<script> swal({
// 					icon: 'success',
//  					title: 'Đăng ký tài khoản thành công',
// 					text: 'Bạn sẽ được đưa về trang chủ',
// 					button:null
//    				})				$('.swal-text').css('color', 'blue');
// 				$('.swal-text').css('font-size', '15pt');
// 			$('.swal-modal').css('border', '1px solid black');
			
// 				setTimeout(function(){   location.href='index.php';
//               },2000); </script>";
              
 
// 					<br>Bấm <a href="?menu=dang_nhap"> vào đây </a> để đăng nhập và mua hàng
// 					</p> -->
 
// 				}else{
// 					echo "Đăng ký thất bại <br>";
// 					echo 'Bấm<a href="javascript:history.back(-1);"> vào đây </a> để quay lại trang đăng ký';
// 				}
// 			}else{
// 				echo "<script> swal({
// 					icon: 'warning',
// 					title: 'Cảnh báo',
// 					text: 'Mật khẩu nhập chưa chính xác',
// 					button:null
  
// 				})
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('background-color', '#FEFAE3');
// 				$('.swal-text').css('padding', '17px');
// 				$('.swal-text').css('border', '1px solid #F0E1A1');
// 				$('.swal-text').css('display', 'block');
// 				$('.swal-text').css('font-size', '15pt');
// 				$('.swal-text').css('margin', '22px');
// 				$('.swal-text').css('text-align', 'center');
				
// 				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
// 				$('.swal-modal').css('border-radius','20pt');
				
// 				setTimeout(function(){   location.href='?menu=dang_ky';
//               },1000); </script>";
// 			}
// 		}else{
// 			echo "<script> swal({
// 					icon: 'warning',
// 					title: 'Cảnh báo',
// 					text: 'Tên tài khoản đã tồn tại, Vui lòng tạo tài khoản khác',
// 					button:null
				
// 				})
// 				$('.swal-text').css('color', 'red');
// 				$('.swal-text').css('background-color', '#FEFAE3');
// 				$('.swal-text').css('padding', '17px');
// 				$('.swal-text').css('border', '1px solid #F0E1A1');
// 				$('.swal-text').css('display', 'block');
// 				$('.swal-text').css('font-size', '15pt');
// 				$('.swal-text').css('margin', '22px');
// 				$('.swal-text').css('text-align', 'center');
				
// 				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
// 				$('.swal-modal').css('border-radius','20pt');
				
// 				setTimeout(function(){   location.href='?menu=dang_ky';
//               },2000);
//  		</script>";

			
// 		}
// 	}else{
// 		if(isset($_POST['cancel'])){
// 			echo "<script> location.href='index.php'; </script>";
// 		}
// 	}


//ajax regiter
include('./connect.php');
$error = false;
  
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
  
	
	$fullname = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];
    $result = mysqli_query($connect, "INSERT INTO `thanh_vien` (`email`,`password`, `hoten`, `sdt`, `diachi`) VALUES ('" . $_POST['email'] . "',  MD5('" . $_POST['password'] . "'), '" . $fullname . "','" . $sdt . "','" . $diachi . "' )");
   
    if ($result) {
        if (strpos(mysqli_error($connect), "Duplicate entry") !== FALSE) {
            echo json_encode(array(
                'status' => 0,
                'message' => 'ten dang ky da ton tai'
            ));
            exit;
        }
    }
    mysqli_close($connect);
    if ($error !== false) {
        echo json_encode(array(
            'status' => 0,
            'message' => 'co loi khi dang ky'
        ));
        exit;
    } else {
        echo json_encode(array(
            'status' => 1,
            'message' => 'Dang ky thanh cong'
        ));

                   


        exit;
    }
    ?>
    <?php

} else {
    echo json_encode(array(
        'status' => 0,
        'message' => 'ban chua nhap thong tin'
    ));
    exit;
}



?>