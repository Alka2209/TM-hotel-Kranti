<?php require_once 'vars.php';?>
<?php
$alert = null;
if(isset($_POST['send'])=="sendform"){
	
// Validation Check

$continue = true;
$validation = "";

if(empty($_POST['name'])){
	$continue = false;
	$validation = "First Name, ";
}
if(empty($_POST['email'])){
	$continue = false;
	$validation .= "Email Address, ";
}
if(empty($_POST['phone'])){
	$continue = false;
	$validation .= "Phone Number";
}

// Validation OK, send email

if($continue===true){
		
	// Send Email to Guest

	$hotel_addr = $client_address_line_1.', '.$client_address_line_2.' - '.$client_address_pin;
	
	$to       = $_POST['email'];
	$subject  = 'Thank You for Contacting '.$hotel_name;
	$message  = 'hello';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'To: '. $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";
	$headers .= 'From: '. $hotel_name . '<showdown.boy2788@gmail.com>' . "\r\n";
	//$headers .= 'From: '. $hotel_name . '<' . $client_contact_email_recipient . '>' . "\r\n";
	$headers .= 'Reply-To: ' . $client_contact_email_recipient . "\r\n";
	$headers .= 'X-Mailer: PHP/' . phpversion();

	
	if (!mail($to, $subject, $message, $headers)) {
		$alert = "<div><i class='fa fa-exclamation-circle'></i> <strong style='color:#ed8323';>There was an error, please call us to make a booking.</strong></div>";	
	}
	else{
		header('Location: thank-you.php');
	}
	
	// Send Email to Hotel
}
else {
	$alert = "<div style='color:#ed8323';><i class='fa fa-exclamation-circle'></i> Please fill out the following fields: <strong>".$validation."</strong></div>";
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Luxe Contact</title>
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
			<li class="active">Contact Us</li>
		</ul>
		<h1 class="page-title text-color text-center">Contact Us</h1>

		<div class="row">
			<div class="col-md-8">
				<p>Feel free to contact us. Whenever you have any inquiry, just ask us. We are happy to assist you.</p>
				<p>If you are our existing customer, we love to hear your experience with us.</p>
				 <?=$alert;?>
				<form class="mt30" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group form-group-icon-left">
								<i class="fa fa-user input-icon input-icon-show text-color"></i>
								<label class="text-color">Name</label>
								<input name="name" class="form-control" placeholder="Write Your Full Name" required="required" type="text" value="<?php echo isset($_POST['name'])?$_POST['name']:""; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group-icon-left">
								<i class="fa fa-pencil input-icon input-icon-show text-color"></i>
								<label class="text-color">Subject</label>
								<input name="subject"class="form-control" placeholder="Your Contact Purpose" required="required" type="text" value="<?php echo isset($_POST['subject'])?$_POST['subject']:""; ?>" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group-icon-left">
								<i class="fa fa-envelope input-icon input-icon-show text-color"></i>
								<label class="text-color">Email</label>
								<input name="email" class="form-control" placeholder="Enter Your Email Address" required="required" type="text" value="<?php echo isset($_POST['email'])?$_POST['email']:""; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group-icon-left">
								<i class="fa fa-phone input-icon input-icon-show text-color"></i>
								<label class="text-color">Phone</label>
								<input name="phone" class="form-control" placeholder="Enter Your Mobile Number" required="required" type="text" value="<?php echo isset($_POST['phone'])?$_POST['phone']:""; ?>" >
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="text-color">Message</label>
						<textarea name="comments" class="form-control" placeholder="Write Your Message"><?php echo isset($_POST['comments'])?$_POST['comments']:""; ?></textarea>
					</div>
					 <button type="submit" name="send" value="sendform" class="btn  btn-lg btn-primary" style="margin-bottom:35px;">Send message</button>
				</form>
			</div>
			<div class="col-md-4">
				<aside class="sidebar-right">
					<ul class="address-list list">
						<li>
							<h5><i class="fa fa-envelope-o"></i> Email</h5><a href="mailto:<?php echo $client_contact_email_recipient;?>"><?php echo $client_contact_email_recipient;?></a>
						</li>
						<li>
							<h5><i class="fa fa-phone"></i> Phone Number</h5><a href="tel:<?php echo $hotel_phone;?>"><?php echo $hotel_phone;?></a>
						</li>
						<li>
							<h5><i class="fa fa-map-marker"></i> Address</h5>
							<address><?php echo $hotel_name; ?><br />
							<?php echo $client_address_line_1;?>
							<br />
							<?php echo $client_address_line_2." ".$client_address_pin;?>
							<br />
							India
							<br />
							</address>
						</li>
					</ul>
				</aside>
			</div>
		</div>
	</div>
	<div class="gap gap-small"></div>
	<!-- <div id="map-canvas" style="height:400px;"></div>
 -->
	<?php include 'includes/footer.php'; ?>

</div>
<p style="display:none">Website v1.1</p>
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
</div>
</body>
</html>