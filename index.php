<?php 
get_header();
?>

		<main> 
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
						
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
			</section>
		</main>

		<?php 
get_footer();
?>
