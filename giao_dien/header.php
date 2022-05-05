<?php 
	session_start(); 
?>
<div class="header col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class=" logo col-xs-12 col-sm-12 col-md-4 col-lg-2">
		<a href="index.php"><img src="images/logo.png" alt=""> </a>  
	 <!--   <h1>HILL TOP WATCH</h1> -->
   	</div>
	<div class="navbar-header fa">
			<a class="navbar-brand" href="index.php">TRANG CHỦ</a>
		</div>
	<div class="search col-xs-12 col-sm-8 col-md-6 col-lg-6">
		<form action="" action="POST"> 
			    <div class="col-xs-6 col-md-6" style="width: 100%;">
			      <div class="input-group">
			      	<input type="hidden" name="menu" value="search">
			        <input type="text" class="form-control" style="border-radius: 4px; padding: 20px;" name="search" placeholder="Tìm sản phẩm" id="txtSearch"/>
			        <div class="input-group-btn">
			          <button class="btn btn-primary" style="padding: 10px;" type="submit" name="submit">
			            <span class="glyphicon glyphicon-search"></span>
			          </button>
			        </div>
			      
			    </div>
			  </div>
			</form>
	</div>
	<div class="cart col-xs-12 col-sm-4 col-md-2 col-lg-2">
		<a class="btn btn-danger" style="padding: 10px;" href=""><span class="glyphicon glyphicon-shopping-cart"></span> (0)</a>
	</div>
</div>
