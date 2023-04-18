<!-- ligger i page -->


<?php 
get_header();
?>

		<main> 
			<section>
				<!-- //får man ha kvar det här? -->
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
							<!-- //är detta rätt? -->
								<img src=<?php echo get_template_directory_uri().'/assets/img/city.jpg';?> /> 
							
								<div class="text">

									<?php
        if ( have_posts() ) {

									while ( have_posts() ) {
						
									the_post();
									the_content();
								}
							}
							?>
								
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<?php 
get_footer();
?>