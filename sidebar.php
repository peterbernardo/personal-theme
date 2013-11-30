<div class="col-xs-12 col-sm-4 sidebar">
	<div class="sidebar-nav-fixed" data-spy="affix">
		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'main' ) ) : ?>
				
				<aside id="branding" class="widget">
					<header id="branding" role="banner">
						<hgroup>
							<div class="bio-img"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_bloginfo('template_url');?>/assets/img/me.jpg" alt="<?php echo get_bloginfo( 'name'); ?>" /></a></div><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><h1 id="site-title"><span class="bold">byPete</span><span>Bernardo</span></h1></a>
						</hgroup>

					</header><!-- #branding -->
				</aside>
				<aside id="categories">
				<div class="row">
					<div class="col-sm-4"><a href="<?php $category_id = get_cat_ID( 'Photos' );$category_link = get_category_link( $category_id );echo($category_link);$thisCat = get_category($category_id);?> "><span class="bold"><?php echo $thisCat->count;?></span><span class="catName">Photos</span></a></div>
					<div class="col-sm-4 borderRight"><a href="<?php $category_id = get_cat_ID( 'Articles' );$category_link = get_category_link( $category_id );echo($category_link);$thisCat = get_category($category_id);?> "><span class="bold"><?php echo $thisCat->count;?></span><span class="catName">Articles</span></a></div>
					<div class="col-sm-4"><a href="<?php $category_id = get_cat_ID( 'Inspirations' );$category_link = get_category_link( $category_id );echo($category_link);$thisCat = get_category($category_id);?> "><span class="bold"><?php echo $thisCat->count;?></span><span class="catName">Inspirations</span></a></div>
				</div>
				</aside>
				<aside id="bio" class="widget">
					<p>Father, Husband, &amp; Miami Hurricane. During the day I'm the Director of Design & UX for <a href="http://www.352media.com">352</a> in Atlanta.</p>
				</aside>
				<aside>
					<ul class="where-else">
						<li class="twitter"><a href="http://twitter.com/petebernardo" rel="tooltip" title="twitter.com/petebernardo"><i class="fa fa-twitter"></i></a></li>
						<li class="facebook"><a href="http://facebook.com/petebernardo" rel="tooltip" title="facebook.com/petebernardo"><i class="fa fa-facebook"></i></a></li>
						<li class="linkedin"><a href="http://www.linkedin.com/in/petebernardo/" rel="tooltip" title="linkedin.com/in/petebernardo/"><i class="fa fa-linkedin"></i></a></li>
						<li class="instagram"><a href="http://www.instagram.com/petebernardo/" rel="tooltip" title="instagram.com/petebernardo"><i class="fa fa-camera-retro"></i></a></li>
					</ul>
				</aside>
				<aside class="quote"><a href="https://twitter.com/jack/status/17680161621151744" rel="tooltip" data-toggle="tooltip" title="What I believe in.">Make every detail perfect and limit the number of details to perfect.<br/></a><span class="small">- @jack</span></aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
	</div><!--/.well -->
</div><!--/span-->