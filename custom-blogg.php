<?php
/**
* Template Name: blogg sida tema 
**/
?>

<?php 
get_header();
?>

		<main> 
			<section>
				<!-- //om jag tar bort detta får jag ut rätt på de andra sidorna -->
				<!-- <div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero"> -->
							<!-- //ska inte vara hårdkodad -->
								<img src="wp-content/themes/tema-Inlämningsuppgift-1/assets/img/city.jpg" /> 
					
								<div class="text">

								<!-- content skrivs in i wp -->
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

