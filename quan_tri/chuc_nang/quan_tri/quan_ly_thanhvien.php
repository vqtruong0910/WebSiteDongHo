

<div class="container-fluid">
    <h1 class="mt-4">Danh sách tài khoản thành viên</h1>
    <div class="card mb-4">
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive" id="user_data">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Mã thành viên</th>
                            <th>Email thành viên</th>
                            <th>Tên thành viên</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Tình trạng</th>
                            <th>Quản lý tình trạng</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('connect.php');
                        $sl = "select * from thanh_vien";
                        $exec = mysqli_query($connect, $sl);
                        while ($row = mysqli_fetch_assoc($exec)) {
                           
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['hoten']; ?></td>
                                <td><?php echo $row['sdt']; ?></td>
                                <td><?php echo $row['diachi']; ?></td>

                                <td>
                                    <?php
                                    $tinhtrang = $row['status'];
                                    switch ($tinhtrang) {
                                        case '1':
                                            echo "<p style='color:green;' id=str".$row['id'].">Active</p>";
                                            break;
                                        case '2':
                                            echo "<p  style='color:red;' id=str".$row['id'].">Disactive</p>";
                                            break;
                                    }
                                    ?>
                                </td>
                                <?php

                                if($tinhtrang==1){
                                    $strstatus="<a href=chuc_nang/quan_tri/usernotactive.php?userID=".$row['id']."><buton class='btn-danger btn'>Disactive</button></a>";
                                }
                                else  if($tinhtrang==2){
                                    $strstatus="<a href=chuc_nang/quan_tri/useractive.php?userID=".$row['id']."><buton class='btn btn-success'>Actived</button></a>";
                                }
                               echo "<br><td>".$strstatus."</td>";
                                ?>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <?php 
                    
                    
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>





</script>

<?php 

//   var_dump($_POST);
// if (isset($_POST['tinhtrang'])){
//     $val=$_POST['tinhtrang'];
//     $id=$_POST['id'];


//  $query=mysqli_query($connect,"UPDATE thanh_vien set tinh_trang='".$val."' WHERE id='".$_POST['id']."'") ;
//  if ($query) {
//      # code...
//      $q=mysqli_query($connect,"SELECT * FROM thanh_vien WHERE id='".$_POST['id']."'");
//      $data=mysqli_fetch_assoc($query);
      
//      echo $data['$tinh_trang'];
//  }






?>

