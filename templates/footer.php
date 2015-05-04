	<?php wp_footer(); ?>
	<?php if( is_home() || is_front_page() ) { ?>
	<div class="navbar-fixed-bottom hidden-xs">
		<div class="ads-footer">
			<ul>
				<li><a class="floating-ads" id="01.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/01.png" /></a></li>
				<li><a class="floating-ads" id="02.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/02.png" /></a></li>
				<li><a class="floating-ads" id="03.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/03.png" /></a></li>
				<li><a class="floating-ads" id="04.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/04.png" /></a></li>
				<li><a class="floating-ads" id="05.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/05.png" /></a></li>
				<li><a class="floating-ads" id="06.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/06.png" /></a></li>
				<li><a class="floating-ads" id="07.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/07.png" /></a></li>
				<li><a class="floating-ads" id="08.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/08.png" /></a></li>
				<li><a class="floating-ads" id="09.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/09.png" /></a></li>
				<li><a class="floating-ads" id="10.png"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ads/10.png" /></a></li>
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
				jQuery('.afiliados-wrapper').show();
			});
			jQuery('.filtro-afiliados li a').on('click tap', function(){
				jQuery('div.'+jQuery(this).attr('class')).addClass('visible');
				jQuery(this).toggleClass('active');
				jQuery('.result-afiliados').hide();
			});
			jQuery('.button-afiliado').on('click tap', function(){
				if( jQuery('.input-afiliado').val() == '042' ) {
					jQuery('.afiliados-wrapper').hide();
					jQuery('.result-afiliados').show();
					jQuery('.result-afiliados').removeClass('hidden');
				}
			});
			jQuery('.fichas').hide();
			jQuery('.close-fichas').on('click tap', function(){
				jQuery('.fichas').hide();
			});
			jQuery('.ahilad').on('click tap', function(){
				jQuery('.fichas').show();
			});
			jQuery('.buscador-wrapper .nav-buscador .titulo').on('click tap', function(){
				jQuery(this).parent().children('ul').slideToggle('slow');
				jQuery(this).parent().children('span').children('i').toggleClass('fa fa-caret-right fa-lg').toggleClass('fa fa-caret-down fa-lg');
			});
			jQuery('button.buscador').on('click tap', function(){
				window.location = 'buscador-inmuebles/resultados/';
			});
			if( jQuery(document).width() <= 800 ) {
				jQuery(window).scroll(function() {
					if( jQuery(this).scrollTop() > 0 ) {
						jQuery('.navbar').fadeOut();
					}
					clearTimeout(jQuery.data(this, 'scrollTimer'));
				    jQuery.data(this, 'scrollTimer', setTimeout(function() {
				        // do something
				        jQuery('.navbar').fadeIn();
				    }, 250));
				});
			}
			jQuery('.floating-ads').on('click tap', function(e){
				e.preventDefault();
				var name  = '';
				var agent = '';
				var telf  = '';
				var cel   = '';
				var email = '';
				var web   = '';
				var img   = jQuery(this).attr('id');
				var logo  = '<?php print get_stylesheet_directory_uri(); ?>/assets/images/float-ads/'+img;
				switch( img ) {
					case '01.png':
						name 	= 'Negocios Globales';
						agent 	= 'Clemente Tenias';
						telf 	= '0286-9628878';
						cel 	= '0414-8775211';
						email 	= 'negociosglobales23@hotmail.com';
						web 	= 'www.negociosglobales.com.ve';
						break;
					case '02.png':
						name 	= 'Century 21';
						agent 	= 'Ruben Simancas';
						telf 	= '0286-9628878';
						cel 	= '0414-8775211';
						email 	= 'century21@hotmail.com';
						web 	= 'www.century21.com.ve';
						break;
					case '03.png':
						name 	= 'Inversiones JP';
						agent 	= 'José Paredes';
						telf 	= '0286-9628878';
						cel 	= '0414-8775211';
						email 	= 'inversionesjp@gmail.com';
						web 	= 'www.inversionesjp.com.ve';
						break;
					case '04.png':
						name 	= 'Inversiones Vioca';
						agent 	= 'Violeta Casaledo';
						telf 	= '0286-9628878';
						cel 	= '0414-8775211';
						email 	= 'inversionesvioca@hotmail.com';
						web 	= 'www.inversionesvioca.com.ve';
						break;
					case '05.png':
						name 	= 'D&D ConstruMax';
						agent 	= 'Maximo Dinero';
						telf 	= '0286-9628878';
						cel 	= '0414-8775211';
						email 	= 'ddconstrumax@hotmail.com';
						web 	= 'www.ddconstrumax.com.ve';
						break;
					case '06.png':
						name 	= 'Century 21';
						agent 	= 'Roberto Ramirez';
						telf 	= '0286-9628878';
						cel 	= '0414-8775211';
						email 	= 'ramirezcentury21@hotmail.com';
						web 	= 'www.century21.com.ve';
						break;
					case '07.png':
						name 	= 'Century 21';
						agent 	= 'Veronica Gonzalez';
						telf 	= '0286-9628878';
						cel 	= '0414-8775211';
						email 	= 'verocentury21@hotmail.com';
						web 	= 'www.century21.com.ve';
						break;
					case '08.png':
						name 	= 'Autana';
						agent 	= 'Sinai Lobrego';
						telf 	= '0286-9628878';
						cel 	= '0414-8775211';
						email 	= 'autanainmo@hotmail.com';
						web 	= 'www.autana.com.ve';
						break;
					case '09.png':
						name 	= 'Bienes y Raíces del Sur';
						agent 	= 'Luna Quintero';
						telf 	= '0286-9628878';
						cel 	= '0414-8775211';
						email 	= 'byrdelsur@hotmail.com';
						web 	= 'www.byrdelsur.com.ve';
						break;
					case '10.png':
						name 	= 'Corporación La Llovizna';
						agent 	= 'Lucas Caicedo';
						telf 	= '0286-9628878';
						cel 	= '0414-8775211';
						email 	= 'lallovizna@gmail.com';
						web 	= 'www.lalloviznacorp.com.ve';
						break;
					default:
						name 	= 'Negocios Globales';
						agent 	= 'Clemente Tenias';
						telf 	= '0286-9628878';
						cel 	= '0414-8775211';
						email 	= 'negociosglobales23@hotmail.com';
						web 	= 'www.negociosglobales.com.ve';
						break;
				}
				var overlay = jQuery('<div class="overlay-ads"><div class="overlay-inner"><div class="col-md-6"><img class="ad-logo" src="'+logo+'" /></div><div class="col-md-6"><h2>'+name+'</h2><div class="clearfix">&nbsp;</div><ul><li><img src="<?php print get_stylesheet_directory_uri(); ?>/assets/images/float-ads/icono-nombre.png" /> '+agent+'</li><li><img src="<?php print get_stylesheet_directory_uri(); ?>/assets/images/float-ads/icono-telefono.png" /> '+telf+'</li><li><img src="<?php print get_stylesheet_directory_uri(); ?>/assets/images/float-ads/icono-celular.png" /> '+cel+'</li><li><img src="<?php print get_stylesheet_directory_uri(); ?>/assets/images/float-ads/icono-mail.png" /> '+email+'</li></ul><div class="clearfix">&nbsp;</div><ul><li><img src="<?php print get_stylesheet_directory_uri(); ?>/assets/images/float-ads/icono-url.png" /> '+web+'</li></ul></div></div></div>');
				if( jQuery('.overlay-ads').length < 1 ) {
					jQuery('body').append(overlay);
				}
				jQuery('.overlay-ads').on('click tap', function(){
					jQuery(this).animate({
						opacity: 'toggle'
					}, 300, function(){
						jQuery(this).remove();
					});
				})
			});
		});
    </script>
</body>