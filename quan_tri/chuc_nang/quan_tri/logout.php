<?php
	unset($_SESSION['user']);
	unset($_SESSION['pass']);
	echo "<script>alert('Đăng xuất thành công'); location.href='index.php';</script>";
?>