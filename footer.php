<div id="jSplash">
	<div id="logo3" class="logo"></div>
</div>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<footer>
</footer>
<script type="text/javascript">
	$(window).resize(function() {
	    $('.block').height($(window).height());
	});
	$(window).trigger('resize');
</script>
<script type="text/javascript">
	if ( $(window).width() < 400) {
	 $('#header-img').anystretch("img/ele/bg.jpg", {speed: 200});
	}
	else {
	 $('#header-img').anystretch("img/ele/bg.jpg", {speed: 200}); 
	}
</script>
<script type="text/javascript">
	var logoRed = $('.landing-fade');
	var logoWhite = $('.landing-fade2');
	var landingHeader = $('.landing-fade3');
	var nextFade = $('#next-to-desc');
	$(window).on('scroll', function() {
	   var st = $(this).scrollTop();
	   var pt = $('.block').height();
	   logoRed.css({ 'opacity' : (.5 - st/pt) });
	   logoWhite.css({ 'opacity' : (1.1 - st/pt) });
	   nextFade.css({ 'opacity' : (1 - (st/pt)*2) });
	   landingHeader.css({ 'opacity' : (1 - (st/pt)*2) });
	});
</script>
<script type="text/javascript">
$(document).ready( function() {
	var timer;	//timer for splash screen
	
	//calling jPreLoader
	$('body').jpreLoader({
		splashID: "#jSplash",
		loaderVPos: '80%',
		splashFunction: function() {  
			//passing Splash Screen script to jPreLoader
			$('#jSplash').children('section').not('.selected').hide();
			$('#jSplash').hide().fadeIn(100);
			
			timer = setInterval(function() {
				splashRotator();
			}, 4000);
		}
	}, function() {	//callback function
		clearInterval(timer);
		$('#footer')
		.animate({"bottom":0}, 500);
		$('#header')
		.animate({"top":0}, 800, function() {
			$('#wrapper').fadeIn(200);
		});
	});
	
	//create splash screen animation
	/*
function splashRotator(){
		var cur = $('#jSplash').children('.selected');
		var next = $(cur).next();
		
		if($(next).length != 0) {
			$(next).addClass('selected');
		} else {
			$('#jSplash').children('section:first-child').addClass('selected');
			next = $('#jSplash').children('section:first-child');
		}
			
		$(cur).removeClass('selected').fadeOut(800, function() {
			$(next).fadeIn(800);
		});
	}
*/
});
</script>
</body>
</html>