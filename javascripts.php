<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jpreloader.min.js"></script>
<script type="text/javascript" src="js/jquery.anystretch.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.25064.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>	
<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
		$('.next-trigger').localScroll({
		   target:'body',
		   axis:'y',
		   duration: 600
		});
});
</script>
<!--
<script type="text/javascript">
if ( $(window).width() > 770) {
 document.write("<script src='js/shadowbox.js'><\/script>");
}
else {
 document.write("<script src='js/code.photoswipe-3.0.5.min.js'><\/script>");
}
</script>
-->
<!--
<script type="text/javascript">
	(function(window, PhotoSwipe){
		document.addEventListener('DOMContentLoaded', function(){
			var
				options = {},
				instance = PhotoSwipe.attach( window.document.querySelectorAll('#index-body .gallery a'), options );
		}, false);
	}(window, window.Code.PhotoSwipe));
</script>
-->
<!--
<script type="text/javascript">
	$(function() {
	  if($(window).width() <= 600) {
	    $("#index-work .gallery a").each(function() {
	      $(this).attr("href", $(this).attr("href").replace("img/port/norm/", "img/port/small/"));
	    });
	  }
	});
</script>
-->
<!--
<script type="text/javascript">
	Shadowbox.init({
	    overlayColor: "#000",
	    overlayOpacity: "0.8",
	    continuous: true
	});
</script>
-->