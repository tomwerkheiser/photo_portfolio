
	<?php wp_footer(); ?>
	<script src="<?php bloginfo('template_directory'); ?>/js/responsiveslides.min.js"></script>
	<script>
	  jQuery(function () {
	    jQuery(".rslides").responsiveSlides({
	    	maxwidth: 960
		});
	  });
	  var navigation = responsiveNav("#nav");
	</script>
	</body>
</html>