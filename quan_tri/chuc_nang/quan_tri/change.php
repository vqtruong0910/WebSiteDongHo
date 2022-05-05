<?php

 include('connect.php');
 
 $query=mysqli_query($connect,"UPDATE thanh_vien set tinh_trang='".$_POST['val']."' WHERE id='".$_POST['id']."'") ;
 if ($query) {
    
     $q=mysqli_query($connect,"SELECT * FROM thanh_vien WHERE id='".$_POST['id']."'");
     $data=mysqli_fetch_assoc($query);
     echo $data['tinh_trang'];
      
 }




?>