<?php 
function getProductFilter($data){
	include('connect.php');
	$sql_price = null ;
	$sql_brand = null;

	$sql = "SELECT * FROM san_pham";

	if (!empty($data['r_price']) || !empty($data['r_brand'])){
		$sql = $sql ." WHERE";
	}

	if(!empty($data['r_price'])){
		$da = explode( ',', $data['r_price'] ) ;
		$price_1 = (int)$da['0'];
		$price_2 = (int)$da['1'];
		$sql = $sql ." (giasp BETWEEN $price_1 AND $price_2) AND";
	}


	if(!empty($data['r_brand'])){
		 $brand = $data['r_brand'] ;
		 $sql = $sql . " id_thuong_hieu = '$brand' AND";
	}

	$sql = rtrim($sql, "AND");
	
	$result = mysqli_query($connect,$sql);
	$dataResult = array();
	while($row = mysqli_fetch_array($result)){
		$dataResult[] = $row;
	}
	return $dataResult;
	//
// $loc= $_POST['value'];
// // include('connect.php');
// if(isset($_GET['page'])){
// 	$page=$_GET['page'];
// }else{
// 	$page=1;
// }
// $start=1;
// $page=$page-1;
// $limit= 4;
// // $sl= "select * from san_pham where tensp like '%$search%'";
// $ex=mysqli_query($connect, $sql);
// $total= mysqli_num_rows($ex);
// $total=$total/$limit;
// $total= ceil($total);
// $start= $limit*$page;
//
}



function filterAction(){
	$r_price = null;
	$r_brand = null;
	

	if(!empty($_POST['r-price'])){
		$r_price = $_POST['r-price'];
	}

	if(!empty($_POST['r-brand'])){
		$r_brand = $_POST['r-brand'];
	}

	

	$input = ['r_price' => $r_price, 'r_brand' => $r_brand];

	// phân trang
	$data = getProductFilter($input);
	// $page;
	// if(!empty($_GET['page'])){
	// 	$page = $_GET['page'];
	// }else{
	// 	$page =1;
	// }
	// $numProduct = count($data_tmp);
	// $productOnPage = 5;
	// $num = ceil($numProduct/$productOnPage);
	// if(!empty($_GET['page']) && $_GET['page']>$num){
	// 	$page =$num;
	// }
	// $start = ($page - 1) * $productOnPage;
	// $res =[];
	// for ($i=$start; $i < $start+$productOnPage; $i++) { 
	// 	if(isset($data_tmp[$i]))
 //        $res[] = $data_tmp[$i];
	// };

	// $data = [$res,$num,$page,$key_word,$data_tmp];



	// echo "<pre>";
	// $loc= $_POST['value'];
	// // include('connect.php');
	// if(isset($_GET['page'])){
	// 	$page=$_GET['page'];
	// }else{
	// 	$page=1;
	// }
	// $start=1;
	// $page=$page-1;
	// $limit= 4;
	// // $sl= "select * from san_pham where tensp like '%$search%'";
	// $ex=mysqli_query($connect, $sql);
	// $total= mysqli_num_rows($ex);
	// $total=$total/$limit;
	// $total= ceil($total);
	// $start= $limit*$page;

    ?>

<!-- <div id="main-content-wp" class="clearfix category-product-page">
    <div class="wp-inner">
        <div class="main-content fl-right">
            <div class="section" id="list-product-wp"> -->
            <table class="table">
                <tr>
                    <td>
                        <?php
	$i = 0;
    foreach ($data as $values) {
	?>
                        <div style="height:auto; padding-bottom: 15px;"
                            class="sp img-thumbnail col-xs-12 col-sm-6 col-md-12 col-lg-12">
                            <div style="width: 110px; height: 120px;" class="img col-xs-12 col-sm-12 col-md-6 col-lg-2">
                                <img style="width: 100px; height: 120px; margin-left:32px; margin-top: 10px; margin-bottom: 10px;"
                                    src="images/<?php echo $data[$i]['img']; ?>" alt="">
                            </div>
                            <div style="padding-top: 10px;" class="text-left col-xs-12 col-sm-12 col-md-6 col-lg-10">
                                <div class="title col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <a style="font-size: 18px;margin-left: 1px;"
                                        href="?menu=product_info&masp=<?php echo $data[$i]['masp']; ?>"><?php echo $data[$i]['tensp'] ?></a>
                                </div>
                                <div class="cost col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <span><?php echo number_format($data[$i]['giasp'],0,",",".")."đ"; ?></span>
                                </div>
                                <div class="buy col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <a class="btn btn-primary"
                                        href="?menu=product_info&masp=<?php echo $data[$i]['masp']; ?>">Chi tiết</a>
                                    <a class="btn btn-warning"
                                        href="?menu=addcart&masp=<?php echo $data[$i]['masp']; ?>&soluong=1"><b
                                            class="fa fa-cart-plus"></b></a>
                                </div>
                            </div>
                        </div>

                        <?php
		$i++;
	}
	?>

                    </td>
                </tr>

            </table>
            <!-- </div>
        </div> -->
        
    <!-- </div>
</div>
</div> -->
<?php

}

filterAction();


 ?>
<!----------------------------------------------->
