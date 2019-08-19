<?php require_once 'vars.php';?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Testimonials</title>
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
			<li class="active">Guest Book</li>
		</ul>
		<h1 class="page-title text-color text-center">What Customer Says About Us</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="row" data-gutter="60">
				<div class="col-md-4">
					<div class="testimonial">
						<div class="testimonial-inner">
							<blockquote>
								<p>"very friendly staff with very good facilities and loved there food and roof top resturent with lot of nice facilities love there hospitality value for money must stay if you are planning to go to delhi with your family or friends"</p>
							</blockquote>
						</div>
						<div class="testimonial-author">
							<img src="img/client-1.jpg" alt="Image Alternative text">
							<p class="testimonial-author-name">John Mathis</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimonial testimonial-color">
						<div class="testimonial-inner">
							<blockquote>
								<p>"This is a nice hotel in a budgetd room Having good interiors and services are very nice staff is good in talking Good. My second visit in this hotel i feel much batter . Thanks white klove give nice hospitality"</p>
							</blockquote>
						</div>
						<div class="testimonial-author">
							<img src="img/client-2.jpg" alt="Image Alternative text">
							<p class="testimonial-author-name">Brandon Burgess</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimonial">
						<div class="testimonial-inner">
							<blockquote>
								<p>"Staff friendly and quick service . Room were specious and very good air conditioner. Food quality suparb . Spa were found some lazy staff couldn't be feel attractive I hope next time doing well. Overall good stay"</p>
							</blockquote>
						</div>
						<div class="testimonial-author">
							<img src="img/client-3.jpg" alt="Image Alternative text">
							<p class="testimonial-author-name">Allen Roshe</p>
						</div>
					</div>
				</div>
			</div>
			<div class="gap gap-small"></div>
			<div class="row" data-gutter="60">
				<div class="col-md-4">
					<div class="testimonial testimonial-color">
						<div class="testimonial-inner">
							<blockquote>
								<p>"Very nice will visit again service can be improved food is average rates are reasonable gym is nice and spa"</p>
							</blockquote>
						</div>
						<div class="testimonial-author">
							<img src="img/client-4.jpg" alt="Image Alternative text">
							<p class="testimonial-author-name">Hu Shanjyo</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimonial">
						<div class="testimonial-inner">
							<blockquote>
								<p>"The hospitality is good. The service to room is good but it can be better if focused. Hotel rooms are hygenic and pleasant."</p>
							</blockquote>
						</div>
						<div class="testimonial-author">
							<img src="img/client-5.jpg" alt="Image Alternative text">
							<p class="testimonial-author-name">Sara Jay</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimonial testimonial-color">
						<div class="testimonial-inner">
							<blockquote>
								<p>Was a nice, clean and comfy stay. Room is basic, but has everything you need. Location was ok, though somewhat isolated.</p>
							</blockquote>
						</div>
						<div class="testimonial-author">
							<img src="img/client-6.jpg" alt="Image Alternative text">
							<p class="testimonial-author-name">Nina Matteos</p>
						</div>
					</div>
				</div>
			</div>
			<div class="gap gap-small"></div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center">
					<a class="btn btn-primary btn-lg" href="contact-us.php">Write A Review</a>
				</div>
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
</body>
</html>