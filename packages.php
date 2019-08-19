<?php require_once 'vars.php';?>
<!DOCTYPE HTML>
<html>

<head>
	<title>TM Hotel Packages</title>
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
			<li><a href="index.php">Home</a>
			</li>
			<li class="active">Packages</li>
		</ul>
		<h1 class="page-title text-center h2 text-color">Our Special Packages</h1>
	</div>

	<div class="container">
		<div class="row" id="packages">
			<div class="col-md-4">
				<h2 class="h3 text-center text-color">Kashmir Package</h5>
				<a class="hover-img" href="#">
					<img src="img/package-1.jpg" alt="Visit Kashmir" title="Visit Kashmir">
					<h5 class="hover-title">Visit Kashmir</h5>
				</a>
				<div class="gap gap-small"></div>
				<p class="text-center"><a class="btn btn-primary" href="<?php echo $link_be;?>">Book Now</a> <a class="btn btn-info" href="contact-us.php">Contact</a></p>
				<h5>Package Includes:</h5>
				<ul>
					<li>Return Airport Transfer at Srinagar by Non A/C Car</li>
					<li>3 Nights &amp; 4 Days accomodation on twin sharing basis at Srinagar</li>
					<li>3 Breakfasts &amp; 3 Dinners at Houseboats / Hotels</li>
					<li>Half Day tour of Mughal Garden, Srinagarby Non A/C Car</li>
					<li>Full day excursion tour to Gulmarg by Non A/C Car</li>
				</ul>
			</div>
			<div class="col-md-4">
				<h2 class="h3 text-center text-color">Kashmir Trekking Package</h5>
				<a class="hover-img" href="#">
					<img src="img/package-2.jpg" alt="Trekking In Kashmir" title="Trekking In Kashmir">
					<h5 class="hover-title">Trekking In Kashmir</h5>
				</a>
				<div class="gap gap-small"></div>
				<p class="text-center"><a class="btn btn-primary" href="<?php echo $link_be;?>">Book Now</a> <a class="btn btn-info" href="contact-us.php">Contact</a></p>
				<h5>Package Includes:</h5>
				<ul>
					<li>Return Airport Transfer at Srinagar by A/C or Non A/C Car</li>
					<li>Kashmir Gangabal Trekking<br><strong>Destinations: Srinagar - Gangabal - Thajiwas Glacier and More.</strong></li>
					<li>Kashmir Water Trekking<br><strong>Destinations: Srinagar - Manasbal Lake - Wular Lake - Nageen lake.</strong></li>
				</ul>
			</div>
			<div class="col-md-4">
				<h2 class="h3 text-center text-color">Amarnath Package</h5>
				<a class="hover-img" href="#">
					<img src="img/package-3.jpg" alt="Visit Amarnath" title="Visit Amarnath">
					<h5 class="hover-title">Visit Amarnath</h5>
				</a>
				<div class="gap gap-small"></div>
				<p class="text-center"><a class="btn btn-primary" href="<?php echo $link_be;?>">Book Now</a> <a class="btn btn-info" href="contact-us.php">Contact</a></p>
				<h5>Package Includes:</h5>
				<ul>
					<li>Return Airport Transfer at Srinagar by Non A/C Car</li>
					<li>Amarnath  Via Baltal, Amarnath Cave - Srinagar</li>
					<li>Amarnath Via Pahalgam, Chandanwari, Sheshnag, Panchtarni</li>
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
</body>
</html>