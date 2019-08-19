
<?php require_once 'vars.php';
$view_trigger = isset($_GET['enable-desktop-view']);
?>
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
		
	require 'email-utils/phpmailer/PHPMailerAutoload.php';
		
	// Send Email to Guest

	$hotel_addr = $client_address_line_1.', '.$client_address_line_2.' - '.$client_address_pin;
	
	$message = file_get_contents('email-utils/template-guest.php');
	$message = str_replace('[name]', $_POST['name'], $message);
	$message = str_replace('[email]', $_POST['email'], $message);
	$message = str_replace('[phone]', $_POST['phone'], $message);
	$message = str_replace('[subject]', $_POST['subject'], $message);
	$message = str_replace('[comments]', $_POST['comments'], $message);
	$message = str_replace('[hotelname]', $hotel_name, $message);
	$message = str_replace('[hoteladdr]', $hotel_addr, $message);
	$message = str_replace('[hotelphone]', $hotel_phone, $message);


	$apiUrl='http://192.168.1.23/notification-status/website-email/';
    $ch = curl_init();
	$data = array("to_ids" => [$_POST['email']], "cc_ids" => [], "bcc_ids"=> [], 
	"from_id"=>  $_POST['email'], "hotelname"=> $hotel_name,"hoteladdr"=> $hotel_addr,"hotelphone"=> $hotel_phone, "name"=> $_POST['name'], "email"=> "shubham@djubo.com", "phone"=> 
	$hotel_phone, "subject"=> $_POST['subject'], "comments"=> $_POST['comments']);
	$data_string = json_encode($data);                       
	$ch = curl_init($apiUrl); 
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
	   'Content-Type: application/json',                                                                                
	   'Content-Length: ' . strlen($data_string))                                                                       
	);
	$response = curl_exec($ch);
	
	
	$mail = new PHPMailer;
	$mail->setFrom($client_contact_email_recipient, $hotel_name);
	$mail->addAddress($_POST['email'], $_POST['name']);
	$mail->Subject = 'Thank You for Contacting '.$hotel_name;
	$mail->MsgHTML($message);
	$mail->IsHTML(true);
	$mail->send();
	
	// Send Email to Hotel
	
	$message = file_get_contents('email-utils/template-hotel.php');
	$message = str_replace('[name]', $_POST['name'], $message);
	$message = str_replace('[email]', $_POST['email'], $message);
	$message = str_replace('[phone]', $_POST['phone'], $message);
	$message = str_replace('[subject]', $_POST['subject'], $message);
	$message = str_replace('[comments]', $_POST['comments'], $message);
	
	$mail = new PHPMailer;
	$mail->setFrom($_POST['email'], $_POST['name']);
	$mail->addAddress($client_contact_email_recipient, $hotel_name);
	$mail->Subject = $_POST['name'].' Contacted You From Website';
	$mail->MsgHTML($message);
	if (!$mail->send()) {
		$alert = "<div><i class='fa fa-exclamation-circle'></i> <strong style='color:#ed8323';>There was an error, please call us to make a booking.</strong></div>";
	}
	else {
		header('Location: thank-you.php');
		
	}
}
else {
	$alert = "<div style='color:#ed8323';><i class='fa fa-exclamation-circle'></i> Please fill out the following fields: <strong>".$validation."</strong></div>";
}
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Contact Us</title>
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
			<li ><a href="index.php">Home</a>
			</li>
			<li  class="active">Contact Us</li>
		</ul>
		<h1 style="text-decoration:underline;font-size: 25px;" class="page-title text-color text-center">Contact Us</h1>

		<div class="row">
			<div class="col-md-8">
				<p >Feel free to contact us. Whenever you have any inquiry, just ask us. We are happy to assist you.</p>
				<p >If you are our existing customer, we love to hear your experience with us.</p>
				 <?=$alert;?>
				<form class="mt30" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group form-group-icon-left">
								<i class="fa fa-user input-icon input-icon-show text-color"></i>
								<label  class="text-color">Name</label>
								<input name="name" class="form-control" placeholder="Write Your Full Name" required="required" type="text" value="<?php echo isset($_POST['name'])?$_POST['name']:""; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group form-group-icon-left">
								<i class="fa fa-pencil input-icon input-icon-show text-color"></i>
								<label  class="text-color">Subject</label>
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
								<label  class="text-color">Phone</label>
								<input name="phone" class="form-control" placeholder="Enter Your Mobile Number" required="required" type="text" value="<?php echo isset($_POST['phone'])?$_POST['phone']:""; ?>" >
							</div>
						</div>
					</div>
					<div class="form-group">
						<label  class="text-color">Message</label>
						<textarea name="comments" class="form-control" placeholder="Write Your Message"><?php echo isset($_POST['comments'])?$_POST['comments']:""; ?></textarea>
					</div>
					 <button  type="submit" name="send" value="sendform" class="btn  btn-lg btn-primary" style="margin-bottom:35px;">Send message</button>
				</form>
			</div>
			<div class="col-md-4">
				<aside class="sidebar-right">
					<ul class="address-list list">
						<li>
							<h5 style="text-decoration: underline;"><i class="fa fa-envelope-o"></i> Email</h5><a style="color: #737373;font-weight: 600;font-size: 17px;" href="mailto:<?php echo $client_contact_email_recipient;?>"><?php echo $client_contact_email_recipient;?></a><br>
							<a href="#"><p class="mail" style="color: #737373;font-weight: 600;font-size: 17px;">tmhotelmadurai@gmail.com</p></a>
						
							<h5 style="text-decoration: underline;"><i class="fa fa-phone"></i> Phone Number</h5><a style="color: #737373;font-weight: 600;font-size: 17px;" href="tel:<?php echo $hotel_phone;?>"><?php echo $hotel_phone;?></a><br>
							<a style="color: #737373;font-weight: 600;"href="tel:<?php echo $hotel_phone;?>"><?php echo $hotel_phone1;?></a>
						</li>
						<li>
							<h5 style="text-decoration: underline;"style="font-weight: 600;font-size: 17px;"><i class="fa fa-map-marker"></i> Address</h5>
							<address style="font-weight: 600;font-size: 17px;"><?php echo $hotel_name; ?><br />
							<?php echo $client_address_line_1;?>
							<br />
							<?php echo $client_address_line_2." ".$client_address_pin;?>
							<br />
							</address>
						</li>
						<img src="img/web.png" style="width: 24px;">&nbsp;&nbsp;<a style="text-decoration:underline;color: #814813;font-weight: 600;font-size: 17px;"href="https://www.tmhotel.in/"> www.tmhotel.in</a><br>
						<!-- <img src="img/web.png" style="width: 24px;margin-top: 12px;">&nbsp;&nbsp;<a style="text-decoration:underline;color: #814813;font-weight: 600;font-size: 17px;position: relative;top: 8px;"href=" https://www.tmtravels.in/">  www.tmtravels.in</a> -->
					</ul>
				</aside>
			</div>
		</div>
	</div>
	<div class="gap gap-small"></div>
	
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