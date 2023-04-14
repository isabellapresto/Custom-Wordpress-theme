<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	
	<title><?php wp_title();?></title>
	

	<!-- get css  -->
	
	<?php
	wp_head();
	?>

	<!-- <script src="js/jquery.js"></script> -->
</head>

<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
					<!-- the_title();?> -->

					

						<a class="logo" href="index.html">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
								<label class="screen-reader-text">Sök efter:</label>
								<input type="text" />
								<input type="submit" value="Sök" />
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>









		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">


					<?php
		wp_nav_menu(
			array(
				'meny' => 'primary',
				'container' => '',
				'theme_location' => 'primary',
				//denna gär att jag ser min egen klass i inspektorn inte wp - css blir fel 
				// 'items_wrap' => '<ul id="" class="menu">%3$s<ul>'
			)
			);

			?>

					</div>
				</div>
			</div>
		</nav>