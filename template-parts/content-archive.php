<article>

 <img src="<?php the_post_thumbnail_url(); ?>">

 <h2 class="title">
  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
 </h2>

 <ul class="meta">
  <li>
   <i class="fa fa-calander"></i> <?php the_date(); ?>
  </li>
  <li>
   <i class="fa fa-user"></i> <a href="<?php echo get_author_post_url(get_the_author_meta('ID')); ?>"><?php
   the_author(); ?></a>
  </li>
  <li>
   <i class="fa fa-tag"></i> <?php the_category(', '); ?>
  </li>
 </ul>
 <p><?php the_excert() ?></p>
</article>