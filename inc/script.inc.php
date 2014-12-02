<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery.animsition.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	
		var windowsize = $(window).width(),
			useragent = navigator.userAgent,
			isIphone = useragent.match(/iPhone/i),
			isIpad = useragent.match(/iPad/i),
			isWinDskp = useragent.match(/NT/i);
			
		//if (windowsize > 767) {
		if (isWinDskp == "NT") {
			$(".animsition").animsition({
				inClass               :   'fade-in-up',
				outClass              :   'fade-out-up',
				inDuration            :    1500,
				outDuration           :    800,
				linkElement           :   '.animsition-link', 
				// e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
				touchSupport          :    true, 
				loading               :    true,
				loadingParentElement  :   'body', //animsition wrapper element
				loadingClass          :   'animsition-loading',
				unSupportCss          : [ 'animation-duration',
										  '-webkit-animation-duration',
										  '-o-animation-duration'
										]
			});
		} else {
			$( "*" ).removeClass("animsition");	
		};
		
		var headerheight = $('#headerscroll').height(),
			headerposition = $('#headerscroll').position().top + 160;

		$(window).scroll(function(){
			if (($(this).scrollTop() > headerposition) && (isWinDskp == "NT") && (windowsize > 767)) {
				$('#headerscroll').addClass("headerscroll");
				$('#wrapper').css("margin-top", headerheight);
				$('#headerscroll').fadeIn();
			} else if (isWinDskp == "NT") {
				$('#headerscroll').removeClass("headerscroll");
				$('#wrapper').css("margin-top", 0);
				$('#headerscroll').css("display", "");
			}
		}); 
		
	}); 
</script>
	
<script type="text/javascript">
	$(document).ready(function(){

		// Blur images on mouse over
		$(".portfolio a").hover( function(){ 
			$(this).children("img").animate({ opacity: 0.8 }, "fast"); 
		}, function(){ 
			$(this).children("img").animate({ opacity: 1.0 }, "fast"); 
		}); 
		
		// Contact form validation 	
		if (jQuery().validate) {
				$("#contact_form").validate();	 
		}; 
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){ 

		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
				$('.scrollup').fadeIn();
			} else {
				$('.scrollup').fadeOut();
			}
		}); 
		
		$('.scrollup').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 600);
			return false;
		});

	});
</script>

<script src="js/jquery.validate.min.js"></script>

<!-- Google Analytics -->
<script type="text/javascript">
	
</script>