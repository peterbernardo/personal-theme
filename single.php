<?php
get_header(); ?>
	<div class="row">
		<div id="content" class="col-xs-12 col-sm-8 contentColumn">


				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!--/span-->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>