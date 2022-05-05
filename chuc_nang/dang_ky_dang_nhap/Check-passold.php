
<?php
include('./connect.php');



include('connect.php');
	$old_password= $_POST['old_password'];	
	$old_password= md5($old_password);
	$kh=$_SESSION['login'];
	$sql= "select * from thanh_vien where password='".$old_password."' and email='".$kh['email']."'";
	$qr= mysqli_query($connect, $sql);
	$num= mysqli_num_rows($qr);

if($num>0){
 





    

    echo json_encode(true);
}
?>