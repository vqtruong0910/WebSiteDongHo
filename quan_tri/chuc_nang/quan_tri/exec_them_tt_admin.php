<?php
	if(!isset($login)){exit();}
?>
<?php
	include('../connect.php');
	if(isset($_POST['submit'])){
	$sl1= "select * from quan_tri";
	$exec1= mysqli_query($connect, $sl1);
	$row1= mysqli_fetch_array($exec1); 
	$name= $_POST['name'];
	if($row1['name'] == $name){
		$kt=1;
	}else{
		$kt=0;
	}
	if($kt==0){
		$pass= $_POST['pass'];	
		$pass= md5($pass);
		$re_pass= $_POST['re_pass'];	
		$re_pass= md5($re_pass);
		if($pass==$re_pass){
			$sl= "insert into quan_tri(name,pass) values('".$name."','".$pass."')";
			$exec= mysqli_query($connect, $sl);
			if($exec){
				echo "<script> alert('Thêm vào thành công'); location.href='?menu=quan_ly_admin'; </script>";
			}
			else{
				echo "<script> alert('Thêm vào không thành công'); location.href='?menu=quan_ly_admin'; </script>";
			}
		}else{
			echo "<script> alert('Mật khẩu bạn nhập lại không đúng.'); location.href='?menu=quan_ly_admin'; </script>";
		}
	}else{
		echo "<script> alert('Tên tài khoản đã tồn tại.'); location.href='?menu=quan_ly_admin'; </script>";
	}
}
?>