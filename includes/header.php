<?php require_once(dirname(__FILE__)."/../vars.php"); ?>
<?php
	$full_name = $_SERVER['PHP_SELF'];
	$name_array = explode('/',$full_name);
	$count = count($name_array);
	$page_name = $name_array[$count-1];
?>
<header id="main-header">
	<div class="container" id="sticky-alt">
		<div class="col-md-2">
			<a href="index.php">
				<img class="logo-alt" src="img/logo.jpg" alt="<?php echo $hotel_name.' Logo';?>">
			</a>
		</div>
		<div class="col-md-10 pull-right">
			<div class="nav">
				<ul class="slimmenu mobile_slimmenu text-right" id="slimmenu">
					<li><a class="<?php echo ($page_name=='index.php')?'active':'';?>" href="index.php">HOME</a>
					</li>
					<li><a class="<?php echo ($page_name=='rooms.php')?'active':'';?>" href="rooms.php">ROOMS</a>
						<ul>
							<li><a class="<?php echo ($page_name=='luxury-room.php')?'active':'';?>" href="deluxe-room.php">DELUXE ROOM</a>
							</li>
							<li><a class="<?php echo ($page_name=='luxury-room.php')?'active':'';?>" href="executive-room.php">EXECUTIVE ROOM</a>
							</li>
							
						</ul>
					</li>
					<li><a class="<?php echo ($page_name=='gallery.php')?'active':'';?>" href="gallery.php">GALLERY</a>
					</li>
					<li><a class="<?php echo ($page_name=='near-by-attractions.php')?'active':'';?>" href="near-by-attractions.php">SIGHT SEEING</a>
					</li>
					
					
					
					<li><a class="<?php echo ($page_name=='contact-us.php')?'active':'';?>" href="contact-us.php">CONTACT US</a>
					</li>
					<li><a class="<?php echo ($page_name=='#')?'active':'';?>" href="#">BOOK NOW</a>
					</li>
					<!-- <li><a href="<?php echo $link_qp;?>" target="_blank" class="btn btn-primary">Quick Pay</a>
					</li> -->
				</ul>
			</div>
		</div>
	</div>
</header>