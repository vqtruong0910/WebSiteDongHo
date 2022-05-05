<?php
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\SMTP;
			use PHPMailer\PHPMailer\Exception;
	include('connect.php');
	if(isset($_POST['submit'])){
		$connect->begin_transaction();	
		$tenkh= $_POST['tenkh'];
		$sdt= $_POST['sdt'];
		$diachi= $_POST['diachi'];
		
		$sp_mua=$_POST['sp_mua'];
		$list_id= $_POST['list_id'];
		$kh=$_SESSION['login'];
		$email=$kh['email'];
		$mahd= rand(0,99999);
		$sql= "insert into hoa_don(mahd, email, tinh_trang) values('".$mahd."','".$email."','Chưa xử lý')";
		$rs=mysqli_query($connect,$sql);
		if($rs){
			foreach ($_SESSION['giohang'] as $masp => $sp) {
				$id_array[] = $masp;
			}
			$list_id = implode(',', $id_array);
			$sl = 'select * from san_pham where masp in (' . $list_id . ')';
			$exec = mysqli_query($connect, $sl);
			while ($row = mysqli_fetch_array($exec)) {
				$masp=$row['masp']; 
				$tensp=$row['tensp'];
				$soluong=$_SESSION['giohang'][$row['masp']];
				$sl=$row['soluong'];
				$im=$row['img'];
				$dongia=$row['giasp']; 
				if($soluong>$sl) {
					echo "<script> swal({
					icon: 'error',
					title: 'Số lượng bạn mua nhiều hơn trong kho hàng',
					text: 'Xin vui lòng giảm bớt số lượng.',
					button:null,
					timer:3000
  
				});
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
				setTimeout(function(){  location.href='?menu=gio_hang'; 
				},1500)
				</script>";
					$connect->rollback();
					die();
				}else {
					$sql3="INSERT INTO `hoadon_chitiet`(mahd, masp, soluong, dongia) VALUES($mahd,$masp,$soluong,$dongia)";
					$rs3=mysqli_query($connect,$sql3);
					$sql_sl="UPDATE san_pham SET soluong=(soluong - '".$soluong."') WHERE masp='".$masp."'";
					$rs_sl=mysqli_query($connect,$sql_sl);
					$connect->commit();
				}
			}	

			echo "<script> swal({
					icon: 'success',
					title: 'Đơn hàng đã đặt thành công',
					text: 'Bạn sẽ được đưa về trang chủ',
					button:null,
					
					timer:3000
				
  
				})	;
				 $('.swal-text').css('color', 'blue');
				$('.swal-text').css('font-size', '15pt');
				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
				$('.swal-modal').css('border-radius','20pt');//Optional changes the color of the sweetalert 
        
			setTimeout(function(){    location.href='?menu=san_pham';
			},1500);
                       </script>";
			//gui mail
			//include('guimail.php');
				include('chuc_nang/gio_hang/PHPMailer.php');
			include('chuc_nang/gio_hang/Exception.php');
			include('chuc_nang/gio_hang/OAuth.php');
			include('chuc_nang/gio_hang/POP3.php');
			include('chuc_nang/gio_hang/SMTP.php');
			
			$mail = new PHPMailer(true);
			$mail->setLanguage('vi', '/optional/path/to/language/directory/');
			//require 'get_oauth_token.php';
			try {
				$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    		$mail->isSMTP();                                            //Send using SMTP
    			$mail->Host       = 'smtp.gmail.com'; 
				$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'a3duc01662@gmail.com';                     //SMTP username
    $mail->Password   = 'lehoangduc2525';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;  
	
	
	$mail->setFrom('hilltopwatch@example.com', 'HillTop Watch Shopping cart');
    $mail->addAddress($email, $tenkh);     //Add a recipient
    

	 $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Order product success ';
    $mail->Body    = ' Xin Chào '.$tenkh.' !<br>Chúng tôi sẽ tiến hành xác nhận đơn hàng và gửi đến cho bạn sớm nhất! Thân chào! <br>
	Hãy chuẩn bị số tiền tương ứng: '.$dongia.'.00 vnđ ,vào ngày nhận hàng.<br><h1>Thông tin đơn hàng</h1><br> <b>Mã đơn hàng: </b>'.$mahd.'.<br><b>Tên sản phẩm:</b> '.$tensp.'.<br><b>Số lượng: </b>'.$soluong.'.<br><b>Đơn giá: </b>'.$dongia.'.00 vnđ.<br><b>Địa chỉ giao hàng :</b> '.$diachi.'.<br><b>Ngày Nhận</b> : Khoảng 3-4 ngày sau khi đơn hàng được xác nhận và đặt hàng thành công.<br><b>Tổng tiền giao hàng</b> : Miễn phí.<br><br> <strong style="color:red;">Vui lòng giữ liên lạc để không bỏ lỡ đơn hàng.</strong> <br><h2><i>Thân Chào!</i></h2>';
    $mail->AltBody = 'Hãy chuẩn bị số tiền tương ứng: <p style="color:red;'.$dongia. '</p>vào ngày nhận hàng.';

        if($mail->send()){
 echo 'Message has been sent';
	}
	else {
		echo "email not sent";
	}
	$mail->smtpClose();
    
			}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

			unset($_SESSION['giohang']);
			
			//echo '<p class="alert alert-success">Bấm <a href="?menu=san_pham">vào đây</a> để quay lại mua hàng tiếp</p>';
		}
		else{
			echo "<script> swal({
					icon: 'error',
					title: 'Hệ thống đang bận vui lòng thử lại sau',
					text: 'Bạn sẽ được đưa về trang sản phẩm',
					button:null,
					
					timer:3000
			
  
				})	;
				 $('.swal-text').css('color', 'blue');
				$('.swal-text').css('font-size', '15pt');
				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
				$('.swal-modal').css('border-radius','20pt');//Optional changes the color of the sweetalert 
        
			
                          setTimeout(function(){   location.href='?menu=san_pham';
                    },1500)  ;</script>";
		}
	}
	else{
		unset($_SESSION['giohang']);
		echo "<script> location.href='index.php'; </script>";
	}
