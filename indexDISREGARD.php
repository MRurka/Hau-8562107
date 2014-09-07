<!DOCTYPE html>
<html lang="en">
<head>
		<!--     -->
		<meta name="robots" content="noindex">
		<!--     -->
		<title>__________</title>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="description" content="_________________">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="img/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		
</head>
<body>
	<header>
		<div id="header-img"></div>
		<div id="header-push">
			<div class="vault">
				<div class="content">
					<p>Rurka Design</p>
					<p class="subtitle">Michaelrurka</p>
				</div>
			</div>
		</div>
	</header>
	<div id="index-body">
		<div class="vault">
			<div id="index-welcome">
				<h1>"Versed in Graphic, Print and Web Design, I'm focused on the essential balance of design effectiveness and sexiness."
						<div class="signature">- Michael Rurka</div>
				</h1>
			</div>
			<section id="index-work">
				<h3>Featured Work <a href="http://rurkadesign.com/portfolio.php"> // See all</a></h3>
				<div class="gallery">
					<a href="img/port/norm/winter3.jpg" rel="shadowbox[rude]" title=""><div id="winter" class="item" style="background-image:url(img/thumbs/winter-t.jpg);"></div></a>
					<a href="img/port/norm/visit.jpg" rel="shadowbox[rude]" title=""><div id="visit" class="item" style="background-image:url(img/thumbs/visit-t.jpg);"></div></a>
					<a href="img/port/norm/kaa.jpg" rel="shadowbox[rude]" title=""><div id="kaa" class="item end" style="background-image:url(img/thumbs/kaa-t.jpg);"></div></a>
					<a href="img/port/norm/orni.jpg" rel="shadowbox[rude]" title=""><div id="orni" class="item" style="background-image:url(img/thumbs/orni-t.jpg);"></div></a>
					<a href="img/port/norm/buen2.jpg" rel="shadowbox[rude]" title=""><div id="buen" class="item" style="background-image:url(img/thumbs/buen-t.jpg);"></div></a>
					<a href="img/port/norm/red.jpg" rel="shadowbox[rude]" title=""><div id="red" class="item end" style="background-image:url(img/thumbs/red-t.jpg);"></div></a>
					<a href="img/port/norm/monkey.jpg" rel="shadowbox[rude]" title=""><div id="monkey" class="item" style="background-image:url(img/thumbs/monkey-t.jpg);"></div></a>
					<a href="img/port/norm/gravity.jpg" rel="shadowbox[rude]" title=""><div id="gravity" class="item" style="background-image:url(img/thumbs/gravity-t.jpg);"></div></a>
					<a href="img/port/norm/nike.jpg" rel="shadowbox[rude]" title=""><div id="nike" class="item end" style="background-image:url(img/thumbs/nike-t.jpg);"></div></a>
				</div>
			</section>
			<div class="clear"></div>
			<section id="index-about">
				<h3>About</h3>
				<div class="content">
					<section class="west">
						<h4>Rurka Design</h4>
						<div class="content">
							<p>
								Designing for Print and Web wilst considering Accessibility, Usability and Efficiency. 
								I'm interested in providing what is necessary to solve a problem as opposed to aesthetic "design" that blankets the problem. 
								I also build websites.
							</p>
						</div>
					</section>
					<section class="east">
						<h4>Michael Rurka</h4>
						<div class="content">
							<p>
								Born in Fredericton, New Brunswick, Canada, I attended NBCCD and attained my Graphic Design Diploma. 
								Graphics aside, I'm also Painter & Mixed Media Artist, and I've been featured in 6 gallery exhibitions. 
								And finally, wine and working hard are two things I love.
							</p>
						</div>
					</section>
				</div>
<!--
				<div id="feedback-link">
			Got a minute? Shoot me some <a href="http://rurkadesign.com/feedback_form.php">feedback on my website!</a>
				</div>
-->
			</section>
		</div>
	</div>
	<div class="clear"></div>
	<footer>
		<div class="vault">
			<div class="content">
				Ph: <a href="tel:15062928821">506 &#50;&#57;&#50; 88&#50;1</a>
				<br>
				<a href="mailto:&#109;&#105;&#99;&#104;&#97;&#101;&#108;&#64;&#114;&#117;&#114;&#107;&#97;&#100;&#101;&#115;&#105;&#103;&#110;&#46;&#99;&#111;&#109;">
				&#109;&#105;&#99;&#104;&#97;&#101;&#108;&#64;&#114;&#117;&#114;&#107;&#97;&#100;&#101;&#115;&#105;&#103;&#110;&#46;&#99;&#111;&#109;</a>
				<br>
				Fredericton, New Brunswick, Canada
				<br>
				<br>
				<div id="copyright">&#169; 1991-<?php echo date('Y');?> Rurka Design. i.e. Don't steal my shit.</div>
			</div>
		</div>
		<div id="version">v1</div>
		<div class="clear"></div>
	</footer>
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="js/jquery.anystretch.min.js"></script>
<script async type="text/javascript" src="js/klass.min.js"></script>
<script async type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script async type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="master-end_2.css"/>
<script>
if ( $(window).width() > 770) {
 document.write("<script src='js/shadowbox.js'><\/script>");
}
else {
 document.write("<script src='js/code.photoswipe-3.0.5.min.js'><\/script>");
}
</script>
<script>
	$(window).resize(function() {
	    $('#header-img').height($(window).height());
	});
	$(window).trigger('resize');
	
	$(window).resize(function() {
	    $('#header-push').height($(window).height());
	});
	$(window).trigger('resize');
</script>
<script type="text/javascript">
	(function(window, PhotoSwipe){
		document.addEventListener('DOMContentLoaded', function(){
			var
				options = {},
				instance = PhotoSwipe.attach( window.document.querySelectorAll('#index-body .gallery a'), options );
		}, false);
	}(window, window.Code.PhotoSwipe));
</script>
<script>
	$(function() {
	  if($(window).width() <= 600) {
	    $("#index-work .gallery a").each(function() {
	      $(this).attr("href", $(this).attr("href").replace("img/port/norm/", "img/port/small/"));
	    });
	  }
	});
</script>
<script type="text/javascript">
	Shadowbox.init({
	    overlayColor: "#000",
	    overlayOpacity: "0.8",
	    continuous: true
	});
</script>
<script>
if ( $(window).width() < 400) {
 $('#header-img').anystretch("img/elements/bg-mobile.jpg", {speed: 200});
}
else {
 $('#header-img').anystretch("img/elements/bg.jpg", {speed: 200}); 
}
</script>
</body>
</html>