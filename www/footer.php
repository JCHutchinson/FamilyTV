  
 <div id="footer">

</div>
 
  <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
	<!-- Skrollr -->
	<script src="js/skrollr.min.js"></script>
	
	<script type="text/javascript">
	skrollr.init({
			
			constants: {
			//fill the box for a "duration" of 150% of the viewport (pause for 150%)
			//adjust for shorter/longer pause
			box: '100p'
		}
		});
		
		
	</script>
	
	<!-- WOW.js -->
	<script src="js/wow.min.js"></script>
    <script>
       wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       200,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
    </script>
	
	<!-- Smooth Scrolling -->
	<script>
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 1000);
			return false;
		  }
		}
	  });
	});
	</script>
	
	<!-- Change nav text color on scroll -->
	<script>
	  var pic = $( window ).height();
	  var dub = pic * 2;
	
		$(document).ready(function(){       
            var scroll_pos = 0;
            $(document).scroll(function() { 
                scroll_pos = $(this).scrollTop();
				//var itis = document.getElementByID(section1);
                if(scroll_pos > pic ){
                   //$("nav li a").css('color', 'white');
                   //$("#logo").css('color', 'white');
                  // $("nav").css('visibility', 'visible');
                   $("nav").css('visibility', 'visible');
                   $("nav").fadeIn(200);
                } else {
                    //$("nav li a").css('color', '#333333');
                    //$("#logo").css('color', '#333333');
					 $("nav").fadeOut(200);
				
                }
            });
        });
	</script>
	
</body>
</html>