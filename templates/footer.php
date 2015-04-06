	<?php wp_footer(); ?>
	<div class="navbar-fixed-bottom hidden-xs">
		<div class="ads-footer">
			<ul>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/01.png" /></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/02.png" /></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/03.png" /></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/04.png" /></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/05.png" /></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/06.png" /></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/07.png" /></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/08.png" /></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/09.png" /></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/10.png" /></li>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('.move-down a').on('click tap', function(){
				jQuery('html, body').animate({
				    scrollTop: jQuery("#inicio").offset().top
				}, 2000);
			});
			jQuery('iframe').on('load', function() {
			    jQuery("iframe").contents().find("div.google-maps-link").remove()
			      .append(jQuery("<style type='text/css'>  .google-maps-link { display: none !important; } </style>"));
			});
		});
    </script>
</body>