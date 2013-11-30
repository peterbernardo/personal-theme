<?php
/**
 * The template for displaying content featured in the showcase.php page template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

global $feature_class;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $feature_class ); ?>><div class="meta" data-spy="scroll">
	<?php format_icon(get_post_format()); ?>
	<div class="date">
		<div class="month"><?php echo get_the_date('M'); ?></div>
		<div class="day"><?php echo get_the_time('d', $post->ID); ?></div>
		</div>
	
</div>
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<div class="entry-meta">
			<?php twentyeleven_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

		<footer>
			<div class="row">
			<div class="col-sm-6 meta-info">
</div>				<div class="col-sm-6 meta-comments">			
				<?php if ( comments_open() && ! post_password_required() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( "Leave Comment" ) . '</span>', _x( '1', 'comments number' ), _x( '%', 'comments number' ) ); ?>
			</div>
			<?php endif; ?>
			</div>
			</div>
		</footer>
</article><!-- #post-<?php the_ID(); ?> -->
