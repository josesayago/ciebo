	<?php wp_footer(); ?>
	<?php if( empty( $pagename ) ) { ?>
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
	<?php } ?>
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
			jQuery('.mostrar-afiliados').on('click tap', function(){
				jQuery(this).toggleClass('btn-active');
				jQuery('div.afiliados-wrapper').toggleClass('afiliados-hidden');
				jQuery('.result-afiliados').hide();
			});
			jQuery('.filtro-afiliados li a').on('click tap', function(){
				jQuery('div.'+jQuery(this).attr('class')).addClass('visible');
				jQuery(this).toggleClass('active');
				jQuery('.result-afiliados').hide();
			});
			jQuery('.button-afiliado').on('click tap', function(){
				if( jQuery('.input-afiliado').val() == '042' ) {
					jQuery('.result-afiliados').toggleClass('hidden');
				}
			});
		});
    </script>
</body>