<script type="text/javascript">
    $(document).ready(function() {
        document.title = 'Trang chủ';
    });
</script>
<div id="carousel-id" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<?php 
			include('connect.php');
			$sl= "select * from slideshow";
			$exec= mysqli_query($connect,$sl);
			while($row= mysqli_fetch_array($exec)){
		?>
				<div class="item <?php echo $row['note']; ?>">
					<a href="<?php echo ""; ?>"><img class="img-responsive" src="images/slideshow/<?php echo $row['name']; ?>"></a>
				</div>
		<?php 
			} 
		?>
	</div>
	<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>