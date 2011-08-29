<!DOCTYPE html>

<html>

<!--
	This is a jQuery Tools standalone demo. Feel free to copy/paste.
	                                                         
	http://flowplayer.org/tools/demos/
	
	Do *not* reference CSS files and images from flowplayer.org when in production  

	Enjoy!
-->

<head>
	<title>jQuery Tools standalone demo</title>

	<!-- include the Tools -->
	<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>


	<link rel="stylesheet" type="text/css" href="/css/overlay-apple.css"/>
	
	<style>
	
	/* use a semi-transparent image for the overlay */
	#overlay {

		width: 250px;
	}
	
	/* container for external content. uses vertical scrollbar, if needed */
	div.contentWrap {
		width: 250px;
		height: 350px;
		overflow-y:auto;
	}
	</style>
	
</head>

<body>



<!-- external page is given in the href attribute (as it should be) -->
<a href="/formtest.php" rel="#overlay" style="text-decoration:none">

	<!-- remember that you can use any element inside the trigger -->
	FollowThis	
</a>




<!-- overlayed element -->

<div class="apple_overlay" id="overlay">

	<!-- the external content is loaded inside this tag -->
	<div class="contentWrap"></div>

</div>

<!-- make all links with the 'rel' attribute open overlays -->
<script>

$(function() {

	// if the function argument is given to overlay,
	// it is assumed to be the onBeforeLoad event listener
	$("a[rel]").overlay({

		mask: '#efefef',
		effect: 'apple',

		onBeforeLoad: function() {

			// grab wrapper element inside content
			var wrap = this.getOverlay().find(".contentWrap");

			// load the page specified in the trigger
			wrap.load(this.getTrigger().attr("href"));
		}

	});
});
</script>

</body>

</html>
