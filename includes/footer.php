   	<!-- :::::::::: Footer Image :::::::::: -->
   	<img src="./images/ui/footer.jpg" class="img-responsive" alt="Copyright Luke Michaels">
   
   </div><!--wrapper-->
   
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.rwdImageMaps.min.js"></script>
    <script src="js/jquery.imagesloaded.js"></script>
     <script src="js/jquery.colorbox-min.js"></script>
    <script src="js/jquery.wookmark.js"></script>
    
    <!-- :::::::::: Masonry :::::::::: -->
    <!-- <script src="js/masonry.js"></script> -->
    
    <script type="text/javascript">
		$(document).ready(function(e) {
		    
		    /* :::::::::: dynamic image maps :::::::::: */
		    $('img[usemap]').rwdImageMaps();
		    $('area').on('click', function() {
				/* alert($(this).attr('alt') + ' clicked'); */
			});
			
			/* :::::::::: Sticky Nav :::::::::: */
	        /*
			var stickyHeaderTop = $('#stickyheader').offset().top;
	 
	        $(window).scroll(function(){
	                if( $(window).scrollTop() > stickyHeaderTop ) {
	                        $('#stickyheader').css({position: 'fixed', top: '290px'});
	                        $('#stickyheader').css('opacity', '1')
	                } else {
	                        $('#stickyheader').css({position: 'static', top: '0px'});
	                        $('#stickyheader').css('opacity', '0');
	                }
	        });
			*/
			$("#stickyheader").hide()
			$(window).scroll(function(){
			      if($(window).scrollTop()>100){
			         $("#stickyheader").fadeIn();
			      }else{
			         $("#stickyheader").fadeOut();
			      }
			
			});
			
			/* :::::::::: masonry dynamic columns :::::::::: */
			/*
			var $container = $('#gallery');
   
		    $container.imagesLoaded( function(){
		      $container.masonry({
		        itemSelector : '.span_1_of_2'
		      });
		    });
			*/
			
			/*var container = document.querySelector('#gallery');
			var msnry = new Masonry( container, {
			  // options
			  itemSelector: '.span_1_of_2'
			});*/
			
			(function ($){
		      // Prepare layout options.
		      var options = {
		        autoResize: true, // This will auto-update the layout when the browser window is resized.
		        container: $('#main'), // Optional, used for some extra CSS styling
		        offset: 2, // Optional, the distance between grid items
		        itemWidth: 210 // Optional, the width of a grid item
		      };
		
		      // Get a reference to your grid items.
		      var handler = $('#tiles li');
		
		      // Init lightbox
		      $('a', handler).colorbox({
		        rel: 'lightbox'
		      });
		
		      // Call the layout function after all images have loaded
		      $('#tiles').imagesLoaded(function() {
		        handler.wookmark(options);
		      });
	    })(jQuery);
			
		});
    </script>

  </body>
</html>