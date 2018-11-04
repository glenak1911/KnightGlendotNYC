<?php get_header(); ?>
	<div class="row blog-main">
			<div class="col-sm-8">
	      <?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile;endif;?>

			</div> <!-- /.blog-main -->
		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
	<nav>
		<ul class="pager">
			<li><?php next_posts_link( 'Older' ); ?></li>
			<li><?php previous_posts_link( 'Newer' ); ?></li>
		</ul>
	</nav>
<?php get_footer(); ?>
