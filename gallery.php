<?php require_once 'vars.php';?>
<!DOCTYPE HTML>
<html>

<head>
	<title >T.M Hotel Image Gallery</title>
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
			<li  class="active">Gallery</li>
		</ul>
		<h1 style="text-decoration:underline;font-size:35px;" class="page-title h2 text-color text-center"><?php echo $hotel_name;?> - IMAGE GALLERY</h1>

		<div id="popup-gallery">
			<div class="row row-col-gap">
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/elevation-1.jpg" data-effect="mfp-zoom-out" title="TM Hotel Elevation">
						<img src="img/thumb/elevation-1.jpg" alt="Elevation" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/elevation-2.jpg" data-effect="mfp-zoom-out" title="TM Hotel Elevation -2">
						<img src="img/thumb/elevation-2.jpg" alt="Elevation-2" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/stair-case.jpg" data-effect="mfp-zoom-out" title="Stair Case">
						<img src="img/thumb/stair-case.jpg" alt="Stair Case" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
					<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/reception-1.jpg" data-effect="mfp-zoom-out" title="Tm Hotel Reception-1">
						<img src="img/thumb/reception-1.jpg" alt="Reception-1" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/reception-2.jpg" data-effect="mfp-zoom-out" title="Tm Hotel Reception-2">
						<img src="img/thumb/reception-2.jpg" alt="Reception-2" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/reception-3.jpg" data-effect="mfp-zoom-out" title="Tm Hotel Reception-3">
						<img src="img/thumb/reception-3.jpg" alt="Reception-3" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/lobby-1.jpg" data-effect="mfp-zoom-out" title="TM Hotel Lobby-1">
						<img src="img/thumb/lobby-1.jpg" alt="Lobby-1" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/meenakshi-amman.jpg" data-effect="mfp-zoom-out" title="Meenakshi-Amman">
						<img src="img/thumb/meenakshi-amman.jpg" alt="Meenakshi-Amman" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/corridor.jpg" data-effect="mfp-zoom-out" title="Corridor">
						<img src="img/thumb/corridor.jpg" alt="Corridor" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/img-2.jpg" data-effect="mfp-zoom-out" title="TM Hotel Img-2">
						<img src="img/thumb/img-2.jpg" alt="Img-2" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/enterance.jpg" data-effect="mfp-zoom-out" title="TM Hotel Entrance">
						<img src="img/thumb/entrance.jpg" alt="Entrance" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/lift.jpg" data-effect="mfp-zoom-out" title="TM Hotel Lift-1">
						<img src="img/thumb/lift-1.jpg" alt="Lift-1" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/lift-room.jpg" data-effect="mfp-zoom-out" title="TM Hotel Lift-2">
						<img src="img/thumb/lift-2.jpg" alt="Lift-2" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/img-1.jpg" data-effect="mfp-zoom-out" title="TM Hotel Img-1">
						<img src="img/thumb/img-1.jpg" alt="Img-1" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				
				
				
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/lobby-2.jpg" data-effect="mfp-zoom-out" title="TM Hotel Lobby-2">
						<img src="img/thumb/lobby-2.jpg" alt="Lobby-2" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
			
				
				
				

				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/deluxe-room-2.jpg" data-effect="mfp-zoom-out" title="Deluxe-2">
						<img src="img/thumb/deluxe-room-2.jpg" alt="Deluxe-2" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/deluxe-room-3.jpg" data-effect="mfp-zoom-out" title="Deluxe-3">
						<img src="img/thumb/deluxe-room-3.jpg" alt="Deluxe-3" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/executive-room-1.jpg" data-effect="mfp-zoom-out" title="Executive-Room-1">
						<img src="img/thumb/executive-room-1.jpg" alt="Executive-Room-1" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<!-- <div class="col-md-3">
					<a style="width: 263px;height: 150px;" class="hover-img popup-gallery-image" href="img/full.jpg" data-effect="mfp-zoom-out" title="Executive-Room-2">
						<img src="img/full.jpg" alt="Executive-Room-2" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div> -->
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/executive-room-3.jpg" data-effect="mfp-zoom-out" title="Executive-Room-3">
						<img src="img/thumb/executive-room-3.jpg" alt="Executive-Room-3" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/executive-room-4.jpg" data-effect="mfp-zoom-out" title="Executive-Room-4">
						<img src="img/thumb/executive-room-4.jpg" alt="Executive-Room-4" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/balcony-1.jpg" data-effect="mfp-zoom-out" title="Balcony-1">
						<img src="img/thumb/balcony-1.jpg" alt="Balcony-1" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/balcony-2.jpg" data-effect="mfp-zoom-out" title="Balcony-2">
						<img src="img/thumb/balcony-2.jpg" alt="Balcony-2" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/logo.jpg" data-effect="mfp-zoom-out" title="TM Hotel Logo">
						<img src="img/thumb/logo.jpg" alt="Logo" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				
				<div class="col-md-3">
					<a class="hover-img popup-gallery-image" href="img/gallery/meenakshi-temple.jpg" data-effect="mfp-zoom-out" title="meenakshi-temple-towers-1">
						<img src="img/thumb/meenakshi-temple.jpg" alt="meenakshi-temple-towers-1" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
					</a>
				</div>
				

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
</div>
</body>
</html>