<?php require_once 'vars.php';?>
<!DOCTYPE HTML>
<html>

<head>
	<title>About T.M Hotel</title>
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
	<link rel="stylesheet" media="all" href="css/mediaelementplayer.min.css">
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?php echo $tag_manager_code; ?>');</script>
</head>

<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=<?php echo $tag_manager_code; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager --><!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=<?php echo $tag_manager_code; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager -->
<?php echo $floating_buttons; ?>

<div class="global-wrap">
	
	<?php include 'includes/header.php'; ?>

	<div class="container">
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a>
			</li>
			<li class="active">About Us</li>
		</ul>
	</div>

	<div class="container">
		<div class="row row-wrap">
			<h1 class="page-title text-center text-color">About Us</h1>
			<div class="col-md-9">
				<p class="">T.M Hotel is the Hotel division of the T.M. Group of Companies established in 1950. Coming from a royal patronage, our Hotel provides Quality Service with High Standards on a Budget price. We are located in the Heart of the city. Our Hotel is just 2 minutes walk from the Madurai Railway Station and the Central Bus Stand – Periyar. It takes only 5 minutes by walk to visit the World famous Madurai Meenakshi Amman Temple from our hotel. We have 57 well equipped Deluxe Double A/C, Executive Double A/C & Standard Single rooms.</p>
				
				<!-- <img src="img/home-banner.jpg"> -->
				<hr>
				<div class="gap gap-small"></div>
				<hr>
				<h2 class="h2 text-center">Accomodation At T.M Hotel, Madurai</h2>
				<div class="col-md-6">
					<div class="thumb text-center">
						<header class="thumb-header">
							<a class="hover-img curved" href="deluxe-room.php">
								<img src="img/gallery/deluxe-room-1.jpg" alt="" /><i class="fa fa-sign-in box-icon-white box-icon-border hover-icon-top-right round"></i>
							</a>
						</header>
						<div class="thumb-caption">
							<h4 class="thumb-title"><a href="deluxe-room.php">Deluxe Rooms</a></h4>
							<p class="thumb-desc">24-hour butler, VIP seating, reservation handling, special access to clubs and shows.</p>
						</div>
						
					</div>
				</div>
				<div class="col-md-6">
					<div class="thumb text-center">
						<header class="thumb-header">
							<a class="hover-img curved" href="executive-room.php">
								<img src="img/gallery/executive-room-1.jpg" alt="" /><i class="fa fa-sign-in box-icon-white box-icon-border hover-icon-top-right round"></i>
							</a>
						</header>
						<div class="thumb-caption">
							<h4 class="thumb-title"><a href="executive-room.php">Executive Rooms</a></h4>
							<p class="thumb-desc">Well appointed and elegantly decorated and equipped with all the amenities for comfortable stay.</p>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-md-3">
				
                <div id="widget-trip-advisor"></div>
				
				<div class="gap gap-small"></div>
				
				<div id="widget-facebook"></div>

				<div class="gap gap-small"></div>
				
				<div id="current-weather"></div>
				
				<div class="gap gap-small"></div>
			</div>
		</div>
	</div>

	<div class="gap gap-medium"></div>

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
<script src="js/owl-carousel.js"></script>
<script src="js/fitvids.js"></script>
<script src="js/tweet.js"></script>
<script src="js/countdown.js"></script>
<script src="js/gridrotator.js"></script>
<script src="js/sticky.js"></script>
<script src="js/flatWeatherPlugin.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/mediaelement-and-player.min.js"></script>
<script src="js/custom.js"></script>
<?php echo $code_trip_advisor_script; ?>
<?php echo $code_facebook_script; ?>
</body>
</html>