<div class="col-md-12 col-xs-12">
	<div class="col-md-12 col-xs-12 posts">
		<?php
			if( function_exists( 'single_latest_posts' ) ) {
				$posts = array(
					'title'				=> '',
					'title_only'		=> 'false',
					'auto_excerpt'		=> 'true',
					'excerpt_length'	=> 100,
					'excerpt_trail'		=> 'custom',
					'excerpt_trail_cu'	=> '&#86;er m&aacute;s',
					'category'			=> 'blog',
					'number_posts'		=> 4,
					'instance'			=> 'posts',
					'full_meta'			=> 'true',
					'paginate'			=> 'true',
					'posts_per_page'	=> 4
				);
				single_latest_posts( $posts );
			}
		?>
	</div>
</div>