<?php
	if(!isset($login)){exit();}
?>
<?php
	if(isset($_POST['submit'])){
	include('../connect.php');
	$img_location ='../images/';
	$masp = $_POST['masp'];
	$name = $_POST['name'];
	$cost = $_POST['cost'];
	// if ($cost < 0 OR !(is_numeric($cost)) ) {
	// 	$kt=0;	
	// 		echo "<script> alert('Sửa sản phẩm không thành công. Giá sản phẩm phải là số nguyên dương.');location.href='?menu=chi_tiet&masp=$masp'; </script>";
				
	// }
	$loaisp = $_POST['loaisp'];
	$image_upload = $_FILES['image']['name'];
	$image= $_FILES['image']['name'];
	$image1= $_FILES['image1']['name'];
	$image2= $_FILES['image2']['name'];
	$tmp_name= $_FILES['image']['tmp_name'];
	$tmp_name1= $_FILES['image1']['tmp_name'];
	$tmp_name2= $_FILES['image2']['tmp_name'];
	$error= $_FILES['image']['error'];
	$tmp_name= $_FILES['image']['tmp_name'];
		if($image_upload==""){
			$img= $_POST['img'];
		}
		if($image_upload!=""){
			$img= $image_upload;
		}
		if($image1==""){
			$img1= $_POST['img1'];
		}
		if($image1!=""){
			$img1= $image1;
		}
		if($image2==""){
			$img2= $_POST['img2'];
		}
		if($image2!=""){
			$img2= $image2;
		}
		
		
	// $soluong=$_POST['soluong'];
	// if($soluong==""){
	// 	$soluong=0;
	// }
	//  if ($soluong < 0 OR !(is_numeric($soluong)) ) {
	// 	$kt=0;	
	// 		echo "<script> alert('Sửa sản phẩm không thành công. Số lượng sản phẩm phải là số nguyên dương.');location.href='?menu=chi_tiet&masp=$masp'; </script>";
				
	// }
	
	$thuong_hieu = $_POST['thuong_hieu'];
	$so_hieu_sp = $_POST['so_hieu_sp'];
	$xuat_xu = $_POST['xuat_xu'];
	$kinh = $_POST['kinh'];
	$may = $_POST['may'];
	$loaisp = $_POST['loaisp'];
	$sl= "update san_pham set tensp='".$name."',giasp=".$cost.",img='".$img."',img1='".$img1."',img2='".$img2."',loaisp='".$loaisp."',id_thuong_hieu='".$thuong_hieu."' where masp=".$masp;
	$sql= "update thongtinsp set so_hieu_sp='".$so_hieu_sp."',xuat_xu='".$xuat_xu."',kinh='".$kinh."',may='".$may."' where masp=".$masp;
	$exec1= mysqli_query($connect, $sql);
	$exec= mysqli_query($connect,$sl);
	if($exec){
		if($exec1){
		echo "<script> alert('Sửa sản phẩm thành công');
		location.href='?menu=chi_tiet&masp=$masp'; </script>";
	}
}

	if(isset($_POST['cancel'])){
		header('location:index.php?menu=ql_sanpham');
	}
}
?>