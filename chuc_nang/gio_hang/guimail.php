
<?php
use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\SMTP;
			use PHPMailer\PHPMailer\Exception;
//gui mail
	include('PHPMailer.php');
			include('Exception.php');
			include('OAuth.php');
			include('POP3.php');
			include('SMTP.php');
			
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
    $mail->Body    = ' Xin Chào '.$tenkh.'  !Chúng tôi sẽ tiến hành xác nhận đơn hàng và gửi đến cho bạn sớm nhất! Thân chào! <br>
	Hãy chuẩn bị số tiền tương ứng:'.$dongia.'đ ,vào ngày nhận hàng<br>Thân Chào!';
    $mail->AltBody = 'Hãy chuẩn bị số tiền tương ứng: '.$dongia. 'vào ngày nhận hàng';

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
?>