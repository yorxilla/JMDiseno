<!-- footer section start -->
	<footer class="footer-section text-center">
		<div class="container">
			<h2 class="section-title mb-5">¡Trabajemos juntos!</h2>
			<a href="" class="site-btn">Descargar CV</a>
			<div class="social-links">
				<a href=""><span class="fa fa-pinterest"></span></a>
				<a href=""><span class="fa fa-linkedin"></span></a>
				<a href=""><span class="fa fa-instagram"></span></a>
				<a href=""><span class="fa fa-facebook"></span></a>
				<a href=""><span class="fa fa-twitter"></span></a>
			</div>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
		</div>
	</footer>
	<!-- footer section end -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><br /> 

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

<script>
$('.popup-gallery').magnificPopup({
  delegate: 'a',
  type: 'image',
  gallery: {
    enabled: true,
    navigateByImgClick: true,
    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
  },
  callbacks: {
    elementParse: function(item) {
      console.log(item.el[0].className);
      if(item.el[0].className == 'video') {
        item.type = 'iframe',
        item.iframe = {
           patterns: {
             youtube: {
               index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

               id: 'v=', // String that splits URL in a two parts, second part should be %id%
                // Or null - full URL will be returned
                // Or a function that should return %id%, for example:
                // id: function(url) { return 'parsed id'; } 

               src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
             },
             vimeo: {
               index: 'vimeo.com/',
               id: '/',
               src: '//player.vimeo.com/video/%id%?autoplay=1'
             },
             gmaps: {
               index: '//maps.google.',
               src: '%id%&output=embed'
             }
           }
        }
      } else {
         item.type = 'image',
         item.tLoading = 'Loading image #%curr%...',
         item.mainClass = 'mfp-img-mobile',
         item.image = {
           tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
         }
      }

    }
  }
});
</script>
</body>
</html><!-- jQuery 1.7.2+ or Zepto.js 1.0+ --> 

