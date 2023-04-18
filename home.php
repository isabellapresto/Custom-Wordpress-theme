<?php 
get_header();
?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							
							<h1>Blogg</h1>
						
							<?php if ( have_posts() ): while ( have_posts() ): the_post();?>
				
		<?php get_template_part("template-parts/content-archive", "content-archive") ?>

		<?php endwhile; endif; ?>
		
		<nav class="navigation pagination">
		<?php custom_pagination(); ?>

							</nav>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
			<div id="sidebar">
				<ul>
					<li>
						<?php get_search_form();?>
					</li>
				</ul>
				<ul role="navigation">
					<li class="pagenav">
						<h2>Sidor</h2>
						<ul>
							<li class="page_item current_page_item">
								<a href="<?php echo home_url(25);?>">Blogg</a>
							</li>
							<li class="page_item">
							<a href="<?php echo the_permalink(133);?>">Exempelsida</a>
							</li>
							<li class="page_item">
							<a href="<?php echo the_permalink(35);?>">Kontakt</a>
							</li>
							<li class="page_item page_item_has_children">
							<a href="<?php echo the_permalink(130);?>">Om mig</a>
							<ul class="children">
							<li class="page_item">
							<a href="<?php echo the_permalink(135);?>">Intressen</a>
							</li>
							<li class="page_item page_item_has_children">
							<a href="<?php echo the_permalink(138);?>">Portfolio</a>
							<ul class="children">
							<li class="page_item">
							<a href="<?php echo the_permalink(140);?>">Projekt 1</a>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="page_item">
				<a href="<?php echo home_url();?>">Startsida</a>
			</li>
		</ul>
	</li>
	<li>
		<h2>Arkiv</h2>
		<ul>
		<li>
			<a href="arkiv.html">oktober 2016</a>
		</li>
	</ul>
</li>
<li class="categories">
	<h2>Kategorier</h2>
	<ul>
		<li class="cat-item">
			<a href="">Natur</a> (1)
		</li>
		<li class="cat-item">
			<a href="">Okategoriserade</a> (3)
		</li>
	</ul>
</li>
</ul>
</div>
</aside>
					</div>
				</div>
			</section>
		</main>

		<?php 
get_footer();
?>

