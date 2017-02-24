<?php
/**
 * Template Name: orderonline Template
 *
 **/
?>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="parallax-gallery" data-parallax="scroll">


</div>

<div class="container">
	<div class="row" id="home-content">
		<h2><?php the_title(); ?></h2>

	<?php the_content(); ?>			
	</div>
</div>
	<?php endif; ?>


<?php endwhile; ?>










<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>