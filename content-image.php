<?php
/**
 * The template for displaying posts in the Image Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="meta" data-spy="scroll">
	<?php format_icon(get_post_format()); ?>
	<div class="date">
		<div class="month"><?php echo get_the_date('M'); ?></div>
		<div class="day"><?php echo get_the_time('d', $post->ID); ?></div>
		</div>
</div>
		<header class="entry-header">
			<hgroup>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			</hgroup>
			<div class="byline visible-xs">by <?php the_author_link();?> on <?php echo get_the_date(); ?></div>

		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div>
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
		<!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->