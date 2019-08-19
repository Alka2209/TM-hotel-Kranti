<?php require_once 'vars.php';?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Executive Rooms</title>
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
		<!-- <ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="rooms.php">Rooms</a></li>
			<li class="active">Executive Rooms</li>
		</ul> -->
		<div class="booking-item-details">
			<header class="booking-item-header">
				<div class="row">
					<div class="col-md-9">
						<h1 style="margin-top: 42px;" class="h2 lh1em text-color">Hotel TM, Madurai - Executive Rooms</h1>
					</div>
				</div>
			</header>

			<div class="row">
				<div class="col-md-6">
					<div class="tabbable booking-details-tabbable">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab-1">
								<div class="fotorama" data-allowfullscreen="true" data-nav="thumbs" data-loop="true">
									<img src="img/gallery/executive-room-1.jpg" alt=""/>
									<img src="img/gallery/executive-room-2.jpg" alt=""/>
									<img src="img/gallery/executive-room-3.jpg" alt=""/>
									<img src="img/gallery/executive-room-4.jpg" alt=""/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="booking-item-meta">
						<h2 class="lh1em">Room Description</h2>
						<p>These are well furnished rooms provide luxury facilities. Our Contemporary style accommodation makes you loosen up yourself completely and relax. The prompt services offered at affordable prices to make the stay more pleasurable. All these rooms are well lit and ventilated and do not fall short in terms of comfort and privacy. All rooms have been refurbished and includes cutting edge amenities such as LED TV, Wi-fi connectivity, electric room key Tag, colourful curtains, cozy bed, , room service and well-appointed bathrooms as standard norms. Complimentary Breakfast, Water bottle and Amenities Kit are inclusive.  We can view Meenakshi Amman Temple tower from the rooms Balcony. </p>
						
					</div>
					<a class="btn btn-primary" href="<?php echo $link_be;?>">Book Now</a>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<h3>Feature</h3>
							<ul class="booking-item-features booking-item-features-expand mb30 clearfix">
								<li>Complimentary Breakfast </li> 
								<li>24 Hours Room service</li>
								<li>Hot & Cold Water </li> 
								<li>Air conditioning  </li>
								<li>LED TV with Satellite Channels </li>
								<li>Fresh Linens  </li>
								<li>Unlimited Free Wi-fi service  </li>
								<li>Balcony to view Meenakshi Temple </li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>

			<div class="gap"></div>
			<div class="gap"></div>
			
			<div class="row">					
				
				<div style="margin-top: -133px;" class="col-md-12">
					<h4 style="font-weight: 500;font-style:italic;">Other Rooms</h4>
					<div class="col-md-6">
						<div class="thumb">
							<header class="thumb-header">
								<a class="hover-img curved" href="deluxe-room.php">
									<img src="img/gallery/deluxe-room-1.jpg" alt="" /><i class="fa fa-sign-in box-icon-white box-icon-border hover-icon-top-right round"></i>
								</a>
							</header>
							<div class="thumb-caption">
								<h4 class="thumb-title"><a href="deluxe-room.php">Deluxe Rooms</a></h4>
								<p class="thumb-desc">Well appointed and elegantly decorated and equipped with all the amenities for comfortable stay.</p>
							</div>
							<div class="gap gap-small"></div>
							<a  class="btn btn-primary" href="deluxe-room.php">View More</a>
						</div>
					</div>
					
				</div>
				
			</div>

			<div class="gap"></div>

		</div>
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