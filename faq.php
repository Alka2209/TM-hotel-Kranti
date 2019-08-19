<?php require_once 'vars.php';?>
<!DOCTYPE HTML>
<html>

<head>
	<title>FAQ</title>
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
			<li class="active">FAQ</li>
		</ul>
		<h1 class="page-title text-center">Need Help?</h1>
	</div>

	<div class="gap gap-small"></div>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1 class="page-title text-center">Frequently Asked Questions</h1>
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-1" class="collapsed">1. Malesuada vivamus fermentum</a></h4>
						</div>
						<div class="panel-collapse collapse" id="collapse-1" style="height: 0px;">
							<div class="panel-body">Condimentum elit sociis fringilla nascetur aliquet interdum taciti lacus tortor lacus natoque per justo nullam sed quam porta donec integer orci fermentum tortor posuere sem in ullamcorper nascetur eget</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-2" class="collapsed">2. Dignissim dictum</a></h4>
						</div>
						<div class="panel-collapse collapse" id="collapse-2" style="height: 0px;">
							<div class="panel-body">Hendrerit pulvinar facilisis semper dictum porttitor non inceptos curae maecenas consequat tristique erat phasellus montes phasellus vehicula id consectetur nec</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-3" class="">3. Conubia nulla interdum aptent mi</a></h4>
						</div>
						<div class="panel-collapse collapse in" id="collapse-3" style="height: auto;">
							<div class="panel-body">Mollis urna lorem dapibus aliquet netus quam vel fusce tincidunt magnis non orci phasellus pharetra purus placerat fames quis libero phasellus non potenti felis gravida ut accumsan laoreet torquent</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gap gap-small"></div>

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