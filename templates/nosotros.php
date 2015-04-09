<?php
/**
 * Template Name: Nosotros
 * Description: Plantilla para la sección "Nosotros" del sitio.
 */
get_template_part('templates/header');
?>
<div class="col-md-12 col-xs-12">
	<div class="breadcrumb"><a href="<?php echo get_bloginfo('url'); ?>">Inicio</a> > Nosotros > <?php echo get_the_title(); ?></div>
	<div class="col-md-3">
		<h2 class="page-banner">Nosotros</h2>
		<div class="clearfix">&nbsp;</div>
		<div class="clearfix">&nbsp;</div>
		<div class="clearfix">&nbsp;</div>
		<div class="local-nav">
			<ul class="nav">
				<li class="one <?php if( $pagename == 'ciebo' ) echo 'active'; ?>"><a href="<?php echo get_page_link( get_page_by_title('ciebo')->ID ); ?>">CIEBO</a></li>
				<li class="two <?php if( $pagename == 'junta-directiva' ) echo 'active'; ?>"><a href="<?php echo get_page_link( get_page_by_title('junta directiva')->ID ); ?>">Junta Directiva</a></li>
				<li class="three <?php if( $pagename == 'afiliados' ) echo 'active'; ?>"><a href="<?php echo get_page_link( get_page_by_title('afiliados')->ID ); ?>">Afiliados</a></li>
			</ul>
		</div>
	</div>
	<div class="col-md-9">
		<div class="inner-content">
		<?php 
			if( have_posts() ) : 
				while( have_posts() ) : the_post();
					the_content();
				endwhile; 
			endif;
		?>
		</div>
	</div>
</div>
<div class="clearfix">&nbsp;</div>
<?php get_template_part('templates/footer'); ?>