<?php

include('./connect.php');
$email= $_POST['email'];

  $result = mysqli_query($connect, "SELECT * FROM `thanh_vien` WHERE `email` LIKE '".$email."'");

if($result !== false && $result->num_rows > 0){ //Tồn tại email rồi
    echo json_encode(false);
}else{ //Chưa tồn tại email.
    echo json_encode(true);
}

?>