<?php require_once 'vars.php';?>
<!DOCTYPE HTML>
<html>

<head>
	<title style="font-style:italic";>Reservation Policy</title>
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
			<li style="font-style:italic";><a href="index.php">Home</a>
			</li>
			<li style="font-style:italic"; class="active">Reservation Policy</li>
		</ul>
		<h1 style="font-style:italic"; class="page-title text-center">Reservation Policy</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h4 style="font-style:italic";>Reservation Policy</h4>
				<ul class="list_ok">
					<li style="font-style:italic";>Check-In time is 12 noon and Check-Out Time is 10 a.m.</li>
					<li style="font-style:italic";>If our Check-In/Out timing does not suit your holiday program, kindly inform us about the same. Necessary room allotments can be arranged on prior information, subject to availability, and may be chargeable by us directly.</li>
					<li style="font-style:italic";>Cancellation or Alteration in bookings is entertained. But prior information is required at least a week before your Check-In date. Kindly also refer our Reservation/Cancellation or Amendment Policy.</li>
					<li style="font-style:italic";>Please carry a valid government issued photo identity and address proof with you for Check-In Procedure. PAN Card is not accepted as a valid Identity Card.</li>
					<li style="font-style:italic";>The Credit/Debit Card Holder should be one the travelers, if you have booked with us using any one of the later.</li>
					<li style="font-style:italic";>We reserve the right to cancel or modify reservations where it appears that a customer has engaged in fraudulent or inappropriate activity or under other circumstances where it appears that the reservation contains or is resulted from a mistake or error.</li>
					<li style="font-style:italic";>We may charge compulsory gala dinner supplement on Christmas / New Year’s event or other festive periods. The needs to be cleared separately.</li>
					<li style="font-style:italic";>Breakfast timings are 7:30 – 10:30 am henceforth all requests will be chargeable.</li>
				</ul>
				
				<h4 style="font-style:italic";>Cancellation Policy</h4>
				<ul>
					<li style="font-style:italic";>Cancellations made 15 or more days before check in date will be free.</li>
					<li style="font-style:italic";>Cancellations made more than 7 days in advance but less than 15 days will incur a cancellation charge of 1 nights tariff.</li>
					<li style="font-style:italic";>No shows and cancellations made 0 to 7 days in advance will incur 100% charge of the booking.</li>
					<li style="font-style:italic";>In case of a full refund on cancellation, there will be a deduction of approximately 5.7% as payment processing charges.</li>
				</ul>
				<p style="font-style:italic"; class="text-color"><strong>Note : Above are the cancellation rules but we will put our best possible efforts to waive/minimize the cancellation charges.</strong></p>
				
				<h4 style="font-style:italic";>Amendment Policy</h4>
				<ul>
					<li style="font-style:italic";>Amendments will be treated as cancellation.</li>
					<li style="font-style:italic";>Any refund will take at least 15 days to process.</li>
				</ul>
			</div>
			<div class="col-md-3">
				<aside class="user-profile-sidebar">
					<div class="user-profile-avatar text-center">
						<h5 style="font-style:italic";>Quick Navigation</h5>
					</div>
					<ul class="list user-profile-nav">
						<li style="font-style:italic";><a href="terms-and-conditions.php">Terms & Condition</a></li>
						<li style="font-style:italic";><a href="privacy-policy.php">Privacy Policy</a></li>
						<li style="font-style:italic";><a href="about-us.php">About Us</a></li>
					</ul>
				</aside>
			</div>
		</div>
		<div class="gap gap-samll"></div>
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