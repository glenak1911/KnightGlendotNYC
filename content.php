<div class="blog-post">
  <h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

 <?php the_excerpt(); ?>

 <a href="<?php comments_link(); ?>">
	<?php
	printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
</a>
<a href="<?php the_permalink(); ?>">
<br />
<btn class="page-btn">Read More</btn></a>
<hr />
</div><!-- /.blog-post -->
