
<
<?php 
include('connect.php');



$id=$_GET['userID'];

$sql="update thanh_vien set status='1' where id='$id'";
if (mysqli_query($connect,$sql)) {

echo "<script>alert(' Mở khóa thành công'); location.href='javascript: history.back(-1);'; </script>";
            }
?>