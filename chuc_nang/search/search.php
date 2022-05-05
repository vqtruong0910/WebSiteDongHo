<script type="text/javascript">
    $(document).ready(function() {
        document.title = 'Tìm kiếm';
    });
</script>
<table class="table">
	<tr>
		<td><label>Kết quả tìm kiếm cho từ khóa '<?php echo $_GET['search']; ?>' là: </label></td>
	</tr>
<?php 
	$search= $_GET['search'];
	include('connect.php');
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else{
        $page=1;
    }
    $start=1;
	$page=$page-1;
	$limit= 4;
	$sl= "select * from san_pham where tensp like '%$search%'";
	$ex=mysqli_query($connect, $sl);
	$total= mysqli_num_rows($ex);
    $total=$total/$limit;
	$total= ceil($total);
	$start= $limit*$page;
	if($_GET['search']==""){
		?>
	<tr>
		<td>Bạn chưa nhập từ khóa tìm kiếm.</td>
	</tr>
		<?php
	}
	else{
		if($total==0){
			?>
		<tr>
			<td>Không tìm thấy kết quả cho từ khóa '<?php echo $_GET['search']; ?>'</td>
		</tr>
			<?php
		}	
        $sl= "select * from san_pham where tensp like '%$search%' limit ".$start.",".$limit;
		$exec= mysqli_query($connect, $sl);
		while($row= mysqli_fetch_array($exec)){
	?>
		<tr>
			<td>
			<div style="height:auto; padding-bottom: 15px;" class="sp img-thumbnail col-xs-12 col-sm-6 col-md-12 col-lg-12">
				<div style="width: 110px; height: 120px;" class="img col-xs-12 col-sm-12 col-md-6 col-lg-2">
					<img style="width: 100px; height: 120px; margin-left:32px; margin-top: 10px; margin-bottom: 10px;" src="images/<?php echo $row['img']; ?>" alt="">
				</div>
				<div style="padding-top: 10px;" class="text-left col-xs-12 col-sm-12 col-md-6 col-lg-10">
					<div class="title col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a style="font-size: 18px;margin-left: 1px;" href="chi-tiet-sp/<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
					</div>
					<div class="cost col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<span><?php echo number_format($row['giasp'],0,",",".")."đ"; ?></span>
					</div>
					<div class="buy col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a class="btn btn-primary" href="?menu=product_info&masp=<?php echo $row['masp']; ?>">Chi tiết</a>
						<a class="btn btn-warning" href="?menu=addcart&masp=<?php echo $row['masp']; ?>&soluong=1"><b class="fa fa-cart-plus"></b></a>
					</div>
				</div>
			</div>
			</td>
		</tr>
		
	<?php }} ?>
	</table>
    <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<nav>
					<ul class="pagination">
						<?php 
						    if($page==0){
						    	if($total>1){ 
						    		$page=$page+2;
						    		$prev="";
						    		$next= '<a href="?menu=search&search='.$_GET['search'].'&page='.$page.'" aria-label="Next"><span class="fa fa-step-forward"></span></a>';		      		
						    	}else{
						    		$prev="";
						    		$next="";
						    	} 
						    }else if($page>=1){
						    	if($page==$total-1){
						    		$prpage= $page;
						    		$firstpage='<a href="?menu=search&search='.$_GET['search'].'&page=1" aria-label="First"><span class="fa fa-fast-backward"></span></a>';
						    		$endpage="";
						    		$prev='<a href="?menu=search&search='.$_GET['search'].'&page='.$prpage.'" aria-label="Next"><span class="fa fa-step-backward"></span></a>';
						    		$page=$page-2;
						    		$next= "";
						    	}else{
						    		$prpage=$page;
						    		$page=$page+2;
						    		$prev= '<a href="?menu=search&search='.$_GET['search'].'&page='.$prpage.'" aria-label="Next"><span class="fa fa-step-backward"></span></a>';
						    		$next='<a href="?menu=search&search='.$_GET['search'].'&page='.$page.'" aria-label="Next"><span class="fa fa-step-forward"></span></a>';			      		
						    	}}
						?>			    
						<li><?php echo $prev; ?></li>
						<?php 	
							if($total>1)    
							for($i=1; $i<=$total; $i++){
								echo  "<li><a href=\"?menu=search&search=".$_GET['search']."&page=$i\">$i</a></li>";
							}	
						?>
						<li><?php echo $next; ?></li>	    
					</ul>
				</nav>			
			</div>