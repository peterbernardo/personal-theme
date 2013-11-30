<?php

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 584;

if ( ! function_exists( 'twentyeleven_content_nav' ) ) :
/**
 * Displays navigation to next/previous pages when applicable.
 *
 * @since Twenty Twelve 1.0
 */
function twentyeleven_content_nav( $html_id ) {
	global $wp_query;

	$html_id = esc_attr( $html_id );

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyeleven' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></div>
		</nav><!-- #<?php echo $html_id; ?> .navigation -->
	<?php endif;
}
endif;
if ( ! function_exists( 'twentyeleven_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own twentyeleven_posted_on to override in a child theme
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_posted_on() {
	printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s' ), get_the_author() ) ),
		get_the_author()
	);
}
endif;

/**
 * Adds two classes to the array of body classes.
 * The first is if the site has only had one author with published posts.
 * The second is if a singular post being displayed
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_body_classes( $classes ) {

	if ( function_exists( 'is_multi_author' ) && ! is_multi_author() )
		$classes[] = 'single-author';

	if ( is_singular() && ! is_home() && ! is_page_template( 'showcase.php' ) && ! is_page_template( 'sidebar-page.php' ) )
		$classes[] = 'singular';

	return $classes;
}

function slug_icon($slug_name){
	switch($slug_name){
		
		case 'photos':
		echo "<i class=\"fa fa-camera-retro\"></i>";
		break;
		
		case 'articles':
		echo "<i class=\"fa fa-pencil\"></i>";
		break;
		
		case 'inspirations':
		echo "<i class=\"fa fa-bolt\"></i>";
		break;
	}
}
function format_icon($format_type){
	switch($format_type){
		
		case 'image':
		echo "<i class=\"arrow fa fa-camera-retro\"></i>";
		break;
		case 'aside':
		echo "<i class=\"fa fa-pencil\"></i>";
		break;
		case 'link':
		echo "<i class=\"arrow fa fa-external-link\"></i>";
		break;
		case 'quote':
		echo "<i class=\"arrow fa fa-quote-left\"></i>";
		break;
		case 'status':
		echo "<i class=\"arrow fa fa-twitter\"></i>";
		break;
		case 'video':
		echo "<i class=\"arrow fa fa-play-circle\"></i>";
		break;
		default:
		echo "<i class=\"arrow fa fa-bolt\"></i>";
		break;


	}
}
add_filter( 'body_class', 'twentyeleven_body_classes' );
add_shortcode('bp_image',  'bp_image' );
function bp_image($atts, $content = null) {
		extract(shortcode_atts(array(	'lat' => '',
										'lng' => '',
										'likes' => '',
										'src' => '',
										'alt' => '',
										'url' => ''  ), $atts));
		$html = '';
		$html .= '<p><img class="instagram_photo"  ';
		$html .= 'alt="'.$alt.'" ';
		$html .= 'src="'.$src.'" ';

		$html .= 'data-lat="'.$lat.'" ';
		$html .= 'data-lng="'.$lng.'" ';
		$html .= 'data-url="'.$url.'" ';
		$html .= 'data-likes="'.$likes.'" ';
		$html .= '></p>';
	
		return $html;
	}

