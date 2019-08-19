<?php require_once(dirname(__FILE__)."/../vars.php"); ?>
<footer id="main-footer">
	<div class="container">
		<div class="row row-wrap">
			<div class="col-md-3 col-xs-6">
				<a class="logo" href="index.php">
					<img src="img/logo.jpg" alt="Image Alternative text" title="Image Title" />
				</a>
				<p class="mb20">Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!</p>

				<ul class="list list-horizontal list-space">
					<li>
						<a class="fa fa-facebook box-icon-normal round animate-icon-border-rise" href="https://www.facebook.com/tmhotelmadurai" target="_blank"></a>
					</li>
					
					<li>
						<a class="fa fa-google-plus box-icon-normal round animate-icon-border-rise" href="http://www.google.com" target="_blank"></a>
					</li>
					<li>
						<a class="fa fa-linkedin box-icon-normal round animate-icon-border-rise" href="http://www.linkedin.com" target="_blank"></a>
					</li>
					<li>
						<a class="fa fa-pinterest box-icon-normal round animate-icon-border-rise" href="http://www.pinterest.com" target="_blank"></a>
					</li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-6">
				<h4 style="font-size: 17px;"> Our Location</h4>
				<h5 style="font-size: 17px;"class="text-color"><i class="fa fa-phone blink"></i> <a href="tel:<?php echo $hotel_phone; ?>"><?php echo $hotel_phone; ?></a></h5>
				<h5 style="font-size: 17px;"class="text-color"><i class="fa fa-phone blink"></i> <a href="tel:<?php echo $hotel_phone1; ?>"><?php echo $hotel_phone1; ?></a></h5>
				<h5 style="font-size: 17px;" class="text-color"><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $hotel_email; ?>" class="text-color"><?php echo $hotel_email; ?></a></h5>
				<h5 class="text-color"><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $hotel_email1; ?>" class="text-color"><?php echo $hotel_email1; ?></a></h5>
				<h5 style="font-size: 17px;"><i class="fa fa-map-marker"></i> T.M Hotel <br>
				50, West Perumal Maistry Street<br>
				Madurai - 625001 Tamilnadu, India</h5>
			</div>
			<div class="col-md-6 col-xs-12">
				<img src="img/map.png" style="width: 415px;margin-left: 151px;height: 250;">
			</div>
		</div>
		<div class="row">
			<div class="col-md-7 col-xs-4">
				<p> <a class="text-color" href="https://www.krantitechservices.com/" target="_blank">Powered By Krantitech Services</a></p>
			</div>
			<div class="col-md-5 col-xs-8">
				<p class="text-right"><a class="text-color" href="#">Sitemap</a> | <a class="text-color" href="contact-us.php">Contact Us</a> | <a class="text-color" href="terms-and-conditions.php">Terms & Conditions</a> | <a class="text-color" href="privacy-policy.php">Privacy Policy</a> | <a class="text-color" href="reservation-policy.php">Reservation Policy</a></p>
			</div>
			<div class="whtsapp">
				<a href="https://www.whatsapp.com/" ><img style="width: 140px;height:32px;"src="img/whatsapp.png" alt="fixed-img"></a>
			</div>
		</div>
	</div>
</footer>