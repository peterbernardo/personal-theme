<div class="span3 sidebar ">
	<div class="sidebar-nav-fixed" data-spy="affix">
		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'main' ) ) : ?>
				
				<aside id="branding" class="widget">
					<header id="branding" role="banner">
						<hgroup>
							<div class="bio-img"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_bloginfo('template_url');?>/assets/img/me.jpg" alt="<?php echo get_bloginfo( 'name'); ?>" width="172" height="188" /></a></div><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><h1 id="site-title"><span class="bold">byPete</span><span>Bernardo</span></h1></a>
						</hgroup>

					</header><!-- #branding -->
				</aside>
				<aside id="categories">
				<div class="row">
					<div class="span1"><a href="<?php $category_id = get_cat_ID( 'Photos' );$category_link = get_category_link( $category_id );echo($category_link);$thisCat = get_category($category_id);?> "><span class="bold"><?php echo $thisCat->count;?></span><span class="catName">Photos</span></a></div>
					<div class="span1 borderRight"><a href="<?php $category_id = get_cat_ID( 'Articles' );$category_link = get_category_link( $category_id );echo($category_link);$thisCat = get_category($category_id);?> "><span class="bold"><?php echo $thisCat->count;?></span><span class="catName">Articles</span></a></div>
					<div class="span1"><a href="<?php $category_id = get_cat_ID( 'Inspirations' );$category_link = get_category_link( $category_id );echo($category_link);$thisCat = get_category($category_id);?> "><span class="bold"><?php echo $thisCat->count;?></span><span class="catName">Inspirations</span></a></div>
				</div>
				</aside>
				<aside id="bio" class="widget">
					<p>Father, Husband, &amp; Miami Hurricanes fan. During the day I'm the Director of Design for <a href="http://www.352media.com">352 Media Group</a> in Atlanta, GA.</p>
				</aside>
				<aside>
					<ul class="where-else">
						<li class="twitter"><a href="http://twitter.com/petebernardo" rel="tooltip" title="twitter.com/petebernardo"><i class="icon-twitter"></i></a></li>
						<li class="facebook"><a href="http://facebook.com/petebernardo" rel="tooltip" title="facebook.com/petebernardo"><i class="icon-facebook"></i></a></li>
						<li class="linkedin"><a href="http://www.linkedin.com/in/petebernardo/" rel="tooltip" title="linkedin.com/in/petebernardo/"><i class="icon-linkedin"></i></a></li>
						<li class="instagram"><a href="http://www.instagram.com/petebernardo/" rel="tooltip" title="instagram.com/petebernardo"><i class="icon-camera-retro"></i></a></li>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
	</div><!--/.well -->
</div><!--/span-->