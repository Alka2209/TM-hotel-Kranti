<?php require_once 'vars.php';?>
<!DOCTYPE HTML>
<html>

<head>
	<title >TM Hotel: Rooms</title>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta name="keywords" content="" />
	<meta name="description" content="">
	<meta name="robots" content="index, follow">
	
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<meta id="myViewport" name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript">
		<!--
		if (screen.width <= 800) {
			var mvp = document.getElementById('myViewport');
			mvp.setAttribute('content','width=1202');
		}
		-->
	</script>
	<!-- GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
	<!-- /GOOGLE FONTS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/mystyles.css">
	<link rel="stylesheet" href="css/flatWeatherPlugin.css">
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?php echo $tag_manager_code; ?>');</script>
</head>

<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=<?php echo $tag_manager_code; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager -->
<?php echo $floating_buttons; ?>

<div class="global-wrap">
	
	<?php include 'includes/header.php'; ?>

	<div class="container">
		<ul class="breadcrumb">
			<li ><a href="index.php">Home</a>
			</li>
			<li  class="active">Rooms</li>
		</ul>
		<h1 style="text-decoration:underline;font-size: 30px;" class="page-title text-center text-color h2" >Accommodation at TM Hotel Madurai</h1>
		<div class="row">
			<div style="margin-left: 107px;" class="col-md-5">
				<div class="article post text-center">
					<header class="post-header text-center">
						<a class="hover-img" href="deluxe-room.php">
							<img src="img/gallery/deluxe-room-1.jpg" alt="Image Alternative text" title="Deluxe Rooms from Hotel TM"><i class="fa fa-link box-icon-# hover-icon round"></i>
						</a>
					</header>
					<div class="post-inner">
						<h4  class="post-title"><a class="text-darken" href="">Deluxe Rooms</a></h4>
						<a  style="width: 500px;height: 47px;" class="btn btn-small btn-primary" href=""><span style="font-size: 20px;margin-left: -24px;">Book Now</span></a>
					</div>
				</div>
			</div>

			<div class="col-md-5">
				<div class="article post text-center">
					<header class="post-header text-center">
						<a class="hover-img" href="executive-room.php">
							<img src="img//gallery/executive-room-1.jpg" alt="Image Alternative text" title="Executive Room  from Hotel TM"><i class="fa fa-link box-icon-# hover-icon round"></i>
						</a>
					</header>
					<div class="post-inner">
						<h4  class="post-title"><a class="text-darken" href="">Executive Rooms</a></h4>
						<a  style="width: 500px;height: 47px;" class="btn btn-small btn-primary" href=""><span style="font-size: 20px;margin-left: -24px;">Book Now</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row row-wrap" data-gutter="60">
			<h3 style="margin-left: 55px;color: #81481b;">Hotel Facitiles</h3>
			<!-- <div class="gap gap-small"></div> -->
			<div class="col-md-8">
				<ul>
					<li style="font-size: 16px;">Wifi Internet</li>
					<li style="font-size: 16px;">Complementary Mineral Water</li>
					<li style="font-size: 16px;">Breakfast</li>
					<li style="font-size: 16px;">LED Tv with Satellite Channel</li>
					<li style="font-size: 16px;">Clean Linens</li>
				</ul>
			</div>
			
		</div>
		<div class="gap gap-small"></div>
	</div>


	<?php include 'includes/footer.php'; ?>

</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/slimmenu.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-timepicker.js"></script>
<script src="js/nicescroll.js"></script>
<script src="js/dropit.js"></script>
<script src="js/ionrangeslider.js"></script>
<script src="js/icheck.js"></script>
<script src="js/fotorama.js"></script>
<script src="js/gmap3.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/typeahead.js"></script>
<script src="js/card-payment.js"></script>
<script src="js/magnific.js"></script>
<script src="js/fitvids.js"></script>
<script src="js/tweet.js"></script>
<script src="js/countdown.js"></script>
<script src="js/gridrotator.js"></script>
<script src="js/sticky.js"></script>
<script src="js/flatWeatherPlugin.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/mediaelement-and-player.min.js"></script>
<script src="js/owl-carousel.js"></script>
<script src="js/custom.js"></script>
</body>
</html>