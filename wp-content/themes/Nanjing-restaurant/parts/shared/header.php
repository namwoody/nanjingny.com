<div class="top-bar">

</div>


<header id="header">
      <div class="container">
		<div class="row">
		   <div class="col-md-4">
		   			<a href="<?php echo home_url(); ?>">
				<?php 
   					 echo do_shortcode("[metaslider id=42]"); 
					?>
			
			</a>
			</div>
			<div class="col-md-8 col-xs-12 text-right">
				<nav id="navigation">
					<ul>
						<?php wp_list_pages('title_li&'); ?>
					</ul>

				</nav>


			</div>
		</div>
	</div>
	
</header>






