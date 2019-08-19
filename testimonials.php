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
			<li class="active">Testimonials</li>
		</ul>
		<h1 class="page-title text-center">What Customer Says About Us</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="row" data-gutter="60">
				<div class="col-md-4">
					<div class="testimonial">
						<div class="testimonial-inner">
							<blockquote>
								<p>Accumsan sociis facilisi vel suscipit habitant arcu ridiculus eget nam</p>
							</blockquote>
						</div>
						<div class="testimonial-author">
							<img src="img/50x50.png" alt="Image Alternative text">
							<p class="testimonial-author-name">John Mathis</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimonial testimonial-color">
						<div class="testimonial-inner">
							<blockquote>
								<p>Enim aliquam feugiat feugiat consequat mauris litora curabitur mollis elit</p>
							</blockquote>
						</div>
						<div class="testimonial-author">
							<img src="img/50x50.png" alt="Image Alternative text">
							<p class="testimonial-author-name">Brandon Burgess</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimonial">
						<div class="testimonial-inner">
							<blockquote>
								<p>Accumsan sociis facilisi vel suscipit habitant arcu ridiculus eget nam</p>
							</blockquote>
						</div>
						<div class="testimonial-author">
							<img src="img/50x50.png" alt="Image Alternative text">
							<p class="testimonial-author-name">John Mathis</p>
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
								<p>Enim aliquam feugiat feugiat consequat mauris litora curabitur mollis elit</p>
							</blockquote>
						</div>
						<div class="testimonial-author">
							<img src="img/50x50.png" alt="Image Alternative text">
							<p class="testimonial-author-name">Brandon Burgess</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimonial">
						<div class="testimonial-inner">
							<blockquote>
								<p>Accumsan sociis facilisi vel suscipit habitant arcu ridiculus eget nam</p>
							</blockquote>
						</div>
						<div class="testimonial-author">
							<img src="img/50x50.png" alt="Image Alternative text">
							<p class="testimonial-author-name">John Mathis</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimonial testimonial-color">
						<div class="testimonial-inner">
							<blockquote>
								<p>Enim aliquam feugiat feugiat consequat mauris litora curabitur mollis elit</p>
							</blockquote>
						</div>
						<div class="testimonial-author">
							<img src="img/50x50.png" alt="Image Alternative text">
							<p class="testimonial-author-name">Brandon Burgess</p>
						</div>
					</div>
				</div>
			</div>
			<div class="gap gap-small"></div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center">
					<a class="popup-text btn btn-primary btn-lg" href="#small-dialog" data-effect="mfp-zoom-out">Write A Review</a>
					<div id="small-dialog" class="mfp-with-anim mfp-hide mfp-dialog">
						<form>
							<div class="form-group form-group-icon-left"><i class="fa fa-user input-icon input-icon-swing"></i>
								<label>Name</label>
								<input class="form-control" placeholder="Full Name" type="text">
							</div>
							<div class="form-group form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-swing"></i>
								<label>Email</label>
								<input class="form-control" placeholder="Email Address" type="text">
							</div>
							<div class="form-group form-group-icon-left"><i class="fa fa-comment input-icon input-icon-swing"></i>
								<label>Message</label>
								<textarea class="form-control" placeholder="Write A Review"></textarea>
							</div>
							<input class="btn btn-primary" type="submit" value="Send">
						</form>
					</div>
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