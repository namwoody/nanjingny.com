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
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.96583878643!2d-73.98712548459349!3d40.762776079326414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258564cad3b67%3A0xfeffbe0b2339b8f5!2s241+W+51st+St%2C+New+York%2C+NY+10019!5e0!3m2!1sen!2sus!4v1487459603905" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>








<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>