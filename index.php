<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>HILL TOP WATCH</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="jquery/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/ajax.js"></script>
	<script src="js/responsive.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="jquery/jRating.jquery.js"></script>
	<link rel="stylesheet" href="jquery/jRating.jquery.css" type="text/css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<script type="text/javascript" src="js/sweetalert.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>



</head>

<body>

	<div class="container" style="width: 100%;">
		<div class="header col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-image: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,88,121,1) 35%, rgba(0,212,255,1) 100%);">
			<?php include('header.php'); ?>
		</div>
		<div class="content col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="left col-xs-12 col-sm-12 col-md-2 col-lg-2">
				<?php include('left.php');  ?>
			</div>
			<div class="content col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<?php include('content.php'); ?>
			</div>
			<div class="right col-xs-12 col-sm-12 col-md-2 col-lg-2">
				<?php include('right.php'); ?>
			</div>
		</div>
		<div class="footer col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php include('footer.php'); ?>
		</div>
	</div>
	<!-- Messenger Plugin chat Code -->
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				xfbml: true,
				version: 'v10.0'
			});
		};

		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<!-- Your Plugin chat code -->
	<div class="fb-customerchat" attribution="page_inbox" page_id="105304271723936">
	</div>

</body>

</html>

<script>
	$("#login-form").submit(function(event) {
		event.preventDefault();

		$.ajax({

			type: "POST",
			url: 'chuc_nang/dang_ky_dang_nhap/exec_dang_nhap.php',
			data: $(this).serializeArray(),
			success: function(response) {
				response = JSON.parse(response);

				if (response.status == 0) { //????ng nh???p l???i
					swal({
						icon: 'error',
						title: '????ng nh???p th???t b???i',
						text: 'Email ho???c m???t kh???u kh??ng ch??nh x??c',
						button: null,
						timer: 3000

					});

				} else if (response.status == 2) {
					swal({
						icon: 'error',
						title: '????ng nh???p th???t b???i',
						text: 'B???n ph???i nh???p ????? th??ng tin ????ng nh???p',
						button: null,
						timer: 3000
					});


				} else if (response.status == 3) {
					swal({
						icon: 'error',
						title: '????ng nh???p th???t b???i',
						text: 'Xin l???i t??i kho???n c???a b???n ??ang t???m kh??a \nh??y li??n h??? v???i ch??ng t??i qua chatbox ????? m??? kh??a!',
						button: null,
						timer: 3000
					});


				} else { //????ng nh???p th??nh c??ng
					swal({
						icon: 'success',
						title: '????ng nh???p th??nh c??ng',
						text: 'Hill Top Watch xin ch??o b???n',
						button: null,
						timer: 3000
					});

					setTimeout(function() {
						location.reload();
					}, 1000);
				}
			}
		});
	});
</script>