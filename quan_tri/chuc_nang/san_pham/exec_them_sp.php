<?php
	if(!isset($login)){exit();}
?>
<?php
	if(isset($_POST['submit'])){
	include('../connect.php');
	$img_location ='../images/';
	if($_FILES['image1']['name']!=""){
		$image1= $_FILES['image1']['name'];
		$tmp_name1= $_FILES['image1']['tmp_name'];
		$img_location1= $img_location.basename($image1);
		if(move_uploaded_file($tmp_name1, $img_location1)){

		}else{
			unlink('../images/'.$image1);
		}
	}
	else{
		$image1="";
	}
	if($_FILES['image2']['name']!=""){
		$image2= $_FILES['image2']['name'];
		$tmp_name2= $_FILES['image2']['tmp_name'];
		$img_location2= $img_location.basename($image2);
		if(move_uploaded_file($tmp_name2, $img_location2)){

		}else{
			unlink('../images/'.$image2);
		}
	}
	else{
		$image2="";
	}
	if($_FILES['image3']['name']!=""){
		$image3= $_FILES['image3']['name'];
		$tmp_name3= $_FILES['image3']['tmp_name'];
		$img_location3= $img_location.basename($image3);
		if(move_uploaded_file($tmp_name3, $img_location3)){

		}else{
			unlink('../images/'.$image3);
		}
	}
	else{
		$image3="";
	}
	
	$tensp = $_POST['tensp'];
	$tensp= mb_strtoupper($tensp);
	$giasp = $_POST['giasp'];
	if ($giasp < 0 OR !(is_numeric($giasp)) ) {
		$kt=0;	
			echo "<script> alert('Thêm sản phẩm không thành công. Giá sản phẩm phải là số nguyên dương.');location.href='?menu=them_sp'; </script>";
				
	}
	$sql= "select max(masp) from san_pham";
	$qr= mysqli_query($connect, $sql);
	$row= mysqli_fetch_array($qr);
	$masp= $row['max(masp)']+1;
	echo $row['max(masp)'];
	$soluong=$_POST['soluong'];
	// if($soluong==""){
	// 	$soluong=0;
	// }
	// if ($soluong < 0 OR !(is_numeric($soluong)) ) {
	// 	$kt=0;	
	// 		echo "<script> alert('Thêm sản phẩm không thành công. Số lượng phải lớn hơn 0.');location.href='?menu=them_sp'; </script>";
				
	// }

	// $thuong_hieu = $_POST['thuong_hieu'];
	$so_hieu_sp = $_POST['so_hieu_sp'];
	$xuat_xu = $_POST['xuat_xu'];
	$kinh = $_POST['kinh'];
	$may = $_POST['may'];
	$loaisp = $_POST['loaisp'];
	$thuong_hieu=$_POST['thuong_hieu'];
	$sl= "insert into san_pham(masp,tensp,giasp,soluong,img, img1,img2,loaisp,id_thuong_hieu) values(".$masp.",'".$tensp."',".$giasp.",".$soluong.",'".$image1."','".$image2."','".$image3."','".$loaisp."','".$thuong_hieu."')";
	$sl1= "insert into thongtinsp(masp,so_hieu_sp,xuat_xu,kinh,may) values(".$masp.",'".$so_hieu_sp."','".$xuat_xu."','".$kinh."','".$may."')";
	$exec= mysqli_query($connect,$sl);
	$exec1= mysqli_query($connect,$sl1);
	if($exec){
		echo "<script> alert('Thêm sản phẩm thành công'); location.href='?menu=chi_tiet&masp=$masp';</script>";
	}
 
}
	if(isset($_POST['cancel'])){
		header('location:index.php?menu=ql_sanpham');
	}


?>