<?php get_template_part('templates/header'); ?>
<div class="content row">
	<div class="col-md-12">
		<div class="col-md-4">
			<?php
				if( function_exists( 'single_latest_posts' ) ) {
					$params_tips = array(
						'title'				=> 'Tips inmobiliarios',
						'title_only'		=> 'false',
						'auto_excerpt'		=> 'true',
						'excerpt_length'	=> 24,
						'excerpt_trail'		=> 'custom',
						'excerpt_trail_cu'	=> '&#86;er m&aacute;s',
						'category'			=> 'tips',
						'number_posts'		=> 1,
						'instance'			=> 'tips',
						'full_meta'			=> 'true'
					);
					single_latest_posts( $params_tips );
				}
			?>
		</div>
		<div class="col-md-4">
			<?php
				if( function_exists( 'single_latest_posts' ) ) {
					$params_noticias = array(
						'title'				=> 'Noticias',
						'title_only'		=> 'false',
						'auto_excerpt'		=> 'true',
						'excerpt_length'	=> 24,
						'excerpt_trail'		=> 'custom',
						'excerpt_trail_cu'	=> '&#86;er m&aacute;s',
						'category'			=> 'noticias',
						'number_posts'		=> 1,
						'instance'			=> 'noticias',
						'full_meta'			=> 'true'
					);
					single_latest_posts( $params_noticias );
				}
			?>
		</div>
		<div class="col-md-4">
			<?php
				if( function_exists( 'single_latest_posts' ) ) {
					$params = array(
						'title' 			=> 'Eventos',
						'category'			=> 'eventos',
						'title_only'		=> 'false',
						'auto_excerpt'		=> 'true',
						'excerpt_length'	=> 24,
						'excerpt_trail'		=> 'custom',
						'excerpt_trail_cu'	=> '&#86;er m&aacute;s',
						'instance'			=> 'eventos',
						'number_posts'		=> 1,
						'full_meta'			=> 'true'
					);
					single_latest_posts( $params );
				}
			?>
		</div>
	</div>
</div>
<?php get_template_part('templates/footer'); ?>