      <div class="row">
      <footer class="col-xs-12" id="colophon" role="contentinfo">
        <p>&copy; <?php echo date('Y');?></p>
        <?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
      </footer>
      </div>
    </div><!--/.container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.fitvids.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.sticky.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/waypoints.min.js"></script>

    <script>
    	$(document).ready(function(){
    	    $('.meta').sticky({topSpacing:0, className: 'sticky', wrapperClassName: 'my-wrapper'});
    		$('.meta').waypoint(
    			function(direction) {
    			if (direction === 'down') {
    					$(this).fadeOut('slow');
    				} else {
    					$(this).fadeIn('fast');
    					}
    					},{offset: function() {return -$(this).parent().parent().outerHeight() + 250;}
	    				});

	  	    				$('article .instagram_photo').each(function(index) {
	  	    					if ($(this).attr('data-lat') !=''){
		  	    				var map_image = '<img src="//maps.googleapis.com/maps/api/staticmap?center='+$(this).attr('data-lat')+','+$(this).attr('data-lng')+'&zoom=16&size=400x400&sensor=false&maptype=roadmap&style=saturation:46&markers=color:gray%7Csize:tiny%7C'+$(this).attr('data-lat')+','+$(this).attr('data-lng')+'">';
		  	    				$(this).parent().parent().parent().find('footer div.row div.meta-info').append('<a href="https://maps.google.com/maps?q='+$(this).attr('data-lat')+','+$(this).attr('data-lng')+'" class="map_toggle" rel="tooltip" data-html="true" data-placement="top"><i class="fa fa-map-marker"></i> '+$(this).attr('data-lat')+','+$(this).attr('data-lng')+'</a>');
		  	    				$(this).parent().parent().parent().find('a[rel=tooltip]').attr('data-title',map_image);}
	  	    				});
	  	    				$(window).resize(function() {
	  	    					  	    				$.waypoints('refresh');

	  	    					  	    				});
	    					$("a[rel=tooltip]").tooltip({trigger: 'hover'});
							$(".entry-content").fitVids();


	    			});
	    				</script>

    <?php wp_footer(); ?>

  </body>
</html>