
<style type="text/css">
/* http://github.com/saumya04 */

/* #sliderFrame {position:relative;width:700px;margin: 0 auto 40px;} */
        
#slider {
    width:700px;height:306px;/* Make it the same size as your images */
	background:#fff url(loading.gif) no-repeat 50% 50%;
	position:relative;
	margin:0 auto;/*make the image slider center-aligned */
    box-shadow: 0px 1px 5px #999999;
}
#slider img {
	position:absolute;
	border:none;
	display:none;
}

/* the link style (if an image is wrapped in a link) */
#slider a.imgLink {
	z-index:2;
	display:none;position:absolute;
	top:0px;left:0px;border:0;padding:0;margin:0;
	width:100%;height:100%;
}

</style>

<!-- Importing "Open Sans font" from Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
<script src="./slider/js/js-image-slider.js" type="text/javascript"></script>

<div id="sliderFrame">

	<div id="slider">
		<a href="#"><img src="./slider/images/banners/image-slider-1.jpg" alt="#htmlcaption1" /></a>
		<a href="#"><img src="./slider/images/banners/image-slider-2.jpg" alt="Multiple Animations!" /></a>
		<a href="#"><img src="./slider/images/banners/image-slider-3.jpg" alt="Pure Javascript & CSS. No jQuery. No flash." /></a>
		<a href="#"><img src="./slider/images/banners/image-slider-4.jpg" alt="#htmlcaption2" /></a>
		<a href="#"><img src="./slider/images/banners/image-slider-5.jpg" alt="Mouse-Over to Pause"/></a>
	</div>

</div>

