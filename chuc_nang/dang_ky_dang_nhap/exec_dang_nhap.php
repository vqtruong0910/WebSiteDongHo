



<?php 
ob_start();
if(!isset($_SESSION)){
session_start();
}
	// if(isset($_POST['submit'])){
	// 	include('connect.php');
	// 	$pass= $_POST['password'];
	// 	$pass= md5($pass);
	// 	$sl="select * from thanh_vien where email='".$_POST['email']."' and password='".$pass."'";
	// 	$exec= mysqli_query($connect,$sl);
	// 	$kt = mysqli_num_rows($exec);
	// 	$dangnhap=mysqli_fetch_array($exec);
	// 	if($kt>0){
	// 		$_SESSION['login']= $dangnhap;
	// 		echo "<script> swal({
	// 				icon: 'success',
	// 				title: 'Đăng nhập thành công',
	// 				text: 'Hill top watch xin chào bạn',
	// 				button:null
  
	// 			})
	// 			setTimeout(function(){   location.href='index.php';
    //           },4000); </script>";
					
	// 	}
	// 	else{
	// 		echo "<script> alert('Đăng nhập thất bại'); location.href='?menu=dang_nhap'; </script>";
	// 	}
	// }
	// if(isset($_POST['cancel'])){
	// 	echo "<script> location.href='javascript: history.back(-1);'; </script>";
	// }



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "do_an_web2";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}


$error = false;

    # code...

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $result = mysqli_query($con, "Select `id`,`email`,`password`,`hoten`,`sdt`,`diachi`,`status` from `thanh_vien` WHERE (`email` ='" . $_POST['email'] . "' AND `password` = md5('" . $_POST['password'] . "'))");
    if (!$result) {
        $error = mysqli_error($con);
    } else {
         $dangnhap = mysqli_fetch_assoc($result);
    }
    mysqli_close($con);
    if ($error !== false || $result->num_rows == 0) {
        echo json_encode(array(
            'status' => 0,
            'message' => 'Thông tin đăng nhập không đúng'
        ));
        exit;
    } else if($dangnhap['status']==1) {
       
        $_SESSION['login']= $dangnhap;
        echo json_encode(array(
            'status' => $dangnhap['status'],
            'message' => 'Đăng nhập thành công'
        ));
       
        exit;
    }
    else if ($dangnhap['status']==2) {
           echo json_encode(array(
            'status' => 3,
            'message' => 'Xin lỗi tài khoản của bạn đang bị khóa'
        ));
        exit;
    }
} else {
    echo json_encode(array(
        'status' => 2,
        'message' => 'Thông tin đăng nhập không đủ'
    ));
    exit;
}


// if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
// $username=mysqli_real_escape_string($con,$_POST['email']);
// $pass=mysqli_real_escape_string($con,$_POST['password']);
// $password=md5($pass);
// $res=mysqli_query($con,"select * from thanh_vien where username='$username' and password='$password'");
// if (mysqli_num_rows($res)>0) {
//     $dangnhap=mysqli_fetch_assoc($res);
//     if ($row['tinh_trang']==1) {
//          $_SESSION['login']= $dangnhap;
//          $arr=array('status' =>'success');
//     }
//     else{
//         $arr=array('status'=>'wait');
//     }
// }
// else{
//     $arr=array('status'=>'error','msg'=>'Thông tin đăng nhập không chính xác');
// }

// }
// else{
//     $arr=array('status'=>'error1','msg'=>'Xin nhập đầy đủ thông tin');
// }
// echo json_encode($arr);
?>