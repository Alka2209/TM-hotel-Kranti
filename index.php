<?php
require_once 'vars.php';
$view_trigger = isset($_GET['enable-desktop-view']);
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Home Page</title>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta name="keywords" content="" />
	<meta name="description" content="">
	<meta name="robots" content="index, follow">
	
	<meta id="myViewport" name="viewport" content="width=device-width, initial-scale=1.0">

	<?php
		if ($view_trigger=='true') {
		echo '<script type="text/javascript">
		if (screen.width <= 800) {
		var mvp = document.getElementById("myViewport");
		mvp.setAttribute("content","width=1202");
		}
		</script>
		';
		}
		else{
		echo '<script type="text/javascript">
		if (screen.width <= 800)
		window.location = "http://www.tmhotel.in/mobile";
		</script>
		';
		}
	?>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" media="all" href="css/bootstrap.css">
	<link rel="stylesheet" media="all" href="css/animate.min.css">
	<link rel="stylesheet" media="all" href="css/font-awesome.css">
	<link rel="stylesheet" media="all" href="css/icomoon.css">
	<link rel="stylesheet" media="all" href="css/styles.css">
	<link rel="stylesheet" media="all" href="css/mystyles.css">
	<link rel="stylesheet" media="all" href="css/flatWeatherPlugin.css">
	<link rel="stylesheet" media="all" href="css/mediaelementplayer.min.css">
	<!-- GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
	<!-- /GOOGLE FONTS -->
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

	<!-- TOP AREA -->
	<div class="top-area" >
		<div class="bg-holder full">
			
			<div class="owl-carousel owl-slider owl-carousel-area visible-lg" id="owl-carousel-slider">
				<div class="bg-holder full">
					<div class="bg-mask"></div>
					<div class="item"><img class="lazyOwl" data-src="img/main-page-1.JPG" alt="slider-1" style="height:525px;">
					</div>
				</div>
				<div class="bg-holder full">
					<div class="bg-mask"></div>
					<div class="item"><img class="lazyOwl" data-src="img/main-page-2.JPG" alt="slider-2" style="height:525px;"></div>
				</div>
				<div class="bg-holder full">
					<div class="bg-mask"></div>
					<div class="item"><img class="lazyOwl" data-src="img/pic.jpeg" alt="slider-3" style="height:525px;"></div>
					
				</div>
			</div>
			<div class="bg-img hidden-lg" style="background-image:url(img/banner-4.jpg);"></div>
			<div class="bg-mask hidden-lg"></div>
			<div class="bg-front bg-front-mob-rel">
				<div class="container">
					
					<div class="search-tabs search-tabs-bg search-tabs-abs mt50" id="tagline">
						<div class="tabbable">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END TOP AREA-->
	<div style="margin-top: 50px;" class="container animated fadeInUp" id="hotel-info">
		<div class="row">
			<div class="col-md-8 col-sm-8">
				<div class="hotel-info-left">
					<h1>T.M Hotel - Madurai </h1>
					<p><span class="text-lg"><?php echo $client_address_line_1." ".$client_address_line_2." ".$client_address_pin; ?></span></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<ul>
					<li><i class="fa fa-phone"></i> <?php echo $hotel_phone; ?></li>
					<li><i class="fa fa-envelope-o"></i> <a href="mailto:<?php echo $hotel_email; ?>"><?php echo $hotel_email; ?></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="gap">
			<div class="row row-wrap">
				<div class="col-md-9">
					<div class="gap gap-small"></div>
					<h1 style="font-size: 37px;text-decoration:underline;" class="h2 text-center text-color">Welcome To T.M Hotel Madurai</h1>
					<p style="color: #814813 !important;font-weight: 600;font-size: 18px;margin-top: 27px;text-align: left;" class="text-center text-color">Our Motto is to Provide a Pleasant Stay and a Homely Care to our Prestigious Customers</p>
					<p style="font-size: 16px;" class="">T.M Hotel is the Hotel division of the T.M. Group of Companies established in 1950. Coming from a royal patronage, our Hotel provides Quality Service with High Standards on a Budget price. We are located in the Heart of the city. Our Hotel is just 2 minutes walk from the Madurai Railway Station and the Central Bus Stand – Periyar. It takes only 5 minutes by walk to visit the World famous Madurai Meenakshi Amman Temple from our hotel. We have 57 well equipped Deluxe Double A/C, Executive Double A/C Rooms.</p>
					<img src="img/banner-3.jpg" alt="<?php echo $hotel_name.' Banner';?>">
					<div class="gap gap-small"></div>
					
					<hr>
					<h2 style="color: #814813;font-size: 25px;text-decoration:underline;" class="h2 text-center">Accommodation At T.M Hotel Madurai</h2>
					<p style="font-size:16px;" class="text-center">
						The Spacious and Inviting Deluxe Rooms & Executive Rooms have lavish interiors complimented with all modern facilities with  24 hours Room Service.
					</p>
					<div class="col-md-6">
						<div class="thumb text-center">
							<header class="thumb-header">
								<a class="hover-img curved" href="deluxe-room.php">
									<img src="img/gallery/deluxe-room-1.jpg" alt="" /><i class="fa fa-sign-in box-icon-white box-icon-border hover-icon-top-right round"></i>
								</a>
							</header>
							<div class="thumb-caption">
								<h4 class="thumb-title"><a style="color: #814813 !important;font-weight: 400;" href="deluxe-room.php">Deluxe Rooms</a></h4>
								
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
								<h4 class="thumb-title"><a style="color: #814813 !important;font-weight: 400;" href="executive-room.php">Executive Rooms</a></h4>
								
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-md-3">
					<p style="color:#6a4221;font-weight: 600;    margin-top: 33px;">OUR EXCLUSIVE VIDEO</p>
					<iframe width="270px" height="250px" src="./video/VID-20190611-WA0001.mp4">
					</iframe>
					
					<div class="gap gap-small"></div>
					
					<div id="widget-facebook"></div>

					<div class="gap gap-small"></div>
					
					<div id="current-weather"></div>
					
					<div class="gap gap-small"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="gap gap-small"></div>

	<div class="bg-holder">
		<div class="bg-mask"></div>
		<div class="bg-parallax" style="background-image: url(img/book.JPG); background-position: 50% -62.4px;"></div>
		<div class="bg-content">
			<div class="container">
				<div class="gap gap-medium text-center text-white">
				<div class="gap gap-small"></div>	
					<h2 style="margin-top: 79px;" class="mb10">Features & Amenities</h2>
					<ul class="icon-list list-inline-block mb20 last-minute-rating">
						<li><i style="color:white;" class="fa fa-star"></i>
						</li>
						<li><i style="color:white;" class="fa fa-star"></i>
						</li>
						<li><i style="color:white;" class="fa fa-star"></i>
						</li>
						<li><i style="color:white;" class="fa fa-star"></i>
						</li>
						<li><i style="color:white;" class="fa fa-star"></i>
						</li>
					</ul>
					<div class="gap gap-small"></div>	
					<div class="row">
							<div class="col-md-2">
								<div class="thumb">
									<header class="thumb-header"><i class="fa fa-user-md box-icon-md round box-icon-center animate-icon-top-to-bottom"></i>
									</header>
									<div class="thumb-caption">
										<h5  class="thumb-title text-center"><a class="text-light">Doctor On Call</a></h5>
										<p class="thumb-desc text-center"></p>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="thumb">
									<header class="thumb-header"><i class="fa fa-taxi box-icon-md round box-icon-center animate-icon-top-to-bottom"></i>
									</header>
									<div class="thumb-caption">
										<h5  class="thumb-title text-center"><a class="text-light"> Travel Assistance</a></h5>
										<p class="thumb-desc text-center"></p>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="thumb">
									<header class="thumb-header"><i class="fa fa-archive box-icon-md round box-icon-center animate-icon-top-to-bottom"></i>
									</header>
									<div class="thumb-caption">
										<h5 class="thumb-title text-center"><a class="text-light">Laundry Service </a></h5>
										<p class="thumb-desc text-center"></p>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div  class="thumb">
									<header class="thumb-header"><i class="fa fa-map-marker box-icon-md round box-icon-center animate-icon-top-to-bottom"></i>
									</header>
									<div class="thumb-caption">
										<h5 class="thumb-title text-center"><a class="text-light">Business Center</a></h5>
										<p class="thumb-desc text-center"></p>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="thumb">
									<header class="thumb-header"><i class="fa fa-clock-o box-icon-md round box-icon-center animate-icon-top-to-bottom"></i>
									</header>
									<div class="thumb-caption">
										<h5  class="thumb-title text-center"><a class="text-light text-icons">24 Hrs Room Service</a></h5>
										<p class="thumb-desc text-center"></p>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div  class="thumb">
									<header class="thumb-header"><i class="fa fa-rss box-icon-md round box-icon-center animate-icon-top-to-bottom"></i>
									</header>
									<div class="thumb-caption">
										<h5  class="thumb-title text-center"><a class="text-light text-icons">Unlimited Wifi </a></h5>
										<p class="thumb-desc text-center"></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

			
	<div class="gap gap-small"></div>
	<div class="container">
		<div style="margin-top: -58px;" class="row row-wrap" data-gutter="60">
			<h3 style="color: #814813;margin-top: 55px;font-size: 23px;font-weight:600;text-decoration:underline;" class="text-center">WHY GUEST CHOOSE T.M HOTEL?</h3>
			<div class="gap gap-small"></div>
			<p style="padding: 28px;margin-top:-33px;font-weight:600;font-size:16px;">T.M Hotel is a new aged best budget brand of Hotel in the Heart of the City. 
			Our obsession with Quality is what makes us stand out.  We do not compromise on the Standard of our Rooms.           </p><br>
			<p style="margin-left: 26px;margin-top:-39px;font-weight:600;font-size:16px;">Our Hotel is Located very near to the Meenakshi Amman Temple and right Opposite to Madurai Railway Junction. Our Hotel is Surrounded by a variety of Tasty Vegetarian & Non-Vegetarian Restaurants, Theatres, Shopping Malls, Jewellery Shops, Electronic Shops, Markets, etc. It is located at the Center with a close proximity to several Sight Seeing locations in Madurai.</p>
			<p style="margin-left: 26px;font-weight:600;font-size:16px;">Guests coming to Madurai either for Business or Work or Leisure or Temple Visit, etc., our Hotel is an ideal place to Stay, to Relax and to Enjoy. We provide a Pleasant Stay to Our Guests with a Homely Care. We don't see them as our guests, they are our FAMILIES !</p>
			<img style="width: 116px;height: 26px;float: right;position: fixed;" src="./img/whatsapp.png" alt="whtsapp">
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
<script type="text/javascript">
	var debug = false;
	function ls(t,e,s){var c,n=t.getElementsByTagName(e)[0],r=/^http:/.test(t.location)?"http":"https";s&&(c=t.createElement(e),c.src=r+s,debug&&(c.src=s),n.parentNode.insertBefore(c,n))}ls(document,"script","://s3-ap-southeast-1.amazonaws.com/djubo-static/static/widget/js/widget.min.2.0.js");
</script>
<?php echo $code_trip_advisor_script; ?>
<?php echo $code_facebook_script; ?>
</body>
</html>