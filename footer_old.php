
      <div class="row">
      <footer class="span12" id="colophon" role="contentinfo">
        <p>&copy; 2012</p>
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
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap-transition.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap-modal.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap-popover.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.fitvids.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.sticky.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/waypoints.min.js"></script>

    <script>$(document).ready(function(){ $(".entry-content").fitVids();}); </script>
    <script>
    	$(document).ready(function(){
    	//$('body').append('<div id="map_data"></div>')
    	var numMaps = 0;
    	function gMaps(){
    	var map;
	    $('div.map_canvas').each(function(index) {
	    
		   $('body').append('<div id="map_data_'+numMaps+'"></div>');
		var lat = $(this).attr("data-lat");
		var lon = $(this).attr("data-lon");

		var markertitle = $(this).attr("data-marker");	
		var mapOptions = {
          center: new google.maps.LatLng(lat, lon),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map_data_"+numMaps),mapOptions);

        numMaps++;
            });
            google.maps.event.addListenerOnce(map, 'idle', function(){
            	processMapData();
            });
    }
    function processMapData(){
	    for(i=0;i<numMaps;i++){
		    map_data = $('#map_link_'+i).attr('data-content');
		    new_map_data = map_data.replace('<div style="overflow: hidden;"></div></div>','');
		    console.log(new_map_data);
		    new_map_data2 = new_map_data+$('#map_data_'+i).html();
		    		    console.log(new_map_data2);

		    $('#map_link_'+i).attr('data-content',new_map_data2);

	    }
	    
    }
    		$('.meta').sticky({topSpacing:0, className: 'sticky', wrapperClassName: 'my-wrapper'});
    		$('.meta').waypoint(
    			function(event, direction) {
    			if (direction === 'down') {
    					$(this).fadeOut('slow');
    				} else {
    					$(this).fadeIn('fast');
    					}
    					},{
	    				offset: function() {return -$(this).parent().parent().outerHeight() + 200;}
	    				});var i = 0;
	    				$('article .map_canvas').each(function(index) {
	    					
	    					//var map_data = $('article .map_canvas').clone(false);
	    					//map_data = map_data[0]['outerHTML'];
	    					//console.log(map_data);
	    					$(this).parent().parent().children('footer').append('<a href="#" id="map_link_'+i+'"class="map_toggle" rel="popover" data-placement="top">Map</a>');
	    					i++;
	    					//$(this).children('a.map_toggle').data('html', map_data[0]['outerHTML']);
	    					//$("a[rel=popover]").popover().click(function(e) {e.preventDefault()});
	    					//console.log($(this));
	    					//$(this).children('a[rel=popover]').popover({trigger: 'click'},{html: map_data[0]['outerHTML']}).click(function(e) {e.preventDefault()});
	    				});
	    				$('article .map_canvas').each(function(index) {
		    				var map_data = $(this).clone(true);
		    				
		    				map_data = map_data[0]['outerHTML'];
		    				$(this).parent().parent().parent().find('a.map_toggle').attr('data-content',map_data);
		    				$(this).parent().parent().parent().find('a.map_toggle').popover({html:true}).click(function(e) {e.preventDefault()});
		    				//$(this).remove();
	    				});
	    					gMaps();
	    			});
	    				</script>
    <?php wp_footer(); ?>

  </body>
</html>