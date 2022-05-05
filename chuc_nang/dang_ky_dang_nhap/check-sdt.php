<?php

include('./connect.php');
$phone= $_POST['sdt'];

  $result = mysqli_query($connect, "SELECT * FROM `thanh_vien` WHERE `sdt` LIKE '".$phone."'");

if($result !== false && $result->num_rows > 0){ //Tồn tại sdt rồi
    echo json_encode(false);
}else{ //Chưa tồn tại sdt.
    echo json_encode(true);
}

?>