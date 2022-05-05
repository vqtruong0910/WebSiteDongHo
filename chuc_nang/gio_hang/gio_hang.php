<?php
if (isset($_SESSION['giohang'])) {
	if (count($_SESSION['giohang']) == 0) {
		unset($_SESSION['giohang']);
?>
		<p class="alert alert-warning">Giỏ hàng bạn trống.. Bấm <a href="?menu=san_pham">vào đây</a> để chọn và mua hàng</p>
<?php
	}
	else {
		if (isset($_POST['submit'])) {
			foreach ($_POST['sl_sp'] as $masp => $sp){ 
				if ($sp <= 0 OR !(is_numeric($sp)) ) {
					$kt=0;				
					break;
				}
				else {
					$_SESSION['giohang'][$masp] = $sp;
					$kt=1;			
				}
			}
			if($kt==0){
				echo "<script>  swal({
					icon: 'warning',
					title: 'Số lượng không hợp lệ',
					text: 'Vui lòng nhập lại',
					button:null,
					
					timer:3000
			
  
				})	;
				 $('.swal-text').css('color', 'red');
				$('.swal-text').css('background-color', '#FEFAE3');
				$('.swal-text').css('padding', '17px');
				$('.swal-text').css('border', '1px solid #F0E1A1');
				$('.swal-text').css('display', 'block');
				$('.swal-text').css('font-size', '15pt');
				$('.swal-text').css('margin', '22px');
				$('.swal-text').css('text-align', 'center');
				
				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
				$('.swal-modal').css('border-radius','20pt');
			setTimeout(function(){   location.href='?menu=gio_hang';
                    },1000);
                             </script>";
				
			}
			else{
				echo  "<script>  swal({
					icon: 'success',
					title: 'Cập Nhật Giỏ Hàng Thành Công ',
					text: 'Hãy tiếp tục mua hàng',
					button:null,
					
					timer:2000
			
  
				})	;
				 $('.swal-text').css('color', 'blue');
				$('.swal-text').css('font-size', '15pt');
				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
				$('.swal-modal').css('border-radius','20pt');//Optional changes the color of the sweetalert 
        
			</script>";
			}	
		}
?>
<script type="text/javascript">
    $(document).ready(function() {
        document.title = 'Giỏ hàng (<?php echo $cart; ?>)';
    });
</script>
	<div class="cart">
		<form method="post">
			<table class="table">
				<tr style="font-weight: bold;">
					<td>Tên sản phẩm</td>
					<td>Giá sản phẩm</td>
					<td>Số lượng</td>
					<td>Tổng tiền</td>
					<td>Xóa sản phẩm</td>
				</tr>
<?php
			$tg = 0;
			foreach ($_SESSION['giohang'] as $masp => $sp) {
				$id_array[] = $masp;
			}
			$list_id = implode(',', $id_array);
			include ('connect.php');
			$sl = 'select * from san_pham where masp in (' . $list_id . ')';
			$exec = mysqli_query($connect, $sl);
			while ($row = mysqli_fetch_array($exec)) {
?>
				<tr>
					<td><?php echo $row['tensp'] ?></td>
					<td><?php echo number_format($row['giasp'], 0, ",", ".") . "đ"; ?></td>
					<td><input type="text" class="form-control" name="sl_sp[<?php echo $row['masp']; ?>]" size="2" value="<?php echo $_SESSION['giohang'][$row['masp']]; ?>"></td>
					<td><?php $tog = ($row['giasp'] * $_SESSION['giohang'][$row['masp']]);echo number_format($tog, 0, ",", ".") . "đ"; ?></td>
					<td><a onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="?menu=del_cart&masp=<?php echo $row['masp']; ?>">Xóa</a></td>
				</tr>
<?php
				$tg = $tg + $tog;
			}
?>				
				<tr align="center">
					<td colspan="5"><input class="btn btn-primary" type="submit" name="submit" value="Cập nhật sản phẩm" ></td>
				</tr>
			</table>
		</form>
		<table class="table">
				<tr  style="font-weight: bold;">
					<td colspan="4" style="font-weight: bold;">Tổng giỏ hàng là:</td> 
					<td><?php echo number_format($tg, 0, ",", ".") . "đ"; ?></td>
				</tr>
				<tr>
					<td colspan="5" align="center"><a onclick="return confirm('Bạn có chắc là muốn xóa toàn bộ sản phẩm ?')" href="?menu=del_cart&masp=0">Xóa toàn bộ giỏ hàng</a></td>
				</tr>
				<tr>
					<td colspan="5" align="center"><form action="?menu=thanh_toan" method="post"><input type="submit" class="btn btn-primary" name="thanh_toan" value="Đặt hàng"></form></td>
				</tr>
		</table>
<?php
	}
}
elseif (!isset($_SESSION['giohang'])) {
		echo "<script>  swal({
					icon: 'info',
					title: 'Hmmm!...Giỏ Hàng Của Bạn Đang Trống',
					text: 'Hãy Mua Hàng Ủng Hộ Cửa Hàng Nhé',
					buttons:['Để Sau','OK Luôn '],
					
					
			
  
				}),
				
				.then(value=>{
					if(value==true){
						location.href='?menu=san_pham';
					}
					


				});

				 $('.swal-text').css('color', 'red');
				$('.swal-text').css('background-color', '#FEFAE3');
				$('.swal-text').css('padding', '17px');
				$('.swal-text').css('border', '1px solid #F0E1A1');
				$('.swal-text').css('display', 'block');
				$('.swal-text').css('font-size', '15pt');
				$('.swal-text').css('margin', '22px');
				$('.swal-text').css('text-align', 'center');
				
				$('.swal-modal').css('background-color','rgb(255, 255, 255)');
			
				$('.swal-modal').css('border-radius','20pt');
			
                             </script>";
?>
	<p class="alert alert-warning">Giỏ hàng bạn trống.. Bấm <a href="?menu=san_pham">vào đây</a> để chọn và mua hàng</p>
		<?php
}
?>
	</div>
