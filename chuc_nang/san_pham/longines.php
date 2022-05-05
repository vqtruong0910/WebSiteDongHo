<div class="panel panel-warning">
    <div class="panel-heading">Đồng hồ Longines</div>
    <div class="panel-body">
		<div class="product">
		<?php
			include('connect.php');
			if(isset($_GET['page'])){
				$page=$_GET['page'];
			}else{
				$page=1;
			}
			$start=1;
			$page=$page-1;
			$limit= 5;
			$sql="select * from san_pham where loaisp like 'longines'";
			$ex= mysqli_query($connect, $sql);
			$total= mysqli_num_rows($ex);
			$total=$total/$limit;
			$total= ceil($total);
			$start= $limit*$page;
		?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="product">
				<?php
					$sl= "select * from san_pham where loaisp like 'longines' limit ".$start.",".$limit;
					$exec= mysqli_query($connect, $sl);
					while($row= mysqli_fetch_array($exec)){
				?>
				<div class="sp img-thumbnail col-xs-12 col-sm-8 col-md-4 col-lg-3">
					<div class="img img-thumbnail col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><img src="images/<?php echo $row['img']; ?>" alt=""></a>
					</div>
					<div class="title">
						<a href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
					</div>
					<div class="cost">
						<span><?php echo number_format($row['giasp'],0,",",".")."đ"; ?></span>
					</div>
					<div class="buy">
						<a class="btn btn-info" href="?menu=product_info&masp=<?php echo $row['masp']; ?>">Chi tiết</a>
						<a class="btn btn-warning" href="?menu=addcart&masp=<?php echo $row['masp']; ?>&soluong=1"><b class="fa fa-cart-plus"></b></a>
					</div>
				</div>
				<?php 
					}
				?>
			</div>
			<div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<nav>
					<ul class="pagination">
						<?php 
						    if($page==0){
						    	if($total>1){ 
						    		$page=$page+2;
						    		$prev="";
						    		$next= '<a href="?menu=	longines&page='.$page.'"aria-label="Next"><span class="fa fa-step-forward"></span></a>';		      		
						    	}else{
						    		$prev="";
						    		$next="";
						    	} 
						    }else if($page>=1){
						    	if($page==$total-1){
						    		$prpage= $page;
						    		$firstpage='<a href="?menu=longines&page=1" aria-label="First"><span class="fa fa-fast-backward"></span></a>';
						    		$endpage="";
						    		$prev='<a href="?menu=longines&page='.$prpage.'" aria-label="Next"><span class="fa fa-step-backward"></span></a>';
						    		$page=$page-2;
						    		$next= "";
						    	}else{
						    		$prpage=$page;
						    		$page=$page+2;
						    		$prev= '<a href="?menu=longines&page='.$prpage.'" aria-label="Next"><span class="fa fa-step-backward"></span></a>';
						    		$next='<a href="?menu=longines&page='.$page.'" aria-label="Next"><span class="fa fa-step-forward"></span></a>';			      		
						    	}}
						?>			    
						<li><?php echo $prev; ?></li>
						<?php 	
							if($total>1)    
							for($i=1; $i<=$total; $i++){
						?>
						<li><a href="?menu=longines&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
						<?php
							}	
						?>
						<li><?php echo $next; ?></li>	    
					</ul>
				</nav>			
			</div>
		</div>
	</div>
</div>