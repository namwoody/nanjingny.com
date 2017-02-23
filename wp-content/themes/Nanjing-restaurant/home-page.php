<?php
/**
 * Template Name: Home Template
 *
 **/
?>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/images/drumofheaven.png">


</div>

<div class="container">
	<div class="row" id="home-content">
		<div class="col-md-6" id="about">
			<h2 class="text-center">About us</h2>
			<p>Nanjing Come &amp; experience New York's Best Asian Fusion spot Serving the best of Chinese, Thai &amp; Mughlai cuisine. At Nanjing we incorporate innovative Asian Fusion fare in our dishes &amp; our Chefs work hard to invigorate your taste buds with the freshest ingredients with a burst of flavors &amp; the opulent ambience through which we ensure that our guests have a gratifying experience. Check out our menu and visit us for an unforgetable Asian dining experience.</p>
		</div>
		<div class="col-md-6" id="home-image">
			<img src="<?php bloginfo('template_directory'); ?>/images/lamb.jpg" alt="lamb chop" width="540px" height="400px">
		</div>
	</div>
</div>
<div id="reservation">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				 <h1>Online Reservations</h1>
				 <p>
				 	Please fill out all the fields in the form below to book your online reservation.<br />
					If you would like to use Open Table Reservation system please click here
				 </p>
				 <?php echo do_shortcode('[contact-form-7 id="15" title="Contact form 1"]');?>

			</div>
		</div>
	</div>
</div>


<div class="parallax-map" data-parallax="scroll">
   <div class="container">
   	 <div class="row">
		<div class="col-md-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.96583878643!2d-73.98712548459349!3d40.762776079326414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258564cad3b67%3A0xfeffbe0b2339b8f5!2s241+W+51st+St%2C+New+York%2C+NY+10019!5e0!3m2!1sen!2sus!4v1487459603905" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-md-6 text-center">
			<img src="<?php bloginfo('template_directory'); ?>/images/dragon.png " alt="dragon" width="90px;">
			<h2>Business Hours</h2>
			<p>SUNDAY - THURSDAY : 11:00 AM - 10:30 PM<br />
				FRIDAY-SATURDAY : 11:00 AM - 11:30 PM
			</p>		
			<p>241 W 51st <br />
				New York, NY 10019<br />
				Tel: (212) 226-4565<br />
				info@nanjingny.com<br />

				<ul id="socialmedia">
					<li><a href="https://www.facebook.com/Nanjing-Restaurant-1299107400183130/">
						<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
					</a></li>
					<li><a href=""><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
				</ul>
			</p>
		</div>
	</div>
	</div>
</div>








<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>