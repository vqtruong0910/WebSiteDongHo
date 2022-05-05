<?php
include('./connect.php');
$hoten= $_POST['hoten'];

  $result = mysqli_query($connect, "SELECT * FROM `thanh_vien` WHERE `hoten` LIKE '".$hoten."'");

if($result !== false && $result->num_rows > 0){ //Tồn tại sdt rồi
    echo json_encode(false);
}else{ //Chưa tồn tại sdt.
    echo json_encode(true);
}

?>